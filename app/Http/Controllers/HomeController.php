<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->get();
        $categories = Category::where('parent_id', 0)->get();
        $products = Product::latest()->take(6)->get();
        $productRecomment = Product::latest('views_count', 'desc')->take(6)->get();
        $categoriesLimit = Category::where('parent_id', 0)->take(3)->get();

        return view('home.home', compact('sliders', 'categories', 'products', 'productRecomment', 'categoriesLimit'));

    }
}
