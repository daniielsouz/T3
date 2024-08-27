
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{asset('js/index.js')}}" defer></script>
    <link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">
    <title>@yield('titulo') - T3 Frotas</title>
</head>
<body>
    @include('components.header')
    @yield('conteudo')
<<<<<<< HEAD
=======
    @include('components.footer')
>>>>>>> 2bcf87eff603ac0b3a7b51945956439cdf607e03
</body>
</html>