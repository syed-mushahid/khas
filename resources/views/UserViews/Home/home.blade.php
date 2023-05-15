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
            <div class="d-flex col-12 justify-content-between mx-0 mb-3">
               <div class="col-sm-5 mx-0">

            <label>Sort by Date</label>

            <select id="sort-date" class="form-control">
               <option value="" disabled selected>Sort by date...</option>
               <option value="newest">Newest</option>
               <option value="oldest">Oldest</option>
           </select>
          </div>  <div class="col-sm-5 mx-0">

<label>Sort by price</label>
           <select id="sort-price" class="form-control">
               <option value="" selected disabled>Sort by price...</option>
               <option value="highest">Highest first</option>
               <option value="lowest">Lowest first</option>
           </select>
            </div>

            </div>
           <div id="loading-spinner"   style="display: none;">

            <div class="d-flex justify-content-center align-items-center flex-wrap mt-5">
            <div class="battery">
                <div class="liquid"></div>
              </div>
              </div>
              <div>
                  <br>
              <p class="w-100 text-center">Just a moment, we're tuning up the perfect devices...</p>
            </div>
     </div>
     <div id="no-result" style="display:none">

   <h3 class="text-center my-5">Oops! We couldn't find any devices matching your search.</h3>

</div>
           <div id="phone-list">

            @include('UserViews.Home.phonelist', ['phones' => $phones])
         </div>
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