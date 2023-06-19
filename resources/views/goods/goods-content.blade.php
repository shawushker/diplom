<div class="container mx-auto p-5">
    <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10">
        <!--<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">!-->

    @foreach ($goods as $good)
        <form action="{{ route('cart.add', $good->id) }}" method="post" class="shadow-lg rounded lg" >
                @csrf

            <a href="{{ route('goods.show', $good->id) }}">
                <img src="{{ asset('storage/goods/images/' . $good->images->first()->path) }}" class="rounded-tl-lg rounded-tr-lg" />
            </a>
            <div class="p-5">
                <div class="flex justify-between">
                    <h3><a href="{{ route('goods.show', $good->id) }}">{{ $good->title }}</a></h3>
                    <h3><a href="{{ route('goods.show', $good->id) }}">{{ $good->price }}р</a></h3>
                </div>
                <div class="flex flex-col xl:flex-row justify-between my-3">
                    <button type="submit" class="bg-gradient-to-r from-red-600 to-pink-500 rounded-full py-2 px-4 text-gray-50 flex flex-row justify-center my-2 hover:from-pink-600 to-pink-700 text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                                В корзину
                    </button>
                    <a href="{{ route('goods.show', $good->id) }}" class="bg-purple-600 rounded-full py-2 px-4 text-gray-50 flex flex-row justify-center my-2 hover:bg-purple-700 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                        Подробнее
                    </a>
                </div>
            </div>
        </form>
    @endforeach
</div>
</div>
