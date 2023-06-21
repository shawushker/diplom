@extends('layouts.app')
@section('title', 'Личный кабинет')
@section('content')
    @include('partials.header')

    <div class="container mx-auto p-5">
        <h2 class="text-2xl mb-6">Личный кабинет</h2>
        <form action="{{ route('profile.update') }}" method="POST" class="w-full max-w-md">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block mb-2">Имя</label>
                <input type="text" id="name" name="name" value="{{ $user->name }}" class="w-full px-3 py-2 border rounded">
            </div>
            <div class="mb-4">
                <label for="address" class="block mb-2">Адрес</label>
                <input type="text" id="address" name="address" value="{{ $user->address }}" class="w-full px-3 py-2 border rounded">
            </div>
            <div class="mb-4">
                <label for="password" class="block mb-2">Введите пароль *</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded required">
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block mb-2">Подтверждение пароля *</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-3 py-2 border rounded required">
            </div>
            <button type="submit" class="w-full px-3 py-2 border rounded">Сохранить изменения</button>
            @if (Auth::user()->role === 'admin')
                <a href="{{ route('admin.dashboard') }}" class="w-full px-3 py-2 border rounded mt-3 block text-center bg-blue-500 text-white">
                    Админ-панель
                </a>
            @endif
        </form>
    </div>
@include('partials.footer')
@endsection
