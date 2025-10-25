@extends("layout/master")
@section('title', 'Trainees')
@section('content')
<div class="container">
    <h2>Trainees List</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Country</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trainees as $item)
            <tr>
                <td>{{ $item['name'] }}</td>
                <td>{{ $item['email'] }}</td>
                <td>{{ $item['country'] }}</td>
                <td><span class="badge bg-{{ $item['is_active'] ? 'success' : 'danger' }}">{{ $item['is_active'] ? 'Active' : 'Inactive' }}</span></td>
                <td>
                    {{-- <a href="/trainees/{{ $item['id'] }}" class="btn btn-primary">View</a> --}}
                    {{-- <x-button bg="dark"  href="/trainees/{{ $item['id'] }}">View</x-button> --}}
                    <x-button bg="dark"  href="{{ route('trainee-details', $item['id']) }}">View</x-button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection