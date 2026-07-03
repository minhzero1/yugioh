<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Card;
use Stichoza\GoogleTranslate\GoogleTranslate;

class DailyCardSync extends Command
{
    protected $signature = 'cards:daily-sync';
    protected $description = 'Moi ngay: cap nhat the moi/da co tu API va dich cac the con thieu';

    protected $categories = [
        'Normal Monster', 'Effect Monster', 'Ritual Monster',
        'Fusion Monster', 'Synchro Monster', 'XYZ Monster', 'Link Monster',
        'Spell Card', 'Trap Card',
    ];

    public function handle(): void
    {
        $this->info('=== BƯỚC 1: Cập nhật thẻ từ API ===');

        foreach ($this->categories as $type) {
            $this->info("Đang đồng bộ: {$type}...");

            $offset = 0;
            $batchSize = 100;

            do {
                $response = Http::timeout(60)->get('https://db.ygoprodeck.com/api/v7/cardinfo.php', [
                    'type' => $type,
                    'num' => $batchSize,
                    'offset' => $offset,
                ]);

                if (!$response->successful() || !isset($response['data'])) {
                    break;
                }

                $items = $response['data'];

                foreach ($items as $item) {
                    Card::updateOrCreate(
                        ['name' => $item['name']],
                        [
                            'type' => $item['type'],
                            'attribute' => $item['attribute'] ?? null,
                            'level' => $item['level'] ?? ($item['linkval'] ?? null),
                            'atk' => $item['atk'] ?? null,
                            'def' => $item['def'] ?? null,
                            'effect' => $item['desc'] ?? null,
                            'image' => $item['card_images'][0]['image_url'] ?? null,
                        ]
                    );
                }

                $offset += $batchSize;
                $this->info("  Đã xử lý: " . $offset . " thẻ ({$type})");

            } while (count($items) === $batchSize);
        }

        $this->info('Tổng số thẻ hiện có: ' . Card::count());

        $this->info('=== BƯỚC 2: Dịch các thẻ còn thiếu ===');

        $tr = new GoogleTranslate('vi');
        $tr->setSource('en');

        $cards = Card::whereNotNull('effect')->whereNull('effect_vi')->get();
        $this->info('Số thẻ cần dịch: ' . $cards->count());

        $done = 0;
        foreach ($cards as $card) {
            try {
                $card->effect_vi = $tr->translate($card->effect);
                $card->save();
                $done++;
            } catch (\Exception $e) {
                $this->warn("Lỗi dịch thẻ {$card->name}: " . $e->getMessage());
            }
        }

        $this->info("Đã dịch xong {$done} thẻ.");
        $this->info('=== HOÀN TẤT ĐỒNG BỘ HÀNG NGÀY ===');
    }
}