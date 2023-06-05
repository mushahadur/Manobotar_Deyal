<?php

namespace App\Http\Controllers\FrontSite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        return view('FrontSite.pages.product.productIndex', ['products' => Product::all()]);
    }

}
