@extends('layouts.app')
@section('title', 'Создание категории')
@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-lg font-medium mb-4">Добавить категорию</h2>

        <form action="{{ route('admin.categories.store') }}" method="POST" class="w-full max-w-sm mx-auto">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Название
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" name="name">
                @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Добавить
            </button>
        </form>
    </div>
@endsection
