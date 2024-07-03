<base href="/public">
<!-- link section strats -->
@include('website.style')
 <!-- end header section -->
 <!-- header section strats -->
 @include('website.header')
 <!-- end header section -->

    <div class="container">
        <h4 class="text-center">Total</h4>
        <table class="table table-strip">
            <thead>
                <tr>
                    <th>Product </th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th class="w-25">Image</th>
                    <th>Date</th>
                    <th>Controls</th>
                </tr>
            </thead>
            <tbody>
<?php  $total=0;
//dd($cart);?>

                @forelse ($cart as $cat)
               @if (is_object($cat))
                    <tr>

                       <?php  $total=$total+$cat->product->price;?>



                        <td> {{$cat->product->name}}</td>
                        <td>{{ $cat->quantity }}</td>
                        <td>{{$cat->product->price }}</td>
                        <td><img src="/productImg/{{ $cat->product->image }}" class="w-25 rounded " alt=""></td>
                        <td>{{ $cat->created_at->format('d/m/Y') }}</td>
                        <td>
                            <form action="{{route('cart.destroy',$cat->id)}}" method="post" class="d-block">

                                @csrf
                                @method('delete')
                                <button onclick="return confirm('Are you sure want to delete?')" class="btn btn-danger btn-lg ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                                      </svg></button>
                                </form>

                        </td>
                    </tr>
                @else
                    <tr>
                        <td colspan="5">Invalid cart item.</td>
                    </tr>
                @endif
            @empty
                <tr>
                    <td colspan="5">Your cart is empty.</td>
                </tr>
            @endforelse



            </tbody>

        </table>
        <div class="">
            <span>Total amount is {{$total}}  </span>
            <a href="{{route('bill')}}">
                <h4><button class="bg-success">Order</button></h4>
            </a>
          </div>


    </div>
    </div>


<h4></h4>
  <!-- footer start -->
  @include('website.footer')
    <!--end footer start -->
