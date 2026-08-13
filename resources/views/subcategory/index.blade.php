@extends('layouts.partials.main')
@push('title')
<title>Sub-category Page</title>
@endpush
@section('content')
<div class="container-fluid bg-light p-5">
    <h1 class="text-center"><i class="fa-solid fa-list"></i>Sub-category</h1>

</div>
<section class="py-5">
        <div class="container">
            <div class="row theme-product">
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <a href="{{ url('category/electronics/tv/index') }}">
                            <img src="{{ asset('assets/images/products/7.jpg') }}" class="card-img-top" alt="Product 1">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-center"><a href="{{ url('category/electronics/tv/index') }}"
                                    class="text-decoration-none text-dark">MI LED TV</a></h5>
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
                                    class="text-decoration-none text-dark">Samsung LED TV</a></h5>
                            <p class="card-text text-center">$5449.99</p>
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
                                    class="text-decoration-none text-dark">Sony LED TV</a></h5>
                            <p class="card-text text-center">$8449.99</p>
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
                                    class="text-decoration-none text-dark">LG LED TV</a></h5>
                            <p class="card-text text-center">$3449.99</p>
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
