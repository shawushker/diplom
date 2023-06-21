@extends('layouts.app')
@section('title', 'Таблица категории')
@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-lg font-medium mb-4">Категории</h2>

        <a href="{{ route('admin.categories.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Добавить категорию</a>

        <table class="table-fixed w-full mt-6 mb-6">
            <thead>
            <tr>
                <th class="border px-4 py-2 w-12">ID</th>
                <th class="border px-4 py-2">Название</th>
                <th class="border px-4 py-2">Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td class="border px-4 py-2">{{ $category->id }}</td>
                    <td class="border px-4 py-2">{{ $category->name }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('admin.categories.edit', $category->id) }}" class="bg-blue-500 text-white px-2 py-1 rounded">Изменить</a>
                        <form action="{{ route('admin.categories.destroy', $category->id) }}" method="post" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ route('admin.dashboard')}}" class="bg-blue-500 text-white px-4 py-2 rounded mt-5">Назад</a>

    </div>
@endsection
