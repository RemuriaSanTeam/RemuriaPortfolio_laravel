<form method="POST" action="{{url('/create')}}">
    {{ csrf_field() }}
    <div>
        <label>Name</label><br/>
        <input type="text" name="author" value="" placeholder="名前💖"/>
    </div>
    <div>
        <label>Title</label><br/>
        <input type="text" name="title" value="" placeholder="タイトル💖"/>
    </div>
    <div>
        <label>Image</label><br/>
        <input type="file" name="image" accept="image/png,image/jpeg" placeholder="画像💖"/>
    </div>
    <div>
        <label>Body</label><br/>
        <textarea name="body"></textarea>
    </div>
        <input type="submit" value="投稿💖"/>
</form>