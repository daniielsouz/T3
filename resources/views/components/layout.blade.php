
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">00
    <title>@yield('titulo') - T3 Frotas</title>
</head>
<body>
    @include('components.header')
    @yield('conteudo')
    @include('components.footer')
</body>
</html>