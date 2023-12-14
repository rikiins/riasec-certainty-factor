<?php

namespace Database\Seeders;

use App\Models\Score;
use Illuminate\Database\Seeder;

class ScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Score::insert([
            [
                'description' => 'Sangat Tidak Setuju',
                'cf_value' => -0.80
            ],
            [
                'description' => 'Tidak Setuju',
                'cf_value' => -0.40
            ],
            [
                'description' => 'Sedikit Setuju',
                'cf_value' => 0.20
            ],
            [
                'description' => 'Setuju',
                'cf_value' => 0.60
            ],
            [
                'description' => 'Sangat Setuju',
                'cf_value' => 0.90
            ]
        ]);
    }
}
