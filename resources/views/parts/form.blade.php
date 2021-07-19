@if($errors->any())
<div class="errors">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<form class="my-3" method="POST" action="{{url('/create')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <div class="mb-3 offset-md-1">
            <div class="col-6">
            <label for="formFileMultiple" class="form-label">Title</label>
                <input class="form-control mb-3" name="title" type="text" placeholder="タイトル💖" aria-label="Title">
            </div>
        </div>
    </div>
    <!--画像アップロード-->
    <div class="form-group">
        <div class="mb-3 offset-md-1">
            <div class="col-6">
            <label for="formFileMultiple" class="form-label">Image</label>
                <input class="form-control" type="file" name="image" id="formFileMultiple" placeholder="アップロード💖"
                    multiple>
            </div>
        </div>
    </div>
    <div class="mb-3 offset-md-1">
        <div class="col-10">
        <label for="exampleFormControlTextarea1" class="form-label">Body</label>
            <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="5"
                placeholder="何が言いたい？"></textarea>
        </div>
    </div>
    <div class="col-md-2 offset-md-1">
        <input class="btn btn-primary" type="submit" value="投稿💖" />
    </div>
</form>
