@extends('layouts.app')
@section('title', 'Таблица заказы')
@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center">
            <h1 class="text-3xl font-bold text-blue-600">Заказы</h1>
            <a href="{{ route('admin.orders.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Создать заказ
            </a>
        </div>

        <div class="mt-8">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow-lg overflow-hidden border-b border-gray-200 rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-blue-100">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">ID</th>
                                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">User ID</th>
                                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">Total</th>
                                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">Действия</th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($orders as $order)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $order->id }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $order->user_id }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $order->total }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $order->status }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route('admin.orders.edit', $order->id) }}" class="text-white bg-blue-500 hover:bg-blue-600 px-2 py-1 rounded block mb-2 inline-block">Редактировать</a>
                                            <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-white bg-red-500 hover:bg-red-600 px-2 py-1 rounded block mb-2 inline-block" onclick="return confirm('Вы уверены, что хотите удалить этот заказ?')">Удалить</button>
                                            </form>
                                            <div>
                                                <!-- Информация о заказе -->
                                                <a href="{{ route('orders.show', $order->id) }}" class="text-white bg-green-500 hover:bg-green-600 px-2 py-1 rounded block mb-2 inline-block">Подробнее</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($orders as $order)

            @endforeach

            <div class="mt-4">

            </div>
        </div>
        <a href="{{ route('admin.dashboard')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded block mt-6">Назад</a>
    </div>
@endsection
