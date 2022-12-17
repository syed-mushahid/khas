@extends('UserViews/Layout.layout')
@section('title', ' ')
@section('style')
    <style>

    </style>
@endsection
@section('content')
    <section class="checkout-wrapper section col-12 pt-4 pb-4 ">
        <div class="container">

            <div class="row  justify-content-center">
                <div class="col-md-6">

                    <div class="main-img border text-center col-12">
                        <img width="100%"
                            src="https://imageio.forbes.com/specials-images/imageserve/6321aca5df0a9fa9eee9950b/0x0.jpg?format=jpg&crop=1456,970,x63,y104,safe"
                            id="current" alt="#">
                    </div>

                    <div class="images row border py-3 mt-4">
                        <div class="col-3  text-center mb-3 " role="button"> <img width="95%" height="100%"
                                src="https://imageio.forbes.com/specials-images/imageserve/6321aca5df0a9fa9eee9950b/0x0.jpg?format=jpg&crop=1456,970,x63,y104,safe"
                                class="img select-img " alt="#">
                        </div>
                        <div class="col-3  text-center mb-3 " role="button"> <img width="95%" height="100%"
                                src="https://s.yimg.com/uu/api/res/1.2/Y0sdCqqSrXzmtFWgzjwgZg--~B/aD0xMzMzO3c9MjAwMDthcHBpZD15dGFjaHlvbg--/https://media-mbst-pub-ue1.s3.amazonaws.com/creatr-uploaded-images/2022-09/280da9d0-33d8-11ed-beeb-9f0777e02779.cf.jpg"
                                class="img select-img" alt="#">
                        </div>
                        <div class="col-3  text-center mb-3 " role="button"> <img width="95%" height="100%"
                                src="https://bgr.com/wp-content/uploads/2022/09/iphone-14-pro-max-space-black.jpg?quality=82&strip=all"
                                class="img select-img" alt="#">
                        </div>
                        <div class="col-3  text-center mb-3 " role="button"> <img width="95%" height="100%"
                                src="https://s.hdnux.com/photos/01/27/46/17/22963193/5/1200x0.jpg"
                                class="img select-img" alt="#">
                        </div>


                    </div>


                </div>
                <div class="col-md-6">
                    <div class="product-info">
                        <h1 class="title">I Phone 14 Pro</h1>
                        <p class="category"> Posted By:<a href="javascript:void(0)">Ali Khan</a></p>
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
                                  </a>   </div>
                            </div>
                        </div>
                    </div>
                </div>
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
