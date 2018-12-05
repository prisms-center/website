<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PRISMS Center</title>

    <!-- Scripts -->
    <script src="{{ mix('js/main.js', 'assets/build') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>
<body>
    <div id="app">
        @include('_layouts/navbar')

        <main class="py-4 w-full max-w-screen mx-auto px-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
