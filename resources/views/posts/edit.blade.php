<form action="{{ route('posts.update',[$item]) }}" method="post">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{$item->name}}"/>
    <br><br>
    <input type="submit" value="Submit"/>

</form>
