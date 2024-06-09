<base href="/public">
@extends('main')
@section('content')
<div class="row">
    <div class="col ">

@if (session('status'))
        <div class="alert alert-success">{{session('status')}}
            <button class="close" data-dismiss="alert" aria-hidden="true">x</button></div>

@endif




        <h4>Update Category</h4>


        <form action="{{route('category.update',$category->id)}}" method="post">
            @csrf
            @method('put')
            <div class="d-flex">
           <div class="form-group mb-0 mr-3 ">
            <label for="">Title</label>
            <input
            type="text"
            name="title"
            value="{{old('title',$category->title)}}"
            class="form-control
            @error('title') is-invalid @enderror ">

           </div>
          <div class="form-group mb-0 mr-3">
            <label for="">Description</label>
            <input type="text" name="description"
            value="{{old('description',$category->description)}}"  class="form-control">
          </div>

            @error('title')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
            <div class="form-group " style="margin-top: 30px;">
                <button class="btn btn-outline-primary ">Update</button>
            </div>
        </div>
        </form>
@endsection
