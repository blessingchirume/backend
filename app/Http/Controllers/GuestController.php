<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    function index()
    {
        $items = Item::all();

        // dd($items);
        return view('guest-area.index', compact('items'));
    }
}
