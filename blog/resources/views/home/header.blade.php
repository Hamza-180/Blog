<div class="header_main">
    <div class="mobile_menu">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo_mobile"><a href="index.html"><img src="images/logo.png"></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container-fluid">
        <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
        <div class="menu_main">
            <ul>
                <li class="active"><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>

                @if (Route::has('login'))
                    @auth
                        <li>
                            <x-app-layout></x-app-layout>
                        </li>

                        <li><a href="{{ url('contact') }}">Contact Us</a></li>
                        <li><a href="{{ url('create_post') }}">Create Post</a></li>
                        <li><a href="/readme">List of Source</a></li>
                        <li><a href="/faq">FAQ</a></li>

                        @if(Auth::user()->usertype == 'admin')
                            <li><a href="{{ url('/home') }}" class="admin-button">Admin Dashboard</a></li>
                        @endif
                    @else
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        <li><a href="{{ url('contact') }}">Contact Us</a></li>
                        <li><a href="/readme">List of Source</a></li>
                        <li><a href="/faq">FAQ</a></li>
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</div>

<style>
    .admin-button {
        padding: 10px 20px;
        
        color: white;
        text-decoration: none;
        border-radius: 3px;
        margin-top: 20px;
    }
</style>
