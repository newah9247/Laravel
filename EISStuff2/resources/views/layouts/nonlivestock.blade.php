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
    
    <!--Styles go here-->
    <style type="text/tailwindcss">
        
        /* Header Styles */
        h1 {
            @apply text-4xl font-bold text-slate-900 flex justify-center
        }

        h2 {
            @apply text-xl font-medium text-slate-700 flex justify-center
        }

        h3 {
            @apply text-xl text-slate-700 flex justify-center
        }

        /*Tag Styles*/
        label {
            @apply  text-black  font-medium 
        }

        body {
            background-color: #EBEBEB;
        }

        footer {
            @apply bg-slate-900 text-white text-center p-3 absolute bottom-0 w-full
        }

        /* Div Styles (#) */
        #checkdiv {
            @apply grid grid-cols-4 text-center 
        }
            
        #addForm {
            @apply rounded-md px-2 py-1 text-center font-medium shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50 
        }
        /* Class Styles (.) */
        .error {
            @apply text-red-500 text-sm
        }
    </style>
    {{-- blade-formatter-enable --}}
    @yield('signature')

    @yield('etransfer')

    @yield('comments')

    @yield('footer')
</body>
</html>