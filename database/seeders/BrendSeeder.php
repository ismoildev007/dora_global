<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kategoriyalarni massiv ko'rinishida tuzamiz
        $categories = [
            [
                'title' => 'Marketing',
                'image' => 'Marketing',
            ],
        ];

        // Massivdagi har bir kategoriyani kiritish
        foreach ($categories as $category) {
            DB::table('brends')->insert($category);
        }
    }
}
