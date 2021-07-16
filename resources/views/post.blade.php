@include("parts.common",["title"=>"投稿"])
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
        <h2>記事一覧</h2>
        <section class="py-5">
        @can('user')
        <h2>投稿フォーム</h2>
        @include("parts.form")
        @endcan
        @foreach($item_list as $item)
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="{{Storage::url($item->image)}}" alt="投稿画像" />
                                <div class="entry card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder">{{$item->title}}</h5>
                                        <h6>{{$item->author}}</h6>
                                        {{nl2br(e($item->body))}}
                                    </div>
                                </div>
                            </div>
                            @if($item->user_id==Auth::user()->id)
                            <!--削除ボタン-->
                            <div class="card-footer p-4 pt-0">
                                <form action='{{url('/remove')}}' method="POST">
                                    @csrf
                                    <input type='hidden' name='id' value='{{ $item->id }}'><!--ここでpost_entryのid要素を取得してる-->
                                    <div class="card-footer p-4 pt-0">
                                        <div class="text-center"><input type ='submit' class="btn-dell btn btn-danger mt-auto" value="削除"></div>
                                    </div>
                                </form>
                            <!--編集ボタン-->
                                    <a href="{{url('edit')}}?id={{$item->id}}" class="btn btn-info mt-auto">編集</a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            {{--<p>ユーザーID:{{$item->user_id}}</p>--}}
        @endforeach
    </section>
        @if(count($item_list)<1)
        <h5 class="fw-bolder">投稿ないよ？</h5>
        @endif

        @include('parts.footer')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script>
            $(function(){
                $(".btn-dell").click(function(){
                    if(confirm("マジで消すの⁉")){
                    }else{
                        return false;
                    }
                });
            });
        </script>
    </body>
</html>