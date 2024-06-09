<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Order;
use App\Models\User;
use App\Models\Owner;
use App\Http\Requests\StoreOwnerRequest;
use App\Http\Requests\UpdateOwnerRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // In your controller
    $userRegistrations = User::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, COUNT(*) as count')
                             ->groupBy('year', 'month')
                             ->orderBy('year', 'asc')
                             ->orderBy('month', 'asc')
                             ->get();

    $data = [];
    foreach ($userRegistrations as $registration) {
        $yearMonth = Carbon::createFromDate($registration->year, $registration->month)->format('M Y');
        $data[$yearMonth] = $registration->count;
    }

    return view('chat')->with('data', $data);
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
     * @param  \App\Http\Requests\StoreOwnerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOwnerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function show(Owner $owner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function edit(Owner $owner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOwnerRequest  $request
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOwnerRequest $request, Owner $owner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owner $owner)
    {
        //
    }
    public function dashboad(){
        $utype=Auth::user()->role;
        if($utype=="admin"){
            $product=Product::all()->count();
            $user=User::all()->count();
            $orderc=Order::all()->count();
            $order=Order::all();
            $labels=[];
            $data=[];
            foreach($order as $o){
                $labels[]=$o['price'];
                $data[]=$o['quantity'];
            }



            return view('dashboad',compact('product','user','orderc','order'))->with('labels',[$labels])->with('data',[$data]);

        }
    }

}
