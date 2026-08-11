@extends('layouts.partials.main')
@push('title')
<title>Subcategory Page</title>
@endpush
@section('content')
<div class="container-fluid bg-light p-5">
    <h1 class="text-center"><i class="fa-solid fa-list"></i>Subcategory</h1>

</div>

<section class="py-5">
        <div class="container">
            <div class="row theme-product">
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <a href="#">
                            <img src="{{ asset('assets/images/products/1.jpg') }}" class="card-img-top" alt="Product 1">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-center"><a href="#" class="text-decoration-none text-dark">Case shoe</a></h5>
                            <p class="card-text text-center">$49.99</p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn theme-green-btn btn-sm text-light">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mb-4">
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
                <div class="col-lg-3 mb-4">
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
                <div class="col-lg-3 mb-4">
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
                <div class="col-lg-3 mb-4">
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
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <a href="#">
                            <img src="{{ asset('assets/images/products/6.jpg') }}" class="card-img-top" alt="Product 1">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-center"><a href="#"
                                    class="text-decoration-none text-dark">Case shoe</a></h5>
                            <p class="card-text text-center">$249.99</p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn theme-green-btn btn-sm text-light">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <a href="#">
                            <img src="{{ asset('assets/images/products/7.jpg') }}" class="card-img-top" alt="Product 1">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-center"><a href="#"
                                    class="text-decoration-none text-dark">LED TV</a></h5>
                            <p class="card-text text-center">$249.99</p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn theme-green-btn btn-sm text-light">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <a href="#">
                            <img src="{{ asset('assets/images/products/8.jpg') }}" class="card-img-top" alt="Product 1">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-center"><a href="#"
                                    class="text-decoration-none text-dark">Washing Machine</a></h5>
                            <p class="card-text text-center">$249.99</p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn theme-green-btn btn-sm text-light">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
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
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <a href="#">
                            <img src="{{ asset('assets/images/products/10.jpg') }}" class="card-img-top" alt="Product 1">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-center"><a href="#"
                                    class="text-decoration-none text-dark">Travel Bag</a></h5>
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


@endsection
