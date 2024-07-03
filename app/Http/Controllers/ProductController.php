<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    $products = Product::all();//->paginate(3);
        return view('product.index',compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $product = new Product();
//$category=Category::all();
       $product->name= $request->name;
       $product->category_id= $request->category;
       $product->description = $request->description;

       $product->price= $request->price;
       $product->stock = $request->stock;
       $image=$request->image;
       $imageName=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('productImg',$imageName);
        $product->image=$imageName;
       $product->save();

       // return $request;
        return redirect()->route('product.index')->with('status',$product->title. " added successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product = Product::all();//->paginate(3);

        return view('website.index',compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {   $category =new Category();
        $product->name= $request->name;
        $product->category_id= $request->category;
       // $product->category_id= $category->title;
        $product->description = $request->description;
        $product->price= $request->price;
        $product->stock = $request->stock;

        $image=$request->image;
        if ($image) {
            $imageName=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('productImg',$imageName);
            $product->image=$imageName;
        } else {
            $product->image=$product->image;
        }


       // $product->image=$request->image;
        $product->update();
        // return $request;
         return redirect()->route('product.index')->with('status',$product->name. " added successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $productName=$product->name;
        $product->delete();
        return redirect()->route('product.index')->with('status',$productName . " deleted successfully" );
    }
    public function webProduct()
    {    $products = Product::all();//->paginate(3);

        return view('website.index',compact('products'));

    }
    public function pshow()
    {    $product = Product::all();
        return view('website.products',compact('product'));

    }
    public function parrivals()
    {
         // $product = Product::take(5)->get();
        $product = Product::latest('id')->get();
        return view('website.arrival',compact('product'));

    }
}
