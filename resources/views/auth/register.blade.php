@extends('admin.layout.form')

@section('title', 'Register')

@section('content')
<div class="col-lg-5 col-sm-8">
    <h2 class="text-center text-success text-uppercase mb-4">Register</h2>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('register') }}" method="POST">
            @csrf
                <div class="row g-3">
                    <div class="col-md-6">
                        <label>First Name</label>
                        <input type="text" name="first_name" class="form-control" value="{{ old('first_name') }}">
                        @error('first_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label>Last Name</label>
                        <input type="text" name="last_name" class="form-control" value="{{ old('last_name') }}">
                        @error('last_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label>Role</label>
                        <select name="role_id" class="form-select">
                            @foreach ($roles as $item)
                            <option value="{{ $item['id'] }}" @selected($item['id'] == old('role_id') ? 'selected' : '')>{{$item['name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label>Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 text-end">
                        <input type="submit" value="Submit" class="btn btn-success">
                    </div>
                </div>
            </form>   

        </div>
    </div>
</div>
@endsection