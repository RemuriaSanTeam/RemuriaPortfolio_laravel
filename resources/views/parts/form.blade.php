<form method="POST" action="{{url('/create')}}">
    {{ csrf_field() }}
    <div>
        <label>Name</label><br/>
        <input type="text" name="author" value="" placeholder="名前💖"/>
    </div>
    <div>
        <label>Title</label><br/>
        <input type="text" name="author" value="" placeholder="タイトル💖"/>
    </div>
    <div>
        <label>Body</label><br/>
        <input type="submit" value="投稿💖"/>
    </div>
</form>