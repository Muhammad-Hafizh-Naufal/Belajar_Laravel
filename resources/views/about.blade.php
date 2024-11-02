@extends('Layouts/main')

@section('content-about')
    <!-- About Section -->
    <section class="container my-5">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1>About Us</h1>
                <p class="lead mt-3">
                    Welcome to Learning-Laravel! We are dedicated to helping developers learn and grow their skills with Laravel and other modern web technologies.
                </p>
            </div>
        </div>
    </section>

    <!-- Team or Services Section -->
    <section class="container my-5">
        <div class="row text-center">
            <h2>Our Team</h2>
            <p class="lead mb-5">Meet the people who make it all happen.</p>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="img/muka-rafif.png" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">John Doe</h5>
                        <p class="card-text">Laravel Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="img/muka-azmi.png" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Jane Smith</h5>
                        <p class="card-text">UI/UX Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="img/muka-abdul.png" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Michael Lee</h5>
                        <p class="card-text">Backend Engineer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection