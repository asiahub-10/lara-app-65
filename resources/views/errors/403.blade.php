@extends('admin.layout.form')

@section('title', '403')

@section('content')
<div class="text-danger text-center">
    <h2>Access Denied!</h2>
    <x-button bg="outline-dark" href="/dashboard">Back to Dashboard</x-button>
</div>
@endsection