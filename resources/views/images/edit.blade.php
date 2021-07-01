<h1>Image Edit</h1>

<form action="{{ route('images.update',[$item]) }}" method="post">
    @csrf
    @method('PUT')

    <select name="imageable">
        <optgroup label="Posts">
            @foreach($posts as $post)
                <option value="Post|{{$post->id}}"
                        @if($item->imageable_type == \App\Models\Post::class && $item->imageable_id == $post->id) selected @endif
                >{{$post->name}}</option>
            @endforeach
        </optgroup>
        <optgroup label="Pages">
            @foreach($pages as $page)
                <option value="Page|{{$page->id}}"
                        @if($item->imageable_type == \App\Models\Page::class && $item->imageable_id == $page->id) selected @endif
                >{{$page->title}}</option>
            @endforeach
        </optgroup>
    </select>
    <br><br>
    <input type="text" name="url" value="{{$item->url}}"/>
    <br><br>
    <input type="submit" value="Submit"/>

</form>
