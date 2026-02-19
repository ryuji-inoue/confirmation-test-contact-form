<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/layouts/common.css') }}">

    @stack('css')
</head>
<body>

<div class="wrapper">

    <!-- タイトル -->
    <div class="wrapper__header">
        <h1 class="wrapper__title">FashionablyLate</h1>

    <!-- ボタン用スペース -->
        @yield('header-buttons')
    </div>

    @yield('content')
</div>

</body>
</html>