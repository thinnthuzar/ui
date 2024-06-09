

<section class="client_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>New Arrivals</h2>
<div class="row">
    
 @foreach ($product as $p)
    <div class="col-md-3 m-3 card d-block">
        <h4 class="pt-2">{{$p->name}}</h4>
        <img src="productImg/{{$p->image}}" class="w-50 p-2" alt="">
    </div>
    @endforeach</div>
</div>
</section>