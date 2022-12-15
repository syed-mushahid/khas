@extends('UserViews/Layout.layout')
@section('title', ' ')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/Purchase/cart.css') }}">
@endsection
@section('content')
    <section class="checkout-wrapper section col-12 pt-4 pb-4 ">
        <div class="shopping-cart section">
            <div class="container">
                <div class="row">
<div class="col-md-8">
    <div class="col-12 bg-white border rounded">


<table class="table">
    <thead>
        <tr>
            <th>
                Product
            </th>
            <th>
                Quantity
            </th>
            <th>
                Sub Total
            </th>
            <th>
                Remove
            </th>

        </tr>
    </thead>
    <tbody>
        <tr class="py-5">
            <td>
               <a href="#"> <h3>I Phone 14 Pro</h3></a>
            </td>
            <td>
                1
            </td>
            <td>
                150,000
            </td>
            <td>
                <button class="btn btn-sm btn-outline-khas-primary"><i class="bi bi-trash-fill"></i></button>
            </td>
        </tr>
        <tr class="py-5">
            <td>
               <a href="#"> <h3>I Phone 14 Pro</h3></a>
            </td>
            <td>
                1
            </td>
            <td>
                150,000
            </td>
            <td>
                <button class="btn btn-sm btn-outline-khas-primary"><i class="bi bi-trash-fill"></i></button>
            </td>
        </tr>
        <tr class="py-5">
            <td>
               <a href="#"> <h3>I Phone 14 Pro</h3></a>
            </td>
            <td>
                1
            </td>
            <td>
                150,000
            </td>
            <td>
                <button class="btn btn-sm btn-outline-khas-primary"><i class="bi bi-trash-fill"></i></button>
            </td>
        </tr>
        <tr class="py-5">
            <td>
               <a href="#"> <h3>I Phone 14 Pro</h3></a>
            </td>
            <td>
                1
            </td>
            <td>
                150,000
            </td>
            <td>
                <button class="btn btn-sm btn-outline-khas-primary"><i class="bi bi-trash-fill"></i></button>
            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
<td></td>
<td>5</td>
<td>5934343</td>
<td></td>
        </tr>
    </tfoot>
</table>

    </div>
</div>
<div class="col-md-4">
    <div class="col-12">
    <div class="row">

        <form action="#"
            class="col-12 d-flex justify-content-around align-items-center py-5 mb-4 bg-white border rounded">
            <div class="">
                <input name="Coupon" class="form-control" placeholder="Enter Your Coupon">
            </div>
            <div class="">
                <button class="btn btn-khas-primary">Apply Coupon</button>
            </div>
        </form>


        <div class="col-12 d-flex justify-content-around align-items-center bg-white border rounded">


            <div class="row p-4">
                <div class="row my-2">
                    <div class="col-6 text-start">Subtotal</div>
                    <div class="col-6 text-end">RS.23223</div>
                </div>
                <div class="row my-2">
                    <div class="col-6 text-start">Shipping</div>
                    <div class="col-6 text-end">RS.233</div>
                </div>
                <div class="row my-2">
                    <div class="col-6 text-start">Copoun Discount</div>
                    <div class="col-6 text-end">RS.233</div>
                </div>
                <div class="row my-2">
                    <div class="col-6 text-start">Total</div>
                    <div class="col-6 text-end">RS.29033</div>
                </div>

                {{-- <ul>
                                <li class="my-2">Cart Subtotal<span class="ms-4">$2560.00</span></li>
                                <li class="my-2">Shipping<span class="ms-4">Free</span></li>
                                <li class="my-2">You Save<span class="ms-4">$29.00</span></li>
                                <li class="my-2">You Pay<span class="ms-4">$2531.00</span></li>
                            </ul> --}}
                <div class="col-12 d-flex justify-content-between mt-3">
                    <a href="/" class="btn btn-khas-primary">Continue shopping</a>
                    <a href="{{url('/checkout')}}" class="btn btn-outline-khas-primary">Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>

</div>



                </div>






            </div>
        </div>

        </div>
    </section>
@endsection
@section('script')
    <script></script>
@endsection
