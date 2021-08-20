<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Models\Order;

class OrderController extends Controller
{
//     public function submit(OrderRequest $req)
//     {
//         $order = new Order();
//         $order->name = $req->input('name');
//         $order->phone = $req->input('phone');
//         $order->address = $req->input('address');

//         $order->save();

//         return redirect()->route('order_place')->with('success', 'Заказ принят');
//     }
// }
