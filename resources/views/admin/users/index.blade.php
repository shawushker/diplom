@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl mb-6">Пользователи</h1>


        <h2 class="text-xl mb-4">Список пользователей</h2>
        <table class="table-auto w-full mb-6">
            <thead>
            <tr>
                <th class="border p-2">ID</th>
                <th class="border p-2">Имя</th>

                <th class="border p-2">Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td class="border p-2">{{ $user->id }}</td>
                    <td class="border p-2">{{ $user->name }}</td>
                    <td class="border p-2">
                        <a href="{{ route('admin.users.edit', $user->id) }}" class="bg-blue-500 text-white px-2 py-1 rounded">Редактировать</a>
                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="post" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ route('admin.dashboard')}}" class="bg-blue-500 text-white px-4 py-2 rounded">Назад</a>
    </div>
@endsection
