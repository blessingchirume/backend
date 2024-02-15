<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ApplicationController extends Controller
{
    public function order(Request $request)
    {
        $data = $request->validate([]);

        $order = new Order();

        // return response($request);

        $order->create([
            'order_number' => $request->orderDetails["order_number"],
            'order_ref_number' => $request->orderDetails["order_ref_number"],
            'payment_status' => $request->orderDetails["payment_status"],
            'customer_delivery_status' => $request->orderDetails["customer_delivery_status"],
            'admin_delivery_status' => $request->orderDetails["admin_delivery_status"],
            'delivery_date' => $request->orderDetails["delivery_date"],
            'approval_status' => $request->orderDetails["approval_status"],
            'user_id' => Auth::user()->id

        ]);


        foreach ($request->orderDetails["order_items"] as $row) {
            $order->items()->attach(Item::where('id', $row['item_id'])->first());
        }
    }

    public function orders()
    {
        return response(Auth::user()->orders);
    }

    public function items()
    {
        $items = Item::all();
        return response()->json(['success' => $items, 'error' => null]);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);
        try {
            $user = new User();
            $user->create([
                'name' => $request->name,
                'surname' => $request->surname,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make('12345678'),
            ]);
            return response(['success' => 'user created successfully', 'error' => null]);
        } catch (\Throwable $th) {
            return  response(['success' => null, 'error' => $th->getMessage()]);
        }
    }


}
