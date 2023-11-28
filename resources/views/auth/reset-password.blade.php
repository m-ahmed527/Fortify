@extends('app')
@section('content')
    <h1>Login</h1>
    <div>
        <form action="{{ route('password.update') }}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{$request->route('token')}}">
            <div>
                <label>Email</label>
                <input type="email" name="email" placeholder="Email " value="{{ $request->email }}">
            </div>
            @error('email')
                <span>{{ $message }}</span>
            @enderror
            <div>
                <label>Password</label>
                <input type="password" name="password" placeholder="******">
            </div>
            @error('password')
                <span>{{ $message }}</span>
            @enderror
            <div>
                <label>Confirm Password</label>
                <input type="password" name="password_confirmation" placeholder="******">
            </div>
            @error('password_confirmation')
                <span>{{ $message }}</span>
            @enderror
            <br><button>Update</button>

        </form>
    </div>
@endsection
