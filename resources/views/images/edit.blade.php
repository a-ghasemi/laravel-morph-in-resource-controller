<form action="{{ route('images.update',[$item]) }}" method="post">
    @csrf
    @method('PUT')

    <input type="text" name="post_id" value="{{$item->post->id}}"/>
    <br><br>
    <input type="text" name="url" value="{{$item->url}}"/>
    <br><br>
    <input type="submit" value="Submit"/>

</form>
