@extends('layouts.partials.main')
@push('title')
    <title>Checkout</title>
@endpush
@section('content')
    <div class="container-fluid bg-light p-2">
        <h1 class="text-center"><i class="fa-solid fa-cart-shopping"></i>Checkout</h1>
    </div>
    <section>
        <div class="col-lg-12 mt-5 bg-light p-4 table-bordered rounded">
            <h3>Add Your Review</h3>
            <form>
                <div class="form-text mb-3">Rate this product*
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <div class="row g-3">
                    <div class="col-md-6">
                        <input type="text" class="form-control form-control-lg" placeholder="Enter your Name">
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control form-control-lg" placeholder="Enter your Email">
                    </div>
                    <div class="col-12">
                        <textarea class="form-control form-control-lg" rows="4" placeholder="Write your review"></textarea>
                    </div>
                    <div class="col-12">
                        <a class="btn theme-orange-btn text-light rounded-pill">Submit Review</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
