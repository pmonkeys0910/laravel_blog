@extends('admin.layout.master')
@section('content')
<a class="btn btn-simple btn-success" href="{{ route('tags.create') }}">
    Add new tag
</a>

<table class="table">
    <tr>
        <th>#</th>
        <th>Tag</th>
        <th>View Posts</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach($tags as $tag)
        <tr>
            <td>{{ $tag->id }}</td>
            <td>{{ $tag->name }}</td>
            <td>
                <a class="btn btn-info" href="{{ route('tags.show', $tag->id) }}">
                    View
                </a>
            </td>
            <td>
                <a class="btn btn-primary" href="{{ route('tags.edit', $tag) }}">
                    Edit
                </a>
            </td>
            <td>
                <form action="{{ route('tags.destroy', $tag) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection