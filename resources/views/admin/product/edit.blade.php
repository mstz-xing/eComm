@extends('layouts.admin')
@section('content')
  <div class="card">
    <div class="card-header">
        <h4>Edit Products</h4>
    </div>
    <div class="card-body"></div>
     <form action="{{url('update-product/'.$products->id)}}" method="POST" enctype="multipart/form-data">
     @csrf 
     @method('PUT')
     <div class="row">
        <div class="col-md-12 mb-3">
            
            <select class='form-select'>
              <option value="">{{$products->category->name}}</option>
            
          
     </select>

        </div>
         <div class="col-md-6 mb-3">
            <label for="">Name</label>
            <input type="text" class="form-control" value="{{$products->name}}" name="name">
          </div>
                 
          <div class="col-md-6 mb-3">
            <label for="">Slug</label>
            <input type="text" class="form-control" value="{{$products->slug}}" name="slug">
          </div>

          <div class="col-md-12 mb-3">
            <label for="">Small Description</label>
            <textarea class="form-control"  name="small_description" rows="3">{{$products->small_description}}</textarea>
          </div>

          <div class="col-md-12  mb-3">
            <label for="">Description</label>
            <textarea class="form-control"  name="description" rows="3">{{$products->description}}</textarea>
          </div>

          <div class="col-md-6  mb-3">
            <label for="">Original Price</label>
            <input type="number" class="form-control" value="{{$products->original_price}}" name="original_price">
          </div>
          <div class="col-md-6  mb-3">
            <label for="">Sale Price</label>
            <input type="number" class="form-control" value="{{$products->selling_price}}" name="sale_price">
          </div>

          <div class="col-md-6  mb-3">
            <label for="">Quantity</label>
            <input type="number" class="form-control" value="{{$products->qty}}" name="qty">
          </div>

          <div class="col-md-6  mb-3">
            <label for="">Tax</label>
            <input type="number"  value="{{$products->tax}}" class="form-control" name="tax">
          </div>

          <div class="col-md-6  mb-3">
            <label for="">Status</label>
            <input type="checkbox"  name="status" {{$products->status== "1"? 'checked':''}}>
          </div>

          <div class="col-md-6  mb-3">
            <label for="">Trending</label>
            <input type="checkbox" name="trending" {{$products->status== "1"? 'checked':''}}>
          </div>

          <div class="col-md-12  mb-3">
            <label for="">Meta Title</label>
            <input type="text" value="{{$products->meta_title}}" class="form-control" name="meta-title" rows="3">
          </div>

          <div class="col-md-12  mb-3">
            <label for="">Meta Keywords</label>
            <textarea class="form-control" name="meta-keywords" rows="3">{{$products->meta_keywords}}</textarea>
          </div>

          <div class="col-md-12  mb-3">
            <label for="">Meta Description</label>
            <textarea class="form-control" name="meta-description" rows="3">{{$products->meta_description}}</textarea>
          </div>

          @if($products->image)
          <img src="{{asset('assets/uploads/product/'.$products->image)}}" alt="Product image">
         @endif
         <div class="col-md-12  mb-3">
           
            <input type="file"  class="form-control" name="image">
          </div>

         <div class="col-md-12  mb-3">
          <button type="submit" class="btn btn-primary">Submit</button>
         </div>



       </div>
       
     </form>
    </div>  
@endsection