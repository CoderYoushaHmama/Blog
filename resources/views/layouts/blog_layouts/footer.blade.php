<footer>
    <div class="list">
        <div class="container">
            <div class="list-title">Pages</div>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="{{route('blog')}}">Blog</a></li>
                <li><a href="{{route('login')}}">Login</a></li>
                <li><a href="{{route('register')}}">Register</a></li>
            </ul>
        </div>
        <div class="container">
            <div class="list-title">Latest Posts</div>
            <ul>
                <li><a href="">Who we are</a></li>
                <li><a href="">The Second last post</a></li>
                <li><a href="">Your Success with us</a></li>
                @yield('footer')
            </ul>
        </div>
    </div>
</footer>