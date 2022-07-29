<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - {{ $title }}</title>

    <link rel="icon" href="{{ URL('storage/favicon.png') }}" type="image/icon type">

    <!-- Scripts -->
    <script src="{{ asset('js/Admin/script.js') }}" defer></script>

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="{{ URL::asset('css/all.min.css') }}">

    <!-- Styles -->
    <link href="{{ URL::asset('css/Admin/sidebar.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/Admin/style.css') }}" rel="stylesheet">

    {{-- Scripts --}}
    <script src="{{ URL::asset('js/jquery-3.6.0.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"></script>

</head>
<body>
    <nav>
        @include('Admin.layouts.includes.navbar')
    </nav>

    <section class="sidebar">
        @include('Admin.layouts.includes.sidebar')
    </section>

    <section class="content">
        <div class="container">
            @yield('section')
        </div>
    </section>

    <footer class="bg-dark text-center text-lg-start">
        @include('Admin.layouts.includes.footer')
    </footer>



    {{-- Font Awesome --}}
    <script src="{{ URL::asset('js/all.min.js') }}"></script>

    {{-- Script --}}
    <script src="{{ URL::asset('js/Admin/sidebar.js') }}"></script>
    <script src="{{ URL::asset('js/Admin/script.js') }}"></script>
</body>
</html>
