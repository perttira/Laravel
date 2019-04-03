@extends('layouts/master')
@section('title')
  Shopping Cart
@endsection
@section('content')
           
  
@foreach($products->chunk(3) as $productChunk)
   <div class =row>
      @foreach($productChunk as $product)
         <div class="col-sm-6 col-md-4">
           <div class="thumbnail">
             <img src="{{ $product->imagePath }}" alt="iranian capet" class="image-responsive">
               <div class="caption">
                 <h3>{{ $product->title }}</h3>
                   <p class="description">{{ $product->description }}</p>
                   <div class="price pull-left">€{{ $product->price }}
                   </div> 
                    <!-- ['id' => $product->id] lisää 'id' tekstin tilalle $product->id: urlissa routen kautta Route::get('/add-to-cart/{id}' tiedostossa web.php ??? !-->
                     <a href="{{ route('product.addToCart', ['id' => $product->id])}}" class="btn btn-success float-right" role="button">Add to Cart</a>
                 </div>
               </div>
             </div>

@endforeach  
</div>         
@endforeach                    
                             
                                      

@endsection
