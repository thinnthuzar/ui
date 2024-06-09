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
    <h4>Product Lists</h4>
    <hr>

    <form action="{{route('product.update',$product->id)}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('put')

       <div class="form-group mb-02mr-3 ">
        <label class="mb-0" for="">Title</label>
        <input
        type="text"
        name="name"
        value="{{old('name',$product->name)}}"
        class="form-control"
        @error('name') is-invalid @enderror >
       </div>
       <div class="form-group  mb-2 mr-3">
        <label class="mb-0" for="">Select category</label>
        <select id="category" name="category" value="{{old('category',$product->category_id)}}" class="form-control">
            @foreach (\App\Models\Category::all() as $c )
             <option value="{{$c->id}}">{{$c->title}}</option>
             @endforeach
        </select>

    </div>

    <div class="form-group mb-2 mr-3">
        <label class="mb-0" for="">Image</label>
        <input type="file" name="image"
        value="{{old('image',$product->image)}}"
          class="form-control  @error('image') is-invalid @enderror ">
      </div>
      @if ($product->image)
      <div class="">
        <p class="text-black-50">Current Image</p>
        <img src="/productImg/{{$product->image}}"  class="w-25">
      </div>

      @endif

      <div class="form-group mb-2 mr-3">
        <label class="mb-0" for="">Description</label>
        <input type="text" name="description"
        value="{{old('description',$product->description)}}"
          class="form-control  @error('description') is-invalid @enderror ">
      </div>
      <div class="form-group mb-2 mr-3">
        <label class="mb-0" for="">Price</label>
        <input type="text" name="price"
        value="{{old('price',$product->price)}}"
          class="form-control  @error('price') is-invalid @enderror ">
      </div>
      <div class="form-group mb-2 mr-3">
        <label class="mb-0" for="">Stock</label>
        <input type="text" name="stock"
        value="{{old('stock',$product->stock)}}"
          class="form-control  @error('stock') is-invalid @enderror ">
      </div>

        @error('title')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
        @error('description')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
        <div class="form-group " style="margin-top:30px;">
            <button class="btn btn-outline-primary">Update</button>
        </div>

    </form>
   </div>
</div>
@endsection
