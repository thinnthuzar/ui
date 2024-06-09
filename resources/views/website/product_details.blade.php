<base href="/public">
<!-- link section strats -->
@include('website.style')
 <!-- end header section -->
 <!-- header section strats -->
 @include('website.header')
 <!-- end header section -->
  <!-- slider section -->
  @include('website.sidebar')
  <!-- end slider section -->
    @if (session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>

    @endif

    <div class="row ">
        <div class="col">
           <div class="card  p-3">

                <div class="d-flex justify-content-between">
                    <div class="col-md-4 ">
                        <div class=" text-center d-flex justify-content-between">
                            <h4 class="text-center ">{{$product->name}}</h4>
                            <a href="{{route('home')}}">
                            <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash-fill" viewBox="0 0 16 16">
                                <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7 7 0 0 0 2.79-.588M5.21 3.088A7 7 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474z"/>
                                <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12z"/>
                              </svg></a>
                        </div>
                        <div class="w-75">

                        <img src="/productImg/{{$product->image}}" class="w-100 rounded mx-auto d-block" alt="">
                        <form action="{{route('addTocart',$product->id)}}" class="" method="post">
                            @csrf

                          <input type="number" name="quantity" class="" min="0">
                         <button class="btn btn-success">Buy</button>
                        </form>
                        </div>

                    </div>
                    <div class="col-md-8 ">
                        <div class="  " style="  text-align: start;">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Voluptatum fuga expedita corporis error quam
                                consequatur earum, cupiditate repellat aliquam laudantium adipisci doloremque, ducimus non? Sint obcaecati dolores nam earum eum.
                            </p>
                               <p class="" > {{$product->description}}</p>

                            <span>{{$product->price}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- footer start -->
  @include('website.footer')
    <!--end footer start -->
