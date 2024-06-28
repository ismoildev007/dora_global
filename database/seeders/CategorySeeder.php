<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kategoriyalarni massiv ko'rinishida tuzamiz
        $categories = [
            [
                'name' => 'Marketing',
            ],
            [
                'name' => 'Developers',
            ],
            [
                'name' => 'Brending',
            ],
        ];

        // Massivdagi har bir kategoriyani kiritish
        foreach ($categories as $category) {
            DB::table('categories')->insert($category);
        }
    }
}
