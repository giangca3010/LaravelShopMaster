<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->get();
        $categories = Category::where('parent_id', 0)->get();
        $products = Product::latest()->take(6)->get();
        $productRecomment = Product::latest('views_count', 'desc')->take(6)->get();
        $categoriesLimit = Category::where('parent_id', 0)->take(3)->get();
        $products = DB::table('products')->get();
        $currentCart = Session('cart') ? Session('cart') : null;
        $totalQuanty = $currentCart->totalQuanty ?? 0;
        return view('home.home', compact('sliders', 'categories', 'products', 'productRecomment', 'categoriesLimit', 'totalQuanty'));

    }
}
