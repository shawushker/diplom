@extends('layouts.app')

@section('title', 'Подробнее о заказе')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-2xl font-bold text-blue-600 mb-4">Заказ #{{ $order->id }}</h2>
            <p class="text-gray-700"><span class="font-bold">Общая сумма:</span> {{ $order->total }}</p>
            <p class="text-gray-700"><span class="font-bold">Статус:</span> {{ $order->status }}</p>

            <h3 class="text-lg font-bold text-blue-600 mt-6 mb-4">Товары:</h3>
            @foreach ($order->goods as $good)
                <div class="bg-blue-100 border border-blue-200 p-4 rounded-lg mb-4">
                    <p class="text-gray-700"><span class="font-bold">Название:</span> {{ $good->title }}</p>
                    <p class="text-gray-700"><span class="font-bold">Цена:</span> {{ $good->price }}</p>
                    <p class="text-gray-700"><span class="font-bold">Количество:</span> {{ $good->pivot->quantity }}</p>
                </div>
            @endforeach
        </div>
        <a href="{{ route('admin.dashboard') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded block mt-6">Назад</a>
    </div>
@endsection
