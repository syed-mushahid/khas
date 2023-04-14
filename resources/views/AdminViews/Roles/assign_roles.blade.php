@extends('AdminViews.Layout.layout')
@section('title','Add Admin')
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
               <h5 class="card-title w-100 text-center display-3">Add Admin</h5>
               @if($errors->any())
               <div class="alert alert-danger">
                   <ul>
                       @foreach($errors->all() as $error)
                           <li>{{ $error }}</li>
                       @endforeach
                   </ul>
               </div>
           @endif
               <form action="{{route('admin.create')}}" method="POST">
                  @csrf
                  <div class="row mb-3">
                     <label for="inputName" class="col-sm-12 col-form-label">Name</label>
                     <div class="col-sm-12">
                        <input type="text" class="form-control" name="name" id="inputName" placeholder="Enter name">
                     </div>
                  </div>
                  <div class="row mb-3">
                     <label for="inputEmail" class="col-sm-12 col-form-label">Email</label>
                     <div class="col-sm-12">
                        <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Enter email">
                     </div>
                  </div>
                  <div class="row mb-3">
                     <label for="inputPhone" class="col-sm-12 col-form-label">Phone</label>
                     <div class="col-sm-12">
                        <input type="text" class="form-control" name="phone" id="inputPhone" placeholder="Enter phone number">
                     </div>
                  </div>
                  <div class="row mb-3">
                     <label for="inputRole" class="col-sm-12 col-form-label">Role</label>
                     <div class="col-sm-12">
                        <select class="form-control" name="role" id="inputRole">
                           <option>Admin</option>
                           <option>User</option>
                           <option>Customer</option>
                        </select>
                     </div>
                  </div>
                  <div class="row mb-3">
                     <div class="col-sm-12 text-center">
                        <button type="reset" class="btn btn-khas-primary">Reset</button>
                        <button type="submit" class="btn btn-khas-primary">Save</button>
                     </div>
                  </div>
               </form>

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
