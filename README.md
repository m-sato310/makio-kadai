# アプリケーション名
- お問い合わせフォーム
## 環境構築
```

リポジトリからダウンロードして下さい  
git clone   

srcディレクトリに.envファイルを作成し  
docker-compose.ymlのDBの設定を記入して下さい  
$ cp .env.example .env  
---  
DB_HOST=XXX  
DB_DATABASE=XXX  
DB_USERNAME=XXX  
DB_PASSWORD=XXX  
---

dockerコンテナを構築して下さい
$ docker-compose up -d --build
$ docker-compose exec php bash
> composer install
> php artisan key:generate
> php artisan migrate
> php artisan db:seed

http://localhostにアクセスして
"The stream or file could not be opened"というエラーが発生した場合は
ファイルの権限を変更して対応お願いします
```

## 使用技術(実行環境)
- 例) Laravel 8.x(言語やフレームワーク、バージョンなどが記載されていると良い)

## ER図
< - - - 作成したER図の画像 - - - >
- ![ER図](index.drawio.png)


## URL
- 例) 開発環境：http://localhost/
