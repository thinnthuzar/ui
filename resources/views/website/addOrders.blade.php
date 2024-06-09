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
<!-- order section -->
    <div class="container ">
        <div class="row">
            @if (session('status'))
            <div class="alert alert-success">{{session('status')}}
                <button class="close" data-dismiss="alert" aria-hidden="true">x</button>
            </div>
            @endif
            <div class="col col-md-3"></div>
            <div class="col col-md-6">
                <h3>User Form</h3>
                <div class="p-3" style="border: 2px solid rgb(192, 192, 247)">
                    <form action="{{route('showOrder')}}" method="post">
                        @csrf
                        <div class="form-group m-0 p-0 p-0">
                            <label for="">Address</label>
                            <input type="text" name="address" class="form-control">
                        </div>
                        <div class="form-group m-0 p-0 p-0">
                            <label for="">Phone</label>
                            <input type="number" name="phone" class="form-control">
                        </div>
                        <div class="form-group m-0 p-0 p-0">
                            <label for="">Amount</label>
                            <input type="number" name="amount" class="form-control">
                        </div>



                        <div class="form-group  d-flex">
                            <label for="">Select Payment</label>



                            <select id="category" name="category" class="form-control">
                                @foreach (\App\Models\Payment::all() as $c )
                                 <option value="{{$c->id}}">{{$c->payment_type}}</option>
                                 @endforeach
                            </select>

                        </div>
                        <div class="form-group m-0 p-0">

                            <input type="submit" value="Oktl">
                        </div>
                    </form>
                </div>

            </div>
            <div class="col col-md-3"></div>
        </div>
    </div>


 <!-- end order section -->


    <!-- footer start -->
    @include('website.footer')
    <!--end footer start -->
