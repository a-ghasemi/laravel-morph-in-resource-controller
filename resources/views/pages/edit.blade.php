<h1>Page Edit</h1>

<form action="{{ route('pages.update',[$item]) }}" method="post">
    @csrf
    @method('PUT')

    <input type="text" name="title" value="{{$item->title}}"/>
    <br><br>
    <input type="submit" value="Submit"/>

</form>
