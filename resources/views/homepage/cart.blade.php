@extends('homepage.template')
@section('title') Cart @endsection
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
                           <h2>Shopping Cart</h2>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <nav aria-label="breadcrumb" class="text-right">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.html"><i class="ion-android-home"></i>Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Cart</li>
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
<section class="iq-cartbox particles position-relative">
   <div class="circle"></div>
   <div class="plus">+</div>
   <div class="triangle two"></div>
   <div class="shape-1"><img src="{{ URL::asset('images/shape/01.png') }}" alt=""></div>
   <div class="shape-2 two"><img src="{{ URL::asset('images/shape/02.png') }}" alt=""></div>
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <div class="table-responsive">
               <table class="table table-bordered iq-shopping-cart-table text-center">
                  <thead>
                     <tr>
                        <th></th>
                        <th><span>PHOTO</span></th>
                        <th><span>PRODUCT</span></th>
                        <th><span>UNIT PRICE</span></th>
                        <th><span>QUANTITY</span></th>
                        <th><span>TOTAL</span></th>
                        <th></th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td class="text-center align-middle">1</td>
                        <td class="align-middle"><a href="#"><img src="{{ URL::asset('images/gallery/01.jpg') }}" alt="img"></a></td>
                        <td class="align-middle"><a href="#">Men</a></td>
                        <td class="align-middle">
                           <div class="iq-price">$98.55</div>
                        </td>
                        <td class="align-middle">
                           <div class="input-group">
                              <span class="input-group-btn">
                                 <button type="button" class="quantity-left-minus btn btn-number"  data-type="minus" data-field="">
                                 <i class="ion-ios-minus-empty"></i>
                                 </button>
                              </span>
                              <input type="text" name="quantity" class="form-control input-number quantity" value="0">
                              <span class="input-group-btn">
                                 <button type="button" class="quantity-right-plus btn btn-number" data-type="plus" data-field="">
                                 <i class="ion-ios-plus-empty"></i>
                                 </button>
                              </span>
                           </div>
                        </td>
                        <td class="align-middle">
                           <div class="final-price">$98.55</div>
                        </td>
                        <td class="align-middle"><a href="#" class="icon-close align-middle"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                     </tr>
                     <tr>
                        <td class="text-center align-middle">2</td>
                        <td class="align-middle"><a href="#"><img src="{{ URL::asset('images/gallery/02.jpg') }}" alt="img"></a></td>
                        <td class="align-middle"><a href="#" class="align-middle">Women</a></td>
                        <td class="align-middle">
                           <div class="iq-price">$98.55</div>
                        </td>
                        <td class="align-middle">
                           <div class="input-group">
                              <span class="input-group-btn">
                                 <button type="button" class="quantity-left-minus btn btn-number"  data-type="minus" data-field="">
                                 <i class="ion-ios-minus-empty"></i>
                                 </button>
                              </span>
                              <input type="text" name="quantity" class="form-control input-number quantity" value="0">
                              <span class="input-group-btn">
                                 <button type="button" class="quantity-right-plus btn btn-number" data-type="plus" data-field="">
                                 <i class="ion-ios-plus-empty"></i>
                                 </button>
                              </span>
                           </div>
                        </td>
                        <td class="align-middle">
                           <div class="final-price">$98.55</div>
                        </td>
                        <td class="align-middle"><a href="#" class="icon-close align-middle"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div class="iq-update_cart">
               <form class="form-inline float-left">
                  <div class="form-group mx-sm-3">
                     <input type="text" class="form-control" id="inputPassword2" placeholder="Coupon Code">
                  </div>
                  <a class="button iq-re-mt" href="#">Apply coupon</a>
               </form>
               <a class="button float-right" href="#">Update Cart</a>
            </div>
         </div>
      </div>
      <div class="row justify-content-end">
         <div class="col-lg-6 col-md-12">
            <div class="iq-totale">
               <h6>Cart Totals</h6>
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
                           <td class="text-right iq-font-black"><b> $1950</b></td>
                        </tr>
                     </tbody>
                  </table>
                  <a class="btn-black" href="#">PLACE ORDER</a>
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