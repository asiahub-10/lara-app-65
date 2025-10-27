@extends("admin/layout/master")
@section('title', 'Trainee Profile')
@section('content')
<div class="container">
    <h2>Trainees Profile</h2>
    <ul>
        <li><b>Trainee ID:</b> {{ $trainee['id'] }}</li>
        <li><b>Trainee Name:</b> {{ $trainee['name'] }}</li>
        <li><b>Trainee Email:</b> {{ $trainee['email'] }}</li>
    </ul>
</div>
@endsection