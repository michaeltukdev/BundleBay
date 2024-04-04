<!DOCTYPE html>
<html>

<head>
    <title>BundleBay - Discover new resources</title>
    <meta name="description" content="BundleBay an open-source free to use platform to discover new and interesting resources both free and premium.">
    <meta name="keywords" content="BundleBay, Opensource, Free, Resources, Premium, Free, Open-Source, Discover, New, Resources">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="robots" content="index, follow">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logobig.webp') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="BundleBay - Discover new resources">
    <meta property="og:description" content="BundleBay an open-source free to use platform to discover new and interesting resources both free and premium.">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
