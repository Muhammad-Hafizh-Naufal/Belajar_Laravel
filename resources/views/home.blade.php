@extends('Layouts/main')

@section('content-home')
      <!-- Hero Section -->
      <section class="bg-danger text-dark text-center py-5">
        <div class="container">
            <h1 class="display-4">Welcome to MyLandingPage</h1>
            <p class="lead">Disini Gua belajar Laravel</p>
            <a href="#" class="btn btn-dark text-white btn-lg">Get Started</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <i class="bi bi-speedometer2 fs-1 text-primary"></i>
                            <h5 class="card-title mt-3">Fast Performance</h5>
                            <p class="card-text">Enjoy the blazing speed of our services.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <i class="bi bi-shield-lock fs-1 text-primary"></i>
                            <h5 class="card-title mt-3">Secure</h5>
                            <p class="card-text">Your security is our top priority.</p>
                        </div>
                    </div>
                  </div>
                <div class="col-md-4 mb-4"> 
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <i class="bi bi-heart fs-1 text-primary"></i>
                            <h5 class="card-title mt-3">User-Friendly</h5>
                            <p class="card-text">An interface that you’ll fall in love with.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
@endsection