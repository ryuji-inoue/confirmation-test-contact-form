# アプリケーション名
    coachtech お問い合わせフォーム

## 環境構築

### Docker ビルド
    ```bash
    # リポジトリをクローン
    ・git clone https://github.com/ryuji-inoue/confirmation-test-contact-form.git .

    # Docker コンテナをビルド・起動
    ・docker-compose up -d --build

    Laravel 環境構築
    # PHPコンテナに入る
    ・docker-compose exec php bash

    # Composerで依存関係インストール
    ・composer install

    # .envファイル作成(環境変数を適宜変更)
    ・cp .env.example .env

    # マイグレーション実行
    ・php artisan migrate

    # シーディング実行
    ・php artisan db:seed


### 開発環境
    ・お問い合わせ画面: http://localhost/
    ・ユーザー登録: http://localhost/register
    ・phpMyAdmin: http://localhost:8080/


### 使用技術（実行環境）
    ・PHP 8.2.11
    ・Laravel 8.83.8
    ・MySQL 8.0.26
    ・Nginx 1.21.1
    ・jQuery 3.7.1.min.js

### ER図
![ER図](docs/database_er.png)


### 特記事項
　　・カテゴリーIDの誤字について
        contactsテーブルのcategry_idは、誤字と判断してcategory_idとして実装した。
　　・ホバー機能の機能要件について
  　　　(hober機能：テーブルの各列にカーソルが乗った際hover機能でhoberするようにするについて)
        hoberは、hoverの誤字と判断。
        列へのホバーはjs無しで実装できなかったので、折衷案として行ホバー時の処理を追加。
　　・お問い合わせ入力のバリデーションチェックについて
        お名前については、最大8文字のチェックをすると基本設計書にあったので、追加した。
    　  エラーメッセージは電話の最大5文字のメッセージと同様とした。
　　・お問い合わせ入力のお問い合わせ種類について
  　　　デフォルトは「選択してください」として、入力時は選択できないように(disable)した。
    ・ユーザー登録機能について
    　　既存のメールアドレスを登録しようとすると、キー重複でエラーになるので、
  　　　エラーハンドリングを追加した。
    ・管理画面の検索機能について
    　「全て」を追加して、全カテゴリーで検索可能な仕様とした。
     　(性別などの他項目で全件検索したい場合に、お問い合わせ種類でフィルターが必須なのは、想定する仕様と違う気がした為)
    ・エクスポート機能について
    　　表示されているデータ部分に加え、モーダル部分もデータ出力する仕様とした。
      　(エクスポート機能追加の経緯として、モーダルを一括出力する、という要望があったと想定)
    ・フォントは指定がなく、特定できなかったので変更無し
    ・プルダウンの▼の実装は、cssのafterのみで実装できず、JSが必要となったので今回は実装を見送った。
    　※モーダルウィンドウ右上の「×」マークの実装も同様
    
