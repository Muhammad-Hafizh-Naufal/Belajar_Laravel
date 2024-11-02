<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar bg-black">
        <div class="container-fluid">
            <a class="navbar-brand text-white d-flex align-items-center" href="#">
                <img src="/img/laravel.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Learning-Laravel
            </a>
    
            <ul class="d-flex align-items-center gap-3 mb-0 list-unstyled">
                <li><a href="/" class="text-white text-decoration-none">Home</a></li>
                <li><a href="/about" class="text-white text-decoration-none">About</a></li>
            </ul>
        </div>
    </nav>


    {{-- content dari file home --}}
<div class="container">
    @yield('content-home')
</div>

{{-- content dari file about --}}
<div class="container">
    @yield('content-about')
</div>


 <!-- Footer -->
    <footer class="bg-light py-4">
        <div class="container text-center">
            <p class="mb-0">© 2024 MyLandingPage. All rights reserved.</p>
            <p>Follow us on 
                <a href="#" class="text-decoration-none">Twitter</a>, 
                <a href="#" class="text-decoration-none">Facebook</a>, and 
                <a href="#" class="text-decoration-none">Instagram</a>.
            </p>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>