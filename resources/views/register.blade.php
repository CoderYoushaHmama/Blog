@extends('layouts.main_layout')

@section('content')

<section class="register-section">
    <h2>Register</h2>
    <div class="container">
        <form action="{{route('signup')}}" method="POST">
            @csrf
            <div class="box">
                <div class="input-title">Name:</div>
                @error('name')
                    <div class="error">{{$message}}</div>
                @enderror
                <input type="text" name="name" class="input-text">
            </div>
            <div class="box">
                <div class="input-title">E-Mail Address:</div>
                @error('email')
                    <div class="error">{{$message}}</div>
                @enderror
                <input type="text" name="email-address" class="input-text">
            </div>
            <div class="box">
                <div class="input-title">Password:</div>
                @error('password')
                <div class="error">{{$message}}</div>
                @enderror
                @if (Session::has('password_error'))
                    <div class="error">{{Session::get('password_error')}}</div>
                @endif
                <input type="password" name="password" class="input-text">
            </div>
            <div class="box">
                <div class="input-title">Confirm Password:</div>
                @error('confirm-password')
                <div class="error">{{$message}}</div>
                @enderror
                <input type="password" name="confirm-password" class="input-text">
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
    <div class="create">
        <span>Aready have an account? <a href="{{route('login')}}">Login</a></span>
    </div>
</section>

@endsection

@section('header')

<li><a href="{{route('visitor')}}">Blog</a></li>
<li><a href="{{route('login')}}">Login</a></li>
<li><a href="{{route('register')}}">Register</a></li>

@endsection