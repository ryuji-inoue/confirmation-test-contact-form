<!DOCTYPE html>
@extends('layouts.app')

@section('title', 'お問い合わせフォーム')

@section('content')

    <h2 class="contact__subtitle">Contact</h2>

    <form action="#" method="POST" class="contact-form">
        @csrf

        <div class="contact-form__group">
            <label>お名前 <span class="required">※</span></label>
            <div class="contact-form__name">
                <input type="text" placeholder="例: 山田">
                <input type="text" placeholder="例: 太郎">
            </div>
        </div>

        <div class="contact-form__group">
            <label>性別 <span class="required">※</span></label>
            <div class="contact-form__radio">
                <label><input type="radio" name="gender"> 男性</label>
                <label><input type="radio" name="gender"> 女性</label>
                <label><input type="radio" name="gender"> その他</label>
            </div>
        </div>

        <div class="contact-form__group">
            <label>メールアドレス <span class="required">※</span></label>
            <input type="email" placeholder="例: test@example.com">
        </div>

        <div class="contact-form__group">
            <label>電話番号 <span class="required">※</span></label>
            <div class="contact-form__tel">
                <input type="text" placeholder="080">
                <span>-</span>
                <input type="text" placeholder="1234">
                <span>-</span>
                <input type="text" placeholder="5678">
            </div>
        </div>

        <div class="contact-form__group">
            <label>住所 <span class="required">※</span></label>
            <input type="text" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3">
        </div>

        <div class="contact-form__group">
            <label>建物名</label>
            <input type="text" placeholder="例: 千駄ヶ谷マンション101">
        </div>

        <div class="contact-form__group">
            <label>お問い合わせの種類 <span class="required">※</span></label>
            <select>
                <option>選択してください</option>
                <option>商品について</option>
                <option>返品について</option>
                <option>その他</option>
            </select>
        </div>

        <div class="contact-form__group">
            <label>お問い合わせ内容 <span class="required">※</span></label>
            <textarea rows="5" placeholder="お問い合わせ内容をご記載ください"></textarea>
        </div>

        <div class="contact-form__button">
            <button type="submit">確認画面</button>
        </div>

    </form>

@endsection