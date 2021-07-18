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
    @csrf
    <!--<div>
        <label>Name</label><br/>
        <input type="text" name="author" value="" placeholder="名前💖"/>
    </div>-->
    <input class="form-control mb-3" name="title" type="text" placeholder="タイトル💖" aria-label="Title">
    <!--画像アップロード-->
    <div class="mb-3">
        <label for="formFileMultiple" class="form-label">Image</label>
        <input class="form-control" type="file" name="image" id="formFileMultiple" placeholder="アップロード💖" multiple>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Body</label>
        <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="5"
            placeholder="何が言いたい？"></textarea>
    </div>
    <input class="btn btn-primary mb-3" type="submit" value="投稿💖" />
</form>
