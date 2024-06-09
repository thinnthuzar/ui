@extends('main')
@section('content')
<div class="row">
    <div class="col ">

@if (session('status'))
        <div class="alert alert-success">{{session('status')}}
            <button class="close" data-dismiss="alert" aria-hidden="true">x</button></div>

@endif




        <h4>Create Payment</h4>


        <form action="{{route('payment.store')}}" method="post">
            @csrf
            <div class="d-flex">
           <div class="form-group mb-0 mr-3 ">
            <label for="">Payment</label>
            <input
            type="text"
            name="ptype"
            value="{{old('ptype')}}"
            class="form-control
            @error('ptype') is-invalid @enderror ">

           </div>


            @error('ptype')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
            <div class="form-group " style="margin-top: 30px;">
                <button class="btn btn-outline-primary ">New</button>
            </div>
        </div>
        </form>

    <hr>



    <h4>Payment types</h4>
  <div class="card">
    <div class="card-body">
        <table class="table table-strip">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Payment Type</th>

                    <th>Controls</th>
                    <th>Time</th>

                </tr>
            </thead>
            <tbody>
                @forelse ($payment as $c)
                <tr>
                    <td>{{$c->id}}</td>
                    
                    <td>{{$c->payment_type}}</td>

                    <td>
                        <div class="d-flex">
                            <a href="{{route('payment.edit',$c->id)}}" >
                                <button class="btn btn-warning btn-sm mr-2"><i class="feather feather-edit"></i></button></a>
                                <form action="{{route('payment.destroy',$c->id)}}" method="post" class="d-block">
                                    @csrf
                                    @method('delete')
                                    <button onclick="return confirm('Are you sure want to delete?')" class="btn btn-danger btn-sm">
                                        <i class="feather feather-trash"></i></button>
                                    </form>
                         </div>
                    </td>
                    <td>{{$c->created_at->format('d/m/Y')}}</td>
                </tr>
                @empty

                @endforelse

            </tbody>
        </table>
    </div>
  </div>
</div>
</div>
@endsection
