@extends("admin.layout.master")
@section('title', 'Users')
@section('content')
<div class="container">
<a href="{{ route('users.index') }}" class="btn btn-outline-dark mb-3">Back to list</a>
   <h2>User {{$user['id']}}</h2>
   <ul>
       <li><b>Name:</b> {{ $user['first_name'] }} {{ $user['last_name'] }}</li>
       <li><b>Email:</b> {{ $user['email'] }}</li>
       <li><b>Role:</b> {{ $user['role'] }}</li>
   </ul>
</div>
@endsection