# アプリケーション名
    coachtech お問い合わせフォーム

## 環境構築

### Docker ビルド
    ```bash
    # リポジトリをクローン
    ・git clone -b develop https://github.com/ryuji-inoue/confirmation-test-contact-form.git .

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