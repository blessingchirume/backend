<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Item;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $user = new User();
        $user->create([
            'name' => 'Blessing',
            'surname' => 'Chirume',
            'email' => 'chirume37@gmail.com',
            'phone' => '0780734018',
            'password' => Hash::make('12345678'),
        ]);

        $item = new Item();


        $item->create([
            'item_code' => rand(000000, 999999),
            'item_description' => '1kg premium peaches',
            'price' => '5.40',
            'category' => 'Fruits and vegetables',
            'image' => 'https://zonefresh.com.au/wp-content/uploads/PEACHES-WHITE--600x600.jpg'
        ]);

        $item->create([
            'item_code' => rand(000000, 999999),
            'item_description' => '6 pack standard grape ',
            'price' => '5.40',
            'category' => 'Fruits and vegetables',
            'image' => 'https://www.westfaliafruit.com/wp-content/uploads/2019/01/Table-Grapes-300x300.jpg'
        ]);
    }
}
