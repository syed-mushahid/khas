@extends('AdminViews.Layout.layout')
@section('title','Pending Sales')
@section('style')
<style>

</style>

@endsection

@section('content')
  
    
  <main id="main" class="main">


    <section class="section dashboard">
      <div class="row bg-white shadow rounded-3">
      
        
      <div class="card-body">
            <h5 class="card-title">Pending Sales</h5>
          
            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Customer Name</th>
                  <th scope="col">Product Name</th>
                  <th scope="col">Order Id</th>                  
                  <th scope="col">Total Amount</th>
                  <th scope="col">Date</th>
                  <th scope="col">Status</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Brandon Jacob</td>
                  <td>Vivo</td>
                  <td>678</td>
                  <td>28</td>
                  <td>2016-05-25</td>
                  <td>Pending</td>
                  <td> <a href="#" class="btn btn-success btn-sm"><i class="bi bi-eye"></i></a> <a href="#" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a> <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i> </a></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Bridie Kessler</td>
                  <td>Iphone</td>
                  <td>987</td>
                  <td>35</td>
                  <td>2014-12-05</td>
                  <td>Pending</td>
                  <td> <a href="#" class="btn btn-success btn-sm"><i class="bi bi-eye"></i></a> <a href="#" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a> <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i> </a></td>
          
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Ashleigh Langosh</td>
                  <td>Xiomi</td>
                  <td>909</td>
                  <td>45</td>
                  <td>2011-08-12</td>
                  <td>Pending</td>
                  <td> <a href="#" class="btn btn-success btn-sm"><i class="bi bi-eye"></i></a> <a href="#" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a> <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i> </a></td>
          
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Angus Grady</td>
                  <td>Infinix</td>
                  <td>454</td>
                  <td>34</td>
                  <td>2012-06-11</td>
                  <td>Pending</td>
                  <td> <a href="#" class="btn btn-success btn-sm"><i class="bi bi-eye"></i></a> <a href="#" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a> <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i> </a></td>
          
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Raheem Lehner</td>
                  <td>One Plus</td>
                  <td>232</td>
                  <td>47</td>
                  <td>2011-04-19</td>
                  <td>Pending</td>
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