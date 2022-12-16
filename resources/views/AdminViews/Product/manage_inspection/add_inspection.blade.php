@extends('AdminViews.Layout.layout')
@section('title','Add Inpection')
@section('style')
<style>

</style>

@endsection

@section('content')
  
    
  <main id="main" class="main">


    <section class="section dashboard">
      <div class="row bg-white shadow rounded-3">
      <div class="col-md-10 m-auto">
            <div class="card-body  ">
               <h5 class="card-title w-100 text-center display-3">Add Inspection</h5>
               <!-- Add Inspection -->
               <form>
                  <div class="row  mb-3">
                     <div class="col-md-6">
                        <label for="inputText" class="col-sm-12 col-form-label">Product Id</label>
                        <div class="col-sm-12">
                           <input type="text" class="form-control">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <label for="inputEmail" class="col-sm-12 col-form-label">Product Name</label>
                        <div class="col-sm-12">
                           <input type="text" class="form-control">
                        </div>
                     </div>
                  </div>

                  <div class="row  mb-3">
                     <div class="col-md-6">
                        <label for="inputText" class="col-sm-12 col-form-label">Brand Name</label>
                        <div class="col-sm-12">
                           <input type="text" class="form-control">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <label for="inputEmail" class="col-sm-12 col-form-label">Model</label>
                        <div class="col-sm-12">
                           <input type="text" class="form-control">
                        </div>
                     </div>
                  </div>

                  <div class="row  mb-3">
                     <div class="col-md-6">
                        <label for="inputText" class="col-sm-12 col-form-label">Android Version/IOS Version</label>
                        <div class="col-sm-12">
                           <input type="text" class="form-control">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <label for="inputEmail" class="col-sm-12 col-form-label">CPU / GPU</label>
                        <div class="col-sm-12">
                           <input type="text" class="form-control">
                        </div>
                     </div>
                  </div>

                  <div class="row  mb-3">
                     <div class="col-md-6">
                        <label for="inputText" class="col-sm-12 col-form-label">Screen Has Dot Or Not</label>
                        <div class="col-sm-12 ">
                        
                        <span class="me-4"><input type="radio" name="Screen" value="Yes">Yes</span>
                        <span class="ms-4"><input type="radio" name="Screen" value="No">No</span>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <label for="inputEmail" class="col-sm-12 col-form-label">Touch Works Properly Or Not</label>
                        <div class="col-sm-12 ">                        
                        <span class="me-4"><input type="radio" name="Touch" value="Yes">Yes</span>
                        <span class="ms-4"><input type="radio" name="Touch" value="No">No</span>
                        </div>
                     </div>
                  </div>
                  <div class="row  mb-3">
                     <div class="col-md-6">
                        <label for="inputText" class="col-sm-12 col-form-label">Panel Original Or Replaced</label>
                        <div class="col-sm-12 ">                        
                        <span class="me-4"><input type="radio" name="Panel" value="Original">Yes</span>
                        <span class="ms-4"><input type="radio" name="Panel" value="Replaced">No</span>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <label for="inputEmail" class="col-sm-12 col-form-label">SIM Card/Memory Card Slot Works Properly Or Not</label>
                        <div class="col-sm-12 ">                        
                        <span class="me-4"><input type="radio" name="Slot" value="Yes">Yes</span>
                        <span class="ms-4"><input type="radio" name="Slot" value="No">No</span>
                        </div>
                     </div>
                  </div>
                  <div class="row  mb-3">
                     <div class="col-md-6">
                        <label for="inputText" class="col-sm-12 col-form-label">Camera Working Or Not(Front And Back)</label>
                        <div class="col-sm-12 ">                        
                        <span class="me-4"><input type="radio" name="Camera" value="Yes">Yes</span>
                        <span class="ms-4"><input type="radio" name="Camera" value="No">No</span>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <label for="inputEmail" class="col-sm-12 col-form-label">Number Of Pixels(Front And Back)</label>
                        <div class="col-sm-12">
                           <input type="text" class="form-control">
                        </div>
                     </div>
                  </div>
                  <div class="row  mb-3">
                     <div class="col-md-6">
                        <label for="inputText" class="col-sm-12 col-form-label">Wifi Working Properly Or Not</label>
                        <div class="col-sm-12 ">                        
                        <span class="me-4"><input type="radio" name="Wifi" value="Yes">Yes</span>
                        <span class="ms-4"><input type="radio" name="Wifi" value="No">No</span>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <label for="inputEmail" class="col-sm-12 col-form-label">Bluetooth Working Properly Or Not</label>
                        <div class="col-sm-12 ">                        
                        <span class="me-4"><input type="radio" name="Bluetooth" value="Yes">Yes</span>
                        <span class="ms-4"><input type="radio" name="Bluetooth" value="No">No</span>
                        </div>
                     </div>
                  </div>
                  <div class="row  mb-3">
                     <div class="col-md-6">
                        <label for="inputText" class="col-sm-12 col-form-label">Radio Working Properly Or Not</label>
                        <div class="col-sm-12 ">                        
                        <span class="me-4"><input type="radio" name="Radio" value="Yes">Yes</span>
                        <span class="ms-4"><input type="radio" name="Radio" value="No">No</span>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <label for="inputEmail" class="col-sm-12 col-form-label">Charging Slot Working Or Not</label>
                        <div class="col-sm-12 ">                        
                        <span class="me-4"><input type="radio" name="Charging" value="Yes">Yes</span>
                        <span class="ms-4"><input type="radio" name="Charging" value="No">No</span>
                        </div>
                     </div>
                  </div>
                  <div class="row  mb-3">
                     <div class="col-md-6">
                        <label for="inputText" class="col-sm-12 col-form-label">Phone Speaker Working Or Not</label>
                        <div class="col-sm-12 ">                        
                        <span class="me-4"><input type="radio" name="Phone" value="Yes">Yes</span>
                        <span class="ms-4"><input type="radio" name="Phone" value="No">No</span>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <label for="inputEmail" class="col-sm-12 col-form-label">Call Speaker Working Or Not</label>
                        <div class="col-sm-12 ">                        
                        <span class="me-4"><input type="radio" name="Call" value="Yes">Yes</span>
                        <span class="ms-4"><input type="radio" name="Call" value="No">No</span>
                        </div>
                     </div>
                  </div>
                  <div class="row  mb-3">
                     <div class="col-md-6">
                        <label for="inputText" class="col-sm-12 col-form-label">Microphone Working Or Not</label>
                        <div class="col-sm-12 ">                        
                        <span class="me-4"><input type="radio" name="Microphone" value="Yes">Yes</span>
                        <span class="ms-4"><input type="radio" name="Microphone" value="No">No</span>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <label for="inputEmail" class="col-sm-12 col-form-label">Flashlight Working Or Not</label>
                        <div class="col-sm-12 ">                        
                        <span class="me-4"><input type="radio" name="Flashlight" value="Yes">Yes</span>
                        <span class="ms-4"><input type="radio" name="Flashlight" value="No">No</span>
                        </div>
                     </div>
                  </div>
                  <div class="row  mb-3">
                     <div class="col-md-6">
                        <label for="inputText" class="col-sm-12 col-form-label">Fingerprint Working Or Not</label>
                        <div class="col-sm-12 ">                        
                        <span class="me-4"><input type="radio" name="Fingerprint" value="Yes">Yes</span>
                        <span class="ms-4"><input type="radio" name="Fingerprint" value="No">No</span>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <label for="inputEmail" class="col-sm-12 col-form-label">Facelock Working Or Not</label>
                        <div class="col-sm-12 ">                        
                        <span class="me-4"><input type="radio" name="Facelock" value="Yes">Yes</span>
                        <span class="ms-4"><input type="radio" name="Facelock" value="No">No</span>
                        </div>
                     </div>
                  </div>

                  <div class="row  mb-3">
                     <div class="col-md-6">
                        <label for="inputText" class="col-sm-12 col-form-label">Has Its Original Box Or Not?</label>
                        <div class="col-sm-12 ">                        
                        <span class="me-4"><input type="radio" name="Box" value="Yes">Yes</span>
                        <span class="ms-4"><input type="radio" name="Box" value="No">No</span>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <label for="inputEmail" class="col-sm-12 col-form-label">Has Its Charging Cable Or Not?</label>
                        <div class="col-sm-12 ">                        
                        <span class="me-4"><input type="radio" name="Cable" value="Yes">Yes</span>
                        <span class="ms-4"><input type="radio" name="Cable" value="No">No</span>
                        </div>
                     </div>
                  </div>
                  <div class="row  mb-3">
                     <div class="col-md-6">
                        <label for="inputText" class="col-sm-12 col-form-label">Has Its Earphone Or Not?</label>
                        <div class="col-sm-12 ">                        
                        <span class="me-4"><input type="radio" name="Earphone" value="Yes">Yes</span>
                        <span class="ms-4"><input type="radio" name="Earphone" value="No">No</span>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <label for="inputEmail" class="col-sm-12 col-form-label">Has Its Screen Protector Or Not?</label>
                        <div class="col-sm-12 ">                        
                        <span class="me-4"><input type="radio" name="Protector" value="Yes">Yes</span>
                        <span class="ms-4"><input type="radio" name="Protector" value="No">No</span>
                        </div>
                     </div>
                  </div>
                  <div class="row  mb-3">
                     <div class="col-md-6">
                        <label for="inputText" class="col-sm-12 col-form-label">Has Its Back Cover Or Not?</label>
                        <div class="col-sm-12 ">                        
                        <span class="me-4"><input type="radio" name="Cover" value="Yes">Yes</span>
                        <span class="ms-4"><input type="radio" name="Cover" value="No">No</span>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <label for="inputEmail" class="col-sm-12 col-form-label">How Old The Phone Is?</label>
                        <div class="col-sm-12">
                           <input type="text" class="form-control">
                        </div>
                     </div>
                  </div>
                  <div class="row  mb-3">
                     <div class="col-md-6">
                        <label for="inputText" class="col-sm-12 col-form-label">It Has Warranty Or Not, If It Has Then How Much Time Left For Expiry?</label>
                        <div class="col-sm-12">
                           <input type="text" class="form-control">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <label for="inputEmail" class="col-sm-12 col-form-label">Is The Phone Rooted Or Not?</label>
                        <div class="col-sm-12 ">                        
                        <span class="me-4"><input type="radio" name="Rooted" value="Yes">Yes</span>
                        <span class="ms-4"><input type="radio" name="Rooted" value="No">No</span>
                        </div>
                     </div>
                  </div>
                  <div class="row  mb-3">
                     <div class="col-md-6">
                        <label for="inputText" class="col-sm-12 col-form-label">Phone Is PTA Approved Or Not?</label>
                        <div class="col-sm-12 ">                        
                        <span class="me-4"><input type="radio" name="PTA" value="Approved">Approved</span>
                        <span class="ms-4"><input type="radio" name="PTA" value="Not Approved">Not Approved</span>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <label for="inputEmail" class="col-sm-12 col-form-label">Mobile IMEI Number?</label>
                        <div class="col-sm-12">
                           <input type="text" class="form-control">
                        </div>
                     </div>
                  </div>
                  <div class="row  mb-3">
                     <div class="col-md-6">
                        <label for="inputText" class="col-sm-12 col-form-label">Do You Have Receipt Of The Device?(If Available)</label>
                        <div class="col-sm-12 ">                        
                        <span class="me-4"><input type="radio" name="Receipt" value="Yes">Yes</span>
                        <span class="ms-4"><input type="radio" name="Receipt" value="No">No</span>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <label for="inputEmail" class="col-sm-12 col-form-label">Is The Phone Repaired Or Not?(If Yes Then Which Part)</label>
                        <div class="col-sm-12">
                           <input type="text" class="form-control">
                        </div>
                     </div>
                  </div>
                 
                  <div class="row mb-3">
                    
                     <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-khas-primary">Add</button>
                     </div>
                  </div>
               </form>
               <!-- End General Form Elements -->
            </div>
         </div>
      </div>
    </section>

  </main>
@endsection

@section('script')

<script>

</script>
@endsection