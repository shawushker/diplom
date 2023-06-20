@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-2 mt-6">
        <div class="flex justify-between">
            <h1 class="text-2xl font-bold">Товары</h1>
            <a href="{{ route('admin.goods.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Добавить товар
            </a>
            <a href="{{ route('admin.dashboard')}}" class="bg-blue-500 text-white px-4 py-2 rounded">Назад</a>
        </div>

        <div class="mt-8">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Изображение товара
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Название товара
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider lg:table-cell hidden">
                                        Описание
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider lg:table-cell hidden">
                                        Цена
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider lg:table-cell hidden">
                                        Количество
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider lg:table-cell hidden">
                                        Категория
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Действия
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($goods as $good)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 w-20 lg:w-auto">
                                            @if ($good->images->first())
                                                <img src="{{ asset('storage/goods/images/' . $good->images->first()->path) }}" alt="{{ $good->title }}" class="w-64 h-64 object-contain">
                                            @else
                                                <p>Нет изображения</p>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-normal lg:whitespace-nowrap text-sm font-medium text-gray-900">
                                            {{ $good->title }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-normal lg:whitespace-nowrap text-sm text-gray-500 lg:table-cell hidden">
                                            {{ \Illuminate\Support\Str::limit($good->description, 30) }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 lg:table-cell hidden">
                                            {{ $good->price }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 lg:table-cell hidden">
                                            {{ $good->quantity }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 lg:table-cell hidden">
                                            {{ $good->category ? $good->category->name : 'Нет категории' }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route('admin.goods.edit', $good->id) }}" class="text-blue-600 hover:text-blue-900 block mb-2 lg:inline lg:mb-0">
                                                <button type="submit" class="bg-blue-500 text-white px-2 py-1 rounded">Изменить</button>
                                            </a>
                                            <form action="{{ route('admin.goods.destroy', $good->id) }}" method="POST" class="inline-block">
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
                    </div>
                </div>
            </div>
            <div class="mt-4">
                {{ $goods->links() }}
            </div>
        </div>
    </div>
@endsection
