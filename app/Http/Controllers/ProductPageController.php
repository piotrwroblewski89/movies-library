<?php

namespace App\Http\Controllers;
use App\product;
use Illuminate\Http\Request;

class ProductPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::inRandomOrder()->take(7)->get();

        return view('products')->with('products', $products);
    }

}
