<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="{{ url('/css/index.css') }}" />

    <!-- Tailwind CSS & AlpineJS & Ajax -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!--JavaScript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.3.5/signature_pad.min.js" integrity="sha512-kw/nRM/BMR2XGArXnOoxKOO5VBHLdITAW00aG8qK4zBzcLVZ4nzg7/oYCaoiwc8U9zrnsO9UHqpyljJ8+iqYiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('/public/js/signature.js') }}"></script>
    <script src="{{ asset('/public/js/addForms.js') }}"></script>

    

    <title>Non-Livestock Entry Form</title>
</head>
<body>
    @yield('nav')
    <!--Yield to enable styles-->
    @yield('styles')
    @yield('title')
    @yield('content')
    @yield('addedForms')
    {{-- blade-formatter-enable --}}
    @yield('signature')
    </br>

    @yield('etransfer')
    </br>
    @yield('comments')
    @yield('submit')
    @yield('footer')
</body>
</html>