@extends('layouts.partials.main')
@push('title')
<title>Home Page</title>
@endpush
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/images/slider1.png') }}" class="d-block w-100" alt="slider1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/slider2.png') }}" class="d-block w-100" alt="slider2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/slider3.png') }}" class="d-block w-100" alt="slider3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- Product Section  --}}

    <section class="py-5">
        <div class="container">

            <div class="d-flex">
                <div class="flex-grow-1">
                    <h1>Top Deals</h1>
                </div>
                <div><a href="#" class="btn theme-orange-btn btn-sm text-light rounded-pill">View All</a></div>
            </div>
            <div class="row theme-product">
                <div class="col-lg-3">
                    <div class="card">
                        <a href="#">
                            <img src="{{ asset('assets/images/products/1.jpg') }}" class="card-img-top" alt="Product 1">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-center"><a href="#" class="text-decoration-none text-dark">Case shoe</a></h5>
                            <p class="card-text text-center">$49.99</p>
                            <div class="d-grid gap-2">
                                <a href="{{ url('cart-list/{slug}') }}" class="btn theme-green-btn btn-sm text-light">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card">
                        <a href="#">
                            <img src="{{ asset('assets/images/products/2.jpg') }}" class="card-img-top" alt="Product 1">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-center"><a href="#"
                                    class="text-decoration-none text-dark">Men's Watch</a></h5>
                            <p class="card-text text-center">$549.99</p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn theme-green-btn btn-sm text-light">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <a href="#">
                            <img src="{{ asset('assets/images/products/3.jpg') }}" class="card-img-top" alt="Product 1">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-center"><a href="#"
                                    class="text-decoration-none text-dark">Hat</a></h5>
                            <p class="card-text text-center">$149.99</p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn theme-green-btn btn-sm text-light">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <a href="#">
                            <img src="{{ asset('assets/images/products/4.jpg') }}" class="card-img-top" alt="Product 1">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-center"><a href="#"
                                    class="text-decoration-none text-dark">Wooden Chair</a></h5>
                            <p class="card-text text-center">$249.99</p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn theme-green-btn btn-sm text-light">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Best of Electronics --}}
    <section class="py-5">
        <div class="container">

            <div class="d-flex">
                <div class="flex-grow-1">
                    <h1>Best of Electronics</h1>
                </div>
                <div><a href="#" class="btn theme-orange-btn btn-sm text-light rounded-pill">View All</a></div>
            </div>
            <div class="row theme-product">
                <div class="col-lg-3">
                    <div class="card">
                        <a href="#">
                            <img src="{{ asset('assets/images/products/2.jpg') }}" class="card-img-top" alt="Product 1">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-center"><a href="#"
                                    class="text-decoration-none text-dark">Men's Watch</a></h5>
                            <p class="card-text text-center">$49.99</p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn theme-green-btn btn-sm text-light">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card">
                        <a href="#">
                            <img src="{{ asset('assets/images/products/7.jpg') }}" class="card-img-top" alt="Product 1">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-center"><a href="#"
                                    class="text-decoration-none text-dark">LED TV</a></h5>
                            <p class="card-text text-center">$549.99</p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn theme-green-btn btn-sm text-light">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <a href="#">
                            <img src="{{ asset('assets/images/products/8.jpg') }}" class="card-img-top" alt="Product 1">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-center"><a href="#"
                                    class="text-decoration-none text-dark">Watching Machine</a></h5>
                            <p class="card-text text-center">$149.99</p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn theme-green-btn btn-sm text-light">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <a href="#">
                            <img src="{{ asset('assets/images/products/5.jpg') }}" class="card-img-top" alt="Product 1">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-center"><a href="#"
                                    class="text-decoration-none text-dark">Digital Camera</a></h5>
                            <p class="card-text text-center">$249.99</p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn theme-green-btn btn-sm text-light">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Popular Categories --}}
    <section class="py-5">
        <div class="container">

            <div class="d-flex">
                <div class="flex-grow-1">
                    <h1>Popular Categories</h1>
                </div>
                <div><a href="#" class="btn theme-orange-btn btn-sm text-light rounded-pill">View All</a></div>
            </div>
            <div class="row theme-product">
                <div class="col-lg-3">
                    <div class="card">
                        <a href="#">
                            <img src="{{ asset('assets/images/products/9.jpg') }}" class="card-img-top" alt="Product 1">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-center"><a href="#"
                                    class="text-decoration-none text-dark">Ladies Bag</a></h5>
                            <p class="card-text text-center">$249.99</p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn theme-green-btn btn-sm text-light">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <a href="#">
                            <img src="{{ asset('assets/images/products/10.jpg') }}" class="card-img-top" alt="Product 1">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-center"><a href="#"
                                    class="text-decoration-none text-dark">Travel Bag</a></h5>
                            <p class="card-text text-center">$549.99</p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn theme-green-btn btn-sm text-light">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <a href="#">
                            <img src="{{ asset('assets/images/products/7.jpg') }}" class="card-img-top" alt="Product 1">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-center"><a href="#"
                                    class="text-decoration-none text-dark">LED TV</a></h5>
                            <p class="card-text text-center">$559.99</p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn theme-green-btn btn-sm text-light">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <a href="#">
                            <img src="{{ asset('assets/images/products/2.jpg') }}" class="card-img-top" alt="Product 1">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-center"><a href="#"
                                    class="text-decoration-none text-dark">Men's Watch</a></h5>
                            <p class="card-text text-center">$1149.99</p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn theme-green-btn btn-sm text-light">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Recently Viewed --}}
    <section class="py-5">
        <div class="container">

            <div class="d-flex">
                <div class="flex-grow-1">
                    <h1>Recently Viewed</h1>
                </div>
                <div><a href="#" class="btn theme-orange-btn btn-sm text-light rounded-pill">View All</a></div>
            </div>
            <div class="row theme-product">
                <div class="col-lg-3">
                    <div class="card">
                        <a href="#">
                            <img src="{{ asset('assets/images/products/5.jpg') }}" class="card-img-top" alt="Product 1">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-center"><a href="#"
                                    class="text-decoration-none text-dark">Wooden Chair</a></h5>
                            <p class="card-text text-center">$249.99</p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn theme-green-btn btn-sm text-light">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <a href="#">
                            <img src="{{ asset('assets/images/products/6.jpg') }}" class="card-img-top" alt="Product 1">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-center"><a href="#"
                                    class="text-decoration-none text-dark">Digital Camera</a></h5>
                            <p class="card-text text-center">$549.99</p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn theme-green-btn btn-sm text-light">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <a href="#">
                            <img src="{{ asset('assets/images/products/7.jpg') }}" class="card-img-top" alt="Product 1">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-center"><a href="#"
                                    class="text-decoration-none text-dark">LED TV</a></h5>
                            <p class="card-text text-center">$559.99</p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn theme-green-btn btn-sm text-light">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <a href="#">
                            <img src="{{ asset('assets/images/products/8.jpg') }}" class="card-img-top" alt="Product 1">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-center"><a href="#"
                                    class="text-decoration-none text-dark">Washing Machine</a></h5>
                            <p class="card-text text-center">$1149.99</p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn theme-green-btn btn-sm text-light">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
