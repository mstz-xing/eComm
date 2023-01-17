@extends('layouts.admin')
@section('content')
  <div class="card">
    <div class="card-header">
        <h4>Add Products</h4>
    </div>
    <div class="card-body"></div>
     <form action="{{url('insert-product')}}" method="POST" enctype="multipart/form-data">
     @csrf 
     <div class="row">
        <div class="col-md-12 mb-3">
            
            <select class='form-select' name="cate_id">
              <option value="">Select a Category</option>
              @foreach($category as $item)
              <option value="{{$item->id}}">{{$item->name}}</option>
          
              @endforeach

            </select>

        </div>
         <div class="col-md-6 mb-3">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
                 
          <div class="col-md-6 mb-3">
            <label for="">Slug</label>
            <input type="text" class="form-control" name="slug">
          </div>

          <div class="col-md-12 mb-3">
            <label for="">Small Description</label>
            <input type="text" class="form-control" name="small_descript">
          </div>

          <div class="col-md-12  mb-3">
            <label for="">Description</label>
            <textarea class="form-control" name="description" rows="3"></textarea>
          </div>

          <div class="col-md-6  mb-3">
            <label for="">Original Price</label>
            <input type="number" class="form-control" name="original_price">
          </div>
          <div class="col-md-6  mb-3">
            <label for="">Sale Price</label>
            <input type="number" class="form-control" name="sale_price">
          </div>

          <div class="col-md-6  mb-3">
            <label for="">Quantity</label>
            <input type="number" class="form-control" name="qty">
          </div>

          <div class="col-md-6  mb-3">
            <label for="">Tax</label>
            <input type="number" class="form-control" name="tax">
          </div>

          <div class="col-md-6  mb-3">
            <label for="">Status</label>
            <input type="checkbox"  name="status">
          </div>

          <div class="col-md-6  mb-3">
            <label for="">Trending</label>
            <input type="checkbox"  name="trending">
          </div>

          <div class="col-md-12  mb-3">
            <label for="">Meta Title</label>
            <input type="text" class="form-control" name="meta-title" rows="3">
          </div>

          <div class="col-md-12  mb-3">
            <label for="">Meta Keywords</label>
            <textarea class="form-control" name="meta-keywords" rows="3"></textarea>
          </div>

          <div class="col-md-12  mb-3">
            <label for="">Meta Description</label>
            <textarea class="form-control" name="meta-description" rows="3"></textarea>
          </div>

          <div class="col-md-12  mb-3">
          <input type="file" name="image" class="form-control">
         </div>

         <div class="col-md-12  mb-3">
          <button type="submit" class="btn btn-primary">Submit</button>
         </div>



       </div>
       
     </form>
    </div>  
@endsection