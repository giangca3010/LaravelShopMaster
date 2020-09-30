<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function addCart(Request $req, $id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        if ($product != null) {
            $oldCart = Session('cart') ? Session('cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($product, $id);
//            $req->session()->put('cart', $newCart);
//            $totalQuanty = $newCart->totalQuanty ?? 0;
        }
        return view('cart', compact('newCart'));
    }
}
