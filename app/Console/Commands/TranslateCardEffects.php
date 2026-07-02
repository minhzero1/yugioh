<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Card;
use Stichoza\GoogleTranslate\GoogleTranslate;

class TranslateCardEffects extends Command
{
    protected $signature = 'cards:translate';
    protected $description = 'Tự động dịch hiệu ứng thẻ bài sang tiếng Việt';

    public function handle(): void
    {
        $tr = new GoogleTranslate('vi');
        $tr->setSource('en');

        $cards = Card::whereNotNull('effect')->get();

        foreach ($cards as $card) {
            $this->info("Đang dịch: {$card->name}...");

            try {
                $translated = $tr->translate($card->effect);
                $card->effect_vi = $translated;
                $card->save();
                $this->info("✅ Xong: {$card->name}");
            } catch (\Exception $e) {
                $this->warn("⚠️ Lỗi dịch cho {$card->name}: " . $e->getMessage());
            }
        }

        $this->info('Hoàn tất dịch toàn bộ!');
    }
}