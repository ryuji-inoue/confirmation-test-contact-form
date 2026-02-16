<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<div class="wrapper">

    <h1 class="wrapper__title">FashionablyLate</h1>

    @yield('content')

</div>

<!-- flatpickr JS -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
@stack('js')

@stack('css')
</body>
</html>