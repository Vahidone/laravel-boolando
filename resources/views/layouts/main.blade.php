<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>
    @include('partials.header')


    <main class="d-flex justify-content-center">

        @yield('content')

    </main>


    @include('partials.footer')

</body>

</html>
