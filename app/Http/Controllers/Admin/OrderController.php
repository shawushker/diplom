<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin.orders.index', compact('orders'));
    }

    public function create()
    {
        return view('admin.orders.create');
    }

    public function store(Request $request)
    {
        // Валидация входных данных
        $validatedData = $request->validate([
            'user_id' => 'required',
            'total' => 'required',
            'status' => 'required',
        ]);

        // Создание заказа
        $order = Order::create($validatedData);

        return redirect()->route('admin.orders.index')->with('success', 'Заказ успешно создан');
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);
        $goods = $order->goods; // Получение товаров для данного заказа
        return view('admin.orders.show', compact('order'));
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('admin.orders.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        // Валидация входных данных
        $validatedData = $request->validate([
            'user_id' => 'required',
            'total' => 'required',
            'status' => 'required',
        ]);

        // Обновление заказа
        $order->update($validatedData);

        return redirect()->route('admin.orders.index')->with('success', 'Заказ успешно обновлен');
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('admin.orders.index')->with('success', 'Заказ успешно удален');
    }
}
