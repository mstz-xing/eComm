@extends('layouts.admin')
@section('content')
  <div class="card">
    <div class="card-header">
        <h4>Edit Category</h4>
    </div>
    <div class="card-body"></div>
     <form action="{{url('update-category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
     @csrf 
     @method('PUT')
     <div class="row">
         <div class="col-md-6 mb-3">
            <label for="">Name</label>
            <input type="text"  class="form-control" name="name" value="{{ $category->name }}">
          </div>
                 
          <div class="col-md-6 mb-3">
            <label for="">Slug</label>
            <input type="text" value="{{$category->slug}}" class="form-control" name="slug">
          </div>

          <div class="col-md-12  mb-3">
            <label for="">Description</label>
            <textarea class="form-control"  name="description" rows="3">{{$category->description}}</textarea>
          </div>

          <div class="col-md-6  mb-3">
            <label for="">Status</label>
            <input type="checkbox"  name="status" {{$category->status== "1"? 'checked':''}}>
          </div>

          <div class="col-md-6  mb-3">
            <label for="">Popular</label>
            <input type="checkbox"  name="popular" {{$category->popular == "1"?'checked':''}}>
          </div>

          <div class="col-md-12  mb-3">
            <label for="">Meta Title</label>
            <input type="text" value="{{$category->slug}}" class="form-control" name="meta-title" rows="3">
          </div>

          <div class="col-md-12  mb-3">
            <label for="">Meta Keywords</label>
            <textarea class="form-control" name="meta-keywords" rows="3">{{$category->slug}}</textarea>
          </div>

          <div class="col-md-12  mb-3">
            <label for="">Meta Description</label>
            <textarea class="form-control" name="meta-description" rows="3">{{$category->slug}}</textarea>
          </div>

         @if($category->image)
          <img src="{{asset('assets/uploads/category/'.$category->image)}}" alt="Category image">
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