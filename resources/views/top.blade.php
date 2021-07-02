<!DOCTYPE html>
<html lang="ja">
<head>

</head>
<body>
    @include('parts.header')
    <main>
        <div class="top-title">
            <h1>トップタイトル</h1>
        </div>
        <div class="catch-copy">
            <h2>キャッチコピー</h2>
        </div>
        <div class="site-entry">
            <ul>
                <li class="entry-list"><a href="/">ログイン</a></li>
                <li class="entry-list"><a href="/">サインイン</a></li>
            </ul>
        </div>
    </main>
    @include('parts.footer')
</body>
</html>