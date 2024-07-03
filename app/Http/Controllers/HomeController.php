<?php

namespace App\Http\Controllers;
use App\Models\Payment;
use App\Models\cart;
use App\Models\order;
use App\Models\User;
use App\Models\Product;
use App\Models\transation;
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
         $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function homes(){
        $product=Product::all();
        // when(request('message'),function($q){
        //     $message=request("message");

        //     $q->where("name","like","%$message%");

        // });
        //->paginate(3);
        return view('website.index',compact('product'));
    }

    public function index()
    {
        $user=Auth::user()->role;
        // dd($user);
         if($user=='admin'){
             return view('index');
         }
         else{
             return view('website.index');
        }
    }

    public function addTocart(Request $request,$id)
    {
        if(Auth::id()){
            $user=Auth::user();
            $product=Product::find($id);
            $pid_exist=cart::where('product_id','=',$id)->where('user_id','=',$user->id)->get('id')->first();
           //dd( $pid_exist);
            if($pid_exist){
                $cart=cart::find($pid_exist)->first();
                $q=$cart->quantity;
                $cart->quantity=$q+$request->quantity;
                $cart->save();

            }else{
           // dd($product);
            $cart=new cart;
            $cart->user_id=$user->id;
            // $cart->user_name=$user->name;
           $cart->email=$user->email;
            $cart->product_id=$product->id;
           // $cart->product_title=$product->name;
          //  $cart->price=$product->price;
           // $cart->image=$product->image;
            $cart->quantity=$request->quantity;

           // return $request->quantity;
            $cart->save();}

          return  view('website.cart',compact('cart'))->with('status', "cart is add");
        }
        else{
        return view('login');
        }

    }
    public function bill(Request $request){
        // $user=Auth::user();
        // $user_id=$user->id;
       // dd($user_id);
        // $user_name=$user->name;
        // $payment=Payment::all();
        // $total=0;
        // $cart=cart::where('user_id','=','$user_id')->first();
        //     $transation=new transation;
        //     $transation->user_id=$user_id;
        //     $transation->cart_id= '22';
        //     $transation->amount=$request->amount;
        //     $transation->payment=$request->payment;
        //     //dd( $transation->payment);
        //     $transation->save();

      //// }
      //dd( $transation);

        return view("website.addOrders");

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
        return view('website.cart');
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
        $user_id=$user->id;
       // dd($user_id);
        $user_name=$user->name;
        $payment=Payment::all();
        $total=0;
        $cart=cart::where('user_id','=','$user_id')->first();
            $transation=new transation;
            $transation->user_id=$user_id;
            $transation->amount=$request->amount;
            $transation->payment=$request->payment;
            //dd( $transation->payment);
            $transation->save();


        $data=Cart::where('user_id','=',$user_id)->get();
        foreach($data as $data){
            $order= new Order;
           // $order->user_name=$user->name;
            $order->user_id=$data->user_id;
            $order->product_id=$data->product_id;
          //  $order->product_title=$data->product_title;
           // $order->phone=$request->phone;
            // $request->phone;
           // $order->address=$request->address;
            // $request->address;
            $order->email=$order->user->email;
            $order->price=$order->product->price;
            $order->address=$order->user->address;
            $order->phone=$order->user->phone;
            $order->quantity=$data->quantity;
            $order->image=$order->product->image;
            $order->transaction_id='1';
            $order->save();


           $cart_id=$data->id;
           $cart=Cart::find($cart_id);

        $cart->delete();

        }

        return view('website.contact');

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
