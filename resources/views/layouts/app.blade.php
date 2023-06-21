<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Kondshari - лучшая кондитерская" />
    <meta property="og:description" content="На сайте Kondshari вы найдете широкий ассортимент изысканных кондитерских изделий. Мы гарантируем высочайшее качество всех наших товаров." />
    <meta property="og:image" content="https://kondshari.com/public/storage/other/banner0.png" />
    <meta property="og:url" content="https://kondshari.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="ru_RU" />
    <meta property="og:site_name" content="Kondshari" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {},
            }
        }
    </script>
    <link rel="stylesheet" type="text/css" href="./css/app.css">
    {{--    @vite('public/css/app.css')--}}
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('/storage/other/logo.ico')}}" type="image/x-icon" />
    <link rel="ICON" href="{{ asset('/storage/other/logo.ico')}}" type="image/ico" />

</head>
<body class="bg-white dark:bg-gray-900 min-h-screen flex flex-col">
<script src="//unpkg.com/alpinejs" defer></script>
@yield('content')
<script src="{{ asset('/js/app.js') }}" type="text/javascript" defer></script>
</body>
</html>
