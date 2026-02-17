@extends('layouts.app')

@section('title', 'お問い合わせ確認画面')

@push('css')
<link rel="stylesheet" href="{{ asset('css/contact/confirm.css') }}">
@endpush

@section('content')

<h2 class="confirm__subtitle">Confirm</h2>

<div class="confirm-table">

    <div class="confirm-table__row">
        <div class="confirm-table__label">お名前</div>
        <div class="confirm-table__value">
            {{ $contact['last_name'] }}{{ $contact['first_name'] }}
        </div>
    </div>

    <div class="confirm-table__row">
        <div class="confirm-table__label">性別</div>
        <div class="confirm-table__value">
            @if($contact['gender'] == 1)
                男性
            @elseif($contact['gender'] == 2)
                女性
            @else
                その他
            @endif
        </div>
    </div>

    <div class="confirm-table__row">
        <div class="confirm-table__label">メールアドレス</div>
        <div class="confirm-table__value">
            {{ $contact['email'] }}
        </div>
    </div>

    <div class="confirm-table__row">
        <div class="confirm-table__label">電話番号</div>
        <div class="confirm-table__value">
            {{ $contact['tel1'] }}{{ $contact['tel2'] }}{{ $contact['tel3'] }}
        </div>
    </div>

    <div class="confirm-table__row">
        <div class="confirm-table__label">住所</div>
        <div class="confirm-table__value">
            {{ $contact['address'] }}
        </div>
    </div>

    <div class="confirm-table__row">
        <div class="confirm-table__label">建物名</div>
        <div class="confirm-table__value">
            {{ $contact['building'] }}
        </div>
    </div>

    <div class="confirm-table__row">
        <div class="confirm-table__label">お問い合わせの種類</div>
        <div class="confirm-table__value">
            {{ $contact['contact_type'] }}
        </div>
    </div>

    <div class="confirm-table__row">
        <div class="confirm-table__label confirm-table__label--textarea">
            お問い合わせ内容
        </div>
        <div class="confirm-table__value">
            {!! nl2br(e($contact['message'])) !!}
        </div>
    </div>

</div>

<div class="confirm__buttons">

    <form action="{{ route('contact.thanks') }}" method="POST" class="confirm__form">
        @csrf
        @foreach ($contact as $key => $value)
            <input type="hidden" name="{{ $key }}" value="{{ $value }}">
        @endforeach
        <button type="submit" class="btn btn--submit">送信</button>
    </form>

    <form action="{{ route('contact.index') }}" method="POST" class="confirm__form">
        @csrf
        @foreach ($contact as $key => $value)
            <input type="hidden" name="{{ $key }}" value="{{ $value }}">
        @endforeach
        <button type="submit" class="btn btn--back">修正</button>
    </form>

</div>

@endsection