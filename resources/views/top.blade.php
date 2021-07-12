@include("parts.common",["title"=>"ようこそ"])
        @include('parts.header')
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="#page-top">Remustagram</a>
            </div>
        </nav>
    <main>
        <div class="top-title">
            <h1>トップタイトル</h1>
        </div>
        <div class="catch-copy">
            <h2>キャッチコピー</h2>
        </div>
        <div class="site-entry">
            <ul>
                <li class="entry-list"><a href="/login">ログイン</a></li>
                <li class="entry-list"><a href="/signin">サインイン</a></li>
            </ul>
        </div>
    </main>
    @include('parts.footer')
</body>
</html>