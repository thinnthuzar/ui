<?php

namespace App\Http\Controllers;
use App\Models\Payment;
use App\Models\cart;
use App\Models\order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function redirect(){
        $user=Auth::user()->role;
        if($user=="admin"){
            return view('index');
        }
        else{

            return view('website.index');
        }
    }
    public function index()
    {
        $product=Product::when(request('message'),function($q){
            $message=request("message");

            $q->where("name","like","%$message%");

        })->paginate(3);
        return view('website.index',compact('product'));
    }

    public function addTocart(Request $request,$id)
    {
        if(Auth::id()){
            $user=Auth::user();
            $product=Product::find($id);
            $pid_exist=cart::where('product_id','=',$id)->where('user_id','=',$user->id)->get('id')->first();
            if($pid_exist){
                $cart=cart::find($pid_exist)->first();
                $q=$cart->quantity;
                $cart->quantity=$q+$request->quantity;
                $cart->save();
            }
           // dd($product);
            $cart=new cart;
            $cart->user_id=$user->id;
            // $cart->user_name=$user->name;
           $cart->email=$user->email;
            $cart->product_id=$product->id;
            $cart->product_title=$product->name;
            $cart->price=$product->price;
            $cart->image=$product->image;
            $cart->quantity=$request->quantity;

           // return $request->quantity;
            $cart->save();
          return view('website.cart',compact('cart'))->with('status', "cart is add");
        }
        else{
        return view('login');
        }

    }
    // public function cart_view()
    // {

    //     $id=Auth::user()->id;
    //     $cart=Cart::where('user_id',auth()->id())->get()->object();

    //     return view('cart',compact('cart'));
    // }
    public function remove_cart($id)
    {
        $cart=cart::find($id);
        $cart->delete();
        return view('websiite.cart');
}
    public function details($id)
    {
        $product=Product::find($id);
        return view('website.product_details',compact('product'));
    }
    public function addPayment(){
        $payment =Payment::all();

      //  $payment->payment_type=$request->ptype;
        return view('website.addOrders',compact('payment'));

    }





    public function order(Request $request)
    {
        $user=Auth::user();

        $userId=$user->id;
        $data=Cart::where('user_id','=',$userId)->get();
        foreach($data as $data){
            $order= new Order;
            $order->user_name=$user->name;
            $order->user_id=$data->user_id;
            $order->product_id=$data->product_id;
          //  $order->product_title=$data->product_title;
           // $order->phone=$request->phone;
            // $request->phone;
           // $order->address=$request->address;
            // $request->address;
            $order->email=$data->email;
            $order->price=$data->price;
            $order->address="yangon";
            $order->phone="09674402207";
            $order->quantity=$data->quantity;

            $order->image=$data->image;
            $order->transaction_id="2";
            $order->save();

            $cart_id=$data->id;
            $cart=Cart::find($cart_id);

         $cart->delete();

        }

        return view('website.addOrders');

    }
    public function test(){
        return view('test');
    }
    public function first(){
        return view('sidebar');
    }

    public function contact(){
        return view('website.contact');
    }

}
