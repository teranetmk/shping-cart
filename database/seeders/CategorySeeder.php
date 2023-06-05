<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            [
                'id' => Category::CLOTHING,
                'name' => 'Clothing',
                'slug' => 'clothing',
                'description' => ''
            ],
            [
                'id' => Category::HEALTH_AND_BEAUTY,
                'name' => 'Health & Beauty',
                'slug' => 'health-&-beauty',
                'description' => ''
            ],
            [
                'id' => Category::SUBSCRIPTIONS,
                'name' => 'Subscriptions',
                'slug' => 'subscriptions',
                'description' => ''
            ]
        ]);

    }
}
