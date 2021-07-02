<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}"/>
    <!--<link rel="stylesheet" href="{{ asset('css/reset.css')}}"/>-->
</head>
<body>
    <header>
        @include('parts.header')
        @include('parts.nav')
    </header>
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