
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('scripts')
    <link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">
    <title>@yield('titulo') - T3 Frotas</title>
</head>
<body>
    @include('components.header')
    <main>
        @yield('conteudo')
    </main>
    @include('components.footer')
</body>
</html>