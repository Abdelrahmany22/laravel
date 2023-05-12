<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
 public function listProducts(){
    $products =Product::all();

    return view ('backend.product.list',compact('products'));
 }
}
