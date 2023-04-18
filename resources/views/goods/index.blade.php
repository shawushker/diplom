@extends('layouts.app')
@section('title', 'Главная страница')
@section('content')
    @include('partials.header')
    <div class="flex justify-center my-4">
        <button class="mx-4 px-4 py-2 border border-gray-400 rounded-md bg-white text-gray-800 hover:bg-gray-200 focus:outline-none" id="category-c1">Торты</button>
        <button class="mx-4 px-4 py-2 border border-gray-400 rounded-md bg-white text-gray-800 hover:bg-gray-200 focus:outline-none" id="category-c2">Пирожные</button>
        <button class="mx-4 px-4 py-2 border border-gray-400 rounded-md bg-white text-gray-800 hover:bg-gray-200 focus:outline-none" id="category-c3">Всё</button>
    </div>
 <script>
    const cakesButton1 = document.getElementById('category-c1');
    cakesButton1.addEventListener('click', function() {
        fetch('/goods?category=1')
            .then(response => response.text())
            .then(html => {
                const parser = new DOMParser();
                const parsedHtml = parser.parseFromString(html, 'text/html');
                const fetchedGoodsContainer = parsedHtml.getElementById('goods-container');
                const goodsContainer = document.getElementById('goods-container');
                goodsContainer.innerHTML = fetchedGoodsContainer.innerHTML;
            });
    });

    const cakesButton2 = document.getElementById('category-c2');
    cakesButton2.addEventListener('click', function() {
        fetch('/goods?category=2')
            .then(response => response.text())
            .then(html => {
                const parser = new DOMParser();
                const parsedHtml = parser.parseFromString(html, 'text/html');
                const fetchedGoodsContainer = parsedHtml.getElementById('goods-container');
                const goodsContainer = document.getElementById('goods-container');
                goodsContainer.innerHTML = fetchedGoodsContainer.innerHTML;
            });
    });

    const cakesButton3 = document.getElementById('category-c3');
    cakesButton3.addEventListener('click', function() {
        fetch('/goods')
            .then(response => response.text())
            .then(html => {
                const parser = new DOMParser();
                const parsedHtml = parser.parseFromString(html, 'text/html');
                const fetchedGoodsContainer = parsedHtml.getElementById('goods-container');
                const goodsContainer = document.getElementById('goods-container');
                goodsContainer.innerHTML = fetchedGoodsContainer.innerHTML;
            });
    });
 </script>
    <div id="goods-container">
        @include('goods.goods-content', ['goods' => $goods])
    </div>
    <div class="pag flex flex-row justify-center items-center">
        {{ $goods->links() }}
    </div>
    @include('partials.footer')
@endsection
