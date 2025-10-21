@extends("../../layout/master")
@section('title', 'Student Details')
@section('content')
<div class="container">
    <h1>Student Details</h1>
    <h5>ID: {{ $student['id'] }}</h5>
    <h5>Name: {{ $student['name'] }}</h5>
    <h5>Round: {{ $student['address'] }}</h5>
</div>
@endsection