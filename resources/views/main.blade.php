<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Booleando</title>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('header')

    @yield('content')

    @include('footer')

</body>

</html>
