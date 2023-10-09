@extends('layouts.main_layout')

@section('content')

<section class="edit-section">
    <h1 class="title">Edit Object</h1>
    <form action="{{route('save',$post->id)}}" method="POST">
        @csrf
        @method('PUT')
        @error('title')
            <div class="error">{{$message}}</div>
        @enderror
        <input value="{{$post->title}}" name="title" type="text" class="input-title">
        @error('object')
            <div class="error">{{$message}}</div>
        @enderror
        <pre><textarea name="object" id="" cols="30" rows="10">{{$post->object}}</textarea></pre>
        <div>
            <button class="save-btn" type="submit">SAVE</button>
            <a href="{{route('view',$post->id)}}"><button class="cancel-btn">CANCEL</button></a>
        </div>
    </form>
</section>

@endsection

@section('header')

<li><a href="{{route('blog')}}">Blog</a></li>
<li><a href="">{{$user->name}}</a></li>
<li><a href="{{route('logout')}}">Logout</a></li>

@endsection