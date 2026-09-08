@extends('layouts.partials.main')
@push('title')
    <title>Checkout</title>
@endpush
@section('content')
    <div class="container-fluid bg-light p-2">
        <h1 class="text-center"><i class="fa-solid fa-cart-shopping"></i>Checkout</h1>
    </div>
    {{-- Billing Information --}}
    <section>
        <div class="container my-4">
            <h3>Billing Details</h3>
            <form>
                <div class="row g-3">
                    <div class="col-md-12">
                        <select class="form-select form-control" aria-label="Default select example">
                            <option selected>Select your country</option>
                            <option value="1">Bangladesh</option>
                            <option value="2">India</option>
                            <option value="3">Pakistan</option>
                            <option value="1">UK</option>
                            <option value="2">USA</option>
                            <option value="3">Cannada</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="First Name">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Last Name">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Address">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="City">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="State">
                    </div>

                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Zip Code">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Phone Number">
                    </div>

                    <div class="col-md-6">
                        <input type="email" class="form-control" placeholder="Enter your Email">
                    </div>
                    <div class="col-12">
                        <textarea class="form-control" rows="4" placeholder="Description"></textarea>
                    </div>
                    {{-- <div class="col-12">
                        <a class="btn theme-orange-btn text-light rounded-pill">Submit Review</a>
                    </div> --}}
                </div>
            </form>
        </div>
    </section>
@endsection
