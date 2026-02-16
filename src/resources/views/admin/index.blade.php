@extends('layouts.app')

@section('content')
<div class="admin">
    <h2 class="admin__title">Admin</h2>

    <!-- 検索フォーム -->
    <div class="admin__search">
        <form method="GET" action="#">
            <input type="text" name="keyword" class="admin__input" placeholder="お名前やメールアドレスを入力してください">

            <select name="gender" class="admin__select">
                <option value="">性別</option>
                <option value="male">男性</option>
                <option value="female">女性</option>
            </select>

            <select name="category" class="admin__select">
                <option value="">お問い合わせの種類</option>
                <option value="exchange">商品の交換について</option>
                <option value="refund">返品について</option>
            </select>

            <input type="text" name="date" class="admin__date" id="datePicker" placeholder="年/月/日">

            <button type="submit" class="admin__button admin__button--search">検索</button>
            <button type="reset" class="admin__button admin__button--reset">リセット</button>
        </form>
    </div>

    <!-- エクスポート -->
    <div class="admin__export">
        <button class="admin__button admin__button--export">エクスポート</button>
    </div>

    <!-- テーブル -->
    <div class="admin__table-wrapper">
        <table class="admin__table">
            <thead>
                <tr>
                    <th>お名前</th>
                    <th>性別</th>
                    <th>メールアドレス</th>
                    <th>お問い合わせの種類</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 7; $i++)
                <tr>
                    <td>山田 太郎</td>
                    <td>男性</td>
                    <td>test@example.com</td>
                    <td>商品の交換について</td>
                    <td>
                        <label for="modal-toggle" class="admin__detail-button">詳細</label>
                    </td>
                </tr>
                @endfor
            </tbody>
        </table>
    </div>

    <!-- ページネーション -->
    <div class="admin__pagination">
        <span class="active">1</span>
        <span>2</span>
        <span>3</span>
        <span>4</span>
        <span>5</span>
    </div>

</div>

<!-- モーダル用checkbox -->
<input type="checkbox" id="modal-toggle" class="admin__modal-toggle">

<!-- モーダル -->
<div class="admin__modal">
    <div class="admin__modal-content">
        <label for="modal-toggle" class="admin__modal-close">×</label>

        <div class="admin__modal-body">
            <div class="admin__modal-row">
                <span>お名前</span>
                <span>山田 太郎</span>
            </div>
            <div class="admin__modal-row">
                <span>性別</span>
                <span>男性</span>
            </div>
            <div class="admin__modal-row">
                <span>メールアドレス</span>
                <span>test@example.com</span>
            </div>
            <div class="admin__modal-row">
                <span>電話番号</span>
                <span>08012345678</span>
            </div>
            <div class="admin__modal-row">
                <span>住所</span>
                <span>東京都渋谷区千駄ヶ谷1-2-3</span>
            </div>
            <div class="admin__modal-row">
                <span>建物名</span>
                <span>千駄ヶ谷マンション101</span>
            </div>
            <div class="admin__modal-row">
                <span>お問い合わせの種類</span>
                <span>商品の交換について</span>
            </div>
            <div class="admin__modal-row">
                <span>お問い合わせ内容</span>
                <span>届いた商品が注文と異なっていました。商品の交換をお願いします。</span>
            </div>

            <div class="admin__modal-delete">
                <button class="admin__delete-button">削除</button>
            </div>
        </div>
    </div>
</div>

@endsection



@push('js')
<script>
    flatpickr("#datePicker", {
        dateFormat: "Y/m/d",
        locale: "ja"
    });
</script>

@push('css')
<link rel="stylesheet" href="{{ asset('css/admin/index.css') }}">

@endpush