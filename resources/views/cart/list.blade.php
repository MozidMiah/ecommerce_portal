@extends('layouts.partials.main')
@push('title')
    <title>Cart List</title>
@endpush
@section('content')
    <div class="container-fluid bg-light p-2">
        <h1 class="text-center"><i class="fa-solid fa-cart-shopping"></i>Cart-List</h1>
    </div>

    {{-- Cart Items --}}
    <section>
        <div class="container">
            <div class="row my-5">
                <div class="col-lg-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"><h4>Product</h4></th>
                                <th scope="col"><h4>Price</h4></th>
                                <th scope="col"><h4>Quantity</h4></th>
                                <th scope="col"><h4>Total</h4></th>
                                <th scope="col"><h4>Remove</h4></th>
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
                                <td>
                                    <div class="d-flex flex-row mb-3">
                                        {{-- <label for="quantity">Quantity:</label> --}}
                                        <input type="number" id="quantity" class="form-control d-inline-block"
                                            value="1" min="1" style="width: 60px;">
                                    </div>
                                </td>
                                <td>$99.98</td>
                                <td><button class="btn-close btn-sm" type="button" aria-label="Close"></button></td>
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
                                <td>
                                    <div class="d-flex flex-row mb-3">
                                        {{-- <label for="quantity">Quantity:</label> --}}
                                        <input type="number" id="quantity" class="form-control d-inline-block"
                                            value="1" min="1" style="width: 60px;">
                                    </div>
                                </td>
                                <td>$1,099.98</td>
                                <td><button class="btn-close btn-sm" type="button" aria-label="Close"></button></td>
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
                                <td>
                                    <div class="d-flex flex-row mb-3">
                                        {{-- <label for="quantity">Quantity:</label> --}}
                                        <input type="number" id="quantity" class="form-control d-inline-block"
                                            value="1" min="1" style="width: 60px;">
                                    </div>
                                </td>
                                <td>$299.98</td>
                                <td><button class="btn-close btn-sm" type="button" aria-label="Close"></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-5 ms-auto my-3">
                    <div>
                        <h4>Price Details</h4><hr>
                    </div>
                    <div class="d-flex">
                        <h5>Price (3 items)</h5>
                        <h5 class="ms-auto">$1,499.94</h5>
                    </div>
                    <div class="d-flex">
                        <h5>Delivery Charges</h5>
                        <h5 class="ms-auto">Free</h5>
                    </div>
                    <div class="d-flex">
                        <h5>Discount</h5>
                        <h5 class="ms-auto">-$100.00</h5>
                    </div>
                    <hr>
                    <div class="d-flex">
                        <h4>Total Amount</h4>
                        <h5 class="ms-auto">$1,399.94</h5>
                    </div>
                    <div class="d-grid gap-2 my-3">
                        <a href="{{ url('checkout') }}" class="btn theme-orange-btn btn-sm text-light">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
