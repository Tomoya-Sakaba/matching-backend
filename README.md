# 環境構築

## Dockerをインストール

まだDockerをインストールしていない方はこちらの記事を参考にしてください。<br>

- Mac：[DockerをMacにインストールする（更新: 2019/7/13）](https://qiita.com/kurkuru/items/127fa99ef5b2f0288b81)
- Windows：[Windows 10 HomeへのDocker Desktop (ver 3.0.0) インストールが何事もなく簡単にできるようになっていた (2020.12時点)](https://qiita.com/zaki-lknr/items/db99909ba1eb27803456)

ターミナルで以下コマンドを実行し、それぞれのバージョンを確認して表示されたら`Docker`と`Docker Compose`が使えるようになっています。



M1版のDockerでは現在`platform: linux/x86_64`のイメージがないと使えないので、以下の通り修正してください。

- 修正箇所：[docker-compose.yml](https://github.com/quest-academia/qa-laravel-ec-training-ver9/compare/development...m1Mac#diff-e45e45baeda1c1e73482975a664062aa56f20c03dd9d64a827aba57775bed0d3)

※修正した`docker-compose.yml`はコミット、プッシュしないようにしてください。
方法は下記を参考にして下さい。

- [git addで変更されたファイルをステージングエリアに追加する方法【初心者向け】](https://techacademy.jp/magazine/10168)
- [VSCodeでのGitの基本操作まとめ](https://qiita.com/y-tsutsu/items/2ba96b16b220fb5913be#%E3%82%B3%E3%83%9F%E3%83%83%E3%83%88%E3%81%97%E3%81%A6%E3%81%BF%E3%82%8B)
    - 参照部分 → コミットしてみる

makefileが実行できるかを確認
```
$ make -v
GNU Make 3.81
Copyright (C) 2006  Free Software Foundation, Inc.
This is free software; see the source for copying conditions.
There is NO warranty; not even for MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE.

```
*Macはデフォルトで入っている

## Dockerを立ち上げる

```sh
make init
```
これでdockerが立ち上がる

```sh
make ps
```


以下のようになればOK
```
  Name                 Command               State          Ports
-------------------------------------------------------------------------
mysql5.7    docker-entrypoint.sh mysqld      Up      3306/tcp, 33060/tcp
phpmyamin   /docker-entrypoint.sh apac ...   Up      0.0.0.0:8080->80/tcp
web         /usr/sbin/httpd -D FOREGROUND    Up      0.0.0.0:80->80/tcp
```

その後に
```docker-compose exec web cp .env.example .env```
を実行し.envファイルが存在しているのを確認する


## phpmyAdminに接続
localhost:8080で接続しでデータベースを作成する


## envファイルを以下の通りにする（編集箇所だけ記載しております）
```
APP_NAME=Laravel
APP_ENV=local
APP_KEY= // php artinsan key:generateで自動で作成されます
APP_DEBUG=true
APP_URL=http://localhost
LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=mysql8.0
DB_PORT=3306
DB_DATABASE=phpMyAdminで作成したDatabaseの名前をコピペしてください
DB_USERNAME=root
DB_PASSWORD=root
```

## composer installとかを実行する
```
make install
```

http://localhost:80
を実行しLaravelの初期画面が出てたらOK



## Author

Yuya-Ishikawa

©︎QuestAcademia All rights reserved
