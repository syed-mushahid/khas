@extends('UserViews/Layout.layout')
@section('title','My Sales')
@section('style')
@endsection
@section('content')
<section class="checkout-wrapper section col-12 pt-4 pb-4 ">
   <div class="container">
      <div class="row justify-content-center ">

         <div class="container pb-5 mb-2 mb-md-4">
            <div class="row border rounded">
              <!-- Sidebar-->
            @include('UserViews/Profile/Components/sidebar')

            <section class="col-lg-8 pt-3 px-4 pb-4 mb-3">

                  <!-- Title-->
                  <div class="d-sm-flex flex-wrap justify-content-between align-items-center border-bottom">
                    <h2 class="h3 py-2 me-2 text-center text-sm-start">My Sales<span class="badge bg-primary text-white text-center ms-2">4</span></h2>
                    <div class="py-2">
                      <div class="d-flex flex-nowrap align-items-center pb-3">
                        <label class="form-label fw-normal text-nowrap mb-0 me-2" for="sorting">Sort by:</label>
                        <select class="form-select form-select-sm me-2" id="sorting">
                          <option>Date</option>
                          <option>Name</option>
                          <option>Price</option>
                          <option>Status</option>
                        </select>
                        <button class="btn btn-outline-secondary btn-sm px-2" type="button"><i class=" bi bi-arrow-up"></i></button>
                        <button class="ms-2 btn btn-outline-secondary btn-sm px-2" type="button"><i class=" bi bi-arrow-down"></i></button>
                      </div>
                    </div>
                  </div>

                  <div class="row mx-n2 pt-2">
                    <div class="col-sm-6 px-2 mb-4">
                      <div class="bg-white shadow border h-100 rounded-3 p-4 text-center">
                        <h3>Total Sales</h3>
                        <p class="h2 mb-2">4</p>
                      </div>
                    </div>
                    <div class="col-sm-6 px-2 mb-4">
                      <div class="bg-white shadow border h-100 rounded-3 p-4 text-center">
                        <h3>Total Earnings</h3>
                        <p class="h2 mb-2">Rs 10,343</p>
                      </div>
                    </div>
                  </div>

                  <div class="d-sm-flex justify-content-between mt-lg-4 mb-4 pb-3 pb-sm-2 border-bottom">
                    <div class="d-block d-sm-flex align-items-start text-center text-sm-start"><a class="d-block flex-shrink-0 mx-auto me-sm-4" href="{{url('product-details')}}" style="width: 7rem;"><img width="100%"src="https://i0.wp.com/mobilemall.com.pk/wp-content/uploads/2022/07/Realme-3-price-in-Pakistan.jpeg" alt="Product"></a>
                      <div class="pt-2">
                        <h3 class="product-title fs-base mb-2"><a href="{{url('product-details')}}">Realme 3 Pro 6 GB</a></h3>
                        <div class="fs-sm"><span class="text-muted me-2">Sold On :</span>17 Jan 2023</div>
                        <div class="fs-sm"><span class="text-muted me-2">Status:</span><span class="text-success">Completed</span></div>
                        <div class="fs-lg text-accent pt-2">RS 50000</div>
                      </div>
                    </div>
                    <div class="pt-2 ps-sm-3 mx-auto mx-sm-0  manage-product-btns text-end">
                      <a href="{{url('product-details')}}"><button class="btn btn-outline-success btn-sm w-75 my-2" type="button"><i class="bi bi-eye me-2"></i>View</button></a>
                      <button class="btn btn-outline-success btn-sm w-75 my-2" type="button"><i class="bi bi-file-check me-2"></i>Show Report</button>

                    </div>
                  </div>
                  <div class="d-sm-flex justify-content-between mt-lg-4 mb-4 pb-3 pb-sm-2 border-bottom">
                    <div class="d-block d-sm-flex align-items-start text-center text-sm-start"><a class="d-block flex-shrink-0 mx-auto me-sm-4" href="{{url('product-details')}}" style="width: 7rem;"><img width="100%"src="https://i0.wp.com/mobilemall.com.pk/wp-content/uploads/2022/07/Realme-3-price-in-Pakistan.jpeg" alt="Product"></a>
                      <div class="pt-2">
                        <h3 class="product-title fs-base mb-2"><a href="{{url('product-details')}}">Realme 3 Pro 6 GB</a></h3>
                        <div class="fs-sm"><span class="text-muted me-2">Sold On :</span>17 Jan 2023</div>
                        <div class="fs-sm"><span class="text-muted me-2">Status:</span><span class="text-danger">Returned</span></div>
                        <div class="fs-lg text-accent pt-2">RS 50000</div>
                      </div>
                    </div>
                    <div class="pt-2 ps-sm-3 mx-auto mx-sm-0  manage-product-btns text-end">
                      <a href="{{url('product-details')}}"><button class="btn btn-outline-success btn-sm w-75 my-2" type="button"><i class="bi bi-eye me-2"></i>View</button></a>
                      <button class="btn btn-outline-success btn-sm w-75 my-2" type="button"><i class="bi bi-file-check me-2"></i>Show Report</button>
                    </div>
                  </div>
                  <div class="d-sm-flex justify-content-between mt-lg-4 mb-4 pb-3 pb-sm-2 border-bottom">
                    <div class="d-block d-sm-flex align-items-start text-center text-sm-start"><a class="d-block flex-shrink-0 mx-auto me-sm-4" href="{{url('product-details')}}" style="width: 7rem;"><img width="100%"src="https://i0.wp.com/mobilemall.com.pk/wp-content/uploads/2022/07/Realme-3-price-in-Pakistan.jpeg" alt="Product"></a>
                      <div class="pt-2">
                        <h3 class="product-title fs-base mb-2"><a href="{{url('product-details')}}">Realme 3 Pro 6 GB</a></h3>
                        <div class="fs-sm"><span class="text-muted me-2">Sold On :</span>17 Jan 2023</div>
                        <div class="fs-sm"><span class="text-muted me-2">Status:</span><span class="">In Progress</span></div>
                        <div class="fs-lg text-accent pt-2">RS 50000</div>
                      </div>
                    </div>
                    <div class="pt-2 ps-sm-3 mx-auto mx-sm-0  manage-product-btns text-end">
                      <a href="{{url('product-details')}}"><button class="btn btn-outline-success btn-sm w-75 my-2" type="button"><i class="bi bi-eye me-2"></i>View</button></a>
                      <button class="btn btn-outline-success btn-sm w-75 my-2" type="button"><i class="bi bi-file-check me-2"></i>Show Report</button>

                    </div>
                  </div>
                  <div class="d-sm-flex justify-content-between mt-lg-4 mb-4 pb-3 pb-sm-2 border-bottom">
                    <div class="d-block d-sm-flex align-items-start text-center text-sm-start"><a class="d-block flex-shrink-0 mx-auto me-sm-4" href="{{url('product-details')}}" style="width: 7rem;"><img width="100%"src="https://i0.wp.com/mobilemall.com.pk/wp-content/uploads/2022/07/Realme-3-price-in-Pakistan.jpeg" alt="Product"></a>
                      <div class="pt-2">
                        <h3 class="product-title fs-base mb-2"><a href="{{url('product-details')}}">Realme 3 Pro 6 GB</a></h3>
                        <div class="fs-sm"><span class="text-muted me-2">Sold On :</span>17 Jan 2023</div>
                        <div class="fs-sm"><span class="text-muted me-2">Status:</span><span class="text-success">Completed</span></div>
                        <div class="fs-lg text-accent pt-2">RS 50000</div>
                      </div>
                    </div>
                    <div class="pt-2 ps-sm-3 mx-auto mx-sm-0  manage-product-btns text-end">
                      <a href="{{url('product-details')}}"><button class="btn btn-outline-success btn-sm w-75 my-2" type="button"><i class="bi bi-eye me-2"></i>View</button></a>
                      <button class="btn btn-outline-success btn-sm w-75 my-2" type="button"><i class="bi bi-file-check me-2"></i>Show Report</button>

                    </div>
                  </div>





              </section>

            </div>
          </div>

      </div>
   </div>
</section>
@endsection
@section('script')
<script></script>
@endsection