@extends("../layout/master")
@section('title', 'Welcome Page')
@section('content')
<div class="container">
    <h1>Welcome Page</h1>
    <x-alert>
        <p class="mb-0">Wecome to Laravel</p>
    </x-alert>
    <h3>Student ID: {{ $id }}</h3>
    <h3>Student Round: {{ $round }}</h3>
</div>
@endsection