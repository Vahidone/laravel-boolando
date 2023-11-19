<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Booleando - @yield('title')</title>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('header')


    <main class="d-flex justify-content-center">

        @yield('content')

    </main>


    @include('footer')

</body>

</html>
