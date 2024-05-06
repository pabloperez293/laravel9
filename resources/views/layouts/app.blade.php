<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo - @yield("title")</title>

    <meta name="description" content="@yield("meta-description", "Default metadescription")" />
</head>
<body>
     {{-- ul>li*4>a --}}
@include('partials.nav')

{{-- imprime el contenido variable --}}

@yield('content')

</body>
</html>
