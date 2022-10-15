<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderStoreRequest;
use App\Models\District;
use App\Models\Upazila;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkoutPage()
    {
        $carts = Cart::content();
        $total_price = Cart::subtotal();
        $districts = District::select('id', 'name', 'bn_name')->get();
        return view('frontend.pages.checkout', compact('carts', 'total_price', 'districts'));
    }

    public function loadUpazillaAjax($district_id)
    {
        $upazilas = Upazila::where('district_id', $district_id)->select('id', 'name')->get();
        return response()->json($upazilas, 200);
    }

    public function placeOrder(OrderStoreRequest $request)
    {
        dd($request->all());
    }
}
