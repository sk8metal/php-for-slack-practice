# php-for-slack-practice
phpを使ってslack apiを叩くよ

# app.ini
|設定値名|設定値|
|:--|:--|
|WebHookUrl|[生成したものに置き換えてください](https://api.slack.com/incoming-webhooks)|
|Channel|投稿したいChannel名に修正してください|

# ローカル実行
```
php slack.php
```

# docker build
```
docker build -t my-php-for-slack .
```
# docker 実行
```
docker run -it --rm -p 80:80 --name my-php-for-slack my-php-for-slack:latest
```

下記にアクセスするとslackに通知します。
http://localhost/slack.php

# reference
- [guzzle](https://github.com/guzzle/guzzle)
