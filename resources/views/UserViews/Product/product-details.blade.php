@if(empty($phone))
    <?php return redirect()->route('not_found'); ?>
@endif



@extends('UserViews/Layout.layout')
@section('title', ' ')
@section('style')
<style>
</style>
@endsection
@section('content')
<section class="checkout-wrapper section col-12 pt-4 pb-4 ">
   <div class="container">
      <div class="row shadow-lg py-3 rounded-3 justify-content-center">
         <div class="col-md-6">
            <div class="main-img border text-center col-12">
               <img width="100%"
                  src="{{$phone->main_image}}"
                  id="current" alt="#">
            </div>
            @if(!empty($phone->additional_images))
            <div class="images row border py-3 mt-4">

               @php
               $additionalImages = json_decode($phone->additional_images, true);
           @endphp

           @foreach($additionalImages as $image)
               <div class="col-3 text-center mb-3" role="button">
                   <img width="95%" height="100%" src="{{ $image }}" class="img select-img" alt="#">
               </div>
           @endforeach
         </div>
         @endif
         </div>
         <div class="col-md-6">
            <div class="product-info">
               <h1 class="title">I Phone 14 Pro</h1>
               <p class="category"> Posted By:<a href="{{url('profile')}}">Ali Khan</a></p>
               <h3 class="price">Price : <span>RS 205000</span></h3>
               <div class="col-lg-4 mb-5 col-md-4 col-12">
                  <div class="form-group quantity">
                     <label for="color">Quantity</label>
                     <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="bottom-content">
               <div class="row align-items-end">
                  <div class="col-md-4 text-center">
                     <button class="btn btn-outline-khas-primary" style="width: 100%;"><i class="bi bi-cart3"></i> Add to Cart</button>
                  </div>
                  <div class="col-md-4 text-center">
                     <button class="btn btn-outline-khas-primary"><i class="bi bi-arrow-left-right"></i> Add to Compare</button>
                  </div>
                  <div class="col-md-4 text-center">
                     <button class="btn btn-outline-khas-primary"><i class="bi bi-suit-heart"></i> Add to Wishlist</button>
                  </div>
                  <div class="col-12 text-center my-4">
                     <a href="{{url('/checkout')}}"> <button class="btn col-12 btn-khas-primary"><i class="bi bi-bag-fill"></i> Buy Now</button>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <h3 class="my-3 w-100 text-center">Description</h3>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae corrupti laudantium maiores at tenetur non, vel recusandae est ducimus? Adipisci iusto corrupti molestias totam ab tempora! Alias quasi enim, nam officiis amet, inventore quia molestiae aut error totam tempora. Est atque ex mollitia fuga in sed illo nesciunt saepe quia et, maxime placeat temporibus nulla pariatur accusantium hic eveniet impedit eum fugit quod ad. Sapiente repellendus quidem perferendis quas deleniti itaque quae exercitationem, ex id placeat. Labore iste illum sequi.</p>

<h3 class="my-3 w-100 text-center">
    Specifications
</h3>
<table class="table table-responsive table-striped">
    <tr>
        <th>Ram</th>
        <td>4 GB</td>
    </tr>
    <tr>
        <th>Storage</th>
        <td>64 GB</td>
    </tr>
    <tr>
        <th>Camera</th>
        <td>16 MP</td>
    </tr>
    <tr>
        <th>Operating System</th>
        <td>Android 10</td>
    </tr>
    <tr>
        <th>CPU</th>
        <td>Snapdragon 840</td>
    </tr>
</table>
<h3 class="my-3 w-100 text-center">
    Condition
</h3>
<table class="table table-responsive table-striped">
    <tr>
        <th>Touch</th>
        <td>Working</td>
    </tr>
    <tr>
        <th>Charging</th>
        <td>Working</td>
    </tr>
    <tr>
        <th>Headphone Jack</th>
        <td>Not Working</td>
    </tr>
    <tr>
        <th>Battery Health</th>
        <td>70%</td>
    </tr>
    <tr>
        <th>Volume Buttons</th>
        <td>Working</td>
    </tr>
</table>
   </div>
  </div>
</section>
@endsection
@section('script')
<script>
   $('.select-img').click(function(){
   var selected=$(this).attr("src");
   $('#current').attr("src",selected);
   });
</script>
@endsection