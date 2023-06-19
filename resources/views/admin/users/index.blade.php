@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl mb-6">Пользователи</h1>

        <div class="mb-6">
            <h2 class="text-xl mb-4">Добавить нового пользователя</h2>
            <form action="{{ route('users.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="block">Имя</label>
                    <input type="text" class="block w-full border border-gray-300 p-2" id="name" name="name" required>
                </div>


                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Добавить пользователя</button>
            </form>
        </div>

        <h2 class="text-xl mb-4">Список пользователей</h2>
        <table class="table-auto w-full mb-6">
            <thead>
            <tr>
                <th class="border p-2">ID</th>
                <th class="border p-2">Имя</th>
                <!-- Заголовки для остальных полей -->
                <th class="border p-2">Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td class="border p-2">{{ $user->id }}</td>
                    <td class="border p-2">{{ $user->name }}</td>
                    <!-- Значения для остальных полей -->
                    <td class="border p-2">
                        <a href="{{ route('users.edit', $user->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Редактировать</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="post" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
