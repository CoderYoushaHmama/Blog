@extends('layouts.main_layout')

@section('content')

<section class="blog-section">
    <h1 class="title">All Objects</h1>
    <a href="{{route('create')}}"><button class="add-new-object-btn">Add New Object</button></a>
    <hr>
    @foreach ($posts as $post)
        <div class="post-container">
            <img src="{{url('posts_images')}}/{{$post->image}}" alt="">
            <div class="text">
                <div class="object-title">{{$post->title}}</div>
                <div class="user-name">By: {{$post->user->name}} on {{$post->date}}</div>
                <div class="object">{{$post->object}}</div>
                <a href="{{route('view',$post->id)}}">
                    <button>READ MORE</button>
                </a>
            </div>
        </div>
        <hr>
    @endforeach
</section>

@endsection

@section('header')

<li><a href="{{route('blog')}}">Blog</a></li>
<li><a href="">{{$user->name}}</a></li>
<li><a href="{{route('logout')}}">Logout</a></li>

@endsection