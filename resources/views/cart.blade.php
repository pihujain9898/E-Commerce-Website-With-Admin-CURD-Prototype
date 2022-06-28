@extends('layouts.main')

@section('main-section')

<div style="color: black;">
<center>
@if(empty($array['products_array']))
    <div style="margin-top: 30vh">
        <h4 style="font-size: 3.6rem">Cart is empty</h4>
        <a class="fs-5" href="/shoping">Explore the Products</a>
    </div>
@else
  <div class="container">
      <div class="row">
        <div class="col-12 col-sm-8 col-lg-7" style="margin:1vh auto">
          <h3 class="text-muted fs-1" style="margin: 4vh 0 5vh; ">Shopping cart</h3> 
          <ul class="list-group">
            @foreach($array['products_array'] as $product)
              <li class="list-group-item d-flex justify-content-between align-items-center shadow-lg" style="margin: 1em 0">
                  <div style="text-align: left">
                      <p class="fs-4">{{$product->p_name}} </p>
                      <p class="fs-5">{{$product->description}} </p>
                      <h4 class="text-primary fs-4" style="display: inline-block;">₹{{intval($product->S_Price)}}/-</h4>
                    &nbsp;
                    <strike><span class="text-secondary">₹{{intval($product->C_Price)}}/-</span></strike>
                  </div>
                  <div class="image-parent">
                      <img src="{{$product->Image_Path}}" class="img-fluid" alt="quixote">
                  </div>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
@endif
</div>
</center>
@endsection