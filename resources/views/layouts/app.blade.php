<!DOCTYPE html>
<html>

<head>
    <title>Home</title>

    @vite('resources/css/app.css')
</head>

<body>
    <div class="background"></div>

    <header>
        <x-navigation />
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>
