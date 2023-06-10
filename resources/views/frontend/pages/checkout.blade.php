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
                            <h3>Détails de facturation</h3>
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <label for="full-name">Nom Complet *</label>
                                    <input type="text" name="name"
                                           class="form-control @error('name') is-invalid @enderror">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 col-12">
                                    <label for="email">Adreese courrier *</label>
                                    <input type="email" name="email"
                                           class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 col-12">
                                    <label for="email">Numero Tel. *</label>
                                    <input type="tel" name="phone"
                                           class="form-control @error('phone') is-invalid @enderror">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 col-12">
                                    <label for="district">Régions *</label>
                                    <select name="district_id" id="district_id" class="form-select">
                                        <option value="1">Selectionner une région</option>
                                        @foreach($districts as $district)
                                            <option value="{{ $district->id }}">{{ $district->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <label for="district">Arrondissement *</label>
                                    <select name="upazila_id" id="upazila_id" class="form-select">
                                        <option value="1">Selectionner un arrondissement</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <label for="address">Votre adresse *</label>
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
                                    <label for="order-note">Notes de commande </label>
                                    <textarea name="order_note" placeholder="Notes concernant la commande ou la livraison"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="order-area">
                            <h3>Votre commande</h3>
                            <ul class="total-cost">
                                @foreach($carts as $item)
                                <li>{{ $item->name }} x {{ $item->qty }}<span class="pull-right"><strong> {{ $item->price * $item->qty }} FCFA</strong></span></li>
                                @endforeach
                                    @if(Session::has('coupon'))
                                        <li>Réduction <span class="pull-right"><strong> (-)  {{ Session::get('coupon')['discount_amount'] }} FCFA</strong></span></li>
                                        <li>Total<span class="pull-right"> {{ Session::get('coupon')['balance'] }} FCFA <del class="text-danger"> {{ Session::get('coupon')['cart_total'] }} FCFA</del></span></li>
                                    @else
                                        <li>Subtotal <span class="pull-right"><strong> {{ $total_price }} FCFA</strong></span></li>
                                        <li>Total<span class="pull-right"> {{ $total_price }} FCFA</span></li>
                                    @endif
                            </ul>
                            <ul class="payment-method">
                                <li>
                                    <input id="delivery" type="checkbox">
                                    <label for="delivery">Payer à la livraison</label>
                                </li>
                            </ul>
                            <button>Passer la commande</button>
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


