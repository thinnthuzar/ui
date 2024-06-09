<!-- link section strats -->
@include('website.style')
 <!-- end header section -->
 <!-- header section strats -->
 @include('website.header')
 <!-- end header section -->

<section class="product_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
             Our <span>products</span>
          </h2>
       </div>
       <div class="row">
        @forelse ($product as $p)
        <div class="col-sm-6 col-md-4 col-lg-4">

            <div class="box">
                <div class="d-flex justify-content-end">
                    <h2>

                    <a href="{{route('details',$p->id)}}" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                          </svg></a>


                        </h2>
                        </div>

               <div class="img-box">
                  <img src="/productImg/{{$p->image}}" class="w-50 rounded" alt="">
               </div>
               <div class="detail-box">
                  <h5>
                {{$p->name}}
                  </h5>
                  <h6>
                     {{$p->price}}
                  </h6>
               </div>
            </div>
         </div>
        @empty

        @endforelse
     





       </div>
       <div class="btn-box">
          <a href="">
          View All products
          </a>
       </div>
    </div>
 </section>
  <!-- product section -->
   <!-- subscribe section -->
   @include('website.subscribe')
    <!--end subscribe section -->
  <!-- footer start -->
  @include('website.footer')
    <!--end footer start -->

