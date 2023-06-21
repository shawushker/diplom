@extends('layouts.app')
@section('title', 'Товары')
@section('content')
    @include('partials.header')
    <div class="mt-5 lg:flex lg:justify-center flex-wrap">
        <a href="{{ route('goods.index') }}" class="bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded m-2 {{ (request('category') === null) ? 'opacity-50' : '' }}">
            Все категории
        </a>
        @foreach ($categories as $category)
            <a href="{{ route('goods.index', ['category' => $category->id]) }}" class="bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded m-2 {{ (request('category') == $category->id) ? 'opacity-50' : '' }}">
                {{ $category->name }}
            </a>
        @endforeach
    </div>
    <div id="goods-container">
        @include('goods.goods-content', ['goods' => $goods])
    </div>
    <div class="pag flex flex-row justify-center items-center">
        {{ $goods->links() }}
    </div>
    @include('partials.footer')
@endsection
