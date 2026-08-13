@extends('layouts.partials.main')
@push('title')
    <title>Product Detail</title>
@endpush
@section('content')
    <div class="container-fluid bg-light p-2">
        <h1 class="text-center"><i class="fa-solid fa-layer-group"></i>Product Details</h1>
    </div>
    <section class="my-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <img src="{{ asset('assets/images/products/1.jpg') }}" class="rounded img-fluid" alt="Product Image">
                </div>
                <div class="col-lg-8">
                    <div>
                        <h2>Cade's shoes</h2>
                        <h5 class="text-muted">$49.99</h5>
                        <div>
                            <div class="d-flex flex-row mb-3">
                                <div>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="p-1 mx-2">
                                    <h6>(20 Reviews)</h6>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc ut
                            laoreet
                            tincidunt.</p>
                        <div class="mt-3">
                            <label for="size">Size:</label>
                            <select id="size" class="form-select w-auto d-inline-block rounded-pill">
                                <option value="">Select Size</option>
                                <option value="small">Small</option>
                                <option value="medium">Medium</option>
                                <option value="large">Large</option>
                            </select>
                        </div>
                        <div class="mt-3">
                            <label for="color">Color:</label>
                            <select id="color" class="form-select w-auto d-inline-block rounded-pill">
                                <option value="">Select Color</option>
                                <option value="red">Red</option>
                                <option value="blue">Blue</option>
                                <option value="green">Green</option>
                            </select>
                        </div>
                        <div class="mt-3">
                            <label for="quantity">Quantity:</label>
                            <input type="number" id="quantity" class="form-control w-auto d-inline-block" value="1"
                                min="1">
                        </div>
                        <div class="mt-3">
                            <button class="btn theme-green-btn text-light rounded-pill me-1">Add to Cart</button>
                            {{-- <button class="btn btn-outline-secondary">Add to Wishlist</button> --}}
                            <button class="btn theme-orange-btn text-light rounded-pill">Buy Now</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <h3>Product Description</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc ut laoreet tincidunt,
                        nunc nisl aliquam nunc, eget aliquam nisl nunc vel nisl. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Sed euismod, nunc ut laoreet tincidunt, nunc nisl aliquam nunc, eget aliquam
                        nisl nunc vel nisl.
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc ut laoreet tincidunt,
                        nunc nisl aliquam nunc, eget aliquam nisl nunc vel nisl. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Sed euismod, nunc ut laoreet tincidunt, nunc nisl aliquam nunc, eget aliquam
                        nisl nunc vel nisl.
                    </p>
                </div>
                <div class="col-lg-9 mt-4">
                    <h3>Product Specifications</h3>
                    <table class="table table-bordered rounded">
                        <tbody>
                            <tr>
                                <th scope="row">Material</th>
                                <td>Leather</td>
                            </tr>
                            <tr>
                                <th scope="row">Color</th>
                                <td>Black</td>
                            </tr>
                            <tr>
                                <th scope="row">Size</th>
                                <td>Available in Small, Medium, Large</td>
                            </tr>
                            <tr>
                                <th scope="row">Weight</th>
                                <td>1.2 kg</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{-- Related Products --}}
                <section class="py-5">
                    <div class="container">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <h1>Related Products</h1>
                            </div>
                            <div><a href="#" class="btn theme-orange-btn btn-sm text-light rounded-pill">View All</a></div>
                        </div>
                        <div class="row theme-product">
                            <div class="col-lg-3">
                                <div class="card">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/products/5.jpg') }}" class="card-img-top"
                                            alt="Product 1">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><a href="#"
                                                class="text-decoration-none text-dark">Wooden Chair</a></h5>
                                        <p class="card-text text-center">$249.99</p>
                                        <div class="d-grid gap-2">
                                            <a href="#" class="btn theme-green-btn btn-sm text-light">Add to
                                                Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/products/6.jpg') }}" class="card-img-top"
                                            alt="Product 1">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><a href="#"
                                                class="text-decoration-none text-dark">Digital Camera</a></h5>
                                        <p class="card-text text-center">$549.99</p>
                                        <div class="d-grid gap-2">
                                            <a href="#" class="btn theme-green-btn btn-sm text-light">Add to
                                                Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/products/7.jpg') }}" class="card-img-top"
                                            alt="Product 1">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><a href="#"
                                                class="text-decoration-none text-dark">LED TV</a></h5>
                                        <p class="card-text text-center">$559.99</p>
                                        <div class="d-grid gap-2">
                                            <a href="#" class="btn theme-green-btn btn-sm text-light">Add to
                                                Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/products/8.jpg') }}" class="card-img-top"
                                            alt="Product 1">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><a href="#"
                                                class="text-decoration-none text-dark">Washing Machine</a></h5>
                                        <p class="card-text text-center">$1149.99</p>
                                        <div class="d-grid gap-2">
                                            <a href="#" class="btn theme-green-btn btn-sm text-light">Add to
                                                Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <hr>
            <div class="row">
                <!-- Customer Reviews -->
                <div class="col-lg-12 mt-5">
                    <h3>Customer Reviews</h3>
                    <div class="row g-3">
                        <!-- Review 1 -->
                        <div class="col-md-6">
                            <div class="border rounded p-2 d-flex align-items-center" style="height: 90px;">
                                <img src="https://i.pravatar.cc/50?img=12" class="rounded-circle me-2" width="45"
                                    height="45" alt="John Doe">
                                <div>
                                    <h6 class="mb-0">John Doe</h6>
                                    <div class="small">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <small>Great product! Highly recommend.</small>
                                </div>
                            </div>
                        </div>
                        <!-- Review 2 -->
                        <div class="col-md-6">
                            <div class="border rounded p-2 d-flex align-items-center" style="height: 90px;">
                                <img src="https://i.pravatar.cc/50?img=47" class="rounded-circle me-2" width="45"
                                    height="45" alt="Jane Smith">
                                <div>
                                    <h6 class="mb-0">Jane Smith</h6>
                                    <div class="small">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <small>Good quality, but a bit expensive.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add Your Review -->

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
            <div class="mt-5">
                <h5>Frequently Asked Questions</h5>
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeadingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                                What is the return policy?
                            </button>
                        </h2>
                        <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadingOne"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                You can return the product within 30 days of purchase for a full refund.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeadingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                                How long does shipping take?
                            </button>
                        </h2>
                        <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Shipping typically takes 5-7 business days, depending on your location.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <h5>Share This Product</h5>
                <div>
                    <a href="#" class="btn btn-outline-primary me-2"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="btn btn-outline-info me-2"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="btn btn-outline-danger me-2"><i class="fab fa-pinterest"></i></a>
                    <a href="#" class="btn btn-outline-success"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
    </section>
@endsection
