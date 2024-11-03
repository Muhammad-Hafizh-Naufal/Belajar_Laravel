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
            <div class="row d-flex flex-wrap justify-content-center">
                @foreach ($technologies as $items)
                <div class="col-md-4 mb-4 d-flex">
                    <a href="/tech/{{ $items["slug"] }}" class="text-decoration-none w-100">
                        <div class="card shadow-sm h-100">
                            <div class="card-body text-center">
                                <i class="bi bi-speedometer2 fs-1 text-primary"></i>
                                <h5 class="card-title mt-3">{{ $items["title"] }}</h5>
                                <p class="card-text">{{ $items["description"] }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    

   
@endsection