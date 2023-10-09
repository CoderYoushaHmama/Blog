<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="{{url('css/main.css')}}">
        <link rel="stylesheet" href="{{url('css/login.css')}}">
        <link rel="stylesheet" href="{{url('css/footer.css')}}">
        <link rel="stylesheet" href="{{url('css/header.css')}}">
        <link rel="stylesheet" href="{{url('css/register.css')}}">
        <link rel="stylesheet" href="{{url('css/visitor.css')}}">
        <link rel="stylesheet" href="{{url('css/blog.css')}}">
        <link rel="stylesheet" href="{{url('css/object_details.css')}}">
        <link rel="stylesheet" href="{{url('css/create_object.css')}}">
        <link rel="stylesheet" href="{{url('css/edit.css')}}">
        <title></title>
    </head>
    <body>
        @include('layouts.blog_layouts.header')

        <div class="content">
            @yield('content')
        </div>

        <div>
            @include('layouts.blog_layouts.footer')
        </div>
    </body>
</html>