<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Card;

class FetchCardImages extends Command
{
    protected $signature = 'cards:fetch-images';
    protected $description = 'Tự động lấy ảnh thẻ bài từ API YGOPRODeck';

    public function handle(): void
    {
        $cards = Card::all();

        foreach ($cards as $card) {
            $this->info("Đang xử lý: {$card->name}...");

            $response = Http::get('https://db.ygoprodeck.com/api/v7/cardinfo.php', [
                'name' => $card->name,
            ]);

            if ($response->successful() && isset($response['data'][0])) {
    $data = $response['data'][0];

    $card->image = $data['card_images'][0]['image_url'] ?? $card->image;
    $card->effect = $data['desc'] ?? $card->effect;
    $card->atk = $data['atk'] ?? $card->atk;
    $card->def = $data['def'] ?? $card->def;
    $card->level = $data['level'] ?? $card->level;
    $card->attribute = $data['attribute'] ?? $card->attribute;

    $card->save();
    $this->info("✅ Đã cập nhật đầy đủ cho {$card->name}");
} else {
    $this->warn("⚠️ Không tìm thấy dữ liệu cho {$card->name}");
}
        }

        $this->info('Hoàn tất!');
    }
}