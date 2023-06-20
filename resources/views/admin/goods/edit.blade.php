<!-- resources/views/admin/goods/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-5">
        <h1 class="text-xl mb-5">Редактирование товара</h1>
        <form action="{{ route('admin.goods.update', $good->id) }}" method="post" enctype="multipart/form-data">
        @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="title" class="block mb-2">Название товара</label>
                <input type="text" name="title" id="title" class="w-full border border-gray-300 rounded" value="{{ old('title', $good->title) }}" required>
                @error('title')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="description" class="block mb-2">Описание товара</label>
                <textarea name="description" id="description" class="w-full border border-gray-300 rounded" required>{{ old('description', $good->description) }}</textarea>
                @error('description')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="price" class="block mb-2">Цена</label>
                <input type="number" step="0.01" name="price" id="price" class="w-full border border-gray-300 rounded" value="{{ old('price', $good->price) }}" required>
                @error('price')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="quantity" class="block mb-2">Количество</label>
                <input type="number" name="quantity" id="quantity" class="w-full border border-gray-300 rounded" value="{{ old('quantity', $good->quantity) }}" required>
                @error('quantity')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="category_id" class="block mb-2">Категория</label>
                <select name="category_id" id="category_id" class="w-full border border-gray-300 rounded" required>
                    <option value="">Выберите категорию</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ (old('category_id', $good->category_id) == $category->id) ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="image" class="block mb-2">Изображение товара</label>
                <input type="file" name="image" id="image" class="w-full border border-gray-300 rounded">
                @error('image')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Сохранить изменения</button>
        </form>
    </div>
@endsection
