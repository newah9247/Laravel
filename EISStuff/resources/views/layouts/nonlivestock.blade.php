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

        nav {
            @apply bg-slate-900 text-white text-center p-3
        }

        /* Div Styles (#) */
        #checkdiv {
            @apply grid grid-cols-4 text-center 
        }
            
        #addForm {
            @apply rounded-md px-2 py-1 text-center font-medium shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50 
        }
        /* Class Styles (.) */
        


                nav {
            padding-bottom: 10px;
            display: inline-block;
        }

        nav ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        nav li {
            display: inline-block;
            margin-left: 70px;
            padding-top: 20px;
            position: relative;
        }

        nav a {
            color: white;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 20px;
        }

        nav a:hover {
            color: rgb(187, 162, 116);
        }

        nav a::before {
            content: '';
            display: block;
            height: 5px;
            width: 100%;
            background-color: black;

            position: absolute;
            top: 0;
            width: 0%;

            transition: all ease-in-out 300ms;
        }

        nav a:hover::before {
            width: 100%;
        }
    </style>
    {{-- blade-formatter-enable --}}
</body>
</html>