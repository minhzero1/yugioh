<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Card;

class ImportBulkCards extends Command
{
    protected $signature = 'cards:import-bulk';
    protected $description = 'Nhap khoang 1000 the bai tu API, gom quai thu, phep, bay, extra deck';

    protected $categories = [
        'Normal Monster' => 150,
        'Effect Monster' => 250,
        'Ritual Monster' => 50,
        'Fusion Monster' => 100,
        'Synchro Monster' => 100,
        'XYZ Monster' => 100,
        'Link Monster' => 80,
        'Spell Card' => 100,
        'Trap Card' => 100,
    ];

    public function handle(): void
    {
        if ($this->confirm('Xoa toan bo the bai cu truoc khi import?', true)) {
            Card::truncate();
        }

        foreach ($this->categories as $type => $num) {
            $this->info("Dang tai: {$type} (so luong: {$num})...");

            $response = Http::timeout(60)->get('https://db.ygoprodeck.com/api/v7/cardinfo.php', [
                'type' => $type,
                'num' => $num,
                'offset' => 0,
            ]);

            if (!$response->successful() || !isset($response['data'])) {
                $this->warn("Khong lay duoc du lieu cho {$type}");
                continue;
            }

            $count = 0;
            foreach ($response['data'] as $item) {
                Card::create([
                    'name' => $item['name'],
                    'type' => $item['type'],
                    'attribute' => $item['attribute'] ?? null,
                    'level' => $item['level'] ?? ($item['linkval'] ?? null),
                    'atk' => $item['atk'] ?? null,
                    'def' => $item['def'] ?? null,
                    'effect' => $item['desc'] ?? null,
                    'image' => $item['card_images'][0]['image_url'] ?? null,
                ]);
                $count++;
            }

            $this->info("Da them {$count} the cho {$type}");
        }

        $this->info('Hoan tat! Tong so the trong database: ' . Card::count());
    }
}