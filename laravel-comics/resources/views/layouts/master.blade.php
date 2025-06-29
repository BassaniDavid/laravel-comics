<!doctype html>
<html lang="it">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS -->
        @vite(['resources/sass/app.scss', 'resource/js/app.js'])
    </head>

    <body class="m-0 p-0">
    @include('partials/header')
    @include('partials/jumbo')

    <main class="bg-dark position-relative z-1">
        @yield('fumetti')
    </main>

    {{-- si può usare al posto dello / la dot notation --}}
    @include('partials.footer')
</body>
</html>
