<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('modules.items.index', compact('items'));
    }

    public function create()
    {
        return view('modules.items.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([

            'item_description' => 'required',
            'price' => 'required',
        ]);
        try {
            $user = new Item();
            $user->create([
                'item_code' => rand(000000, 999999),
                'item_description' => $request->item_description,
                'price' => $request->price,
                'category' => 'sea food',
                'image' => 'https://zonefresh.com.au/wp-content/uploads/PEACHES-WHITE--600x600.jpg'
            ]);
            return redirect()->route('user.index')->with('success', 'product item created successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
