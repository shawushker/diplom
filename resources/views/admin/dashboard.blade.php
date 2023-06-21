@extends('layouts.app')
@section('title', 'Админ панель')
@section('content')

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl text-center sm:text-left mt-8">Панель администратора</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 mt-6">
            <a href="{{ route('admin.goods.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex items-center justify-center">
                <i class="fas fa-box-open fa-lg mr-2"></i>
                Товары
            </a>

            <a href="{{ route('admin.categories.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex items-center justify-center">
                <i class="fas fa-clipboard-list fa-lg mr-2"></i>
                Категории
            </a>

            <a href="{{ route('admin.users.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex items-center justify-center">
                <i class="fas fa-users fa-lg mr-2"></i>
                Пользователи
            </a>

            <a href="{{ route('admin.orders.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex items-center justify-center">
                <i class="fas fa-shopping-cart fa-lg mr-2"></i>
                Заказы
            </a>

            <a href="{{ route('profile.index') }}" class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex items-center justify-center mt-4 sm:mt-0 sm:col-span-2 md:col-span-4">
                <i class="fas fa-arrow-left fa-lg mr-2"></i>
                Обратно на сайт
            </a>
        </div>
    </div>

@endsection
