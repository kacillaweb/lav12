<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Milestone;

class MilestoneSeeder extends Seeder
{
    public function run()
    {
        $milestones = [
            [
                'name' => 'Complete Tutorial',
                'description' => 'Complete the game\'s tutorial section',
                'global' => true,
            ],
            [
                'name' => 'Defeat First Boss',
                'description' => 'Defeat the first major boss in the game',
                'global' => true,
            ],
            [
                'name' => 'Collect All Items',
                'description' => 'Find and collect all special items',
                'global' => true,
            ],
            [
                'name' => 'Reach Max Level',
                'description' => 'Reach the maximum character level',
                'global' => true,
            ],
        ];

        foreach ($milestones as $milestone) {
            Milestone::create($milestone);
        }
    }
}
