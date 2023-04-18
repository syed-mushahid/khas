@extends('AdminViews.Layout.layout')
@section('title','Modules List')
@section('style')
<style>

</style>

@endsection

@section('content')


  <main id="main" class="main">


    <section class="section dashboard">
      <div class="row bg-white shadow rounded-3">
        <div class="container p-3">
            <div class="row my-3 ">
              <div class="col-12 text-end">
                <a href="{{route('module.add')}}" class="btn btn-primary">
                  Add New Module
              </a>
              </div>
              </div>

        <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table id="moduless-table" class="datatable table table-striped responsive">
                  <thead>
                      <tr>
                          <th scope="col">#</th>
                          <th scope="col">Module Name</th>
                          <th scope="col">Sub Modules</th>
                          <th scope="col">Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($modules as $module)
                      <tr>
                          <th scope="row">{{ $module->id }}</th>
                          <td>{{ $module->module_name   }}  {!! ($module->disabled == true) ? '<span class="text-danger"> - Disabled</span>' : '' !!}</td>
                          <td>
                              <ul>
                                  @foreach($module->subModules as $subModule)
                                  <li>
                                    {{ $subModule->sub_module_name }}
                                    {!! ($subModule->disabled == true) ? '<span class="text-danger"> - Disabled</span>' : '' !!}
                                </li>
                                                                  @endforeach
                              </ul>
                          </td>
                          <td>
                              <a href='{{route('module.add',$id=$module->id)}}' class="btn btn-primary">Edit</a>
                              <button class="btn btn-danger" onclick="deleteModule(this)" data-id="{{ $module->id }}">Delete</button>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>


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

function deleteModule(btn) {
          if (confirm("Are you sure you want to delete this module?")) {
              var id = btn.dataset.id;
              console.log(id);
              var csrf_token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

              fetch('/admin/delete_module/' + id, {
                  method: 'GET',
                  headers: {
                      'Content-Type': 'application/json',
                      'X-CSRF-Token': csrf_token
                  },
              })
              .then(response => response.json())
              .then(data => {
                  console.log(data.message);
                  // remove the deleted row from the frontend table
                  $(btn).closest('tr').fadeOut(500, function(){
                      $(this).remove();
                  });
              })
              .catch(error => {
                  console.error(error);
              });
          }
      }
</script>
@endsection