@extends('layouts.front')
@section('title')
Welcome to Radana
@endsection
@section('content')

@include('layouts.inc.slider')
 
<div class="py-5">
    <div class="container">
        <div class="row" style="height:100px">
        <h2>Trending Products</h2>
       
                    @foreach($featured_products as $item)
                  
                       <div class="col-md-3 mb-3">
                      
                        <div class="card" style="height:600px" >
                         
                          <img src="{{asset('assets/uploads/product/'.$item->image)}}" style="height:350px" alt="Product Image">
                           <div class="card-body">
                               <h5>{{$item->name}}</h5>
                               <span class="float-start">{{$item->selling_price}}</span>
                               <span class="float-end"><s>{{$item->original_price}}</s></span>
                                   <p>

                                    {{$item->description}}
                                   </p>
                         
                         
                        </div>
                     </div>
                  </div>
                     @endforeach
        
       </div> 
</div>
</div> 
   

<div class="py-5" style="margin-top: 60em;">
    <div class="container">
        <div class="row" >
        <h2>Trending Products</h2>
       
        @foreach($trending_category as $item)
                  
                       <div class="col-md-3 mb-3">
                       <a href="{{url('view-category/'.$item->slug)}}">
                        <div class="card" style="height:400px" >
                      
                         <img src="{{asset('assets/uploads/category/'.$item->image)}}" style="height:350px" alt="Category Image">
                           <div class="card-body">
                               <h5>{{$item->name}}</h5>
                               <p>
                                {{$item->description}}
                               </p>
                         
                         
                             
                        </div>
                        
                     </div>
</a>
                  </div>
                     @endforeach
        
       </div> 
</div>
</div> 



<!-- <div class="py-5"  style="margin-top: 60em;">
    <div class="container">
        <div class="row" style="height:100px">
        <h2>Trending Products</h2>
       
        @foreach($trending_category as $item)
                  
                       <div class="col-md-3">
                       <a href="{{url('view-category/'.$item->slug)}}">
                      
                        <div class="card" style="height:600px" >
                         
                        <img src="{{asset('assets/uploads/category/'.$item->image)}}" style="height:350px" alt="Category Image">
                           <div class="card-body">
                           <h5>{{$item->name}}</h5>
                               
                               <p>
                                {{$item->description}}
                               </p>
                         
                               </div>
                        </div>
                     </div>
                     @endforeach
          </div>
    </div>
</div> -->

 @endsection
 
 @section('scripts')
   <script>
 $(document).ready(function(){
    $('.featured-carousel').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:1000,
        margin:10,
        dots:false,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })
});

    </script>
 @endsection