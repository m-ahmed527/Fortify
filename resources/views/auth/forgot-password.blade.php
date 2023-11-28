@extends('app')
@section('content')
    <h1>Reset Password</h1>
    <div>
        @if (session('status'))
            <div class="text-success">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('password.request') }}" method="POST">
            @csrf
            <div>
                <label>Email</label>
                <input type="email" name="email" placeholder="Email ">
            </div>
            @error('email')
                <span>{{ $message }}</span>
            @enderror

            <br><button>Submit</button>
            <span><a href="{{ route('register') }}">Don't Have An Account</a></span>


        </form>
    </div>
@endsection
