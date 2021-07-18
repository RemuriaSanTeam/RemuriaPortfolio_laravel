<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">MEMU</h4>
                    <ul class="list-unstyled">
                        <li><a href="{{url('/main')}}" class="text-white">メイン</a></li>
                        <li><a href="{{url('/post')}}" class="text-white">投稿</a></li>
                        <li><a href="{{url('/story')}}" class="text-white">ストーリー</a></li>
                        <li><a href="{{url('/profile')}}" class="text-white">プロフィール</a></li>
                        <li><a href="{{url('/setting')}}" class="text-white">設定</a></li>
                        <li><a href="{{url('/logout')}}" class="text-white">ログアウト</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <strong>Remustagram</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>
