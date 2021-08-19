<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $products = Product::paginate(20);
        return view('index', compact('products'));
    }

    public function master()
    {
        $products = Product::paginate(20);
        return view('master', compact('products'));
    }
}

// $products = DB::table('products')->orderBy('id')->cursorPaginate(15);
// return view('master', compact('products'));
