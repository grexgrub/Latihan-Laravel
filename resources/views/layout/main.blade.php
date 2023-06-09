<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/57645609e7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
    @yield('css')
</head>
<body class="bg-gray-50">
   @include('components.sidebar')
    <main id="main" class="relative">
        <div class="absolute w-10 scroll"></div>
        @yield('main')
    </main>
   @yield('script')
   <script type="module"  src="{{ URL::asset('js/main.js') }}"></script>
   <script type="module"  src="{{ URL::asset('js/flowbite/dist/flowbite.js') }}"></script>
</body>
</html>
