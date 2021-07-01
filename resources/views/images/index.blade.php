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

<h1>Images</h1>
<table cellspacing="0" cellpadding="2">
    <thead>
    <tr>
        <th>Image</th>
        <th>ID</th>
        <th>Imageable</th>
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
            {{ $item->imageable_type }} [{{ $item->imageable_id }}]
        </td>
        <td>
            <a href="{{ route('images.edit',[$item]) }}">edit</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
</ul>
