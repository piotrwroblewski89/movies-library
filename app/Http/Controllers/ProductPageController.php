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
        $products = Product::inRandomOrder()->get();

        return view('products')->with('products', $products);
    }

    /**
     * Display exact resource
     * @param string $slug
     * @return \Iluluminate\Http\Respone
     * 
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        return view('product')->with('product',$product);
    }
}
