@extends('AdminViews.Layout.layout')
@section('title','Add Category')
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
               <h5 class="card-title w-100 text-center display-3">Add Category</h5>
               <form>
                  <div class="row  mb-3">
                    
                        <label for="inputText" class="col-sm-12 col-form-label">Category Name</label>
                        <div class="col-sm-12">
                           <input type="text" class="form-control">
                        </div>
                   
                  </div>
                 
                  <div class="row mb-3">
                    
                     <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-khas-primary">Submit</button>
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