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
            // 'image' => 'required|image|mimes:jpeg,png,jpg|max:20480'
        ]);

        try {

            $imageName = time().'.'.$request->file('image')->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);

            $user = new Item();
            $user->create([
                'item_code' => rand(000000, 999999),
                'item_description' => $request->item_description,
                'price' => $request->price,
                'category' => 'sea food',
                'image' => public_path('images/'.$imageName)
            ]);
            return redirect()->route('user.index')->with('success', 'product item created successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
