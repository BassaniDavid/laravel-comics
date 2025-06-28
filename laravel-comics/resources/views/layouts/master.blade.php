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
        @vite(['resource/sass/app.scss', 'resource/js/app.js'])
    </head>

    <body class="container">
    @include('partials/header')

    {{-- segnaposto per codice di ogni pagina --}}
    @yield('contenuto')

    {{-- si può usare al posto dello / la dot notation --}}
    @include('partials.footer')
</body>
</html>
