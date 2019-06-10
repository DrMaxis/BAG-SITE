@extends('layouts.ui')
@section('xcss')
<style>

.bodybg {
  opacity:1;
}
  </style>
@endsection

@section('content')
<section class="bg-light infinite" id="blog" data-next-page="{{$galleryimages->nextPageUrl()}}">
        <div class="container">
          
          <div class="row" id="data">
@if(count($galleryimages) > 0 )
@foreach($galleryimages as $image)
            <div class="col-md-4 col-sm-6" >
              <a   href="{{route('gallery')}}">
                
                <img class="img-fluid" src="{{asset("storage/public/images/galleryimages/$image->source")}}" alt="{{$image->album}}">
              </a>
            </div>



            @endforeach
            @else <p> no posts found</p>
            @endif
              


            
          
    
      </section>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script  language="JavaScript" type="text/javascript" src="{{asset('js/jsdepends/galleryajax.js')}}"></script> 
      @endsection