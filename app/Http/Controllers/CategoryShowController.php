<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryShowController extends Controller
{
    public function index($slug, $categoryId)
    {
        $categoriesLimit = Category::where('parent_id', 0)->take(3)->get();
        $categories = Category::where('parent_id', 0)->get();
        $products = Product::where('category_id', $categoryId)->paginate(12);
        $currentCart = Session('cart') ? Session('cart') : null;
        $totalQuanty = $currentCart->totalQuanty ?? 0;
        return view('productShow.category.list', compact('categoriesLimit', 'products', 'categories', 'totalQuanty'));
    }
}
