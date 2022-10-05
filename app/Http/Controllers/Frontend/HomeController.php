<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $categories = Category::where('is_active', 1)
            ->latest('id')
            ->limit(5)
            ->select('id', 'title', 'slug', 'category_image')
            ->get();

        $testimonials = Testimonial::where('is_active', 1)
            ->latest('id')
            ->limit(3)
            ->select(['id', 'client_name', 'client_designation', 'client_message', 'client_image'])
            ->get();

        return view('frontend.pages.home', compact('categories', 'testimonials'));
    }
}
