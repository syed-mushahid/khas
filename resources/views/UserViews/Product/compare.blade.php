@extends('UserViews/Layout.layout')
@section('title',' ')
@section('style')
@endsection
@section('content')
<section class="checkout-wrapper section col-12 pt-4 pb-4 ">
   <div class="container">
      <div class="row justify-content-center ">
         <div class="table-responsive">

          @if(count($phones)>0)
          <table class="table table-bordered table-layout-fixed fs-sm" style="min-width: 45rem; table-layout:fixed">
            <thead>
            <tr>
                <td></td>
                @foreach($phones as $phone)
                    <td class="text-center px-4 pb-4">
                        <a href="{{route('compare.remove',$id=$phone->id)}}" class="removeCompare btn btn-sm btn-outline-danger d-block w-100 text-danger mb-2" ><i class="bi bi-trash me-1"></i>Remove</a><a class="d-inline-block mb-3" href="{{url('product-details')}}"><img src="{{asset($phone->main_image)}}" width="80" alt="{{ $phone->title }}"></a>
                        <h3 class="product-title fs-sm"><a href="{{route('phones.show',$id=$phone->id)}}">{{ $phone->title }}</a></h3>
                        <button class="btn btn-primary btn-sm addToCart" data-phone-id="{{$phone->id}}" type="button">Add to Cart</button>
                    </td>
                @endforeach
            </tr>
            </thead>
            <tbody id="summary" data-filter-target="">
            <tr class="bg-secondary">
                <th class="text-uppercase text-dark">Summary</th>
                @foreach($phones as $phone)
                    <td><span class="text-dark fw-medium text-dark">{{ $phone->title }}</span></td>
                @endforeach
            </tr>
            <tr>
                <th class="text-dark">Brand</th>
                @foreach($phones as $phone)
                    <td>{{ $phone->get_brand->name }}</td> <!-- Assuming that the brand relationship exists -->
                @endforeach
            </tr>
            <tr>
                <th class="text-dark">Model</th>
                @foreach($phones as $phone)
                    <td>{{ $phone->model }}</td>
                @endforeach
            </tr>
            <!-- Add more rows as needed -->
            </tbody>
            <!-- Add more tbody elements as needed -->
        </table>
        @else
        <p class="w-100 text-center text-muted my-5">No Phone Available For Comparision</p>
@endif
         </div>
      </div>
   </div>
</section>
@endsection
@section('script')
<script></script>
@endsection