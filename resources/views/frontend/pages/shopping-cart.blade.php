@php use Illuminate\Support\Facades\Session; @endphp
@extends('frontend.layouts.master')

@section('frontend_title')
    Panier
@endsection

@section('frontend_content')
    @include('frontend.layouts.inc.breadcrumb', ['page_name' => 'Cart'])

    <!-- cart-page area start -->
    <div class="cart-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table-responsive cart-wrap">
                        <thead>
                        <tr>
                            <th class="images">Image</th>
                            <th class="product">Product</th>
                            <th class="ptice">Price</th>
                            <th class="quantity">Quantity</th>
                            <th class="total">Total</th>
                            <th class="remove">Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($carts as $item)
                            <tr>
                                <td class="images"><img
                                        src="{{ asset('uploads/products') }}/{{ $item->options->product_image }}"
                                        alt=""></td>
                                <td class="product"><a href="">{{ $item->name }}</a></td>
                                <td class="ptice"> {{ $item->price }} FCFA</td>
                                <td class="quantity cart-plus-minus">
                                    <input type="text" value="{{ $item->qty }}">
                                    <div class="dec qtybutton">-</div>
                                    <div class="inc qtybutton">+</div>
                                </td>
                                <td class="total"> {{ $item->price * $item->qty }} FCFA</td>
                                <td class="remove">
                                    <a href="{{ route('remove_from_cart', ['cart_id' => $item->rowId]) }}">
                                        <i class="fa fa-remove"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="row mt-60">
                        <div class="col-xl-4 col-lg-5 col-md-6 ">
                            <div class="cartcupon-wrap">
                                <ul class="d-flex">
                                    <li><a href="{{ route('shop.page') }}">Terminer votre achat</a></li>
                                </ul>
                                <h3>Cupon</h3>
                                <p>Enter un coupon si vous en avez</p>
                                <div class="cupon-wrap">
                                    <form action="{{ route('coupon.apply') }}" method="post">
                                        @csrf
                                        <input type="text" name="coupon_name" class="form-control"
                                               placeholder="Coupon Code">
                                        <button type="submit" class="btn btn-danger">Appliquer le coupon</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 offset-xl-5 col-lg-4 offset-lg-3 col-md-6">
                            <div class="cart-total text-right">
                                <h3>Total du panier</h3>
                                <p>
                                    @if(Session::has('coupon'))
                                        <a href="{{ route('coupon.remove', 'coupon_name') }}" class="p-1">
                                            <i class="fa fa-remove"></i>
                                        </a>
                                        <b> {{ Session::get('coupon')['name'] }}
                                        </b> Appliqué
                                    @endif
                                </p>
                                <ul>
                                    @if(Session::has('coupon'))
                                        <li><span class="pull-left"> Montant de réduction: </span> {{ Session::get('coupon')['discount_amount'] }} FCFA</li>
                                        <li><span class="pull-left"> Total: </span> {{ Session::get('coupon')['balance'] }} FCFA<del class="text-danger"> {{ Session::get('coupon')['cart_total'] }} FCFA</del></li>
                                    @else
                                        <li><span class="pull-left">Sous-Total: </span> {{ $total_price }} FCFA</li>
                                        <li><span class="pull-left"> Total: </span> {{ $total_price }} FCFA</li>
                                    @endif
                                </ul>
                                <a href="{{ route('checkout.page') }}">Passer à la caisse</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- cart-page area end -->

