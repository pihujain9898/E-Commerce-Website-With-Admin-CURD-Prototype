@extends('layouts.main')

@section('main-section')

<div class="products-container container">
    <div class="row">
        @foreach ($products as $product)
        <div class="card-container col-xl-3 col-lg-4 col-md-5 col-sm-6 ">
            <div class="card">
                <img class="card-img-top" alt="" src="{{$product->Image_Path}}">
                <div class="card-body">
                    <h5 class="card-title">{{$product->p_name}}</h5>
                    <p class="card-text">{{$product->description}}</p>
                    <h4 class="text-primary" style="display: inline-block;">₹{{intval($product->S_Price)}}/-</h4>
                    &nbsp;
                    <strike><span class="text-secondary">₹{{intval($product->C_Price)}}/-</span></strike>
                    @if ($product->Quantity==0)                        
                    <p class="text-danger">This product is out of stock</p>
                    @elseif ($product->Quantity<=10)                        
                    <p class="text-danger">Items Left: {{$product->Quantity}}</p>
                    @endif
                    <form method="post" action="{{url('/cart')}}" class="d-grid">
                        @csrf
                        <button type="submit" class="card-btn btn btn-dark @if ($product->Quantity == 0) disabled @endif" style="display: block;" title="Add" name="p_id" value="{{$product->p_id}}">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
   
{{-- <p style="color: black; background:greenyellow;"> {{$products}} </p> --}}

@foreach ($products as $product)    
<p style="color: black; background:greenyellow;">  </p>
<p style="color: black; background:greenyellow;">  </p>
<p style="color: black; background:greenyellow;">  </p>
<p style="color: black; background:greenyellow;">  </p>
<p style="color: black; background:greenyellow;">  </p>

@endforeach



@endsection