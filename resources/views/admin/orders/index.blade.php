@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl mb-6">Orders</h1>

        <div class="mb-6">
            <h2 class="text-xl mb-4">Add new order</h2>
            <form action="{{ route('orders.store') }}" method="post">
                @csrf
                <!-- Add input fields for order fields -->
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add order</button>
            </form>
        </div>

        <h2 class="text-xl mb-4">Orders list</h2>
        <table class="table-auto w-full mb-6">
            <thead>
            <tr>
                <!-- Add table headers for order fields -->
                <th class="border p-2">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <!-- Add table data for order fields -->
                    <td class="border p-2">
                        <a href="{{ route('orders.edit', $order->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                        <form action="{{ route('orders.destroy', $order->id) }}" method="post" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
