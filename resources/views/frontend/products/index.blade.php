@extends('layouts.front')
@section('title')
{{$category->name}}
@endsection
@section('content')
<div class="py-3 mb-4 shadow-sn bg-warning border-top">
  <div class="container">
      <h6 class="mb-0">Collections /{{$category->name}}</h6>
  </div>
</div> 
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{$category->name}}</h2>
                
                    @foreach($products as $item)
                      <div class="col-md-3 mb-3">
                       
                        <div class="card">
                          <a href="{{url('category/'.$category->slug.'/'.$item->slug)}}">
                          <img src="{{asset('assets/uploads/product/'.$item->image)}}" alt="Product Image" style="height:400px">
                           <div class="card-body">
                               <h5>{{$item->name}}</h5>
                               <span class="float-start">{{$item->selling_price}}</span>
                               <span class="float-end"><s>{{$item->original_price}}</s></span>
                           </div>
                           </a>
                        </div>
                      
                       </div>
                     @endforeach
               
            </div>
        </div>
    </div>
</div>
 @endsection