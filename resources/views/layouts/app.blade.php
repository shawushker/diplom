<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <link rel="shortcut icon" href="/storage/items/logo.png" type="image/png">

</head>
<body class="bg-white dark:bg-gray-900 min-h-screen flex flex-col">
<script src="//unpkg.com/alpinejs" defer></script>
@yield('content')
<script src="{{ asset('/js/app.js') }}" type="text/javascript" defer></script>
</body>
</html>
