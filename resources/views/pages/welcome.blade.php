@extends("layout.master")

@section('title', 'Home')

@section('content')
<h1 class="text-success">Hello {{$name}}</h1>
<h5 class="text-success">Welcome to {{$country}}</h5>
<x-button bg="danger" :disable="true">
    Don't Click Me
</x-button>
<x-button>
    Click Me :)
</x-button>

@if(true)
<p>True Statement</p>
@elseif (false)
<p>False Statement</p>
@endif

@endsection