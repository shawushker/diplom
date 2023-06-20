@extends('layouts.app')
@section('title', 'Товары')
@section('content')
    @include('partials.header')


    <div id="goods-container">
        @include('goods.goods-content', ['goods' => $goods])
    </div>
    <div class="pag flex flex-row justify-center items-center">
        {{ $goods->links() }}
    </div>
    @include('partials.footer')
@endsection
