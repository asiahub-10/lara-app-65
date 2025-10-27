@extends("admin.layout.master")
@section('title', 'Users')
@section('content')
<div class="container">
   <h2>Users List</h2>
   <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $i => $item)
            <tr>
                {{-- <td>{{ $i + 1 }}</td> --}}
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['first_name'] }} {{ $item['last_name'] }}</td>
                <td>{{ $item['email'] }}</td>
                <td>{{ $item['role'] }}</td>
                <td>
                    <a href="{{ route('users.show', $item['id']) }}" class="btn btn-dark">Details</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="5">
                    {{ $users->links('vendor.pagination.bootstrap-5') }}
                </th>
            </tr>
        </tfoot>
   </table>
</div>
@endsection