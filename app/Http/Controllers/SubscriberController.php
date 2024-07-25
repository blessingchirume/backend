<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function store(Request $request){
        $data = $request->validate([
            'email' => 'email|required'
        ]);

        try {
            Subscriber::create($data);
            return back()->with('success', 'Thank you for subscribing to our mailing list!');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }
}
