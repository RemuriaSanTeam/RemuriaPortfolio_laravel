@include("parts.common",["title"=>"ログイン"])
        @include('parts.header')
        @include('parts.nav')
    <main>
        <div class="top-title">
            <h1>ログイン</h1>
        </div>
        <div class="catch-copy">
            <h2>ログイン画面は当たり前だがログインしたら見せないようにする</h2>
        </div>
    </main>
    @if (Route::has('login'))
  <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    @auth    // ログイン中の場合
      <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">ダッシュボード</a>
    @else    // 未ログインの場合
      <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">ログイン</a>
      @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">アカウント作成</a>
      @endif
    @endif
  </div>
@endif
</body>
@include('parts.footer')
</html>