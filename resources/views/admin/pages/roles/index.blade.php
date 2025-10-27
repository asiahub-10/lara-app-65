@extends("admin/layout/master")
@section('title', $title)
@section('content')
<div class="container">
    <h2>Roles List</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $item)
            <tr>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['name'] }}</td>
                <td>
                    <a href="{{ route('roles.show', $item['id']) }}" class="btn btn-dark">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection