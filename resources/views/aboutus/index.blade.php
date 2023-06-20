@extends('layouts.app')
@section('title', 'Главная страница')
@section('content')
    @include('partials.header')
    <div class="py-20 bg-gray-50">
        <div class="container mx-auto px-6 md:px-12 xl:px-32">
            <div class="mb-16 text-center">
                <h2 class="mb-4 text-center text-2xl text-gray-900 font-bold md:text-4xl">Немного обо мне</h2>
                <p class="text-gray-600 lg:w-8/12 lg:mx-auto">Я кондитер широкого профиля. Пеку торты любой сложеости, пряники, зефир, конфеты ручной работы. Стаж работы более 20 лет. Огромное количество довольных покупателей и постоянных  клиентов. </p>
            </div>

                </div>
                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-48 md:h-64 lg:w-64 lg:h-80"
                         src="https://sun9-31.userapi.com/impg/Sv8JJ6Rdya4b8-Ou6VPREqbg_Q6TTiNISryLSQ/zSDgTHJdAfE.jpg?size=1080x720&quality=95&sign=76696475fc4011dd06319efd06c106f0&type=album" alt="man" loading="lazy" width="1000" height="667">
                    <div>
                        <h4 class="text-2xl">Ирина Шари</h4>
                        <span class="block text-sm text-gray-500">Директор и основатель</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
@endsection
