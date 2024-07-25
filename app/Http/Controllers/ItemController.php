<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function uploadCropImage(Request $request)
    {
        $folderPath = public_path('images/uploads');

        // dd($folderPath);
        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $imageName = uniqid() . '.png';
        $imageFullPath = $folderPath."/".$imageName;
        file_put_contents($imageFullPath, $image_base64);

        session()->put('session-cropped-image', asset('images/uploads/'.$imageName));
        return response()->json(['success'=>'Crop Image Uploaded Successfully']);
    }
    public function index()
    {
        $items = Item::all();
        return view('modules.items.index', compact('items'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('modules.items.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([

            'item_description' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:20480'
        ]);

        try {

            $imageName = time().'.'.$request->file('image')->getClientOriginalExtension();
            request()->image->move(public_path('images/uploads'), $imageName);

            $user = new Item();
            $user->create([
                'item_code' => rand(000000, 999999),
                'item_description' => $request->item_description,
                'price' => $request->price,
                'category_id' => $request->category,
                'image' =>  asset('images/uploads/'.$imageName)
            ]);
            return redirect()->route('item.index')->with('success', 'product item created successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
