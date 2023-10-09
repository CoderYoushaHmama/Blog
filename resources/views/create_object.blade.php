@extends('layouts.main_layout')

@section('content')

<section class="create-object-section">
    <h1 class="title">Add New Object</h1>
    <form enctype="multipart/form-data" action="{{route('creat_post')}}" method="POST">
        @csrf
        @error('title')
        <div class="error">{{$message}}</div>
        @enderror
        <input name="title" type="text" class="input-title">
        @error('object')
        <div class="error">{{$message}}</div>
        @enderror
        <pre><textarea name="object" id="" cols="30" rows="10"></textarea></pre>
        <div class="upload-image">
            <div>SELECT AN IMAGE TO UPLOAD</div>
            <input name="image" type="file" accept="image/*" class="input-image">
        </div>
        <button type="submit">SUBMIT THE POST</button>
    </form>
</section>

@endsection

@section('header')

<li><a href="">Blog</a></li>
<li><a href="">{{$user->name}}</a></li>
<li><a href="">Logout</a></li>

@endsection