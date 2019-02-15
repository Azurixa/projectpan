<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head')
</head>
<body>
<div id="app">

    <main>

        @yield('content')

    </main>

</div>
</body>
</html>
