@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-lg font-medium mb-4">Категории</h2>

        <a href="{{ route('categories.create') }}" class="bg-green-500 text-white px-4 py-2 rounded mb-4">Добавить категорию</a>

        <table class="table-fixed w-full">
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
                        <a href="{{ route('categories.edit', $category->id) }}" class="text-blue-500">Изменить</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="post" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
