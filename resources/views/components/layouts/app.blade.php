<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo - {{"title"}}</title>
    <meta name="description" content="{{$metaDescription ?? "Default metadescription"}}" />

</head>
<body>

<x-.layouts.nav />
{{-- <pre>{{$sum}}</pre> --}}
{{ $slot }}

</body>
</html>
