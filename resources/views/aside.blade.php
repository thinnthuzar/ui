
<div class="col-12 col-md-3 vh-100 " style="background-color:#FF0000 ">
    <div class="brand d-flex p-2 py-3 ">
     <a href="{{route('dashboad')}}">
            <h4 class="text-white"><i class="feather-home mr-2 "></i><b>Dashboard</b></h4></a>

    </div>



    <div class="ml-3 aside d-flex  justify-content-between">
    <a href="{{route('category.index')}}">
    <h5 class="text-white"><i class=" feather-list mr-3"></i>Cat list</h5></a>
    <i class="">
       5 </i>

    </div>

    <hr>

            <div class="ml-3 aside ">
                <a href="{{route('product.create')}}">
                    <h5 class="text-white"><i class=" feather-plus mr-3"></i>Product Add</h5>
                </a>
            </div>
    <hr>
        <div class="ml-3 aside d-flex  justify-content-between">
            <a href="{{route('product.index')}}">
            <h5 class="text-white"><i class=" feather-list mr-3"></i>Product List</h5></a>
            <i class="">
               5</i>

        </div>

        <hr>



        <div class="ml-3 aside d-flex  justify-content-between">
            <a href="{{route('showUser')}}">
            <h5 class="text-white"><i class=" feather-layers mr-3"></i>User </h5>
            </a>
            <i class="">3</i>
        </div>
        <hr>
        <div class=" p-3 ">
            <a href="{{route('showOrder')}}">
                <h5 class="text-white"><i class=" feather-plus mr-3"></i>Order</h5>
            </a>
        </div>
        <div class="bg-white btn d-flex px-5 ">

                <a class="item justify-content-between" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                  <h5 class="text-secondary">  
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left mr-5" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
                      </svg>
                    {{ __('Logout') }}</h5></a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>



        </div>

</div>









