@extends('layouts.front')
@section('title')
Checkout
@endsection

@section('content')
<div class="container mt-5">
  <form action="{{url('place-order')}}" method="POST">
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <h6>Basic Details</h6>
                    <hr>
                    <div class="row checkout-form">
                        <div class="col-md-6">
                            <label for="fname">First Name</label>
                            <input type="text" class="form-control" name='fname' placeholder="Enter First Name">
                        </div>
                        <div class="col-md-6">
                            <label for="lname">Last Name</label>
                            <input type="text" class="form-control"  name='lname' placeholder="Enter Last Name">
                        </div>
                        <div class="col-md-6" mt-3>
                            <label for="email">Email</label>
                            <input type="text" class="form-control"  name='email' placeholder="Enter Email">
                        </div>
                        <div class="col-md-6" mt-3>
                            <label for="phoneno">Phone Number</label>
                            <input type="text" class="form-control"  name='phoneno' placeholder="Enter Phone Number">
                        </div>
                        <div class="col-md-6" mt-3>
                            <label for="address1">Address 1</label>
                            <input type="text" class="form-control"  name='address1' placeholder="Enter Address 1">
                        </div>
                        <div class="col-md-6" mt-3>
                            <label for="address2">Address 2</label>
                            <input type="text" class="form-control" name='address2' placeholder="Enter Address 2">
                        </div>
                        <div class="col-md-6" mt-3>
                            <label for="city">City</label>
                            <input type="text" class="form-control" name='city'  placeholder="Enter City">
                        </div>
                        <div class="col-md-6" mt-3>
                            <label for="country">Country</label>
                            <input type="text" class="form-control" name='country'  placeholder="Enter Country">
                        </div>
                        <div class="col-md-6" mt-3>
                            <label for="state">State</label>
                            <input type="text" class="form-control" name='state'  placeholder="Enter State">
                        </div>
                        <div class="col-md-6" mt-3>
                            <label for="pincode">Pin Code</label>
                            <input type="text" class="form-control" name='pincode' placeholder="Enter Pin Code">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md 5">
            <div class="card">
                <div class="card-body">
                   <h6> Order Details</h6>
                   <hr>
                   <table class="table table-striped table-borded">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Qty</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        @foreach($cartitems as $item)
                        <tr>
                            <td>  {{$item->products->name}}</td>
                            <td>  {{$item->prod_qty}}</td>
                            <td>  {{$item->products->selling_price}}</td>
                      
                        </tr>
                        @endforeach
                       
                    </tbody>

                   </table>
                   <hr>
                   <button type="submit" class="btn btn-primary float-end">Place Order</button>
                  
                </div>
            </div>
        </div>
    </div>
</form>
</div>
@endsection