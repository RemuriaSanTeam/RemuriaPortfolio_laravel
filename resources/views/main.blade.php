<!DOCTYPE html>
<html lang="ja">
    <head>
        <link rel="stylesheet" href="{{  asset('css/style.css') }}">
    </head>
    <body>
        @include('parts.header')
        <main>
            <h1>トップページ</h1>
            <p>ここには投稿者,画像,ストーリーバー,プロフィールを載せる
                <br>
                要はインスタのメイン画面みたいなのを作る
            </p>
        </main>
        @include('parts.footer')
    </body>
</html>