@extends("../../layout/master")
@section('title', 'Students Page')
@section('content')
<div class="container">
    <h1>Students Page</h1>
    <div class="row g-3">
        @foreach ($students as $item)
            <div class="col">
                <a href="/student/{{ $item['id'] }}" class="text-decoration-none">
                <div class="card">
                    <div class="card-body">
                        <span class="badge bg-dark">{{ $item['id'] }}</span>
                        <h5 class="card-title">{{ $item['name'] }}</h5>
                    </div>
                </div>
            </a>
            </div>
            @endforeach
    </div>
</div>
@endsection