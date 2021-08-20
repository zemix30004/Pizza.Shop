<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;

use Illuminate\Http\Request;

class MainController extends Controller
{


    public function product($product = null)
    {
        return view('product', ['product' => $product]);
    }

    public function  cart()
    {

        return view('cart');
    }

    public function order_place()
    {
        return view('order_place');
    }

    public function order()
    {

        return view('order');
    }

    public function master()
    {
        $products = Product::paginate(20);
        return view('master', compact('products'));
    }
}

// $products = DB::table('products')->orderBy('id')->cursorPaginate(15);
// return view('master', compact('products'));
