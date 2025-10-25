@extends("layout/master")
@section('title', 'User')

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
@endsection

@section('content')
<h1>Name: {{$user}}</h1>

{{-- @if($id)
<h5>Profile ID: {{$id}}</h5>
@endif --}}

<h5 class={{ $id ? '' : 'd-none' }}>Profile ID: {{$id}}</h5>

@endsection