<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Good;
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

        $cart->increment('quantity');
        return redirect()->back()->with('success', 'Товар добавлен в корзину.');
    }

    public function removeFromCart(Request $request, $id)
    {
        $cart = Cart::where('user_id', Auth::id())->where('good_id', $id)->first();
        if (!$cart) {
            return redirect()->back()->with('error', 'Товар не найден в корзине.');
        }

        $cart->decrement('quantity');
        if ($cart->quantity <= 0) {
            $cart->delete();
        }

        return redirect()->back()->with('success', 'Товар удален из корзины.');
    }
    public function index()
    {
        $carts = Cart::where('user_id', Auth::id())->get();
        return view('cart.cart', compact('carts'));
    }

}

