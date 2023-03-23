@extends('UserViews/Layout.layout')
@section('title',' ')
@section('style')
@endsection
@section('content')
<section class="checkout-wrapper section col-12 pt-4 pb-4 ">
   <div class="container">
      <div class="row justify-content-center">

        <div class="py-3 shadow-lg rounded-4 px-4 col-md-8 ">
            <!-- Title-->
            <div class="d-sm-flex flex-wrap justify-content-between align-items-center pb-2">
              <h2 class=" py-2 text-center w-100 ">Add New Product</h2>

            </div>
            <form>
                <div class="row">


              <div class="mb-3 col-sm-6 pb-2">
                <label class="form-label" for="unp-product-name">Phone Name</label>
                <input class="form-control" type="text" id="unp-product-name">
              </div>
              <div class="mb-3 col-sm-6 pb-2">
                <label class="form-label" for="unp-product-name">Model Name</label>
                <input class="form-control" type="text" id="unp-product-name">
              </div>
</div>
                <div class="row">


              <div class="mb-3 col-sm-6 pb-2">
                <label class="form-label" for="unp-product-name">Price</label>
                <input class="form-control" type="number" id="unp-product-name">
              </div>
              <div class="col-6 ">
                <label class="form-label" for="unp-product-name">Condition</label>

                <select class="form-select me-2" id="unp-category">
                  <option selected disabled>Condition</option>
                  <option>Pinpacked</option>
                  <option>Opened/Used</option>

                </select>
                  </div>
