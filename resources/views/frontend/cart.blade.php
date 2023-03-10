@extends('layouts.front')
@section('title')
My Cart
@endsection
@section('content')
<div class="py-3 mb-4 shadow-sn bg-warning border-top">
  <div class="container">
      <h6 class="mb-0">
      <a href="{{url('/')}}">Home</a>  /
      <a href="{{url('cart')}}">
        Cart
      </a>
      </h6>
  </div>
</div> 

<div class="container my-5">
    <div class="card shadow product_data">
      <div class="card-body">
        @php $total=0; @endphp
        @foreach($cartitems as $item)
        <div class="row product_data">
            <div class="col-md-2">
                <img src="{{asset('assets/uploads/product/'.$item->products->image)}}" height="70px" width="70px" alt="Image here">
            </div>
            <div class="col-md-5">
                <h6>{{$item->products->name}}</h6>
            </div>
            <div class="col-md-3">
                <input type="hidden" class="prod_id" value="{{$item->prod_id}}">
                <label for="Quantity">Quantity</label>
                <div class="input-group text-center mb-3" style="width:130px;">
                 <button class="input-group-text changeQuantity decrement-btn" >-</button>
                 <input type="text" name="quantity" class="form-control qty-input text-center" value="{{$item->prod_qty}}">
                 <button class="input-group-text changeQuantity increment-btn" >+</button>

            </div>
            </div>
            <div class="col-md-2">
               <button class="btn btn-danger delete-cart-item">Remove</button>
            </div>
        </div>
     
        </div>
        @php $total += $item->products->selling_price * $item->prod_qty; @endphp
        @endforeach
        <div class="card-footer">
        <h6>Total Price : {{$total}} Kyats</h6>
        <a href="{{url('checkout')}}" class="btn btn-success btn-outline float-end">Proceed to Checkout</button>
    </div>
    </div>
    
</div>
</div>


 @endsection