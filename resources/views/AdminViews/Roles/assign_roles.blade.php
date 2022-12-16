@extends('AdminViews.Layout.layout')
@section('title','Assign Role')
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
               <h5 class="card-title w-100 text-center display-3">Assign Role</h5>
               <!-- Add user -->
               <form>
                  <div class="row  mb-3">
                     
                        <label for="inputText" class="col-sm-12 col-form-label">User</label>
                        <div class="col-sm-12">
                        <select class="form-control">
                               <option>Syed Mushahid</option>
                               <option>Luqman</option>
                               <option>Usama</option>
                               <option>Aslam Khan</option>
                               <option>Khan zeb</option>
                        </select>
                        </div>
                     </div>
                  </div>
                  <div class="row  mb-3">                   
                        <label for="inputText" class="col-sm-12 col-form-label">Role Name</label>
                        <div class="col-sm-12">
                        <select class="form-control">
                               <option>Admin</option>
                               <option>User</option>
                               <option>Customer</option>
                        </select>
                        </div>
                     </div>
                  </div>
                  <div class="row mb-3">                    
                     <div class="col-sm-12 text-center">
                        <button type="Reset" class="btn btn-khas-primary">Reset</button>
                        <button type="Save" class="btn btn-khas-primary">Save</button>
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