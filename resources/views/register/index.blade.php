@extends('layouts.partials.main')
@push('title')
    <title>Register</title>
@endpush
@section('content')
    <div class="container-fluid bg-light p-2">
        <h1 class="text-center"><i class="fa-solid fa-user"></i>Register</h1>
    </div>
    <section>
        <div class="container my-4">
            {{-- <h3>Register</h3> --}}
            <form>
                <div class="row g-3">
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-6">
                                <div>
                                    <img src="{{ asset('assets/images/register.jpg') }}" class="img-fluid rounded-3">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <form>
                                        <div class="mb-3">
                                            <div class="form-text mb-2">Please Enter Your Number</div>
                                                <input type="text" class="form-control" placeholder="+880" name="number" required>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn theme-orange-btn text-light form-control form-control-lg">Submit</button>
                                        <div class="form-text mt-3">Already have an account? <a href="#">Login</a></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                </div>
            </form>
        </div>

    </section>
@endsection
