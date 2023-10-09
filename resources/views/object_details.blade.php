@extends('layouts.main_layout')

@section('content')

<section class="object-details-section">
    <h1 class="title">{{$post->title}}</h1>
    <div class="author">By: {{$post->user->name}} on {{$post->date}}</div>
    <img src="{{url('posts_images')}}/{{$post->image}}" alt="">
    <pre class="object">{{$post->object}}</pre>
    @if ($post->user_id === $user->id)
        <div class="edit-div">
            <form action="{{route('edit',$post->id)}}" method="">
                @csrf
                @method('PUT')
                <button class="edit" type="submit">EDIT POST</button>
            </form>
            <form action="{{route('delete',$post->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="delete" type="submit">DELEE POST</button>
            </form>
        </div>
    @endif
</section>

@endsection

@section('header')

<li><a href="{{route('blog')}}">Blog</a></li>
<li><a href="">{{$user->name}}</a></li>
<li><a href="{{route('logout')}}">Logout</a></li>

@endsection