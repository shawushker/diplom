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
                        <div class="p-5 flex justify-between items-start">
                            <div class="flex">
                                <img src="{{ asset('storage/goods/images/' . $cart->good->images->first()->path) }}"
                                     class="h-12 w-12 object-cover rounded mr-4"
                                />
                                <div>
                                    <h3 class="font-bold">{{ $cart->good->title }}</h3>
                                    <p class="text-blue-600">{{ $cart->good->price }}р</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <button
                                    onclick="event.preventDefault(); document.getElementById('increment-{{ $cart->good->id }}').submit();"
                                    class="px-2 py-1 bg-green-500 text-white rounded-full shadow-md hover:bg-green-600"
                                >
                                    +
                                </button>

                                <span class="px-4">{{ $cart->quantity }}</span>

                                <button
                                    onclick="event.preventDefault(); document.getElementById('decrement-{{ $cart->good->id }}').submit();"
                                    class="px-2 py-1 bg-yellow-500 text-white rounded-full shadow-md hover:bg-yellow-600"
                                >
                                    -
                                </button>

                                <form id="increment-{{ $cart->good->id }}" action="{{ route('cart.increment', $cart->good->id) }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                                <form id="decrement-{{ $cart->good->id }}" action="{{ route('cart.decrement', $cart->good->id) }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                            <div>
                                <form action="{{ route('cart.remove', $cart->good->id) }}" method="post">
                                    @csrf
                                    <button type="submit" class="bg-red-500 text-white rounded-full py-2 px-4 hover:bg-red-600 shadow-md">Удалить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-8">
                <p class="text-xl font-bold mb-4">Итого: {{ $total }}р</p>
                <form action="{{ route('checkout') }}" method="post">
                    @csrf
                    <button type="submit" class="bg-blue-500 text-white rounded-full py-2 px-4 hover:bg-blue-600 shadow-md">Оплатить</button>
                </form>
            </div>
        @else
            <p>Ваша корзина пуста.</p>
        @endif
    </div>

@endsection
