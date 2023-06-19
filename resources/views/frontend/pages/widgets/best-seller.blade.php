<!-- best seller product-area start -->
<div class="product-area product-area-2">
    <div class="fluid-container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Best Seller</h2>
                    <img src="{{ asset('assets/frontend') }}/images/section-title.png" alt="">
                </div>
            </div>
        </div>
        <ul class="row">
            @foreach( $bestSellers as $product)
                <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                    <div class="product-wrap">
                        <div class="product-img">
                            <span>Sale</span>
                            <img src="{{ asset('uploads/products') }}/{{ $product->product_image }}" alt="">
                            <div class="product-icon flex-style">
                                <ul>
                                    <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                           href="javascript:void();" data-product="{{ json_encode($product) }}"><i
                                                class="fa fa-eye"></i></a></li>
                                    <li><a href="wishlist.html"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="{{ route('product_detail.page', ['product_slug' => $product->slug]) }}"><i class="fa fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="{{ route('product_detail.page', ['product_slug' => $product->slug]) }}">{{ $product->product_name }}</a></h3>
                            <p class="pull-left">CFA {{ $product->product_price }}

                            </p>
                            <ul class="pull-right d-flex">
                                @for($i=0; $i < $product->product_rating; $i++)
                                    <li><i class="fa fa-star"></i></li>
                                @endfor
                            </ul>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
<!-- best seller product-area end -->
