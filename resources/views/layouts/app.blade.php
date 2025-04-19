<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'tips株式会社') - tips株式会社</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
</head>

<body>
    @yield('content')

    <footer>
        {{-- <div class="container">
            <p>&copy; {{ date('Y') }} tips株式会社 All rights reserved.</p>
        </div> --}}
    </footer>

</body>

</html>