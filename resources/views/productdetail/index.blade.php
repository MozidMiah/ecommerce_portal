@extends('layouts.partials.main')
@push('title')
    <title>Product Detail</title>
@endpush
@section('content')
    <div class="container-fluid bg-light p-5">
        <h1 class="text-center"><i class="fa-solid fa-layer-group"></i>Product Detail</h1>
    </div>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <img src="{{ asset('assets/images/products/1.jpg') }}" class="rounded img-thumbnail" alt="Product Image">
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Active</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
