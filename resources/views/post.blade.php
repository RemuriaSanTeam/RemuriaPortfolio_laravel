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
                <p>ユーザーID:{{$item->user_id}}</p>
            </div>
            <!--削除ボタン-->
            <form action='{{url('/remove')}}' method="POST">
                @csrf
                <input type='hidden' name='id' value='{{ $item->id }}'>
                <input type ='submit' class="btn btn-danger" value="削除">
            </form>
            {{--<a href="{{route('delete')}}?id={{$item->id}}" class="btn btn-danger">削除</a>--}}
        @endforeach

        @if(count($item_list)<1)
        <p>投稿無いよ?</p>
        @endif

        @include('parts.footer')
    </body>
</html>