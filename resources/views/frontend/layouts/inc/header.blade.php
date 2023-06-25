<!-- header-area start -->
<header class="header-area">
    <div class="header-top bg-2">
        <div class="fluid-container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <ul class="d-flex header-contact">
                        <li><i class="fa fa-phone"></i><a href="tel:01714-845488">+221 77-777-77-77</a></li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:info@devsajib.com">groupe5@groupeisi.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-12">
                    <ul class="d-flex account_login-area">
                        @auth
                        <li>
                            <a href="javascript:void(0);"><i class="fa fa-user"></i> {{ \Illuminate\Support\Facades\Auth::user()->name }} <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown_style">
                                <li><a href="{{ route('cart.page') }}">Panier</a></li>
                                <li><a href="{{ route('checkout.page') }}">Paiement</a></li>
                                <li><a href="{{ route('customer.logout') }}">Deconnexion</a></li>
                            </ul>
                        </li>
                        @endauth
                        @guest
                        <li><a href="{{ route('login.page') }}">Login</a></li>
                        <li><a href="{{ route('register.page') }}">Register</a></li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="fluid-container">
            <div class="row">
                <div class="col-lg-3 col-md-7 col-sm-6 col-6">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/frontend') }}/images/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 d-none d-lg-block">
                    <nav class="mainmenu">
                        <ul class="d-flex">
                            <li class="active"><a href="{{ route('home') }}">Accueil</a></li>
                            <li><a href="about.html">A propos</a></li>
                            <li>
                                <a href="javascript:void(0);">Restaurant <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown_style">
                                    <li><a href="{{ route('shop.page') }}">Menu</a></li>
                                    <li><a href="{{ route('cart.page') }}">Mes commandes</a></li>
                                    <li><a href="{{ route('checkout.page') }}">Paiement</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-4 col-lg-2 col-sm-5 col-4">
                    <ul class="search-cart-wrapper d-flex">
                        <li class="search-tigger"><a href="javascript:void(0);"><i class="flaticon-search"></i></a></li>
                        <li>
                            <a href="javascript:void(0);"><i class="flaticon-like"></i> <span>2</span></a>
                            <ul class="cart-wrap dropdown_style">
                                <li class="cart-items">
                                    <div class="cart-img">
                                        <img src="{{ asset('assets/frontend') }}/images/cart/1.jpg" alt="">
                                    </div>
                                    <div class="cart-content">
                                        <a href="{{ route('cart.page') }}">Pure Nature Product</a>
                                        <span>QTY : 1</span>
                                        <p>$35.00</p>
                                        <i class="fa fa-times"></i>
                                    </div>
                                </li>
                                <li>Subtotol: <span class="pull-right">$70.00</span></li>
                                <li>
                                    <button>Check Out</button>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><i class="flaticon-shop"></i> <span>3</span></a>
                            <ul class="cart-wrap dropdown_style">

                                @php
                                $carts = \Gloudemans\Shoppingcart\Facades\Cart::content();
                                $total_price = \Gloudemans\Shoppingcart\Facades\Cart::subtotal();
                                @endphp

                                @foreach($carts as $item)
                                <li class="cart-items">
                                    <div class="cart-img">
                                        <img src="{{ asset('uploads/products') }}/{{ $item->options->product_image }}" class="img-fluid rounded" style="width: 80px;" alt="">
                                    </div>
                                    <div class="cart-content">
                                        <a href="{{ route('cart.page') }}">{{ $item->name }}</a>
                                        <span>QTY : {{ $item->qty }}</span>
                                        <p>৳ {{ $item->qty * $item->price }}</p>
                                        <a href="{{ route('remove_from_cart', ['cart_id' => $item->rowId]) }}">
                                            <i class="fa fa-remove"></i>
                                        </a>
                                    </div>
                                </li>
                                @endforeach

                                <li>Subtotol: <span class="pull-right">৳ {{ $total_price }}</span></li>
                                <li>
                                    <form action="{{ route('checkout.page') }}" method="post">
                                        @csrf
                                        @method('get')
                                        <button type="submit">Check Out</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-md-1 col-sm-1 col-2 d-block d-lg-none">
                    <div class="responsive-menu-tigger">
                        <a href="javascript:void(0);">
                            <span class="first"></span>
                            <span class="second"></span>
                            <span class="third"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- responsive-menu area start -->
        <div class="responsive-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-block d-lg-none">
                        <ul class="metismenu">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li class="sidemenu-items">
                                <a class="has-arrow" aria-expanded="false" href="javascript:void(0);">Shop </a>
                                <ul aria-expanded="false">
                                    <li><a href="{{ route('shop.page') }}">Shop Page</a></li>
                                    <li><a href="{{ route('cart.page') }}">Shopping cart</a></li>
                                    <li><a href="{{ route('checkout.page') }}">Checkout</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                </ul>
                            </li>
                            <li class="sidemenu-items">
                                <a class="has-arrow" aria-expanded="false" href="javascript:void(0);">Pages </a>
                                <ul aria-expanded="false">
                                    <li><a href="about.html">About Page</a></li>
                                    <li><a href="{{ route('cart.page') }}">Shopping cart</a></li>
                                    <li><a href="{{ route('checkout.page') }}">Checkout</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                </ul>
                            </li>
                            <li class="sidemenu-items">
                                <a class="has-arrow" aria-expanded="false" href="javascript:void(0);">Blog</a>
                                <ul aria-expanded="false">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- responsive-menu area start -->
    </div>
</header>
<!-- header-area end -->