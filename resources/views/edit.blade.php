@include('parts.common')
    @include('parts.header')
    <h1>編集ページ💖</h1>
        <form action='{{url('update')}}' method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value='{{$item_list->id}}'>
            ユーザーID:{{$item_list->user_id}}<br/>
            <div>
                <label>Title</label><br/>
                <input type="text" name="title" value="{{$item_list->title}}" placeholder="タイトル💖"/>
            </div>
            <div>
                <label>Image</label><br/>
                <input type="file" name="image" value="{{$item_list->image}}" placeholder="アップロード💖"/>
            </div>
            <div>
                <label>Body</label><br/>
                <input type="textarea" name="body" value="{{$item_list->body}}" placeholder="内容💖"/>
            </div>
            <input type="submit" class="btn btn-primary" value="変更💖"/>
        </form>
        @include('parts.footer')
    </body>
</html>