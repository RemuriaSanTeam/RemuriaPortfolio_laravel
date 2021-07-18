<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="/">Remustagram</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                {{--<li class="nav-item"><a class="nav-link" href="{{url('/')}}">トップ</a></li>--}}
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{url('/main')}}">メイン</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/post')}}">投稿</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/story')}}">ストーリー</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">垢設定</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{url('/profile')}}">プロフィール</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="{{url('/setting')}}">設定</a></li>
                        <li><a class="dropdown-item" href="{{url('/logout')}}">ログアウト</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
