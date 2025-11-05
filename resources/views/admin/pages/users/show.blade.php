@extends("admin.layout.master")
@section('title', 'Users')
@section('content')
<div class="container">
<a href="{{ route('users.index') }}" class="btn btn-outline-dark mb-3">Back to list</a>
    {{-- @if($user['id'] === Auth::user()->id) --}}
   <h2>User {{$user['id']}}</h2>
   @if($user['photo'] !== null)
   <img src="{{ asset('storage/' . $user['photo']) }}" class="rounded" alt="Profile image" width="100">
   @else
   <img src="https://placehold.co/100" class="rounded" alt="Profile image">
   @endif
   <ul class="mt-3">
       <li><b>Name:</b> {{ $user['first_name'] }} {{ $user['last_name'] }}</li>
       <li><b>Email:</b> {{ $user['email'] }}</li>
       <li><b>Role:</b> {{ $user['role'] }}</li>
   </ul>
   {{-- @else
   <h5>You are not authorized to view this page</h5>
   @endif --}}
</div>
@endsection