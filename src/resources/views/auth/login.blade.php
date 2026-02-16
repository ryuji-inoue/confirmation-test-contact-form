@extends('layouts.app')

@section('content')
<div class="login">
    <h2 class="login__title">Login</h2>

    <div class="login__card">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="login__group">
                <label class="login__label">メールアドレス</label>
                <input type="email" name="email" class="login__input" placeholder="例: test@example.com">
            </div>

            <div class="login__group">
                <label class="login__label">パスワード</label>
                <input type="password" name="password" class="login__input" placeholder="例: coachtech1106">
            </div>

            <div class="login__button-area">
                <button type="submit" class="login__button">ログイン</button>
            </div>

        </form>
    </div>
</div>
@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endpush