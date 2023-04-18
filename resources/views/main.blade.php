@extends('layouts.app')
@section('title', 'Главная страница')
@section('content')
    @include('partials.header')
<!--
  This example requires Tailwind CSS v2.0+

The alpine.js code is *NOT* production ready and is included to preview
  possible interactivity
-->
<!--
  This example requires Tailwind CSS v2.0+

  The alpine.js code is *NOT* production ready and is included to preview
  possible interactivity
-->
<!-- Hero Section -->
    <div class="container mx-auto p-5">
        <div class="md:flex md:flex-row mt-20 px-40">
            <div class="md:w-4/5 flex flex-col justify-center items-center">
                <h2 class="font-serif text-5xl text-gray-600 mb-4 text-center md:self-start md:text-left">Добро пожаловать в сладкий мир кондитерской Шари!</h2>
                <p class="mt-2 text-gray-600 tracking-wide text-center md:self-start md:text-left">Забудьте о суете и окунитесь в атмосферу изысканных вкусов и ароматов нашей уникальной кондитерской. Мы создаем потрясающие десерты, которые не только радуют глаз, но и невероятно вкусны. Предлагаем вам попробовать самые лучшие торты, пирожные и шоколадные изделия, приготовленные с любовью и мастерством.Приходите к нам и окунитесь в мир сладостей, где каждое лакомство - это произведение искусства. Ваше воображение будет поражено разнообразием ассортимента и качеством наших изделий. Зовите своих друзей и близких, чтобы вместе насладиться незабываемыми впечатлениями.</p>
                <a href="/goods" class="bg-gradient-to-r from-red-600 to-pink-500 rounded-full py-4 px-8 text-gray-50 uppercase text-xl md:self-start my-5">КУПИТЬ СЕЙЧАС</a>
            </div>
            <div class="md:w-2/5">
                <img src="././images/cake1.svg" class="w-full">
            </div>
        </div> <!-- Hero Section -->

        <div class="my-20">
            <div class="flex flex-row justify-between my-5">
                <h2 class="text-3xl xl:my-2">Торты</h2>
                <a href="/goods" class="text-xl flex flex-col xl:flex-row ml-2 my-2 ">
                    Посмотреть всё
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-7 ml-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                    </svg>
                </a>
            </div>
             <div id="goods-container">
                @include('goods.goods-content', ['goods/category=1' => $goods])
            </div>
            <!-- <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10">
                 <div class="shadow-lg rounded lg">
                     <a href="#">
                       <img src="././images/cake1.jpg" class="rounded-tl-lg rounded-tr-lg" />
                     </a>
                     <div class="p-5">
                         <div class="flex justify-between">
                             <h3><a href="#">Cake</a></h3>
                             <h3><a href="#">1000р</a></h3>
                         </div>
                         <div class="flex flex-col xl:flex-row justify-between my-3">
                          <a href="#" class="bg-gradient-to-r from-red-600 to-pink-500 rounded-full py-2 px-4 text-gray-50 flex flex-row justify-center my-2 hover:from-pink-600 to-pink-700 text-sm">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                              </svg>
                              В корзину
                          </a>
                             <a href="#" class="bg-purple-600 rounded-full py-2 px-4 text-gray-50 flex flex-row justify-center my-2 hover:bg-purple-700 text-sm">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                     <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                 </svg>
                                 Подробнее
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="shadow-lg rounded lg">
                     <a href="#">
                         <img src="././images/cake1.jpg" class="rounded-tl-lg rounded-tr-lg" />
                     </a>
                     <div class="p-5">
                         <div class="flex justify-between">
                             <h3><a href="#">Cake</a></h3>
                             <h3><a href="#">1000р</a></h3>
                         </div>
                         <div class="flex flex-col xl:flex-row justify-between my-3">
                             <a href="#" class="bg-gradient-to-r from-red-600 to-pink-500 rounded-full py-2 px-4 text-gray-50 flex flex-row justify-center my-2 hover:from-pink-600 to-pink-700 text-sm">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                     <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                 </svg>
                                 В корзину
                             </a>
                             <a href="#" class="bg-purple-600 rounded-full py-2 px-4 text-gray-50 flex flex-row justify-center my-2 hover:bg-purple-700 text-sm">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                     <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                 </svg>
                                 Подробнее
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="shadow-lg rounded lg">
                     <a href="#">
                         <img src="././images/cake1.jpg" class="rounded-tl-lg rounded-tr-lg" />
                     </a>
                     <div class="p-5">
                         <div class="flex justify-between">
                             <h3><a href="#">Cake</a></h3>
                             <h3><a href="#">1000р</a></h3>
                         </div>
                         <div class="flex flex-col xl:flex-row justify-between my-3">
                             <a href="#" class="bg-gradient-to-r from-red-600 to-pink-500 rounded-full py-2 px-4 text-gray-50 flex flex-row justify-center my-2 hover:from-pink-600 to-pink-700 text-sm">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                     <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                 </svg>
                                 В корзину
                             </a>
                             <a href="#" class="bg-purple-600 rounded-full py-2 px-4 text-gray-50 flex flex-row justify-center my-2 hover:bg-purple-700 text-sm">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                     <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                 </svg>
                                 Подробнее
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="shadow-lg rounded lg">
                     <a href="#">
                         <img src="././images/cake1.jpg" class="rounded-tl-lg rounded-tr-lg" />
                     </a>
                     <div class="p-5">
                         <div class="flex justify-between">
                             <h3><a href="#">Cake</a></h3>
                             <h3><a href="#">1000р</a></h3>
                         </div>
                         <div class="flex flex-col xl:flex-row justify-between my-3">
                             <a href="#" class="bg-gradient-to-r from-red-600 to-pink-500 rounded-full py-2 px-4 text-gray-50 flex flex-row justify-center my-2 hover:from-pink-600 to-pink-700 text-sm">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                     <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                 </svg>
                                 В корзину
                             </a>
                             <a href="#" class="bg-purple-600 rounded-full py-2 px-4 text-gray-50 flex flex-row justify-center my-2 hover:bg-purple-700 text-sm">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                     <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                 </svg>
                                 Подробнее
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="shadow-lg rounded lg">
                     <a href="#">
                         <img src="././images/cake1.jpg" class="rounded-tl-lg rounded-tr-lg" />
                     </a>
                     <div class="p-5">
                         <div class="flex justify-between">
                             <h3><a href="#">Cake</a></h3>
                             <h3><a href="#">1000р</a></h3>
                         </div>
                         <div class="flex flex-col xl:flex-row justify-between my-3">
                             <a href="#" class="bg-gradient-to-r from-red-600 to-pink-500 rounded-full py-2 px-4 text-gray-50 flex flex-row justify-center my-2 hover:from-pink-600 to-pink-700 text-sm">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                     <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                 </svg>
                                 В корзину
                             </a>
                             <a href="#" class="bg-purple-600 rounded-full py-2 px-4 text-gray-50 flex flex-row justify-center my-2 hover:bg-purple-700 text-sm">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                     <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                 </svg>
                                 Подробнее
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="shadow-lg rounded lg">
                     <a href="#">
                         <img src="././images/cake1.jpg" class="rounded-tl-lg rounded-tr-lg" />
                     </a>
                     <div class="p-5">
                         <div class="flex justify-between">
                             <h3><a href="#">Cake</a></h3>
                             <h3><a href="#">1000р</a></h3>
                         </div>
                         <div class="flex flex-col xl:flex-row justify-between my-3">
                             <a href="#" class="bg-gradient-to-r from-red-600 to-pink-500 rounded-full py-2 px-4 text-gray-50 flex flex-row justify-center my-2 hover:from-pink-600 to-pink-700 text-sm">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                     <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                 </svg>
                                 В корзину
                             </a>
                             <a href="#" class="bg-purple-600 rounded-full py-2 px-4 text-gray-50 flex flex-row justify-center my-2 hover:bg-purple-700 text-sm">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                     <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                 </svg>
                                 Подробнее
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="shadow-lg rounded lg">
                     <a href="#">
                         <img src="././images/cake1.jpg" class="rounded-tl-lg rounded-tr-lg" />
                     </a>
                     <div class="p-5">
                         <div class="flex justify-between">
                             <h3><a href="#">Cake</a></h3>
                             <h3><a href="#">1000р</a></h3>
                         </div>
                         <div class="flex flex-col xl:flex-row justify-between my-3">
                             <a href="#" class="bg-gradient-to-r from-red-600 to-pink-500 rounded-full py-2 px-4 text-gray-50 flex flex-row justify-center my-2 hover:from-pink-600 to-pink-700 text-sm">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                     <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                 </svg>
                                 В корзину
                             </a>
                             <a href="#" class="bg-purple-600 rounded-full py-2 px-4 text-gray-50 flex flex-row justify-center my-2 hover:bg-purple-700 text-sm">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                     <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                 </svg>
                                 Подробнее
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="shadow-lg rounded lg">
                     <a href="#">
                         <img src="././images/cake1.jpg" class="rounded-tl-lg rounded-tr-lg" />
                     </a>
                     <div class="p-5">
                         <div class="flex justify-between">
                             <h3><a href="#">Cake</a></h3>
                             <h3><a href="#">1000р</a></h3>
                         </div>
                         <div class="flex flex-col xl:flex-row justify-between my-3">
                             <a href="#" class="bg-gradient-to-r from-red-600 to-pink-500 rounded-full py-2 px-4 text-gray-50 flex flex-row justify-center my-2 hover:from-pink-600 to-pink-700 text-sm">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                     <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                 </svg>
                                 В корзину
                             </a>
                             <a href="#" class="bg-purple-600 rounded-full py-2 px-4 text-gray-50 flex flex-row justify-center my-2 hover:bg-purple-700 text-sm">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                     <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                 </svg>
                                 Подробнее
                             </a>
                         </div>
                     </div>
                 </div>
             </div>Cake Section -->
         </div>
        <section class="relative pt-16 bg-blueGray-50">
            <div class="container mx-auto">
                <div class="flex flex-wrap items-center">
                    <div class="w-10/12 md:w-6/12 lg:w-4/12 px-12 md:px-4 mr-auto ml-auto -mt-78">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-gradient-to-r from-red-600 to-pink-500">
                            <img src="{{ asset('storage/other/' . "banner0.png") }}" class="w-full align-middle rounded-t-lg">
                            <blockquote class="relative p-8 mb-4">
                                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="absolute left-0 w-full block h-95-px -top-94-px">

                                </svg>
                                <h4 class="text-xl font-bold text-white">
                                    Почему вы должны выбрать нас?
                                </h4>
                                <p class="text-md font-light mt-2 text-white">
                                    Мы просто мастера в своем деле, поэтому

                                </p>
                                <p class="text-md font-light mt-2 text-white">приведем целый ряд причин!</p>
                            </blockquote>
                        </div>
                    </div>

                    <div class="w-full md:w-6/12 px-4">
                        <div class="flex flex-wrap">
                            <div class="w-full md:w-6/12 px-4">
                                <div class="relative flex flex-col mt-4">
                                    <div class="px-4 py-5 flex-auto">
                                        <h6 class="text-xl mb-1 font-semibold">Свежие продукты</h6>
                                        <p class="mb-4 text-blueGray-500">
                                            Наша кондитерская закупает только лучшие и свежайшие ингридиенты. Ведь мы заботимся о Вас!
                                        </p>
                                    </div>
                                </div>
                                <div class="relative flex flex-col min-w-0">
                                    <div class="px-4 py-5 flex-auto">
                                        <h6 class="text-xl mb-1 font-semibold">
                                            Индивидуальный подход
                                        </h6>
                                        <p class="mb-4 text-blueGray-500">
                                            Мы идем навстречу каждому нашему клиенту и выслушаем ваши предпочтения!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-6/12 px-4">
                                <div class="relative flex flex-col min-w-0 mt-4">
                                    <div class="px-4 py-5 flex-auto">
                                        <h6 class="text-xl mb-1 font-semibold">Опыт</h6>
                                        <p class="mb-4 text-blueGray-500">
                                            Мы на рынке более 10 лет, о нас знает весь город!
                                        </p>
                                    </div>
                                </div>
                                <div class="relative flex flex-col min-w-0">
                                    <div class="px-4 py-5 flex-auto">
                                        <h6 class="text-xl mb-1 font-semibold">Цены</h6>
                                        <p class="mb-4 text-blueGray-500">
                                            Демократичные и справедливые цены, ориентированные на наших покупателей. С полным соответствием цены - качеству!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <!-- About us bg-gradient-to-r from-red-600 to-pink-500-->

        <div class="rounded-lg shadow-lg my-20 flex flex-row">
            <div class="lg:w-3/5 w-full bg-gradient-to-r from-red-500 to-pink-400 lg:from-red-600 lg:via-pink-500 lg:to-pink-300 rounded-l text-xl text-black-100 p-12">
               <div class="lg:w-1/2">
                   <h3 class="text-2xl font-extrabold text-white mb-4">Остались какие-то вопросы?</h3>
                   <p class="text-md font-light mt-2 text-white">С радостью ответим на любые ваши вопросы и соориентируем по цене и пожеланиям в любой удобной вам Соцсети!</p>
                <div class="p-5 flex flex-row">
                    <a href="https://ok.ru"class="">
                        <svg class="w-10 h-10 lg:w-20 lg:h-20 fill-amber-600 drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]" xmlns="http://www.w3.org/2000/svg" width="800" height="800" viewBox="0 0 48 48"><path fill="#67C15E" fill-rule="evenodd" d="M23.993 0C10.763 0 0 10.765 0 24a23.824 23.824 0 0 0 4.57 14.067l-2.99 8.917 9.224-2.948A23.81 23.81 0 0 0 24.007 48C37.237 48 48 37.234 48 24S37.238 0 24.007 0h-.014Zm-6.7 12.19c-.466-1.114-.818-1.156-1.523-1.185a13.55 13.55 0 0 0-.804-.027c-.918 0-1.877.268-2.455.86-.705.72-2.454 2.398-2.454 5.841s2.51 6.773 2.849 7.239c.353.465 4.895 7.632 11.947 10.553 5.515 2.286 7.152 2.074 8.407 1.806 1.834-.395 4.133-1.75 4.711-3.386.579-1.637.579-3.034.41-3.33-.17-.296-.636-.465-1.34-.818-.706-.353-4.134-2.046-4.783-2.272-.634-.24-1.24-.155-1.72.522-.677.946-1.34 1.905-1.876 2.483-.423.452-1.115.509-1.693.268-.776-.324-2.948-1.086-5.628-3.47-2.074-1.849-3.484-4.148-3.893-4.84-.41-.705-.042-1.114.282-1.495.353-.438.691-.748 1.044-1.157.352-.41.55-.621.776-1.1.24-.466.07-.946-.1-1.3-.168-.352-1.579-3.795-2.157-5.191Z"/></svg>
                    </a>
                    <a href="https://vk.ru"class="">
                        <svg class=" w-10 h-10 lg:w-20 lg:h-20 fill-amber-600 ml-5 drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="800" height="800" viewBox="0 0 202 202"><defs><path id="a" d="M71.6 5h58.9C184.3 5 197 17.8 197 71.6v58.9c0 53.8-12.8 66.5-66.6 66.5H71.5C17.7 197 5 184.2 5 130.4V71.5C5 17.8 17.8 5 71.6 5z"/></defs><use xlink:href="#a" fill="#5181b8" fill-rule="evenodd" clip-rule="evenodd" overflow="visible"/><clipPath id="b"><use xlink:href="#a" overflow="visible"/></clipPath><path d="M0 0h202v202H0z" style="clip-path:url(#b);fill:#5181b8"/><path d="M162.2 71.1c.9-3 0-5.1-4.2-5.1h-14c-3.6 0-5.2 1.9-6.1 4 0 0-7.1 17.4-17.2 28.6-3.3 3.3-4.7 4.3-6.5 4.3-.9 0-2.2-1-2.2-4V71.1c0-3.6-1-5.1-4-5.1H86c-2.2 0-3.6 1.7-3.6 3.2 0 3.4 5 4.2 5.6 13.6v20.6c0 4.5-.8 5.3-2.6 5.3-4.7 0-16.3-17.4-23.1-37.4-1.4-3.7-2.7-5.3-6.3-5.3H42c-4 0-4.8 1.9-4.8 4 0 3.7 4.7 22.1 22.1 46.4C70.9 133 87.2 142 102 142c8.9 0 10-2 10-5.4V124c0-4 .8-4.8 3.7-4.8 2.1 0 5.6 1 13.9 9 9.5 9.5 11.1 13.8 16.4 13.8h14c4 0 6-2 4.8-5.9-1.3-3.9-5.8-9.6-11.8-16.4-3.3-3.9-8.2-8-9.6-10.1-2.1-2.7-1.5-3.9 0-6.2 0-.1 17.1-24.1 18.8-32.3z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#fff"/></svg>
                    </a>
                    <a href="https://ok.ru"class="">
                        <svg class="w-10 h-10 lg:w-20 lg:h-20 fill-amber-600 ml-5 drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="800" height="800" viewBox="0 0 512 512"><path d="M256.018 259.156c71.423 0 129.31-57.899 129.31-129.334C385.327 58.387 327.44.5 256.018.5 184.57.5 126.659 58.387 126.659 129.822c-.001 71.435 57.911 129.334 129.359 129.334zm0-192.96c35.131 0 63.612 28.482 63.612 63.625 0 35.144-28.481 63.625-63.612 63.625-35.168 0-63.638-28.481-63.638-63.625 0-35.143 28.469-63.625 63.638-63.625zm149.057 208.742c-7.285-14.671-27.508-26.872-54.394-5.701-36.341 28.619-94.664 28.619-94.664 28.619s-58.361 0-94.702-28.619c-26.873-21.171-47.083-8.97-54.381 5.701-12.75 25.563 1.634 37.926 34.096 58.761 27.721 17.803 65.821 24.452 90.411 26.935l-20.535 20.535c-28.918 28.905-56.826 56.838-76.201 76.213-11.59 11.577-11.59 30.354 0 41.931l3.48 3.506c11.59 11.577 30.354 11.577 41.943 0l76.201-76.214c28.943 28.919 56.851 56.839 76.225 76.214 11.59 11.577 30.354 11.577 41.943 0l3.48-3.506c11.59-11.59 11.59-30.354 0-41.943l-76.201-76.2-20.584-20.598c24.614-2.545 62.29-9.22 89.786-26.872 32.463-20.837 46.823-33.2 34.097-58.762z" style="display:inline"/></svg>
                    </a>
                </div>
               </div>
            </div>
            <div class="lg:w-2/5 w-full lg:flex lg:flex-row hidden">
                <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/org/khleb_chetverikova/239126190783/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Хлеб Четверикова</a><a href="https://yandex.ru/maps/11065/novoaleksandrovsk/category/bakery/184106798/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Пекарня в Новоалександровске</a><iframe src="https://yandex.ru/map-widget/v1/?ll=41.208062%2C45.490156&mode=search&poi%5Bpoint%5D=41.207917%2C45.490181&poi%5Buri%5D=ymapsbm1%3A%2F%2Forg%3Foid%3D239126190783&sctx=ZAAAAAgBEAAaKAoSCfqZet0inERAEVr2JLA5v0ZAEhIJGTp2UInrqD8Rg6Pk1TkGlD8iBgABAgMEBSgKOABAuVZIAWoCcnWdAc3MTD2gAQCoAQC9ASSO0JDCAQXu%2FqedCOoBAPIBAPgBAIICK9Cd0L7QstC%2B0LDQu9C10LrRgdCw0L3QtNGA0L7QstGB0Log0KjQsNGA0LiKAgCSAgUxMTA2NZoCDGRlc2t0b3AtbWFwcw%3D%3D&sll=41.208062%2C45.490156&sspn=0.002274%2C0.000914&tab=related&text=%D0%9D%D0%BE%D0%B2%D0%BE%D0%B0%D0%BB%D0%B5%D0%BA%D1%81%D0%B0%D0%BD%D0%B4%D1%80%D0%BE%D0%B2%D1%81%D0%BA%20%D0%A8%D0%B0%D1%80%D0%B8&z=19.96" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
            </div>
        </div>
        </section>
    </div> <!-- Banner Section -->
    @include('partials.footer')
    @endsection
