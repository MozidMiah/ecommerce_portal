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
    {{-- Your Order --}}
    <section>
        <div class="container my-5">
            <h3>Your Orders</h3>
            <div class="row mb-5">
                <div class="col-lg-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <h5>Product</h5>
                                </th>
                                <th scope="col">
                                    <h5>Price</h5>
                                </th>
                                <th scope="col">
                                    <h5>Quantity</h5>
                                </th>
                                <th scope="col">
                                    <h5>Total</h5>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/products/1.jpg') }}" alt="Product Image"
                                            class="img-fluid rounded-3" style="width: 70px;">
                                        <div class="p-3">
                                            <h5>Case shoe</h5>
                                        </div>
                                    </div>
                                </th>
                                <td>$49.99</td>
                                <td>01</td>
                                <td>$99.98</td>
                            </tr>
                            <tr>
                                <th>
                                    <div class="d-flex">
                                        <img src="{{ asset('assets/images/products/2.jpg') }}" alt="Product Image"
                                            class="img-fluid rounded-3" style="width: 70px;">
                                        <div class="p-3">
                                            <h5>Men's Watch</h5>
                                        </div>
                                    </div>
                                </th>
                                <td>$549.99</td>
                                <td>01</td>
                                <td>$1,099.98</td>
                            </tr>
                            <tr>
                                <th>
                                    <div class="d-flex">
                                        <img src="{{ asset('assets/images/products/3.jpg') }}" alt="Product Image"
                                            class="img-fluid rounded-3" style="width: 70px;">
                                        <div class="p-3">
                                            <h5>Hat</h5>
                                        </div>
                                    </div>
                                </th>
                                <td>$149.99</td>
                                <td>01</td>
                                <td>$299.98</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    {{-- Payment Method --}}
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1" checked>
                        <label class="form-check-label" for="radioDefault1">
                            UPI Payment
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2">
                        <label class="form-check-label" for="radioDefault2">
                            Cash on Delivery
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2">
                        <label class="form-check-label" for="radioDefault2">
                            Credit/Debit Card
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
