<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('modules.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        return view('modules.orders.show', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        try {
            $order->update([
                'order_number' => $request->order_number,
                'order_ref_number' => $request->order_ref_number,
                'payment_status' => $request->payment_status,
                'customer_delivery_status' => $request->customer_delivery_status,
                'admin_delivery_status' => $request->admin_delivery_status,
                'delivery_date' => $request->delivery_date,
                'approval_status' => $request->approval_status,
                'user_id' => Auth::user()->id

            ]);
            return redirect()->route('order.show', $order)->with('success', 'order updated successfully!');
        } catch (\Throwable $th) {
            return redirect()->route('order.show', $order)->with('error', $th);
        }
    }

    public function destroy(Order $order)
    {
        try {
            $order->delete();
            return redirect()->route('order.index', $order)->with('success', 'order deleted successfully!');
        } catch (\Throwable $th) {
            return redirect()->route('order.show', $order)->with('error', $th);
        }
    }

    public function approve(Order $order)
    {
        try {
            $order->update(['approval_status' => 1]);
            return redirect()->route('order.show', $order)->with('success', 'order approved successfully!');
        } catch (\Throwable $th) {
            return redirect()->route('order.show', $order)->with('error', $th);
        }
    }

    public function reject(Order $order)
    {
        try {
            $order->update(['approval_status' => 2]);
            return redirect()->route('order.show', $order)->with('success', 'order deleted successfully!');
        } catch (\Throwable $th) {
            return redirect()->route('order.show', $order)->with('error', $th);
        }
    }

    public function dispatchOrder(Order $order)
    {
        try {
            $order->update(['admin_delivery_status' => 1]);
            return redirect()->route('order.show', $order)->with('success', 'order dispatched successfully!');
        } catch (\Throwable $th) {
            return redirect()->route('order.show', $order)->with('error', $th);
        }
    }

    public function confirmDelivery(Order $order)
    {
        try {
            $order->update(['customer_delivery_status' => 1]);
            return redirect()->route('order.show', $order)->with('success', 'order delivered successfully!');
        } catch (\Throwable $th) {
            return redirect()->route('order.show', $order)->with('error', $th);
        }
    }
}
