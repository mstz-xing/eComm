@extends('layouts.admin')
@section('content')
  <div class="card">
    <div class="card-header"></div>
     <h4>Category Page</h4>

    </div> 
    <hr> 

    <div class="card-body">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Image</th>
            <th>Action</th>
          </tr>

          <thead>
            <tbody>
              @foreach($category as $item)
              <tr>
                <td>{{ $item->id}}</td>
                <td>{{ $item->name}}</td>
                <td>{{ $item->description}}</td>
                <td>
                    <img src="{{asset('assets/uploads/category/'.$item->image)}}" alt="Category image">
                </td>
               
                <td>
                       <a href="{{url('edit-prod',$item->id)}}" class="btn btn-primary">Update</a>
                       <a href="{{url('delete-prod',$item->id)}}" class="btn btn-warning">Delete</a>
                 </td>
              </tr>  
              @endforeach
            </tbody>
      </table>
    </div>
</div> 

    @endsection