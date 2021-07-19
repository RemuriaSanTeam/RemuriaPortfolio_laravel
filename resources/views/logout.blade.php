@include("parts.common",["title"=>"ログアウト"])
@include('parts.header')
<!--<main>
        <div class="top-title">
            <h1>ログアウト</h1>
        </div>
        <div class="catch-copy">
            <h2>ログアウト画面を作る
                <br>
                navに書くものではない。
            </h2>
        </div>
    </main>-->
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                        this.closest('form').submit();">
        {{ __('Log Out') }}
    </x-jet-dropdown-link>
</form>
@include('parts.footer')
</body>

</html>
