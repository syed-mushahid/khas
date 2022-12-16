@extends('AdminViews.Layout.layout')
@section('title','Add Return')
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
               <h5 class="card-title w-100 text-center display-3">Add Return</h5>
               <!-- Add user -->
               <form>
                  <div class="row  mb-3">
                     <div class="col-md-6">
                        <label for="inputText" class="col-sm-12 col-form-label">Order Id</label>
                        <div class="col-sm-12">
                        <input type="number" class="form-control">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <label for="inputEmail" class="col-sm-12 col-form-label">Reason</label>
                        <div class="col-sm-12">
                        <select class="form-control">
                               <option>Battery Life</option>
                               <option>Damaged Body</option>
                               <option>Damaged Panel</option>
                               <option>charging port not working</option>
                               <option>camera replaced</option>
                        </select>
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