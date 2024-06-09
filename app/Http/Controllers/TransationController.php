<?php

namespace App\Http\Controllers;

use App\Models\transation;
use App\Http\Requests\StoretransationRequest;
use App\Http\Requests\UpdatetransationRequest;
use App\Models\cart;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;

class TransationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
     * @param  \App\Http\Requests\StoretransationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretransationRequest $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\transation  $transation
     * @return \Illuminate\Http\Response
     */
    public function show(transation $transation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transation  $transation
     * @return \Illuminate\Http\Response
     */
    public function edit(transation $transation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetransationRequest  $request
     * @param  \App\Models\transation  $transation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetransationRequest $request, transation $transation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transation  $transation
     * @return \Illuminate\Http\Response
     */
    public function destroy(transation $transation)
    {
        //
    }

    public function transation(Request $request){
        $user=Auth::user();

        $userId=$user->id;
        $cdata=Cart::where('user_id','=',$userId)->get();
dd($cdata);
            $t= new transation();
           // $t->cart_id=$cdata->id;
            $t->user_id=$user->id;
           // $t->cart_id=$cdata->id;
          $t->amount=$request->amount;
            $t->save();
            $user->address="yangon";
            //$user->phone=$request->phone;
           // $user->save();
            return view('website.index')->with('status',"t add successfully");

}
}
