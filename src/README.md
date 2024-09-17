# Coachtechフリマ

フリマアプリ

## 作成した目的

コーディング技術の向上


## アプリケーションURL
https://github.com/aruma-joishi/laravel-freamarket

## 機能一覧
- 会員登録
- ログイン
- ログアウト
- 商品一覧取得
- 商品詳細取得
- 商品お気に入り一覧取得
- ユーザー情報取得
- ユーザー購入商品一覧取得
- ユーザ出品商品一覧取得
- プロフィール変更
- 商品お気に入り追加
- 商品お気に入り削除
- 商品コメント追加
- 商品コメント削除
- 出品

## 使用技術（実行環境）

- PHP 7.4.9
- Laravel 8.83.8
- MySQL 15.1

## テーブル設計

<img src=public\image\table1.jpg alt="table">
<img src=public\image\table2.jpg alt="table">
<img src=public\image\table3.jpg alt="table">

## ER図

<img src=public\image\ER.jpg alt="ER">

# 環境構築
1. git clone git@github.com:aruma-joishi/laravel-rese.git
2. docker-compose up -d --build
3. docker-compose exec php bash
4. composer install
5. env.exampleファイルから.envを作成し、環境変数を変更
6. php artisan key:generate
7. php artisan migrate
8. php artisan db:seed

URL 開発環境: http://localhost phpMyAdmin: http://localhost:8080


## その他