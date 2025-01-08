<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body>


    @include('partials.nav')
    <div class="container mx-auto">
    @yield('content')
    </div>
</body>

</html>
