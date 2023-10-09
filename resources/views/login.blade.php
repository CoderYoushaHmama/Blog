@extends('layouts.main_layout')

@section('content')

<section class="login-section">
    <h2>Login</h2>
    <div class="container">
        <form action="{{route('signin')}}" method="POST">
            @csrf
            <div class="box">
                @if (Session::has('login_error'))
                <div class="error">{{Session::get('login_error')}}</div>
                @endif
                <div class="input-email">E-Mail Address:</div>
                @error('email-address')
                    <div class="error">{{$message}}</div>
                @enderror
                <input value="{{old('email-address')}}" type="text" name="email-address" class="input">
            </div>
            <div class="box">
                <div class="input-email">Password:</div>
                @error('password')
                    <div class="error">{{$message}}</div>
                @enderror
                <input value="{{old('password')}}" type="password" name="password" class="input">
            </div>
            <div class="box">
                <div class="remember-me">
                    <input name="remember" type="checkbox" name="remember-me" class="input-checkbox">
                    <span class="input-title">Remember Me</span>
                </div>
                <div class="forgot-password">
                    <a href="">Forgot Your Password?</a>
                </div>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
    <div class="create">
        <span>Don't have an account? <a href="">Register</a></span>
    </div>
</section>

@endsection

@section('header')

<li><a href="{{route('visitor')}}">Blog</a></li>
<li><a href="{{route('login')}}">Login</a></li>
<li><a href="{{route('register')}}">Register</a></li>

@endsection