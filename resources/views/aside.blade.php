
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
        <div class=" px-3">
            <a href=" ">
                <h5 class="bg-white text-danger btn  py-2 px-4 text-center">
                    <i class="feather-lock mr-3"></i>Logout</h5>
            </a>
        </div>

</div>









