@if($errors->any())
<div class="errors">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="POST" action="{{url('/create')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div>
        <label>Name</label><br/>
        <input type="text" name="author" value="" placeholder="名前💖"/>
    </div>
    <div>
        <label>Title</label><br/>
        <input type="text" name="title" value="" placeholder="タイトル💖"/>
    </div>
    <!--画像アップロード-->
    <div>
        <label>Image</label><br/>
        <input type="file" name="image" placeholder="アップロード💖"/>
    </div>
    <div>
        <label>Body</label><br/>
        <textarea name="body"></textarea>
    </div>
        <input type="submit" value="投稿💖"/>
</form>