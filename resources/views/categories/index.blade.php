@extends('layouts.app')
@section('title', 'Главная страница')
@section('content')
<body class="min-h-screen bg-gray-100">
<header class="bg-white shadow">
    <nav class="container mx-auto px-6 py-3">
        <div class="flex items-center justify-between">
            <div>
                <a href="#" class="text-2xl font-bold text-gray-800">Кондитерская</a>
            </div>
            <div>
                <a href="#" class="text-gray-800">О нас</a>
                <a href="#" class="ml-6 text-gray-800">Товары</a>
                <a href="#" class="ml-6 text-gray-800">Контакты</a>
            </div>
        </div>
    </nav>
</header>

<section class="bg-cover bg-center h-auto text-white py-24 px-6" style="background-image: url('https://placehold.co/600x400')">
    <div class="container mx-auto">
        <h2 class="text-4xl font-bold mb-5">Добро пожаловать в нашу кондитерскую!</h2>
        <p class="mb-8">Вкуснейшие сладости для каждого!</p>
    </div>
</section>

<section class="container mx-auto px-6 py-12">
    <h2 class="text-4xl font-bold mb-8">Наши товары</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Карточка товара -->
        <div class="bg-white rounded shadow p-6">
            <img src="https://placehold.co/600x400" alt="Товар" class="w-full mb-4">
            <h3 class="text-xl font-bold">Название товара</h3>
            <p class="text-gray-700">Описание товара</p>
        </div>
        <!-- ... -->
    </div>
</section>

<section class="bg-gray-100 py-12">
    <div class="container mx-auto px-6">
        <div class="flex items-center justify-between">
            <div class="text-center sm:text-left">
                <h2 class="text-4xl font-bold">Об создателе</h2>
                <p class="mt-4">Информация о создателе и его истории.</p>
            </div>
            <img src="https://placehold.co/600x400" alt="Создатель" class="rounded-full w-32 h-32 object-cover">
        </div>
    </div>
</section>
<section class="container mx-auto px-6 py-12">
    <div class="bg-cover bg-center h-96" style="background-image: url('https://placehold.co/600x400')"></div>
</section>

<footer class="bg-white shadow">
    <div class="container mx-auto px-6 py-6">
        <div class="flex justify-between items-center">
            <div>
                <a href="#" class="text-2xl font-bold text-gray-800">Кондитерская</a>
            </div>
            <div>
                <a href="#" class="text-gray-800">О нас</a>
                <a href="#" class="ml-6 text-gray-800">Товары</a>
                <a href="#" class="ml-6 text-gray-800">Контакты</a>
            </div>
            <div>
                <p class="text-gray-800">© 2023 Кондитерская. Все права защищены.</p>
            </div>
        </div>
    </div>
</footer>
</body>


@endsection
