@extends('UserViews/Layout.layout')
@section('title',' ')
@section('style')
<link rel="stylesheet" href="{{asset('css/purchase/checkout.css')}}">
@endsection
@section('content')
<section class="checkout-wrapper section col-12 pt-4 pb-4 ">
   <div class="container">
      <div class="row justify-content-center ">
         <div class="col-lg-8">
            <div class="checkout-steps-form-style-1 bg-white p-4 pt-1 rounded border ">
                <div class="row">
                   <div class="col-md-12">
                      <div class="single-form form-default">
                          <h3>Shipping Information</h3>
                          <div class="row">
                              <div class="col-md-6 form-input form">
                                <label>Recivers Name</label>
                               <input type="text" placeholder="Recivers Name">
                            </div>
                            <div class="col-md-6 form-input form">
                                <label>Recivers Phone</label>
                               <input type="text" placeholder="Recivers Phone">
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-md-6">
                      <div class="single-form form-default">
                         <label>Email Address</label>
                         <div class="form-input form">
                            <input type="text" placeholder="Email Address">
                         </div>
                      </div>
                   </div>

                   <div class="col-md-6">
                    <div class="single-form form-default">
                       <label>City</label>
                       <div class="form-input form">
                          <input type="text" placeholder="City">
                       </div>
                    </div>
                 </div>

                   <div class="col-md-12">
                      <div class="single-form form-default">
                         <label>Full Address</label>
                         <div class="form-input form">
                            <input type="text" placeholder="Full Address">
                         </div>
                      </div>
                   </div>

                   <div class="col-md-6">
                      <div class="single-form form-default">
                         <label>Post Code</label>
                         <div class="form-input form">
                            <input type="text" placeholder="Post Code">
                         </div>
                      </div>
                   </div>

                   <div class="col-md-6">
                      <div class="single-form form-default">
                         <label>Provice</label>
                         <div class="select-items">
                            <select class="form-control">
                               <option value="0">Select Provice</option>
                               <option value="1">Azad Kahmir</option>
                               <option value="1">Balochistan</option>
                               <option value="1">Islamabad - Capital</option>
                               <option value="2">KPK</option>
                               <option value="3">Punjab</option>
                               <option value="4">Sindh</option>
                               <option value="5">Gilgit Baltistan</option>
                            </select>
                         </div>
                      </div>
                   </div>
                   <div class="col-md-12">
                      <div class="checkout-payment-option">
                         <h3 class="">Select Delivery
                            Option
                         </h3>
                         <div class="payment-option-wrapper">
                            <div class="single-payment-option">
                               <input type="radio" name="shipping" checked="" id="shipping-1">
                               <label for="shipping-1">
                                  <img width="100px"src="https://www.kptourism.com/uploads/images/poi/1612765285721Pakistan-post-logo.png" alt="PPO">
                                  <p>Pakistan Post</p>
                                  <span class="price">Rs/200</span>
                               </label>
                            </div>
                            <div class="single-payment-option">
                               <input type="radio" name="shipping" id="shipping-2">
                               <label for="shipping-2">
                                  <img  width="100px"src="https://www.tcsexpress.com/Assets/images/Logo.png" alt="TCS">
                                  <p>TCS</p>
                                  <span class="price">RS/300</span>
                               </label>
                            </div>
                            <div class="single-payment-option">
                               <input type="radio" name="shipping" id="shipping-3">
                               <label for="shipping-3">
                                  <img width="100px" src="https://www.leopardscourier.com/logos/LCS-Main-Logo-300x128.png" alt="Leopard">
                                  <p>Leopard Exress</p>
                                  <span class="price">RS/310</span>
                               </label>
                            </div>
                            <div class="single-payment-option">
                               <input type="radio" name="shipping" id="shipping-4">
                               <label for="shipping-4">
                                  <img width="100px"src="https://trax.pk/wp-content/uploads/2021/07/Black-Logo.svg" alt="Trax">

                                  <p>Trax</p>
                                  <span class="price">RS/280</span>
                               </label>
                            </div>
                         </div>
                      </div>
                   </div>

                </div>

                <div class="row mt-1">
                    <div class="col-12">
                       <div class="checkout-payment-form">
                           <h3>Payment Information</h3>
                           <form action="{{route('pay.now')}}" method="post" id="payment-form">
                              @csrf
                               <div class="form-row">
                                 <label for="card-element">
                                   Credit or debit card
                                 </label>
                                 <div id="card-element">
                                   <!-- A Stripe Element will be inserted here. -->
                                 </div>

                                 <!-- Used to display Element errors. -->
                                 <div id="card-errors" role="alert"></div>
                               </div>

                               <button>Submit Payment</button>
                             </form>


                       </div>
                    </div>
                 </div>

            </div>
         </div>
         <div class="col-lg-4">
            <div class="checkout-sidebar">
               <div class="checkout-sidebar-coupon">
                  <p>Appy Coupon to get discount!</p>
                  <form action="#">
                     <div class="single-form form-default">
                        <div class="form-input form">
                           <input type="text" placeholder="Coupon Code">
                        </div>
                        <div class="button">
                           <button class="btn btn-khas-primary rounded-0">apply</button>
                        </div>
                     </div>
                  </form>
               </div>
               <br>
               <div class="checkout-sidebar-price-table mt-30">
                  <h5 class="title">Pricing Table</h5>
                  <div class="sub-total-price">
                     <div class="total-price">
                        <p class="value">Subotal Price:</p>
                        <p class="price">RS/50,000</p>
                     </div>
                     <div class="total-price shipping">
                        <p class="value">Delivery Charges:</p>
                        <p class="price">RS/300</p>
                     </div>
                     <div class="total-price discount">
                        <p class="value">Discount:</p>
                        <p class="price">RS/1000</p>
                     </div>
                  </div>
                  <div class="total-payable">
                     <div class="payable-price">
                        <p class="value">Total Price:</p>
                        <p class="price">RS/49,7000</p>
                     </div>
                  </div>
                  <div class="price-table-btn button ">
                     <a href="javascript:void(0)" class="col-12 btn btn-khas-primary">Checkout</a>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </div>
</section>
@endsection
@section('script')
<script src="https://js.stripe.com/v3/"></script>
<script>
    // Create a Stripe client.
    var stripe = Stripe('{{ env("STRIPE_KEY") }}');
    const elements = stripe.elements();
// Custom styling can be passed to options when creating an Element.
const style = {
  base: {
    // Add your base input styles here. For example:
    fontSize: '16px',
    color: '#32325d',
  },
};

// Create an instance of the card Element.
const card = elements.create('card', {style});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');

// Create a token or display an error when the form is submitted.
const form = document.getElementById('payment-form');
form.addEventListener('submit', async (event) => {
  event.preventDefault();

  const {token, error} = await stripe.createToken(card);

  if (error) {
    // Inform the customer that there was an error.
    const errorElement = document.getElementById('card-errors');
    errorElement.textContent = error.message;
  } else {
    // Send the token to your server.
    stripeTokenHandler(token);
  }
});

const stripeTokenHandler = (token) => {
  // Insert the token ID into the form so it gets submitted to the server
  const form = document.getElementById('payment-form');
  const hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);

  // Submit the form
  form.submit();
}
</script>

@endsection