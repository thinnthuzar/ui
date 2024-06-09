<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Http\Requests\StorecartRequest;
use App\Http\Requests\UpdatecartRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('website.products',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecartRequest $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(cart $cart)
    {
        //
    }
    public function showCart()
    {   $user=Auth::user();
        $cart = Cart::where('user_id','=',$user->id)->get();

        // Fetch all items in the cart for the authenticated user
       // $cart = Cart::where('user_id', auth()->id())->first();
      //  $cart=(object)collect($cart)->reject(function($item){
            // do something
       // })->all();
        return view('website.cart', ['cart' => $cart]);
        //dd($cart );
        // Pass the cart data to the view
       // return view('website.cart', compact('cart'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecartRequest  $request
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecartRequest $request, cart $cart)
    {
        if(Auth::id()){
            $user=Auth::user();

            $product=Product::find($id);
            dd($product);
            $cart=new cart;
            $cart->user_name=$user->name;
            $cart->product_title=$product->name;
            $cart->quantity=$request->quantity;
            $cart->save();
            return view('website.cart')->with('status', "cad is add");
        }
        else{
        return view('login');
        }

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(cart $cart)
    {
        //
    }
}
