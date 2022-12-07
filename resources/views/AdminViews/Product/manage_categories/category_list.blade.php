@extends('AdminViews.Layout.layout')
@section('title','Categories list')
@section('style')
<style>

</style>

@endsection

@section('content')
  
    
  <main id="main" class="main">


    <section class="section dashboard">
      <div class="row bg-white shadow rounded-3">
      
        
      <div class="card-body">
            <h5 class="card-title">Category List</h5>
          
            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Category Name</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Brandon Jacob</td>
                  <td> <a href="#" class="btn btn-success btn-sm"><i class="bi bi-eye"></i></a> <a href="#" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a> <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i> </a></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Bridie Kessler</td>
                  <td> <a href="#" class="btn btn-success btn-sm"><i class="bi bi-eye"></i></a> <a href="#" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a> <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i> </a></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Ashleigh Langosh</td>
                  <td> <a href="#" class="btn btn-success btn-sm"><i class="bi bi-eye"></i></a> <a href="#" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a> <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i> </a></td>
          
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Angus Grady</td>
                  <td> <a href="#" class="btn btn-success btn-sm"><i class="bi bi-eye"></i></a> <a href="#" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a> <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i> </a></td>
          
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Raheem Lehner</td>
                  <td> <a href="#" class="btn btn-success btn-sm"><i class="bi bi-eye"></i></a> <a href="#" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a> <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i> </a></td>          
                </tr>
              </tbody>
            </table>
            <!-- End Default Table Example -->
          </div>

      </div>
    </section>

  </main>
@endsection

@section('script')

<script>

</script>
@endsection