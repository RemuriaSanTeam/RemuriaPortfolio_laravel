@include("parts.common",["title"=>"投稿"])
@include('parts.header')
<h2>記事一覧</h2>
@can('user')
<h2 class="row justify-content-center">投稿フォーム</h2>
@include("parts.form")
@endcan
<div class="album py-5 bg-dark">
    <div class="container">
        <div class="row">
            @foreach($item_list as $item)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img class="card-img-top" src="{{Storage::url($item->image)}}" alt="投稿画像" />
                    <div class="card-body">
                        <div class="card-text">
                            <h5 class="fw-bolder">{{$item->title}}</h5>
                            <h6>{{$item->author}}</h6>
                            <p class="card-text">{{nl2br(e($item->body))}}</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            @if($item->user_id==Auth::user()->id)
                            <div class="btn-group">
                                <!--編集ボタン-->
                                <a href="{{url('edit')}}?id={{$item->id}}"
                                    class="btn btn-primary btn-sm btn-outline-secondary">編集</a>
                                <!--削除ボタン-->
                                <form action='{{url('/remove')}}' method="POST">
                                    @csrf
                                    <input type='hidden' name='id' value='{{ $item->id }}'>
                                    <!--ここでpost_entryのid要素を取得してる-->
                                    <div class="text-center"><input type='submit'
                                            class="btn-dell btn btn-danger btn-sm btn-outline-secondary" value="削除">
                                    </div>
                                </form>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
{{--<p>ユーザーID:{{$item->user_id}}</p>--}}
@if(count($item_list)<1) <h5 class="fw-bolder">投稿ないよ？</h5>
    @endif
    @include('parts.footer')
    <script>
        $(function () {
            $(".btn-dell").click(function () {
                if (confirm("マジで消すの⁉")) {} else {
                    return false;
                }
            });
        });

    </script>
    </body>

    </html>