@extends('UserViews/Layout.layout')
@section('title', 'Home')
@section('style')
<link rel="stylesheet" href="{{ asset('css/product-list.css') }}">
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<style>
   #amount:focus{
   outline: none
   }
   #amount{
   border:0;
   background-color:rgba(0, 0, 0, 0);
   border:none;
   font-weight:bold;
   width: 180px;
   }
   .ui-widget-header{
   background: var(--primary);
   border: 1px solid white;
   }
   .ui-widget-content .ui-state-default{
   background: var(--primary);
   border:1px solid white;
   border-radius: 50%;
   }
   .accordion-button:focus {
   z-index: 3;
   border-color:none ;
   outline: 0;
   -webkit-box-shadow: none;
   box-shadow: none;
   }
   .accordion-button:not(.collapsed) {
   color: var(--bs-accordion-active-color);
   background-color: rgba(var(--primary),0.9);
   }
   .filter-btn{
   display: none;
   }
   .close-filter{
   display: none;
   }
   @media (max-width: 767px) {
   .close-filter{
   display: block;
   }
   .result-filter {
   display: none;
   z-index: 10000;
   position: absolute;
   top:0;
   background: rgba(0, 0, 0, 0.351) }
   .filter-btn{
   display: block !important;
   }
   }
</style>
@endsection
@section('content')
<section class="checkout-wrapper section col-12 pt-4 pb-4 ">
   <div class="container">
      <div class="row justify-content-center">
         @include('UserViews.Layout.Includes.sidebar')
         <div class="col-md-9 ">

            @foreach($phones as $phone)
            <div class="row mb-3  p-4 shadow-lg bg-white rounded">

               <div class="col-md-3 mt-1"><img role="button" class="img-fluid img-responsive rounded product-image"
                  src="{{$phone->main_image}}">
               </div>
               <div class="col-md-6 mt-1">
                  <div class="d-flex align-items-center">
                     <h3><a href="{{route('phones.show',$id=$phone->id)}}">{{$phone->title}}</a></h3>
                     {{-- <small style="padding:2px;font-size:10px" class="border text-muted ms-2 rounded">Ad</small> --}}

                  </div>
                  <small class="text-muted font-italic "> {{ dateDiff($phone->created_at)}}</small>
                  <div class="d-flex flex-row">

                     <div class="ratings mr-2"><span><b>Seller Rattings : </b></span><i class="fa fa-star"></i><i
                        class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                     <span>
                     (6)</span>
                  </div>
                  <div class="mt-1 mb-1 spec-1">
                     <span class="badge ms-1 rounded-pill text-muted border">{{$phone->condition}}

                  </span>
                     <span class="badge ms-1 rounded-pill text-muted border">{{$phone->get_brand->name}}

                  </span>
                     <span class="badge ms-1 rounded-pill text-muted border">{{$phone->model}}

                  </span>
                  <span class="badge ms-1 rounded-pill text-muted border">{{$phone->storage_capacity}}GB ROM</span>
                  <span class="badge ms-1 rounded-pill text-muted border">{{$phone->ram}}GB RAM</span>

                  </div>
                  <p class="text-justify text-truncate para mb-0">{{$phone->description}}<br><br>
                  </p>
               </div>
               <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                  <div class="d-flex flex-row justify-content-center align-items-center">
                     <h4 class="mr-1">RS {{ $phone->formatted_price }}

                     </h4>
                     {{-- <span class="strike-text">$20.99</span> --}}
                  </div>
                  <div class="d-flex flex-column mt-4"><a  href="{{route('phones.show',$id=$phone->id)}}" class="btn btn-khas-primary btn-sm"
                     type="button">Details</a>
@if($phone->status==="Available")
                     <button class="btn btn-outline-khas-primary btn-sm mt-2 add-to-favorites"
    data-phone-id="{{ $phone->id }}"
    type="button">Add to favorites</button>
@else
<h4 class="text-danger m-auto mt-3">SOLD</h4>

    @endif


</div>
               </div>
            </div>
@endforeach
<!-- Render pagination links -->
{{ $phones->links('vendor.pagination.bootstrap-5') }}
         </div>

      </div>
   </div>
</section>
@endsection
@section('script')
<script>
   $(".filter-btn").click(function (){
      $('.result-filter').slideDown("slow");;
   })
   $(".close-filter").click(function (){
      $('.result-filter').slideUp("slow");;
   })
</script>
@endsection