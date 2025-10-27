@extends("admin/layout/master")
@section('title', 'Role')
@section('content')
<div class="container">
    <h2>Role Details</h2>
    <ul>
        <li><b>ID:</b> {{ $role['id'] }}</li>
        <li><b>Name:</b> {{ $role['name'] }}</li>
    </ul>
</div>
@endsection