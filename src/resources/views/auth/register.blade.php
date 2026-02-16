@extends('layouts.app')

@section('content')
<div class="register">
    <h2 class="register__title">Register</h2>

    <div class="register__card">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="register__group">
                <label class="register__label">お名前</label>
                <input type="text" name="name" class="register__input" placeholder="例: 山田　太郎">
            </div>

            <div class="register__group">
                <label class="register__label">メールアドレス</label>
                <input type="email" name="email" class="register__input" placeholder="例: test@example.com">
            </div>

            <div class="register__group">
                <label class="register__label">パスワード</label>
                <input type="password" name="password" class="register__input" placeholder="例: coachtech1106">
            </div>

            <div class="register__button-area">
                <button type="submit" class="register__button">登録</button>
            </div>

        </form>
    </div>
</div>
@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
@endpush