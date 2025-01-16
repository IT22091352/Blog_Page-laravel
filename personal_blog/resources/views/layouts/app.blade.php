<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CodeX Blog</title>

    @include('libraries.styles')
</head>

<body>
    @include('components.navbar')
    @yield('content')
    @include('libraries.scripts')

</body>

</html>
