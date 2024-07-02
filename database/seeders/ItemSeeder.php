<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
            'item_code' => rand(000000, 999999),
            'item_description' => '1kg premium peaches',
            'price' => '0.30',
            'category' => 'Fruits and vegetables',
            'image' => 'https://api.slingacademy.com/public/sample-photos/1.jpeg'
        ]);

        Item::create([
            'item_code' => rand(000000, 999999),
            'item_description' => '6 pack standard grape ',
            'price' => '0.20',
            'category' => 'Fruits and vegetables',
            'image' => 'https://api.slingacademy.com/public/sample-photos/1.jpeg'
        ]);
    }
}
