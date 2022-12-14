<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    @hasSection('title')

        <title>@yield('title') - {{ config('app.name') }}</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endif

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">
    <meta name="theme-color" content="#111827">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
    @livewireScripts

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        try {
            if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark')
                //document.querySelector('meta[name="theme-color"]').setAttribute('content', '#0B1120')
            } else {
                document.documentElement.classList.remove('dark')
            }
        } catch (_) {
        }
    </script>
</head>

<body class="lg:h-full md:h-auto transition-all dark:bg-gray-700">
@yield('body')
</body>
<script>
    let toggler = document.getElementById("darkmode-toggle");
    if (toggler) {
        toggler.addEventListener("click", () => {
            document.documentElement.classList.toggle("dark");
            if (document.documentElement.classList.contains("dark")) {
                localStorage.theme = "dark";
            } else {
                localStorage.theme = "theme";
            }
        });
    }
</script>
</html>
