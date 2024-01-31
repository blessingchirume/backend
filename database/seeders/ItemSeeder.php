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
            'price' => '5.40',
            'category' => 'Fruits and vegetables',
            'image' => 'https://zonefresh.com.au/wp-content/uploads/PEACHES-WHITE--600x600.jpg'
        ]);

        Item::create([
            'item_code' => rand(000000, 999999),
            'item_description' => '6 pack standard grape ',
            'price' => '5.40',
            'category' => 'Fruits and vegetables',
            'image' => 'https://www.westfaliafruit.com/wp-content/uploads/2019/01/Table-Grapes-300x300.jpg'
        ]);
    }
}
