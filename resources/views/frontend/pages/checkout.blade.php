@extends('frontend.layouts.master')

@section('frontend_title')
    Checkout Page
@endsection

@push('frontend_style')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
@endpush

@section('frontend_content')
    @include('frontend.layouts.inc.breadcrumb', ['page_name' => 'Checkout'])
    <!-- Checkout Page Area -->
    <div class="checkout-area ptb-100">
        <div class="container">
            <form action="{{ route('placeorder') }}" method="post">
                <div class="row">
                    @csrf
                    <div class="col-lg-8">
                        <div class="checkout-form form-style">
                            <h3>Billing Details</h3>
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <label for="full-name">Full Name *</label>
                                    <input type="text" name="name"
                                           class="form-control @error('name') is-invalid @enderror">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 col-12">
                                    <label for="email">Email Address *</label>
                                    <input type="email" name="email"
                                           class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 col-12">
                                    <label for="email">Phone No. *</label>
                                    <input type="tel" name="phone"
                                           class="form-control @error('phone') is-invalid @enderror">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 col-12">
                                    <label for="district">District *</label>
                                    <select name="district_id" id="district_id" class="form-select">
                                        <option value="1">Select a district</option>
                                        @foreach($districts as $district)
                                            <option value="{{ $district->id }}">{{ $district->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <label for="district">Upazila *</label>
                                    <select name="upazila_id" id="upazila_id" class="form-select">
                                        <option value="1">Select a upazila</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <label for="address">Your Address *</label>
                                    <input type="text" name="address"
                                           class="form-control @error('address') is-invalid @enderror"
                                           placeholder="Enter your address">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="order-note">Order Notes </label>
                                    <textarea name="order_note" placeholder="Notes about your Order or Delivery"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="order-area">
                            <h3>Your Order</h3>
                            <ul class="total-cost">
                                @foreach($carts as $item)
                                <li>{{ $item->name }} x {{ $item->qty }}<span class="pull-right"><strong>৳ {{ $item->price * $item->qty }}</strong></span></li>
                                @endforeach
                                    @if(Session::has('coupon'))
                                        <li>Discount <span class="pull-right"><strong> (-) ৳ {{ Session::get('coupon')['discount_amount'] }}</strong></span></li>
                                        <li>Total<span class="pull-right">৳ {{ Session::get('coupon')['balance'] }} <del class="text-danger">৳ {{ Session::get('coupon')['cart_total'] }}</del></span></li>
                                    @else
                                        <li>Subtotal <span class="pull-right"><strong>৳ {{ $total_price }}</strong></span></li>
                                        <li>Total<span class="pull-right">৳ {{ $total_price }}</span></li>
                                    @endif
                            </ul>
                            <ul class="payment-method">
                                <li>
                                    <input id="delivery" type="checkbox">
                                    <label for="delivery">Cash on Delivery</label>
                                </li>
                            </ul>
                            <button>Place Order</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Checkout Page Area -->
@endsection

@push('frontend_script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        // District wise Upazilla Change
        $(document).ready(function() {
            $('').select2();
            $('#district_id').on('change', function() {
                var district_id = $(this).val();
                if (district_id) {
                    $.ajax({
                        url: "{{ url('/upzilla/ajax') }}/" + district_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            console.log(data)
                            var d = $('#upazila_id').empty();
                            $.each(data, function(key, value) {
                                $('#upazila_id').append('<option value="' + value.id + '">' + value.name + '</option>');
                            });
                        },
                    });
                }
            });
        });
    </script>
@endpush


