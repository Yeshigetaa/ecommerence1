<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    //
    public function register()
    {
        return view('product.register');
    }
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->unit = $request->unit;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $is_successed = $product::save();
        if ($is_successed) {
            echo 'record saved successfully';
        } else {
            echo 'something went wrong please try again';
        }
    }
}
