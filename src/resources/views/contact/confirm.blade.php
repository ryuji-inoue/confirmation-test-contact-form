@extends('layouts.app')

@section('title', 'お問い合わせ確認画面')

@section('content')

    <h1 class="confirm__title">FashionablyLate</h1>
    <h2 class="confirm__subtitle">Confirm</h2>

    <div class="confirm-table">

        <div class="confirm-table__row">
            <div class="confirm-table__label">お名前</div>
            <div class="confirm-table__value">山田　太郎</div>
        </div>

        <div class="confirm-table__row">
            <div class="confirm-table__label">性別</div>
            <div class="confirm-table__value">男性</div>
        </div>

        <div class="confirm-table__row">
            <div class="confirm-table__label">メールアドレス</div>
            <div class="confirm-table__value">test@example.com</div>
        </div>

        <div class="confirm-table__row">
            <div class="confirm-table__label">電話番号</div>
            <div class="confirm-table__value">08012345678</div>
        </div>

        <div class="confirm-table__row">
            <div class="confirm-table__label">住所</div>
            <div class="confirm-table__value">東京都渋谷区千駄ヶ谷1-2-3</div>
        </div>

        <div class="confirm-table__row">
            <div class="confirm-table__label">建物名</div>
            <div class="confirm-table__value">千駄ヶ谷マンション101</div>
        </div>

        <div class="confirm-table__row">
            <div class="confirm-table__label">お問い合わせの種類</div>
            <div class="confirm-table__value">商品の交換について</div>
        </div>

        <div class="confirm-table__row">
            <div class="confirm-table__label confirm-table__label--textarea">
                お問い合わせ内容
            </div>
            <div class="confirm-table__value">
                届いた商品が注文した商品ではありませんでした。<br>
                商品の取り替えをお願いします。
            </div>
        </div>

    </div>

    <div class="confirm__buttons">
        <button class="btn btn--submit">送信</button>
        <button class="btn btn--back">修正</button>
    </div>

@endsection