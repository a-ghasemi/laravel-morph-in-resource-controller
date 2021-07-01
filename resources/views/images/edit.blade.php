<form action="{{ route('images.update',[$item]) }}" method="post">
    @csrf
    @method('PUT')

    <select name="post">
        @foreach($posts as $post)
            <option value="{{$post->id}}" @if($item->post_id == $post->id) selected @endif>{{$post->name}}</option>
        @endforeach
    </select>
    <br><br>
    <input type="text" name="url" value="{{$item->url}}"/>
    <br><br>
    <input type="submit" value="Submit"/>

</form>
