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
        @can('user','admin')
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
            <!--投稿者にのみ、編集ボタン･削除ボタンを表示する-->
            {{--@if($article->user_id==$login_user_id)<!--今ログインしているユーザーIDを投稿者IDが一致しているとき-->
                <a href="{{route("article.edit",["article"=>$article->id])}}",class='btn'>編集ボタン</a>
                {{Form::open(['method'=>'delete','route'=>['article.destroy',$article->id]])}}
                    {{From::submit('削除ボタン',['class'=>'btn'])}}
                {{From::close()}}
            @endif--}}
        @endforeach

        @if(count($item_list)<1)
        <p>投稿無いよ?</p>
        @endif

        {{--@foreach ($articles as $article)
            <p>{{ $article -> user -> name }}</p>
        @endforeach--}}
        @include('parts.footer')
    </body>
</html>