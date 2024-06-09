@extends('main')
@section('content')


<div class="row">
    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card mb-4 status-card" >
             <div class="card-body">
                  <div class="row align-items-center">
                       <div class="col-3">
                            <i class="feather-package h1 text-primary"></i>
                       </div>
                       <div class="col-9">
                            <p class="mb-1 h4 font-weight-bolder">
                            <span class="counter-up">44</span>
                            </p>
                            <p class="mb-0 text-black-50">Post List</p>
                       </div>
                  </div>
             </div>
        </div>
   </div>
    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card mb-4 status-card" >
             <div class="card-body">
                  <div class="row align-items-center">
                       <div class="col-3">
                            <i class="feather-package h1 text-primary"></i>
                       </div>
                       <div class="col-9">
                            <p class="mb-1 h4 font-weight-bolder">
                            <span class="counter-up">43</span>
                            </p>
                            <p class="mb-0 text-black-50">All viewers</p>
                       </div>
                  </div>
             </div>
        </div>
   </div>
    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card mb-4 status-card" >
             <div class="card-body">
                  <div class="row align-items-center">
                       <div class="col-3">
                            <i class="feather-package h1 text-primary"></i>
                       </div>
                       <div class="col-9">
                            <p class="mb-1 h4 font-weight-bolder">
                            <span class="counter-up">33</span>
                            </p>
                            <p class="mb-0 text-black-50">Categories</p>
                       </div>
                  </div>
             </div>
        </div>
   </div>
    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card mb-4 status-card">
             <div class="card-body">
                  <div class="row align-items-center">
                       <div class="col-3">
                            <i class="feather-package h1 text-primary"></i>
                       </div>
                       <div class="col-9">
                            <p class="mb-1 h4 font-weight-bolder">
                            <span class="counter-up">23</span>
                            </p>
                            <p class="mb-0 text-black-50">User</p>
                       </div>
                  </div>
             </div>
        </div>
   </div>
</div>

<div id="demo" class="carousel slide w-100 bg-dark m-4" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
 <li data-target="#demo" data-slide-to="0" class="active"></li>
 <li data-target="#demo" data-slide-to="1"></li>
 <li data-target="#demo" data-slide-to="2"></li>
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
 <div class="carousel-item active">
   <img class="w-75 h-25" src="img/1.jpg" alt="Los Angeles">
 </div>
 <div class="carousel-item">
   <img class="w-75 h-25" src="img/11.jpg" alt="Chicago">
 </div>
 <div class="carousel-item">
   <img class="w-75 h-25" src="img/IMG_20200303_184519.jpg" alt="New York">
 </div>
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
 <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next "  style="margin-right:200px;"href="#demo" data-slide="next">
 <span class="carousel-control-next-icon"></span>
</a>

</div>

    </div>
@endsection


