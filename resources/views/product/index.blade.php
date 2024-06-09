<base href="/public">
@extends('main')
@section('content')
<div class="row">
    <div class="col">
        @if (session('status'))
        <div class="alert alert-success">{{session('status')}}
            <button class="close" data-dismiss="alert" aria-hidden="true">x</button>
        </div>
        @endif
        <h4>Product lists</h4>
       <div class="card">
            <div class="card-body">
                <div class="table table-strip ">
                    <table>
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Category Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Image</th>
                                <th>Controls</th>
                                <th>Date</th>

                            </tr>


                        </thead>
                        <tbody>
                            @forelse ($products as $p)


                            <tr>
                                <td>{{$p->name}}</td>
                                <td>{{\App\Models\Category::find($p->category_id)->title}}</td>
                                <td>{{$p->description}}</td>
                                <td>{{$p->price}}</td>
                                <td>{{$p->stock}}</td>
                                <td><img src="/productImg/{{$p->image}}" class="w-50 h-50 rounded">{{$p->image}}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{route('product.edit',$p->id)}}" >
                                            <button class="btn btn-warning btn-sm mr-2"><i class="feather feather-edit"></i></button></a>
                                            <form action="{{route('product.destroy',$p->id)}}" method="post" class="d-block">
                                                @csrf
                                                @method('delete')
                                                <button onclick="return confirm('Are you sure want to delete?')" class="btn btn-danger btn-sm">
                                                    <i class="feather feather-trash"></i></button>
                                                </form>
                                     </div>
                                </td>
                                <td>{{$p->created_at->format('d/m/Y')}}</td>

                            </tr>
                            @empty


                            @endforelse
                        </tbody>
                    </table>
                    {{$products->onEachside(1)->links()}}

                </div>
            </div>

       </div>






    </div>
</div>
@endsection

