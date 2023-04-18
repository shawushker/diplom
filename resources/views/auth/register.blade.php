@extends('layouts.app')
@section('title', 'Регистрация')
@section('content')
    @include('partials.header')

    <div class="container mx-auto p-5">
        <h2 class="text-2xl mb-6">Регистрация</h2>
        <form action="{{ route('register') }}" method="POST" class="w-full max-w-md">
            @csrf
            <div class="mb-4">
                <label for="name" class="block mb-2">Имя</label>
                <input type="text" id="name" name="name" class="w-full px-3 py-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block mb-2">Пароль</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block mb-2">Подтверждение пароля</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-3 py-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="phone" class="block mb-2">Номер телефона</label>
                <input type="text" id="phone" name="phone" class="w-full px-3 py-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="address" class="block mb-2">Адрес</label>
                <input type="text" id="address" name="address" class="w-full px-3 py-2 border rounded" required>
            </div>
            <div class="mb-4">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Зарегистрироваться</button>
            </div>

        </form>
    </div>

    @include('partials.footer')
@endsection
