@extends('layouts.app')

@section('title', 'Корзина')
@section('content')
    @include('partials.header')
    <div class="container mx-auto p-5">
        <h2 class="text-xl font-bold mb-4">Корзина</h2>
        @if (count($carts) > 0)
            <div class="grid grid-cols-1 gap-4">
                @foreach ($carts as $cart)
                    <div class="shadow-lg rounded">
                        <div class="p-5 flex justify-between items-center">
                            <div>
                                <h3>{{ $cart->good->title }}</h3>
                                <p>{{ $cart->good->price }}р</p>
                            </div>
                            <div>
                                <p>Количество: {{ $cart->quantity }}</p>
                            </div>
                            <div>
                                <form action="{{ route('cart.remove', $cart->good->id) }}" method="post">
                                    @csrf
                                    <button type="submit" class="bg-red-500 text-white rounded-full py-2 px-4 hover:bg-red-600">Удалить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <form action="{{ route('order.store') }}" method="post">
                @csrf
                <button type="submit" class="bg-blue-500 text-white rounded-full py-2 px-4 hover:bg-blue-600">Оплатить</button>
            </form>
        @else
            <p>Ваша корзина пуста.</p>
        @endif
    </div>
@endsection
