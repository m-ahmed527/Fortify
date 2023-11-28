@extends('app')
@section('content')
    <h1>Login</h1>
    <div>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div>
                <label>Email</label>
                <input type="email" name="email" placeholder="Email ">
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
            <br><button>Submit</button>
            <span><a href="{{ route('register') }}">Don't Have An Account</a></span>
            <div><a href="{{ route('password.request') }}">Forget Password</a></div>

        </form>
    </div>
@endsection
