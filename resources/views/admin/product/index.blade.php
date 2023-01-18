@extends('layouts.admin')
@section('content')
  <div class="card">
    <div class="card-header"></div>
     <h4>Product Page</h4>

    </div> 
    <hr> 

    <div class="card-body">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Category</th>
            <th>Name</th>
           
           
            <th>Selling Price</th>
            <th>Image</th>
            <th>Action</th>
          </tr>

          <thead>
            <tbody>
              @foreach($products as $item)
              <tr>
                <td>{{ $item->id}}</td>
                <td>{{ $item->Category->name ?? 'None'}}</td>
                <td>{{ $item->name}}</td>
             
              
                <td>{{ $item->selling_price}}</td>

                <td>
                    <img src="{{asset('assets/uploads/product/'.$item->image)}}" alt="Product image">
                </td>
               
                <td>
                       <a href="{{url('edit-product',$item->id)}}" class="btn btn-primary btn-sm">Update</a>
                       <a href="{{url('delete-product',$item->id)}}" class="btn btn-warning btn-sm">Delete</a>
                 </td>
              </tr>  
              @endforeach
            </tbody>
      </table>
    </div>
</div> 

    @endsection