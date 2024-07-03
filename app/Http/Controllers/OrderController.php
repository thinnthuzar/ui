<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\order;
use App\Http\Requests\StoreorderRequest;
use App\Http\Requests\UpdateorderRequest;
use App\Models\cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('website.index');
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
     * @param  \App\Http\Requests\StoreorderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreorderRequest $request)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateorderRequest  $request
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateorderRequest $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {
        //
    }
    // In your controller




public function ordersByWeek()
{
    // Get the start and end dates of the week
    $startDate = Carbon::now()->startOfWeek();
    $endDate = Carbon::now()->endOfWeek();

    // Query orders within the selected week
    $ordersByWeek = Order::selectRaw('DATE(created_at) as date, COUNT(*) as count')
                        ->whereBetween('created_at', [$startDate, $endDate])
                        ->groupBy('date')
                        ->orderBy('date', 'asc')
                        ->get();

    $data = [];
    foreach ($ordersByWeek as $order) {
        $date = Carbon::parse($order->date)->format('Y-m-d');
        $data[$date] = $order->count;
    }

    return view('totalo')->with('data', $data);


}

public function revenueByDay()
{
    $revenueByDay = Order::selectRaw('DATE(created_at) as date, SUM(total_price) as revenue')
                         ->groupBy('date')
                         ->orderBy('date', 'asc')
                         ->get();

    $data = [];
    foreach ($revenueByDay as $revenue) {
        $date = Carbon::parse($revenue->date)->format('Y-m-d');
        $data[$date] = $revenue->revenue;
    }

    return view('totalo')->with('data', $data);
}

}
