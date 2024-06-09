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

                       <?php  $total=$total+$cat->price;?>
                        <td>{{ $cat->product_title }}</td>
                        <td>{{ $cat->quantity }}</td>
                        <td>5000</td>
                        <td><img src="/productImg/{{ $cat->image }}" class="w-25 rounded " alt=""></td>
                        <td>{{ $cat->created_at->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('remove_cart', $cat->id) }}" onclick="return confirm('Are you sure want to delete?')">
                                <h4 class="btn btn-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                      </svg>
                                </h4>
                            </a>
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
            <a href="{{route('order')}}">
                <h4><button class="bg-success">Order</button></h4>
            </a>
          </div>


    </div>
    </div>


<h4></h4>
  <!-- footer start -->
  @include('website.footer')
    <!--end footer start -->
