
<nav class="navbar bg-black">
    <div class="container-fluid">
        <a class="navbar-brand text-white d-flex align-items-center" href="/">
            <img src="/img/laravel.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            Learning-Laravel
        </a>

        <ul class="d-flex align-items-center gap-3 mb-0 list-unstyled">
            <li><a href="/" class="text-white text-decoration-none {{ $title == 'Home' ? 'border-bottom border-white' : '' }}">Home</a></li>
            <li><a href="/about" class="text-white text-decoration-none {{ $title == 'About' ? 'border-bottom border-white' : '' }}">About</a></li>
        </ul>
    </div>
</nav>  
