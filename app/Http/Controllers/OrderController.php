<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $carts = Cart::where('user_id', Auth::id())->get();

        $order = Order::create([
            'user_id' => Auth::id(),
        ]);

        foreach ($carts as $cart) {
            $order->goods()->attach($cart->good_id, ['quantity' => $cart->quantity]);
            $cart->delete();
        }

        return redirect()->route('goods.index')->with('success', 'Заказ успешно создан.');
    }
    public function updateStatus(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|in:pending,processing,completed,cancelled',
        ]);

        $order->status = $request->status;
        $order->save();

        return back()->with('success', 'Статус заказа обновлен.');
    }

}
