@extends('UserViews/Layout.layout')
@section('title', 'Home')
@section('style')
<link rel="stylesheet" href="{{ asset('css/product-list.css') }}">
@endsection
@section('content')
<section class="checkout-wrapper section col-12 pt-4 pb-4 ">
   <div class="container">
      <div class="row justify-content-center">
         <div class="row mb-3 p-2 bg-white border rounded">
            <div class="col-md-3 mt-1"><img role="button" class="img-fluid img-responsive rounded product-image"
               src="https://imageio.forbes.com/specials-images/imageserve/6321aca5df0a9fa9eee9950b/0x0.jpg?format=jpg&crop=1456,970,x63,y104,safe&width=1200">
            </div>
            <div class="col-md-6 mt-1">
               <div class="d-flex align-items-center">
                  <h3><a href="#">I Phone 14 Pro</a></h3>
                  <small style="padding:2px;font-size:10px" class="border text-muted ms-2 rounded">Ad</small>
               </div>
               <div class="d-flex flex-row">
                  <div class="ratings mr-2"><span><b>Seller Rattings : </b></span><i class="fa fa-star"></i><i
                     class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                  <span>
                  (6)</span>
               </div>
               <div class="mt-1 mb-1 spec-1"><span class="badge ms-1 rounded-pill text-muted border">4GB Ram</span><span class="badge ms-1 rounded-pill text-muted border">128GB ROM</span>
                  <span class="badge ms-1 rounded-pill text-muted border">16MP Camera</span>
                  <span class="badge ms-1 rounded-pill text-muted border">4000 mAh</span><span class="badge ms-1 rounded-pill text-muted border">120 FPS</span>
               </div>
               <p class="text-justify text-truncate para mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus voluptates quis mollitia et iure, quia ex distinctio nobis labore blanditiis officiis fuga, beatae vitae dicta ducimus itaque excepturi sit corrupti..<br><br>
               </p>
            </div>
            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
               <div class="d-flex flex-row justify-content-center align-items-center">
                  <h4 class="mr-1">RS.80,000</h4>
                  {{-- <span class="strike-text">$20.99</span> --}}
               </div>
               <div class="d-flex flex-column mt-4"><button class="btn btn-khas-primary btn-sm"
                  type="button">Details</button><button class="btn btn-outline-khas-primary btn-sm mt-2"
                  type="button">Add to favorites</button></div>
            </div>
         </div>
         <div class="row mb-3 p-2 bg-white border rounded">
            <div class="col-md-3 mt-1"><img role="button" class="img-fluid img-responsive rounded product-image"
               src="https://imageio.forbes.com/specials-images/imageserve/6321aca5df0a9fa9eee9950b/0x0.jpg?format=jpg&crop=1456,970,x63,y104,safe&width=1200">
            </div>
            <div class="col-md-6 mt-1">
               <div class="d-flex align-items-center">
                  <h3><a href="#">I Phone 14 Pro</a></h3>
                  <small style="padding:2px;font-size:10px" class="border text-muted ms-2 rounded">Ad</small>
               </div>
               <div class="d-flex flex-row">
                  <div class="ratings mr-2"><span><b>Seller Rattings : </b></span><i class="fa fa-star"></i><i
                     class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                  <span>
                  (6)</span>
               </div>
               <div class="mt-1 mb-1 spec-1"><span class="badge ms-1 rounded-pill text-muted border">4GB Ram</span><span class="badge ms-1 rounded-pill text-muted border">128GB ROM</span>
                  <span class="badge ms-1 rounded-pill text-muted border">16MP Camera</span>
                  <span class="badge ms-1 rounded-pill text-muted border">4000 mAh</span><span class="badge ms-1 rounded-pill text-muted border">120 FPS</span>
               </div>
               <p class="text-justify text-truncate para mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus voluptates quis mollitia et iure, quia ex distinctio nobis labore blanditiis officiis fuga, beatae vitae dicta ducimus itaque excepturi sit corrupti..<br><br>
               </p>
            </div>
            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
               <div class="d-flex flex-row justify-content-center align-items-center">
                  <h4 class="mr-1">RS.80,000</h4>
                  {{-- <span class="strike-text">$20.99</span> --}}
               </div>
               <div class="d-flex flex-column mt-4"><button class="btn btn-khas-primary btn-sm"
                  type="button">Details</button><button class="btn btn-outline-khas-primary btn-sm mt-2"
                  type="button">Add to favorites</button></div>
            </div>
         </div>
         <div class="row mb-3 p-2 bg-white border rounded">
            <div class="col-md-3 mt-1"><img role="button" class="img-fluid img-responsive rounded product-image"
               src="https://imageio.forbes.com/specials-images/imageserve/6321aca5df0a9fa9eee9950b/0x0.jpg?format=jpg&crop=1456,970,x63,y104,safe&width=1200">
            </div>
            <div class="col-md-6 mt-1">
               <div class="d-flex align-items-center">
                  <h3><a href="#">I Phone 14 Pro</a></h3>
                  <small style="padding:2px;font-size:10px" class="border text-muted ms-2 rounded">Ad</small>
               </div>
               <div class="d-flex flex-row">
                  <div class="ratings mr-2"><span><b>Seller Rattings : </b></span><i class="fa fa-star"></i><i
                     class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                  <span>
                  (6)</span>
               </div>
               <div class="mt-1 mb-1 spec-1"><span class="badge ms-1 rounded-pill text-muted border">4GB Ram</span><span class="badge ms-1 rounded-pill text-muted border">128GB ROM</span>
                  <span class="badge ms-1 rounded-pill text-muted border">16MP Camera</span>
                  <span class="badge ms-1 rounded-pill text-muted border">4000 mAh</span><span class="badge ms-1 rounded-pill text-muted border">120 FPS</span>
               </div>
               <p class="text-justify text-truncate para mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus voluptates quis mollitia et iure, quia ex distinctio nobis labore blanditiis officiis fuga, beatae vitae dicta ducimus itaque excepturi sit corrupti..<br><br>
               </p>
            </div>
            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
               <div class="d-flex flex-row justify-content-center align-items-center">
                  <h4 class="mr-1">RS.80,000</h4>
                  {{-- <span class="strike-text">$20.99</span> --}}
               </div>
               <div class="d-flex flex-column mt-4"><button class="btn btn-khas-primary btn-sm"
                  type="button">Details</button><button class="btn btn-outline-khas-primary btn-sm mt-2"
                  type="button">Add to favorites</button></div>
            </div>
         </div>
         <div class="row mb-3 p-2 bg-white border rounded">
            <div class="col-md-3 mt-1"><img role="button" class="img-fluid img-responsive rounded product-image"
               src="https://imageio.forbes.com/specials-images/imageserve/6321aca5df0a9fa9eee9950b/0x0.jpg?format=jpg&crop=1456,970,x63,y104,safe&width=1200">
            </div>
            <div class="col-md-6 mt-1">
               <div class="d-flex align-items-center">
                  <h3><a href="#">I Phone 14 Pro</a></h3>
                  <small style="padding:2px;font-size:10px" class="border text-muted ms-2 rounded">Ad</small>
               </div>
               <div class="d-flex flex-row">
                  <div class="ratings mr-2"><span><b>Seller Rattings : </b></span><i class="fa fa-star"></i><i
                     class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                  <span>
                  (6)</span>
               </div>
               <div class="mt-1 mb-1 spec-1"><span class="badge ms-1 rounded-pill text-muted border">4GB Ram</span><span class="badge ms-1 rounded-pill text-muted border">128GB ROM</span>
                  <span class="badge ms-1 rounded-pill text-muted border">16MP Camera</span>
                  <span class="badge ms-1 rounded-pill text-muted border">4000 mAh</span><span class="badge ms-1 rounded-pill text-muted border">120 FPS</span>
               </div>
               <p class="text-justify text-truncate para mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus voluptates quis mollitia et iure, quia ex distinctio nobis labore blanditiis officiis fuga, beatae vitae dicta ducimus itaque excepturi sit corrupti..<br><br>
               </p>
            </div>
            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
               <div class="d-flex flex-row justify-content-center align-items-center">
                  <h4 class="mr-1">RS.80,000</h4>
                  {{-- <span class="strike-text">$20.99</span> --}}
               </div>
               <div class="d-flex flex-column mt-4"><button class="btn btn-khas-primary btn-sm"
                  type="button">Details</button><button class="btn btn-outline-khas-primary btn-sm mt-2"
                  type="button">Add to favorites</button></div>
            </div>
         </div>
         <div class="row mb-3 p-2 bg-white border rounded">
            <div class="col-md-3 mt-1"><img role="button" class="img-fluid img-responsive rounded product-image"
               src="https://imageio.forbes.com/specials-images/imageserve/6321aca5df0a9fa9eee9950b/0x0.jpg?format=jpg&crop=1456,970,x63,y104,safe&width=1200">
            </div>
            <div class="col-md-6 mt-1">
               <div class="d-flex align-items-center">
                  <h3><a href="#">I Phone 14 Pro</a></h3>
                  <small style="padding:2px;font-size:10px" class="border text-muted ms-2 rounded">Ad</small>
               </div>
               <div class="d-flex flex-row">
                  <div class="ratings mr-2"><span><b>Seller Rattings : </b></span><i class="fa fa-star"></i><i
                     class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                  <span>
                  (6)</span>
               </div>
               <div class="mt-1 mb-1 spec-1"><span class="badge ms-1 rounded-pill text-muted border">4GB Ram</span><span class="badge ms-1 rounded-pill text-muted border">128GB ROM</span>
                  <span class="badge ms-1 rounded-pill text-muted border">16MP Camera</span>
                  <span class="badge ms-1 rounded-pill text-muted border">4000 mAh</span><span class="badge ms-1 rounded-pill text-muted border">120 FPS</span>
               </div>
               <p class="text-justify text-truncate para mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus voluptates quis mollitia et iure, quia ex distinctio nobis labore blanditiis officiis fuga, beatae vitae dicta ducimus itaque excepturi sit corrupti..<br><br>
               </p>
            </div>
            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
               <div class="d-flex flex-row justify-content-center align-items-center">
                  <h4 class="mr-1">RS.80,000</h4>
                  {{-- <span class="strike-text">$20.99</span> --}}
               </div>
               <div class="d-flex flex-column mt-4"><button class="btn btn-khas-primary btn-sm"
                  type="button">Details</button><button class="btn btn-outline-khas-primary btn-sm mt-2"
                  type="button">Add to favorites</button>
               </div>
            </div>
         </div>
         <div class="row mb-3 p-2 bg-white border rounded">
            <div class="col-md-3 mt-1"><img role="button" class="img-fluid img-responsive rounded product-image"
               src="https://imageio.forbes.com/specials-images/imageserve/6321aca5df0a9fa9eee9950b/0x0.jpg?format=jpg&crop=1456,970,x63,y104,safe&width=1200">
            </div>
            <div class="col-md-6 mt-1">
               <div class="d-flex align-items-center">
                  <h3><a href="#">I Phone 14 Pro</a></h3>
                  <small style="padding:2px;font-size:10px" class="border text-muted ms-2 rounded">Ad</small>
               </div>
               <div class="d-flex flex-row">
                  <div class="ratings mr-2"><span><b>Seller Rattings : </b></span><i class="fa fa-star"></i><i
                     class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                  <span>
                  (6)</span>
               </div>
               <div class="mt-1 mb-1 spec-1"><span class="badge ms-1 rounded-pill text-muted border">4GB Ram</span><span class="badge ms-1 rounded-pill text-muted border">128GB ROM</span>
                  <span class="badge ms-1 rounded-pill text-muted border">16MP Camera</span>
                  <span class="badge ms-1 rounded-pill text-muted border">4000 mAh</span><span class="badge ms-1 rounded-pill text-muted border">120 FPS</span>
               </div>
               <p class="text-justify text-truncate para mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus voluptates quis mollitia et iure, quia ex distinctio nobis labore blanditiis officiis fuga, beatae vitae dicta ducimus itaque excepturi sit corrupti..<br><br>
               </p>
            </div>
            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
               <div class="d-flex flex-row justify-content-center align-items-center">
                  <h4 class="mr-1">RS.80,000</h4>
                  {{-- <span class="strike-text">$20.99</span> --}}
               </div>
               <div class="d-flex flex-column mt-4"><button class="btn btn-khas-primary btn-sm"
                  type="button">Details</button><button class="btn btn-outline-khas-primary btn-sm mt-2"
                  type="button">Add to favorites</button></div>
            </div>
         </div>

<button class="btn text-khas-primary "><i class="bi bi-arrow-clockwise"></i> Load More</button>





      </div>
   </div>
</section>
@endsection
@section('script')
<script></script>
@endsection