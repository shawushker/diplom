@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-3xl mt-8">Панель администратора</h1>

        <div class="mt-6">
            <a href="{{ route('admin.goods.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Товары
            </a>
            <a href="{{ route('admin.categories.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Категории
            </a>

            <a href="{{ route('admin.users.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Пользователи
            </a>
            <a href="{{ route('admin.orders.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Заказы
            </a>
        </div>
    </div>
@endsection
