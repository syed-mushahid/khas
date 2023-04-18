@extends('AdminViews.Layout.layout')
@section('title','Add Modules')
@section('style')
<style></style>
@endsection
@section('content')
<main id="main" class="main">
   <section class="section dashboard">
      <div class="row bg-white shadow rounded-3">
         <div class="container p-3">
            <div class="row my-3 ">
               <div class="col-12 text-end">
                  <a href='{{route('module.list')}}' class="btn btn-primary">
                  Module List
                  </a>
                  <div class="row">
                     <div class="col-md-7 mx-auto">
                        <h3 class="text-center">Add Module</h3>
                        <form action="{{ isset($module) ? route('module.update', $id=$module->id) : route('module.create') }}" method="POST">
                           @csrf
                           @isset($module)
                           @method('PUT')
                           @endisset
                           <div class="modal-body text-start">
                              <div class="row ">
                                <div class="col-sm-6">
                                   <label class="" for="module_name">Module Name</label>

                                   <input type="text" name="module_name" id="module_name" value="{{ old('module_name', $module ? $module->module_name : '') }}" class="form-control" placeholder="Module Name">
                                 </div>
                                 <div class="col-sm-6">

                                    <label class="" for="module_icon">Module Icon</label>
                                    <input type="text" value="{{ old('module_icon', $module ? $module->icon : '') }}" class="form-control" placeholder="Bootstrap Icon Class" name="module_icon" id="icon">
                                 </div>
                                 <div class="col-sm-6">

                                    <label class="" for="module_route">Module Route</label>
                                    <input type="text" value="{{ old('module_route', $module ? $module->module_route : '') }}" class="form-control" placeholder="Route Name" name="module_route" id="module_route">
                                    <input type="hidden" name="id" id="id" value="{{ $module ? $module->id : '' }}">
                                  </div>
                                  <div class="col-sm-6">
                                    <label for="module_disabled">Module Enabled</label>
                                    <select class="form-control" name="module_disabled" id="module_disabled">
                                       <option value="0" {{ isset($module) && !$module->disabled ? 'selected' : '' }}>Enabled</option>
                                       <option value="1" {{ isset($module) && $module->disabled ? 'selected' : '' }}>Disabled</option>
                                    </select>
                                 </div>
                              </div>
                              <!-- sub-module fields -->
                              <div id="sub-modules-container" class="mt-3">
                                <h3 class="text-center">Sub Modules</h3>
                                 <div class="row">
                                    <div class="col-sm-5">
                                       <input type="text" name="sub_module_name[]" class="form-control " placeholder="Sub-module name">
                                       <input type="hidden" name="sub_module_id[]" class="form-control" placeholder="Sub-module name">
                                      </div>
                                    <div class="col-sm-5">
                                       <input type="text" name="sub_module_icon[]" class="form-control " placeholder="Icon Class" id="sub_module_icon">
                                    </div>
                                    <div class="col-sm-5">
                                       <input type="text" name="sub_module_route[]" class="mt-2 form-control " placeholder="Route Name" id="sub_module_route">
                                    </div>
                                    <div class="col-sm-5">
                                      <select class="form-control mt-2" name="sub_module_disabled[]" id="sub_module_disabled">
                                         <option value="0">Enabled</option>
                                         <option value="1">Disabled</option>
                                      </select>
                                   </div>
                                    <div class="col-auto">
                                       <button type="button" class="btn btn-success add-sub-module"><i class="bi bi-plus-square-fill"></i></button>
                                    </div>
                                    @if ($module)
                                    @foreach ($module->subModules as $submodule)
                                    <div class="row my-2 pt-2 border-top">
                                       <div class="col-sm-5">
                                          <input type="text" name="sub_module_name[]" value="{{ $submodule->sub_module_name }}" class="form-control" placeholder="Sub-module name">
                                          <input type="hidden" name="sub_module_id[]" value="{{ $submodule->id }}" class="form-control" placeholder="Sub-module name">
                                       </div>
                                       <div class="col-sm-5">
                                          <input type="text" name="sub_module_icon[]" value="{{ $submodule->icon }}" class="form-control" placeholder="Icon Class" id="sub_module_icon">
                                       </div>
                                       <div class="col-sm-5">
                                          <input type="text" name="sub_module_route[]" value="{{ $submodule->sub_module_route }}" class="mt-2 form-control" placeholder="Route Name" id="sub_module_route">
                                       </div>
                                       <div class="col-sm-5">
                                        <select class="form-control mt-2" name="sub_module_disabled[]" id="sub_module_disabled">
                                          <option value="0" {{ ($submodule->disabled==false) ? 'selected' : '' }}>Enabled</option>
                                          <option value="1" {{ ($submodule->disabled==true) ? 'selected' : '' }}>Disabled</option>
                                       </select>
                                     </div>
                                       <div class="col-auto">
                                          <button type="button" class="btn btn-danger remove-sub-module"><i class="bi bi-x-square-fill"></i></button>
                                       </div>
                                    </div>
                                    @endforeach
                                    @endif
                                 </div>
                              </div>
                              <div class="my-3 mx-auto text-center">
                                 <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>
@endsection
@section('script')
<script>
   $(document).ready(function() {
           // // add sub-module field
           // $('.add-sub-module').click(function() {
           //     $('#sub-modules-container').append('<div class="row mt-3"><div class="col"><input type="text" name="sub_module_name[]" class="form-control" placeholder="Sub-module name"></div><div class="col-auto"><button type="button" class="btn btn-success add-sub-module">Add</button><button type="button" class="btn btn-danger remove-sub-module">Remove</button></div></div>');
           // });

           // // remove sub-module field
           // $('#sub-modules-container').on('click', '.remove-sub-module', function() {
           //     $(this).closest('.row').remove();
           // });

         // add sub-module field
         $('.add-sub-module').click(function() {
             $('#sub-modules-container').append('<div class="row my-2 border-top pt-2"><div class="col-sm-5"><input type="text" name="sub_module_name[]" class="form-control " placeholder="Sub-module name">   <input type="hidden" name="sub_module_id[]" class="form-control" placeholder="Sub-module name"></div><div class="col-sm-5"><input type="text" name="sub_module_icon[]" class="form-control " placeholder="Icon Class" id="sub_module_icon"></div> <div class="col-sm-5"><input type="text" name="sub_module_route[]" class="form-control mt-2" placeholder="Route Name" id="sub_module_route"></div><div class="col-sm-5"> <select class="form-control mt-2" name="sub_module_disabled[]" id="sub_module_disabled"><option value="0">Enabled</option><option value="1">Disabled</option></select></div><div class="col-auto"><button type="button" class="btn btn-danger remove-sub-module"><i class="bi bi-x-square-fill"></i></button></div></div>');
         });

         // remove sub-module field
         $('#sub-modules-container').on('click', '.remove-sub-module', function() {
             $(this).closest('.row').remove();
         });


           $('.datatable').DataTable({
             "pageLength": 20
           });


         });





</script>
@endsection