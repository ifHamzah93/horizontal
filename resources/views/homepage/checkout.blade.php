@extends('homepage.template')
@section('title') Blog Detail Right @endsection
@section('content')
<!--=================================
   header -->
<!--======= Breadcrumb Left With BG Image =======-->
<div class="iq-breadcrumb">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <div class="box-space">
               <div class="iq-breadcrumb-box">
                  <div class="row align-items-center">
                     <div class="col-lg-8">
                        <div class="breadcrumb-title">
                           <h2>Shopping Checkout</h2>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <nav aria-label="breadcrumb" class="text-right">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.html"><i class="ion-android-home"></i>Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                           </ol>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--======= Breadcrumb Left With BG Image =======-->
<!--=================================
   Main Content -->
<section class="iq-gridproduct particles position-relative">
   <div class="circle"></div>
   <div class="circle two"></div>
   <div class="plus">+</div>
   <div class="triangle"></div>
   <div class="triangle two"></div>
   <div class="square"></div>
   <div class="shape-1 two"><img src="{{ URL::asset('images/shape/01.png') }}" alt=""></div>
   <div class="shape-2 two"><img src="{{ URL::asset('images/shape/02.png') }}" alt=""></div>
   <div class="iq-checkout">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-12">
               <div class="shop-widget">
                  <div id="accordionOne">
                     <div class="card">
                        <div class="card-header" id="headingOne">
                           <h5 class="mb-0">
                              <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              <span class="d-inline"><span class="card-title">Returning customer?</span> <span class="iq-font-green"> Click here to login</span></span>
                              </a>
                           </h5>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                           <div class="checkout-input">
                              <form>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Email Address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email">
                                 </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <div class="form-check">
                                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="text-right">
                                          <a href="#">Forgot Password?</a>
                                       </div>
                                    </div>
                                 </div>
                                 <button type="submit" class="btn-black">Submit</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-12 re-mtb-30">
               <div class="shop-widget">
                  <div id="accordionTwo">
                     <div class="card dashed">
                        <div class="card-header" id="headingTwo">
                           <h5 class="mb-0">
                              <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                              <span class="d-inline">
                              <span class="card-title">Have a coupon?</span> <span class="iq-font-green"> Click here to enter your code</span>
                              </span>
                              </a>
                           </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                           <div class="checkout-input">
                              <form>
                                 <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter Coupon Code">
                                 </div>
                                 <button type="submit" class="btn-black">Apply Coupon</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-6 col-sm-12">
               <form class="billing-form">
                  <div class="title">
                     <h5><b>Billing & Shipping Detail</b></h5>
                  </div>
                  <!-- NAME -->
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Enter Name*">
                  </div>
                  <!-- phone number -->
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Phone*">
                  </div>
                  <!-- Email NAME -->
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Enter Email*">
                  </div>
                  <!-- ZIP CODE -->
                  <div class="form-group">
                     <input class="form-control" type="text" name="zip" placeholder="Zip Code*">
                  </div>
                  <!-- Address 1 -->
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Flat, House no., Building, Company, Apartment*">
                  </div>
                  <!-- Address 2 -->
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Area, Colony, Street, Sector, Village*">
                  </div>
                  <!-- Landmark -->
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Landmark*">
                  </div>
                  <!-- CITY / TOWN -->
                  <div class="form-group">
                     <input class="form-control" type="text" name="city" placeholder="City / Town*">
                  </div>
                  <!-- COUNTRY -->
                  <div class="form-group">
                     <select class="form-control">
                        <option>Select State</option>
                        <option value="AF">Alaska</option>
                        <option value="AL">California</option>
                        <option value="DZ">Hawaii</option>
                        <option value="AD">Pennsylvania</option>
                        <option value="AO">New Jersey</option>
                        <option value="AI">Washington</option>
                        <option value="AU">Texas</option>
                        <option value="AT">Michigan</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <select class="form-control">
                        <option>Delivery preferences</option>
                        <option value="AF">Deliver 7am - 9pm, all days</option>
                        <option value="AL">Deliver 10am - 5pm, Monday to Friday</option>
                        <option value="DZ">Deliver 7am - 9pm, saturday to sunday</option>
                        <option value="AD">Deliver sunday</option>
                     </select>
                  </div>
               </form>
            </div>
            <div class="col-lg-6 col-md-12">
               <div class="iq-cartbox">
                  <div class="iq-totale">
                     <h6><b>Your Total Order</b></h6>
                     <div class="iq-carttotal">
                        <table class="table">
                           <thead>
                              <tr>
                                 <th scope="col">PRICE DETAILS</th>
                                 <th scope="col"></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>Bag Total</td>
                                 <td class="text-right iq-font-black">$3000</td>
                              </tr>
                              <tr>
                                 <td>Bag Discount</td>
                                 <td class="highlight text-right iq-font-black">- $1000 </td>
                              </tr>
                              <tr>
                                 <td>Estimated Tax </td>
                                 <td class="text-right iq-font-black"> $50 </td>
                              </tr>
                              <tr>
                                 <td>Coupon Discount</td>
                                 <td class="text-right iq-font-black">- $100</td>
                              </tr>
                              <tr>
                                 <td>Delivery</td>
                                 <td class="highlight text-right iq-font-green">FREE</td>
                              </tr>
                              <tr class="tbl-footer">
                                 <td><b>Total Payable</b></td>
                                 <td class="text-right iq-font-black"><b>$1950</b></td>
                              </tr>
                           </tbody>
                        </table>
                        <div class="pay-box">
                           <h6><b>Payment Type</b></h6>
                           <p>There are many variations of passages of Lorem Ipsum available.</p>
                           <ul>
                              <li>
                                 <div class="radio">
                                    <input type="radio" name="radio1" id="radio1" value="option1" checked="">
                                    <label for="radio1">Direct Bank Transfer</label>
                                 </div>
                              </li>
                              <li>
                                 <div class="radio">
                                    <input type="radio" name="radio1" id="radio2" value="option2">
                                    <label for="radio2">Cheque</label>
                                 </div>
                              </li>
                              <li>
                                 <div class="radio">
                                    <input type="radio" name="radio1" id="radio3" value="option3">
                                    <label for="radio3">Cash On Delivery</label>
                                 </div>
                              </li>
                              <li>
                                 <div class="radio">
                                    <input type="radio" name="radio1" id="radio4" value="option4">
                                    <label for="radio4">Paypal</label>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <div class="iq-terms">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                              I have read terms and conditions*
                              </label>
                           </div>
                        </div>
                        <a class="btn-black" href="#">PLACE ORDER</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--=================================
   Main Content -->
<!--=================================
@endsection