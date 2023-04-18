@extends('layouts.app')
@section('title', 'Вход')
@section('content')
    @include('partials.header')

    <div class="container mx-auto p-5">
        <h2 class="text-2xl mb-6">Вход</h2>
        <form action="{{ route('login') }}" method="POST" class="w-full max-w-md">
            @csrf
            <div class="mb-4">
                <label for="email" class="block mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block mb-2">Пароль</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded" required>
            </div>
            <div class="mb-4">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Войти</button>
            </div>
        </form>
    </div>

    @include('partials.footer')
@endsection
