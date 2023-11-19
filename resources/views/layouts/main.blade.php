<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
       <!-- link FONT AWESOME  -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous"
    />

    <title>Laravel Booleando - @yield('title')</title>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')


    <main class="d-flex justify-content-center">

        @yield('content')

    </main>


    @include('partials.footer')

</body>

</html>
