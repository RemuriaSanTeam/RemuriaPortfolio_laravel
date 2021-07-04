@include("parts.common",["title"=>"ようこそ"])
        @include('parts.header')
        @include('parts.nav')
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