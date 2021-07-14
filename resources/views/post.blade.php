@include('parts.common')
        @include('parts.header')
        @include('parts.nav')
        <!--<main>
            <h1>トップページ</h1>
            <p>ここには投稿者,画像,ストーリーバー,プロフィールを載せる
                <br>
                要はインスタのメイン画面みたいなのを作る
            </p>
            <p>今の時間はだぜ(コントローラーからテンプレに情報を渡す練習)</p>
        </main>-->
        @can('user')
        <h2>投稿フォーム</h2>
        @include("parts.form")
        @endcan
        <h2>記事一覧</h2>
        @foreach($item_list as $item)
            <div class="entry">
                <h5>{{$item->title}} by {{$item->author}}</h5>
                <div>
                    <img src="{{Storage::url($item->image)}}" alt="投稿画像" width="80px">
                </div>
                <div>
                    {{nl2br(e($item->body))}}
                </div>
            </div>
            <!--削除ボタン-->
            <form action="{{route('post.destroy',$item->id)}}" method="post" class="float-right">
            @csrf
            @method('delete')
            <input type="submit" value="削除" class="btn btn-danger" onclick='return confirm("削除しちゃうの？");'>
            </form>
        @endforeach

        @if(count($item_list)<1)
        <p>投稿無いよ?</p>
        @endif

        @include('parts.footer')
    </body>
</html>