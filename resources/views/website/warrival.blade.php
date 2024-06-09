<!-- link section strats -->
@include('website.style')
 <!-- end header section -->
 <!-- header section strats -->
 @include('website.header')
 <!-- end header section -->


<div class="row">

    <div class="col-12">
        <h2>New Arrivals</h2>
        <div class="d-flex">
         @foreach ($product as $p)
         <div class="col-md-4 d">
             <h3>{{$p->name}}</h3>
             <img src="productImg/{{$p->image}}" class="w-50 " alt="">
         </div>
         @endforeach
        </div>
    </div>



</div>



  <!-- subscribe section -->
   @include('website.subscribe')
    <!--end subscribe section -->
  <!-- footer start -->
  @include('website.footer')
    <!--end footer start -->
