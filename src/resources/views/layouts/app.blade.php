<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'FashionablyLate')</title>

    <link rel="stylesheet" href="{{ asset('css/layouts/common.css') }}">
    @stack('css')
</head>

<body>

<div class="wrapper">

    <header class="wrapper__header">
        <h1 class="wrapper__title">FashionablyLate</h1>

        <div class="wrapper__buttons">
            @yield('header-buttons')
        </div>
    </header>

    <main class="wrapper__content">
        @yield('content')
    </main>

</div>

</body>
</html>