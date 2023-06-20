@extends('layouts.app')

@section('title', 'Подробнее о заказе')
@section('content')

    <div class="container mx-auto p-5">
        <h2 class="text-xl font-bold mb-4">Заказ #{{ $order->id }}</h2>
        <p>Общая сумма: {{ $order->total }}</p>
        <p>Статус: {{ $order->status }}</p>

        <h3 class="text-l font-bold mb-4">Товары:</h3>
        @foreach ($order->goods as $good)
            <div>
                <p>Название: {{ $good->title }}</p>
                <p>Цена: {{ $good->price }}</p>
                <p>Количество: {{ $good->pivot->quantity }}</p>
            </div>
        @endforeach
    </div>
@endsection
