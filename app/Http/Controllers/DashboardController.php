<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $total_earnings = Order::sum('total');
        $total_orders = Order::count();
        $total_categories = Category::count();
        $total_products = Product::count();
        $total_customers = User::where('role_id', 2)->count();
        $orders = Order::with(['billing', 'orderDetails'])->latest('id')->paginate(15);

        $order_on_2020 = Order::whereBetween('created_at', ['2020-01-01', '2020-12-31'])->count();
        $order_on_2021 = Order::whereBetween('created_at', ['2021-01-01', '2021-12-31'])->count();
        $order_on_2022 = Order::whereBetween('created_at', ['2022-01-01', '2022-12-31'])->count();
        $order_on_2023 = Order::whereBetween('created_at', ['2023-01-01', '2023-12-31'])->count();
        $order_yearwise = array($order_on_2020, $order_on_2021, $order_on_2022, $order_on_2023);

        return view('backend.pages.dashboard', compact(
            'total_earnings',
            'total_orders',
            'total_categories',
            'total_products',
            'total_customers',
            'orders',
            'order_yearwise',
        ));
    }
}
