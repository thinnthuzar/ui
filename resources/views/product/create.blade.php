<base href="/public">
@extends('main')
@section('content')
<div class="row">
    <div class="col">


          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Product Create</li>
            </ol>
          </nav>


        <form action="{{route('product.store')}}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="form-group  d-flex">
                <label for="">Name</label>
                <input type="text" name="name" class="ml-3 form-control">
            </div>
            <div class="form-group  d-flex">
                <label for="">Description</label>
                <input type="text" name="description" class="ml-3 form-control">
            </div>
            <div class="form-group  d-flex">
                <label for="">Image</label>
                <input type="file" name="image" class="ml-3 form-control">
            </div>

            <div class="form-group  d-flex">
                <label for="">Stock</label>
                <input type="text" name="stock" class="ml-3 form-control">
            </div>
            <div class="form-group  d-flex">
                <label for="">Price</label>
                <input type="text" name="price" class="ml-3 form-control">
            </div>
            <div class="form-group  d-flex">
                <label for="">Select category</label>



                <select id="category" name="category" class="form-control">
                    @foreach (\App\Models\Category::all() as $c )
                     <option value="{{$c->id}}">{{$c->title}}</option>
                     @endforeach
                </select>

            </div>
            <div class="justify-content-end d-flex">
                <button class="btn btn-outline-primary btn-lg">New</button>
            </div>

        </form>
    </div>
</div>
@endsection

