<base href="/public">
@extends('main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h4>All Orders</h4>
            <table class="table table-strip">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Product Title</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Image</th>
                        <th>Date</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($order as $o)
                    <tr>
                        <td>{{$o->id}}</td>
                        <td>{{$o->user_name}}</td>
                        <td>{{$o->email}}</td>
                        <td>{{$o->phone}}</td>
                        <td>{{$o->product_title}}</td>
                        <td>{{$o->price}}</td>
                        <td>{{$o->quantity}}</td>
                        <td><img src="productImg/{{$o->image}}" class="w-50" alt=""></td>

                        <td>{{$o->created_at->format('d/m/Y')}}</td>
                    </tr>
                    @empty
                        <p>There is no order</p>
                    @endforelse

                </tbody>
            </table>
            {{$order->onEachside(1)->links()}}
        </div>
    </div>
</div>


@endsection

