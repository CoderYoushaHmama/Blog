@extends('layouts.main_layout')

@section('content')

<section class="visitor-section">
    <div class="background">
        <img src="{{url('images/background.jpg')}}" alt="">
        <div class="container">
            <div class="title">WELCOM TO MY BLOG</div>
            <a href="{{route('login')}}"><button>START READING</button></a>
        </div>
    </div>
    <section class="posts-section">
        @foreach ($posts as $post)
            <div class="post-container">
                <img src="{{url('posts_images')}}/{{$post->image}}" alt="">
                <div class="text">
                    <div class="title">{{$post->title}}</div>
                    <div class="subtitle">You can find a list of all programming languages here</div>
                    <div class="object">{{$post->object}}</div>
                </div>
            </div>
        @endforeach
    </section>
</section>

@endsection

@section('header')

<li><a href="{{route('blog')}}">Blog</a></li>
<li><a href="{{route('login')}}">Login</a></li>
<li><a href="{{route('register')}}">Register</a></li>

@endsection