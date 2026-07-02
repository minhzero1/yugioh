<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Card;

class CardSeeder extends Seeder
{
    public function run(): void
    {
        $cards = [
            ['name' => 'Blue-Eyes White Dragon', 'type' => 'Monster', 'attribute' => 'LIGHT', 'level' => 8, 'atk' => 3000, 'def' => 2500, 'effect' => 'This legendary dragon is a powerful engine of destruction.'],
            ['name' => 'Dark Magician', 'type' => 'Monster', 'attribute' => 'DARK', 'level' => 7, 'atk' => 2500, 'def' => 2100, 'effect' => 'The ultimate wizard in terms of attack and defense.'],
            ['name' => 'Red-Eyes Black Dragon', 'type' => 'Monster', 'attribute' => 'DARK', 'level' => 7, 'atk' => 2400, 'def' => 2000, 'effect' => 'A ferocious dragon with a deadly attack.'],
            ['name' => 'Summoned Skull', 'type' => 'Monster', 'attribute' => 'DARK', 'level' => 6, 'atk' => 2500, 'def' => 1200, 'effect' => 'A fiend with dark powers and a fearsome appearance.'],
            ['name' => 'Celtic Guardian', 'type' => 'Monster', 'attribute' => 'EARTH', 'level' => 4, 'atk' => 1400, 'def' => 1200, 'effect' => 'A swift swordsman skilled in forest combat.'],
            ['name' => 'Gaia the Fierce Knight', 'type' => 'Monster', 'attribute' => 'EARTH', 'level' => 7, 'atk' => 2300, 'def' => 2100, 'effect' => 'A knight who rides into battle atop a powerful steed.'],
            ['name' => 'Curse of Dragon', 'type' => 'Monster', 'attribute' => 'DARK', 'level' => 5, 'atk' => 2000, 'def' => 1500, 'effect' => 'A dragon cursed with dark energy.'],
            ['name' => 'Baby Dragon', 'type' => 'Monster', 'attribute' => 'WIND', 'level' => 3, 'atk' => 1200, 'def' => 700, 'effect' => 'A young dragon with great potential for growth.'],
            ['name' => 'Time Wizard', 'type' => 'Monster', 'attribute' => 'LIGHT', 'level' => 2, 'atk' => 500, 'def' => 400, 'effect' => 'A wizard who can manipulate the flow of time.'],
            ['name' => 'Mystical Elf', 'type' => 'Monster', 'attribute' => 'LIGHT', 'level' => 4, 'atk' => 800, 'def' => 2000, 'effect' => 'An elf with strong defensive magic.'],
            ['name' => 'Feral Imp', 'type' => 'Monster', 'attribute' => 'DARK', 'level' => 4, 'atk' => 1300, 'def' => 1400, 'effect' => 'A mischievous imp that causes trouble for its enemies.'],
            ['name' => 'Giant Soldier of Stone', 'type' => 'Monster', 'attribute' => 'EARTH', 'level' => 3, 'atk' => 1300, 'def' => 2000, 'effect' => 'A stone golem with unbreakable defense.'],
            ['name' => 'Dark Elf', 'type' => 'Monster', 'attribute' => 'DARK', 'level' => 4, 'atk' => 2000, 'def' => 800, 'effect' => 'An elf who has embraced dark magic for power.'],
            ['name' => 'Beaver Warrior', 'type' => 'Monster', 'attribute' => 'EARTH', 'level' => 4, 'atk' => 1200, 'def' => 1500, 'effect' => 'A skilled fighter with woodland origins.'],
            ['name' => 'Gemini Elf', 'type' => 'Monster', 'attribute' => 'EARTH', 'level' => 4, 'atk' => 1900, 'def' => 900, 'effect' => 'Twin elves who fight together in perfect harmony.'],
            ['name' => 'Dragon Zombie', 'type' => 'Monster', 'attribute' => 'DARK', 'level' => 3, 'atk' => 1600, 'def' => 0, 'effect' => 'The reanimated remains of a once-great dragon.'],
            ['name' => 'Skull Servant', 'type' => 'Monster', 'attribute' => 'DARK', 'level' => 1, 'atk' => 300, 'def' => 200, 'effect' => 'A loyal skeleton servant of the underworld.'],
            ['name' => 'Battle Ox', 'type' => 'Monster', 'attribute' => 'EARTH', 'level' => 4, 'atk' => 1700, 'def' => 1000, 'effect' => 'A powerful beast warrior wielding an axe.'],
            ['name' => 'Silver Fang', 'type' => 'Monster', 'attribute' => 'EARTH', 'level' => 3, 'atk' => 1200, 'def' => 800, 'effect' => 'A wolf that hunts in the coldest mountains.'],
            ['name' => 'Rogue Doll', 'type' => 'Monster', 'attribute' => 'EARTH', 'level' => 6, 'atk' => 1600, 'def' => 1000, 'effect' => 'A cursed doll animated by dark forces.'],
            ['name' => 'Judge Man', 'type' => 'Monster', 'attribute' => 'EARTH', 'level' => 6, 'atk' => 2200, 'def' => 1500, 'effect' => 'A stern warrior who judges the worthiness of his foes.'],
            ['name' => 'Wall of Illusion', 'type' => 'Monster', 'attribute' => 'DARK', 'level' => 4, 'atk' => 1000, 'def' => 1850, 'effect' => 'A deceptive barrier that repels invaders.'],
            ['name' => 'Lord of D.', 'type' => 'Monster', 'attribute' => 'DARK', 'level' => 4, 'atk' => 1200, 'def' => 1100, 'effect' => 'A commander who leads dragons into battle.'],
            ['name' => 'Flame Swordsman', 'type' => 'Monster', 'attribute' => 'FIRE', 'level' => 5, 'atk' => 1800, 'def' => 1600, 'effect' => 'A warrior whose blade burns with fire.'],
            ['name' => 'Baron of the Fiend Sword', 'type' => 'Monster', 'attribute' => 'DARK', 'level' => 4, 'atk' => 1550, 'def' => 800, 'effect' => 'A cursed knight wielding a demonic blade.'],
            ['name' => 'Mystic Horseman', 'type' => 'Monster', 'attribute' => 'EARTH', 'level' => 4, 'atk' => 1300, 'def' => 1550, 'effect' => 'A centaur-like warrior skilled in combat.'],
            ['name' => 'Giant Rat', 'type' => 'Monster', 'attribute' => 'EARTH', 'level' => 4, 'atk' => 1400, 'def' => 1450, 'effect' => 'An oversized rodent that scurries through ruins.'],
            ['name' => 'Sword Arm of Dragon', 'type' => 'Monster', 'attribute' => 'DARK', 'level' => 4, 'atk' => 1200, 'def' => 1000, 'effect' => 'A dragon transformed into a living weapon.'],
            ['name' => 'Dragon Piper', 'type' => 'Monster', 'attribute' => 'EARTH', 'level' => 4, 'atk' => 1400, 'def' => 1200, 'effect' => 'A musician who charms dragons with a haunting melody.'],
            ['name' => 'Great White', 'type' => 'Monster', 'attribute' => 'WATER', 'level' => 4, 'atk' => 1600, 'def' => 800, 'effect' => 'A relentless shark that hunts in deep waters.'],
            ['name' => '7 Colored Fish', 'type' => 'Monster', 'attribute' => 'WATER', 'level' => 4, 'atk' => 1800, 'def' => 800, 'effect' => 'A rare fish with dazzling, colorful scales.'],
            ['name' => 'Amazon Archer', 'type' => 'Monster', 'attribute' => 'EARTH', 'level' => 4, 'atk' => 1400, 'def' => 1000, 'effect' => 'A skilled markswoman from the warrior tribes.'],
            ['name' => 'Blackland Fire Dragon', 'type' => 'Monster', 'attribute' => 'DARK', 'level' => 4, 'atk' => 1500, 'def' => 800, 'effect' => 'A dragon wreathed in dark flame.'],
            ['name' => 'Fiend Kraken', 'type' => 'Monster', 'attribute' => 'WATER', 'level' => 3, 'atk' => 1200, 'def' => 800, 'effect' => 'A tentacled sea monster lurking in the depths.'],
            ['name' => 'Kojikocy', 'type' => 'Monster', 'attribute' => 'WATER', 'level' => 3, 'atk' => 800, 'def' => 1500, 'effect' => 'A guardian spirit of ancient shrines.'],
            ['name' => 'La Jinn the Mystical Genie of the Lamp', 'type' => 'Monster', 'attribute' => 'DARK', 'level' => 4, 'atk' => 1800, 'def' => 1000, 'effect' => 'A genie bound to grant power to its summoner.'],
            ['name' => 'Kurama', 'type' => 'Monster', 'attribute' => 'FIRE', 'level' => 4, 'atk' => 1400, 'def' => 1200, 'effect' => 'A nine-tailed fox spirit of legend.'],
            ['name' => 'Karbonala Warrior', 'type' => 'Monster', 'attribute' => 'WATER', 'level' => 4, 'atk' => 1350, 'def' => 900, 'effect' => 'A pearl diver turned fierce warrior.'],
            ['name' => 'Wretched Ghost of the Attic', 'type' => 'Monster', 'attribute' => 'DARK', 'level' => 3, 'atk' => 1000, 'def' => 900, 'effect' => 'A restless spirit haunting forgotten places.'],
            ['name' => 'Kagemusha of the Blue Flame', 'type' => 'Monster', 'attribute' => 'FIRE', 'level' => 5, 'atk' => 1500, 'def' => 800, 'effect' => 'A decoy warrior cloaked in blue flame.'],
            ['name' => 'Petit Dragon', 'type' => 'Monster', 'attribute' => 'FIRE', 'level' => 3, 'atk' => 600, 'def' => 700, 'effect' => 'A small, playful dragon.'],
            ['name' => 'Uraby', 'type' => 'Monster', 'attribute' => 'EARTH', 'level' => 3, 'atk' => 1500, 'def' => 800, 'effect' => 'A dinosaur that roams prehistoric plains.'],
            ['name' => 'Two-Headed King Rex', 'type' => 'Monster', 'attribute' => 'EARTH', 'level' => 5, 'atk' => 1600, 'def' => 1200, 'effect' => 'A fearsome dinosaur with two roaring heads.'],
            ['name' => 'Sabersaurus', 'type' => 'Monster', 'attribute' => 'EARTH', 'level' => 4, 'atk' => 1900, 'def' => 500, 'effect' => 'A quick and aggressive dinosaur hunter.'],
            ['name' => 'Black Illusion Ritual', 'type' => 'Monster', 'attribute' => 'DARK', 'level' => 5, 'atk' => 1900, 'def' => 1500, 'effect' => 'A being summoned through forbidden dark rituals.'],
            ['name' => 'Wingweaver', 'type' => 'Monster', 'attribute' => 'LIGHT', 'level' => 6, 'atk' => 1900, 'def' => 1400, 'effect' => 'A radiant angel who weaves light into power.'],
            ['name' => 'Change Slime', 'type' => 'Monster', 'attribute' => 'WATER', 'level' => 3, 'atk' => 400, 'def' => 300, 'effect' => 'A shapeshifting ooze of unpredictable form.'],
        ];

        foreach ($cards as $card) {
            $card['image'] = 'images/' . Str::slug($card['name']) . '.jpg';
            Card::create($card);
        }
    }
}