</div>
              <div class="py-2 row">
                  <div class="col-6 ">
                    <label class="form-label" for="unp-product-name">Category</label>
                <select class="form-select me-2" id="unp-category">
                  <option selected disabled>Select Category</option>
                  <option>Gaming</option>
                  <option>Photos</option>
                  <option>Video</option>
                </select>
                  </div>
                  <div class="col-6 ">
                    <label class="form-label" for="unp-product-name">Brand</label>
                <select class="col-6 form-select me-2" id="unp-category">
                  <option selected disabled>Select Brand</option>
                  <option>Apple</option>
                  <option>Samsung</option>
                  <option>Nokia</option>
                </select>
              </div>
              </div>
              <div class="py-2 row">
                  <div class="col-6 ">
                    <label class="form-label" for="unp-product-name">RAM</label>
                <select class="form-select " id="unp-category">
                  <option selected disabled>Select Ram</option>
                  <option>512 MB</option>
                  <option>1 GB</option>
                  <option>2 GB</option>
                  <option>3 GB</option>
                  <option>4 GB</option>
                  <option>5 GB</option>
                  <option>6 GB</option>
                  <option>7 GB</option>
                  <option>8 GB</option>
                </select>
                  </div>
                  <div class="col-6">
                    <label class="form-label" for="unp-product-name">Storage</label>
                <select class="col-6 form-select " id="unp-category">
                  <option selected disabled>Select Storage</option>
                  <option>8 GB</option>
                  <option>16 GB</option>
                  <option>32 GB</option>
                  <option>64 GB</option>
                  <option>128 GB</option>
                  <option>256 GB</option>
                  <option>512 GB</option>
                  <option>1 TB</option>
                </select>
              </div>
              </div>

              <div class="mb-3 py-2">
                <label class="form-label" for="unp-product-description">Product description</label>
                <textarea class="form-control" rows="6" id="unp-product-description"></textarea>
              </div>
              <div class="mb-3 pb-2">
                <label class="form-label" for="unp-product-files">Product Thumbnail</label>
                <input class="form-control" type="file" id="unp-product-files">
                <div class="form-text">Maximum file size is 10MB</div>
              </div>
              <div class="mb-3 pb-2">
                <label class="form-label" for="unp-product-files">Upload More Images</label>
                <input class="form-control" multiple type="file" id="unp-product-files">
                <div class="form-text">Maximum file size is 10MB</div>
              </div>
              <h3 class="card-title w-100 text-center my-3">Phone Condition</h3>

                 <div class="row  mb-3">
                    <div class="col-md-6">
                       <label for="inputText" class="col-sm-12 col-form-label">Screen Damaged?</label>
                       <div class="col-sm-12 ">

                       <span class="me-4"><input type="radio" name="Screen" value="Yes">Yes</span>
                       <span class="ms-4"><input type="radio" name="Screen" value="No">No</span>
                       </div>
                    </div>
                    <div class="mb-3 col-md-6 pb-2">
                     <label class="form-label" for="unp-product-name">Remarks</label>
                     <input class="form-control" type="number" id="unp-product-name">
                   </div>

                 </div>
                 <div class="row  mb-3">

                        <div class="col-md-6">
                           <label for="inputEmail" class="col-sm-12 col-form-label">Touch Works Properly?</label>
                           <div class="col-sm-12 ">
                           <span class="me-4"><input type="radio" name="Touch" value="Yes">Yes</span>
                           <span class="ms-4"><input type="radio" name="Touch" value="No">No</span>
                           </div>
                        </div>
                    <div class="mb-3 col-md-6 pb-2">
                     <label class="form-label" for="unp-product-name">Remarks</label>
                     <input class="form-control" type="number" id="unp-product-name">
                   </div>

                 </div>
                 <div class="row  mb-3">
                    <div class="col-md-6">
                       <label for="inputText" class="col-sm-12 col-form-label">Panel Replaced?</label>
                       <div class="col-sm-12 ">
                       <span class="me-4"><input type="radio" name="Panel" value="Original">Yes</span>
                       <span class="ms-4"><input type="radio" name="Panel" value="Replaced">No</span>
                       </div>
                    </div>
                    <div class="mb-3 col-md-6 pb-2">
                     <label class="form-label" for="unp-product-name">Remarks</label>
                     <input class="form-control" type="number" id="unp-product-name">
                   </div>
                 </div>
                 <div class="row  mb-3">

                    <div class="col-md-6">
                       <label for="inputEmail" class="col-sm-12 col-form-label">SIM Slots Working?</label>
                       <div class="col-sm-12 ">
                       <span class="me-4"><input type="radio" name="Slot" value="Yes">Yes</span>
                       <span class="ms-4"><input type="radio" name="Slot" value="No">No</span>
                       </div>
                    </div>
                    <div class="mb-3 col-md-6 pb-2">
                     <label class="form-label" for="unp-product-name">Remarks</label>
                     <input class="form-control" type="number" id="unp-product-name">
                   </div>
                 </div>
                 <div class="row  mb-3">

                    <div class="col-md-6">
                       <label for="inputText" class="col-sm-12 col-form-label">All Cameras Working?</label>
                       <div class="col-sm-12 ">
                       <span class="me-4"><input type="radio" name="Camera" value="Yes">Yes</span>
                       <span class="ms-4"><input type="radio" name="Camera" value="No">No</span>
                       </div>
                    </div>
                    <div class="mb-3 col-md-6 pb-2">
                     <label class="form-label" for="unp-product-name">Remarks</label>
                     <input class="form-control" type="number" id="unp-product-name">
                   </div>
                 </div>

                 <div class="row  mb-3">
                    <div class="col-md-6">
                       <label for="inputText" class="col-sm-12 col-form-label">Wifi Working?</label>
                       <div class="col-sm-12 ">
                       <span class="me-4"><input type="radio" name="Wifi" value="Yes">Yes</span>
                       <span class="ms-4"><input type="radio" name="Wifi" value="No">No</span>
                       </div>
                    </div>
                    <div class="mb-3 col-md-6 pb-2">
                     <label class="form-label" for="unp-product-name">Remarks</label>
                     <input class="form-control" type="number" id="unp-product-name">
                   </div>
                 </div>
                 <div class="row  mb-3">
                    <div class="col-md-6">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Bluetooth Working?</label>
                       <div class="col-sm-12 ">
                       <span class="me-4"><input type="radio" name="Bluetooth" value="Yes">Yes</span>
                       <span class="ms-4"><input type="radio" name="Bluetooth" value="No">No</span>
                       </div>
                    </div>
                    <div class="mb-3 col-md-6 pb-2">
                     <label class="form-label" for="unp-product-name">Remarks</label>
                     <input class="form-control" type="number" id="unp-product-name">
                   </div>
                 </div>
                 <div class="row  mb-3">
                    <div class="col-md-6">
                       <label for="inputText" class="col-sm-12 col-form-label">Radio Working?</label>
                       <div class="col-sm-12 ">
                       <span class="me-4"><input type="radio" name="Radio" value="Yes">Yes</span>
                       <span class="ms-4"><input type="radio" name="Radio" value="No">No</span>
                       </div>
                    </div>
                    <div class="mb-3 col-md-6 pb-2">
                     <label class="form-label" for="unp-product-name">Remarks</label>
                     <input class="form-control" type="number" id="unp-product-name">
                   </div>
                 </div>
                 <div class="row  mb-3">
                    <div class="col-md-6">
                       <label for="inputEmail" class="col-sm-12 col-form-label">Charging Slot</label>
                       <div class="col-sm-12 ">
                       <span class="me-4"><input type="radio" name="Charging" value="Yes">Working</span>
                       <span class="ms-4"><input type="radio" name="Charging" value="No">Faulty</span>
                       </div>
                    </div>
                    <div class="mb-3 col-md-6 pb-2">
                     <label class="form-label" for="unp-product-name">Remarks</label>
                     <input class="form-control" type="number" id="unp-product-name">
                   </div>
                 </div>




              <button class="btn btn-primary d-block w-100" type="submit"><i class="ci-cloud-upload fs-lg me-2"></i>Upload Product</button>
            </form>
          </div>
<div class="col-md-4 px-2 d-flex justify-content-end">
    <div class="shadow-lg col-11 rounded-4 p-3"><ul>
        By uploading a product for sale on Khas, you agree to the following terms and conditions:<br>
        <li class="mt-3">The product must be as described in the post and in working condition.</li>
        <li>Khas reserves the right to inspect the product before it is sold to ensure it meets the stated condition.</li>
        <li>In the event the product is not as described in the post, Khas may return the product to the seller at their expense.</li>
        <li>Sellers are responsible for accurately and truthfully describing their products.</li>
        <li>Khas reserves the right to remove any product that does not meet these terms and conditions.</li>
      </ul>
      </div>
</div>
      </div>
   </div>
</section>
@endsection
@section('script')
<script></script>
@endsection