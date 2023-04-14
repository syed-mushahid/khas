@extends('AdminViews.Layout.layout')
@section('title','Users List')
@section('style')
<style>

</style>

@endsection

@section('content')
  <main id="main" class="main">
    <section class="section dashboard">
      <div class="row bg-white shadow rounded-3">
        <div class="card-body">
            <h5 class="card-title">Users List</h5>
            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone Number</th>
                  <th scope="col">Last Login</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                <tr>
                  <th scope="row">{{ $user->id }}</th>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->phone }}</td>
                  <td>{{ $user->last_login }}</td>
                  <td>
                    <a href="#" class="btn btn-success btn-sm"><i class="bi bi-eye"></i></a>
                    <a href="#" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i> </a>
                  </td>
                </tr>
                @endforeach
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
