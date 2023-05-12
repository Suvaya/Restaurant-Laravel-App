<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller{
    public function checkout( Request $request)
    {
        if( isset( $request->pid) )
        {
            $product =  Product::where('id', $request->pid)->first();
            $order = new Order;
            $order->product_id = $product->id;
            $order->invoice_no = $product->id . time();
            $order->total = $product->amount;
            $order->save();


            return view('checkout', compact('product', 'order'));
        }
    }
}
