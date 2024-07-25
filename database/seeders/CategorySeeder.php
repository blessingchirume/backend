<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::create([
            'name' => 'Fresh Vegetables'
        ]);

        $category = Category::create([
            'name' => 'Fresh Fruits'
        ]);

        $category = Category::create([
            'name' => 'Dried Fruits'
        ]);

        $category = Category::create([
            'name' => 'Sea Food'
        ]);
    }
}
