<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Tailwind CSS & AlpineJS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Non-Livestock</title>
</head>
<body>
    @yield('nav')
    <!--Yield to enable styles-->
    @yield('styles')
    @yield('title')
    @yield('content')

    {{-- Load TailwindCSS styles --}}
    {{-- blade-formatter-disable --}}
    <style type="text/tailwindcss">
        #checkdiv {
            @apply grid grid-cols-4 gap-2;
        }
    </style>
    {{-- blade-formatter-enable --}}
</body>
</html>
