@extends('app')
@section('content')



<h1>Register</h1>
<div>
    <form action="{{route('register')}}" method="POST">
        @csrf
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name ">
        </div>
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <div>
            <label>Email</label>
            <input type="email" name="email" placeholder="Email ">
        </div>
        @error('email')
            <span  class="text-danger">{{ $message }}</span>
        @enderror
        <div>
            <label>Password</label>
            <input type="password" name="password" placeholder="******">
        </div>
        @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <div>
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" placeholder="******">
        </div>
        @error('password_confirmation')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <button>Register</button>
        <span><a href="{{ route('login') }}">Already Have An Account</a></span>
    </form>
</div>
@endsection
