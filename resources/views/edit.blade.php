@include('parts.common')
@include('parts.header')
<h1 class="row justify-content-center">編集ページ💖</h1>
<form class="my-3" method="POST" action="{{url('update')}}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value='{{$item_list->id}}'>
    <div class="form-group">
        <div class="mb-3 offset-md-1">
            <div class="col-6">
                <label for="formFileMultiple" class="form-label">Title</label>
                <input class="form-control mb-3" name="title" type="text" value="{{$item_list->title}}"
                    placeholder="タイトル💖" aria-label="Title">
            </div>
        </div>
    </div>
    {{--<div>
        <label>Image</label><br />
        <input type="file" name="image" value="{{$item_list->image}}" placeholder="アップロード💖" />
    </div>--}}
    <div class="form-group">
        <div class="mb-3 offset-md-1">
            <div class="col-6">
                <label for="formFileMultiple" class="form-label">Image</label>
                <input type="file" class="form-control mb-3" name="image" value="{{$item_list->image}}"
                    placeholder="アップロード💖" aria-label="Image" multiple>
            </div>
        </div>
    </div>
    <div class="mb-3 offset-md-1">
        <div class="col-10">
            <label for="exampleFormControlTextarea1" class="form-label">Body</label>
            <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="5"
                value="{{$item_list->body}}" placeholder="何が言いたい？"></textarea>
        </div>
    </div>
    <div class="col-md-2 offset-md-1">
        <input class="btn btn-primary" type="submit" value="変更💖" />
    </div>
</form>
@include('parts.footer')
</body>

</html>
