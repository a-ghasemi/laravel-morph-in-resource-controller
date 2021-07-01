<style>
    img{
        border:1px solid black;
    }
    tr:not(:last-child) td{
        border-bottom: 1px solid silver;
    }
    th{
        border-bottom: 2px solid gray;
    }
</style>
<table cellspacing="0" cellpadding="2">
    <thead>
    <tr>
        <th>Image</th>
        <th>ID</th>
        <th>Post ID</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($items as $item)
    <tr>
        <td>
            <img src="{{ $item->url }}" width="64px" />
        </td>
        <td>
            {{ $item->id }}
        </td>
        <td>
            {{ $item->post->name }}( {{ $item->post->id }} )
        </td>
        <td>
            <a href="{{ route('images.edit',[$item]) }}">edit</a>
            |
            <a href="{{ route('posts.edit',[$item->post]) }}">edit post</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
</ul>
