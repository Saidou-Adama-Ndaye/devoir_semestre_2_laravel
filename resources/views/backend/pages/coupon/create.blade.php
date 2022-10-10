@extends('backend.layouts.master')

@section('title')
    Coupon Create
@endsection

@push('admin_style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
          integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
@endpush

@section('admin_content')
    <div class="row">
        <h1>Coupon Create Form</h1>
        <div class="col-12">
            <div class="d-flex justify-content-start">
                <a href="{{ route('coupon.index') }}" class="btn btn-primary">
                    <i class="fas fa-backward"></i>
                    Back to Coupons
                </a>
            </div>
        </div>

        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('coupon.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="coupon-name" class="form-label">Coupon Name</label>
                            <input type="text" name="coupon_name"
                                   class="form-control @error('coupon_name') is-invalid @enderror"
                                   placeholder="Enter coupon name">
                            @error('coupon_name')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="discount-amount" class="form-label">Discount Percentage</label>
                            <input type="number" min="0" name="discount_amount"
                                   class="form-control @error('discount_amount') is-invalid @enderror"
                                   placeholder="%">
                            @error('discount_amount')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="minimum-purchase_amount" class="form-label">Minimum Purchase Amount</label>
                            <input type="number" min="0" name="minimum_purchase_amount" placeholder="Enter the amount"
                                   class="form-control @error('minimum_purchase_amount') is-invalid @enderror">
                            @error('minimum_purchase_amount')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="validity-till" class="form-label">Expiry Date</label>
                            <input type="date" name="validity_till"
                                   class="form-control @error('validity_till') is-invalid @enderror">
                            @error('validity_till')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 form-check form-switch">
                            <input type="checkbox" name="is_active" class="form-check-input" role="switch"
                                   id="activeStatus" checked>
                            <label for="activeStatus" class="form-check-label">Active or inactive</label>
                            @error('is_active')
                            <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="mt-5">
                            <button type="submit" class="btn btn-primary">Store</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('admin_script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
            integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('#dropify').dropify();
    </script>
@endpush
