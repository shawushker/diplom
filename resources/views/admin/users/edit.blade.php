@extends('layouts.app')
@section('title', 'Изменение пользователя')
@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl mb-6">Редактировать пользователя: {{ $user->name }}</h1>

        <form action="{{ route('admin.users.update', $user->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="block">Имя</label>
                <input type="text" class="block w-full border border-gray-300 p-2" id="name" name="name" value="{{ $user->name }}" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Адрес</label>
                <input type="text" class="w-full border border-gray-300 p-2" id="address" name="address" value="{{ $user->address }}" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Телефон</label>
                <input type="text" class="w-full border border-gray-300 p-2" id="phone" name="phone" value="{{ $user->phone }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="w-full border border-gray-300 p-2" id="email" name="email" value="{{ $user->email }}" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Пароль (оставьте пустым, чтобы не менять)</label>
                <input type="password" class="w-full border border-gray-300 p-2" id="password" name="password">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Сохранить изменения</button>
        </form>
    </div>
@endsection
