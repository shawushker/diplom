<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Good;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request, $id)
    {
        $good = Good::find($id);
        if (!$good) {
            return redirect()->back()->with('error', 'Товар не найден.');
        }

        $cart = Cart::firstOrCreate([
            'user_id' => Auth::id(),
            'good_id' => $id,],
        [
        'quantity' => 0, // Установите начальное значение количества товаров здесь
        ]);;
        $quantityToAdd = $request->input('quantity', 1);

        if (!is_numeric($quantityToAdd)) {
            $quantityToAdd = 1;
        }
        $cart->increment('quantity',$quantityToAdd);
        return redirect()->back()->with('success', 'Товар добавлен в корзину.');
    }

    public function removeFromCart(Request $request, $id)
    {
        $cart = Cart::where('user_id', Auth::id())->where('good_id', $id)->first();
        if (!$cart) {
            return redirect()->back()->with('error', 'Товар не найден в корзине.');
        }

        $cart->delete();

        return redirect()->back()->with('success', 'Товар удален из корзины.');
    }

    public function index()
    {
        $carts = Cart::where('user_id', Auth::id())->get();

        $total = 0;
        foreach ($carts as $cart) {
            $total += $cart->good->price * $cart->quantity;
        }

        return view('cart.cart', compact('carts', 'total'));
    }

    public function incrementQuantity(Request $request, $id)
    {
        $cart = Cart::where('user_id', Auth::id())->where('good_id', $id)->first();
        if (!$cart) {
            return redirect()->back()->with('error', 'Товар не найден в корзине.');
        }
        $cart->increment('quantity');
        return redirect()->back()->with('success', 'Количество товара увеличено.');
    }

    public function decrementQuantity(Request $request, $id)
    {
        $cart = Cart::where('user_id', Auth::id())->where('good_id', $id)->first();
        if (!$cart) {
            return redirect()->back()->with('error', 'Товар не найден в корзине.');
        }
        $cart->decrement('quantity');
        if ($cart->quantity <= 0) {
            $cart->delete();
        }
        return redirect()->back()->with('success', 'Количество товара уменьшено.');
    }
    public function checkout(Request $request)
    {
        $carts = Cart::where('user_id', Auth::id())->get();

        if ($carts->isEmpty()) {
            return redirect()->back()->with('error', 'Ваша корзина пуста.');
        }

        $order = new Order();
        $order->user_id = Auth::id();
        $order->status = 'pending'; // или какой-либо другой начальный статус
        $order->total = $carts->sum(function ($cart) {
            return $cart->good->price * $cart->quantity;
        });

        $order->save();

        foreach ($carts as $cart) {
            $order->goods()->attach($cart->good_id, ['quantity' => $cart->quantity]);
            $cart->delete();
        }

        return redirect()->back()->with('success', 'Ваш заказ успешно оформлен.');
    }


}

