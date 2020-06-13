<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Cart;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;


class ProductPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->category) {
           $product = Product::with('categories')->whereHas('categories', function($query){
               $query->where('slug', request()->category);
           })->get();
           $categories = Category::all();
        } else{

        $product = Product::get();
        $categories = Category::get();
    }
        return view('products')->with(
           [ 'products'=> $product,
            'categories'=> $categories,]
        );
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

    public function getAddToCart(Request $request,$id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
       // dd($request->session()->get('cart'));
        return redirect()->route('product-page');

    }
    public function getCart()
    {
        if (!Session::has('cart')){
            return view('cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('cart', ['products' => $cart ->items, 'totalPrice'=> $cart->totalPrice ] );
    }

    public function getReduce($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduce($id);

       Session::put('cart', $cart);

        return redirect()->route('product.shoppintCart');
    }

    public function getRemove($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart -> remove($id);

        if (count($cart->items) >0){
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->route('product.shoppintCart');
        }
}
    
    


