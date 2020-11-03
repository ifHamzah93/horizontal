@extends('homepage.template')
@section('title') Shop Detail Sidebar @endsection
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
                           <h2>Men Collection</h2>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <nav aria-label="breadcrumb" class="text-right">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.html"><i class="ion-android-home"></i>Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Men</li>
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
   <div class="shape-1"><img src="{{ URL::asset('images/shape/01.png') }}" alt=""></div>
   <div class="shape-1 two"><img src="{{ URL::asset('images/shape/01.png') }}" alt=""></div>
   <div class="shape-2"><img src="{{ URL::asset('images/shape/02.png') }}" alt=""></div>
   <div class="shape-2 two"><img src="{{ URL::asset('images/shape/02.png') }}" alt=""></div>
   <div class="container">
      <div class="row">
         <div class="col-lg-3 col-md-12 col-sm-12">
            <div class="shop-widget">
               <div class="iq-post-sidebar">
                  <div class="shop-filter">
                     <!-- /Brand Start-->
                     <div class="product-box brand-box">
                        <h5> Brands</h5>
                        <div class="iq-widget-menu">
                           <div class="silly_scrollbar">
                              <form>
                                 <div class="remember-checkbox">
                                    <input type="checkbox" name="one" id="one">
                                    <label class="remember" for="one">Nike</label>
                                 </div>
                                 <div class="remember-checkbox">
                                    <input type="checkbox" name="two" id="two">
                                    <label class="remember" for="two">Puma</label>
                                 </div>
                                 <div class="remember-checkbox">
                                    <input type="checkbox" name="three" id="three">
                                    <label class="remember" for="three">Nush</label>
                                 </div>
                                 <div class="remember-checkbox">
                                    <input type="checkbox" name="four" id="four">
                                    <label class="remember" for="four">Rheson</label>
                                 </div>
                                 <div class="remember-checkbox">
                                    <input type="checkbox" name="five" id="five">
                                    <label class="remember" for="five">Adidas</label>
                                 </div>
                                 <div class="remember-checkbox">
                                    <input type="checkbox" name="six" id="six">
                                    <label class="remember" for="six">Tommy Hilfiger</label>
                                 </div>
                                 <div class="remember-checkbox">
                                    <input type="checkbox" name="seven" id="seven">
                                    <label class="remember" for="seven">Rheson</label>
                                 </div>
                                 <div class="remember-checkbox">
                                    <input type="checkbox" name="eight" id="eight">
                                    <label class="remember" for="eight">Tommy Hilfiger</label>
                                 </div>
                                 <div class="remember-checkbox">
                                    <input type="checkbox" name="nine" id="nine">
                                    <label class="remember" for="nine">Tommy Hilfiger</label>
                                 </div>
                                 <div class="remember-checkbox">
                                    <input type="checkbox" name="ten" id="ten">
                                    <label class="remember" for="ten">Tommy Hilfiger</label>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <!-- /Brand End-->
                     <!-- discount start -->
                     <div class="product-box discount-box">
                        <h5> Price Range</h5>
                        <div class="iq-widget-menu">
                           <div class="silly_scrollbar">
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                 <label class="form-check-label" for="exampleRadios1">
                                    10% and above
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                 <label class="form-check-label" for="exampleRadios2">
                                    20% and above
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option2">
                                 <label class="form-check-label" for="exampleRadios3">
                                    30% and above
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option2">
                                 <label class="form-check-label" for="exampleRadios4">
                                    40% and above
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option2">
                                 <label class="form-check-label" for="exampleRadios5">
                                    50% and above
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios6" value="option2">
                                 <label class="form-check-label" for="exampleRadios6">
                                    60% and above
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios7" value="option2">
                                 <label class="form-check-label" for="exampleRadios7">
                                    70% and above
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios8" value="option2">
                                 <label class="form-check-label" for="exampleRadios8">
                                    80% and above
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios9" value="option2">
                                 <label class="form-check-label" for="exampleRadios9">
                                    90% and above
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- discount end -->
                     <!-- color start -->
                     <div class="product-box color-box">
                        <h5> Color</h5>
                        <div class="iq-widget-menu">
                           <div class="color-content">
                              <div class="silly_scrollbar">
                                 <ul>
                                    <li>
                                       <span class="color color-1"> </span>
                                       <span class="color-name"> Pink</span>
                                    </li>
                                    <li>
                                       <span class="color color-2"> </span>
                                       <span class="color-name"> Orange</span>
                                    </li>
                                    <li>
                                       <span class="color color-3"> </span>
                                       <span class="color-name"> Red</span>
                                    </li>
                                    <li>
                                       <span class="color color-4"> </span>
                                       <span class="color-name"> Yellow</span>
                                    </li>
                                    <li>
                                       <span class="color color-5"> </span>
                                       <span class="color-name"> Green</span>
                                    </li>
                                    <li>
                                       <span class="color color-6"> </span>
                                       <span class="color-name"> Blue</span>
                                    </li>
                                    <li>
                                       <span class="color color-7"> </span>
                                       <span class="color-name"> Teal</span>
                                    </li>
                                    <li>
                                       <span class="color color-8"> </span>
                                       <span class="color-name">Purple </span>
                                    </li>
                                    <li>
                                       <span class="color color-9"> </span>
                                       <span class="color-name"> Brown</span>
                                    </li>
                                    <li>
                                       <span class="color color-10"> </span>
                                       <span class="color-name">Grey </span>
                                    </li>
                                    <li>
                                       <span class="color color-11"> </span>
                                       <span class="color-name"> Black</span>
                                    </li>
                                    <li>
                                       <span class="color color-12"> </span>
                                       <span class="color-name"> White</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- color end -->
                     <!-- price start -->
                     <div class="product-box price-box">
                        <h5> Price</h5>
                        <div class="iq-widget-menu rang-box">
                           <p>
                              <input type="text" id="price">
                           </p>
                           <div id="mySlider"></div>
                        </div>
                        <a class="btn-black" href="#"> filter</a>
                     </div>
                     <!-- price end -->
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-9 col-md-12 col-sm-12 re-mtb-30">
            <!-- shorting start -->
            <div class="row align-items-center">
               <div class="col-lg-6 col-md-4 col-sm-12">
                  <div class="products-show">
                     <span>Showing 1–3 Of 21 Results</span>
                  </div>
               </div>
               <div class="col-lg-4 col-md-5 col-sm-12">
                  <div class="form-group short-price float-right">
                     <select class="form-control" id="exampleFormControlSelect1">
                        <option>Sort by</option>
                        <option>New</option>
                        <option>Popularity</option>
                        <option>Discount</option>
                        <option>Price: low to high</option>
                        <option>Price: high to low</option>
                     </select>
                  </div>
               </div>
               <div class="col-lg-2 col-md-3 col-sm-12">
                  <div class="short-iconbox float-right">
                     <div class="short-icon">
                        <a href="shopgrid-sidebar.html"> <i class="fa fa-th" aria-hidden="true"></i></a>
                        <a href="shoplisting-sidebar.html"><i class="fa fa-list" aria-hidden="true"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- shorting part end -->
            <!-- products start -->
            <div class="row">
               <div class="col-lg-12">
                  <div class="iq-productbox iq-gridlist">
                     <div class="media">
                        <div class="shopping-body">
                           <div class="product-image">
                              <img class="hover img-fluid" src="{{ URL::asset('images/product/01.jpg') }}" alt="product image">
                           </div>
                           <ul class="product-icon">
                              <li><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                           </ul>
                           <div class="btn-box">
                              <a class="button" href="#"><img src="{{ URL::asset('images/icon/001.png') }}" alt="">Add to cart</a>
                           </div>
                        </div>
                        <div class="media-body">
                           <div class="shopping-footer">
                              <div class="product-detail text-left">
                                 <h5><a href="#">Women fancy tops</a></h5>
                                 <div class="shop-price">
                                    <del>$130.00</del>&nbsp;&nbsp;<strong>$98.50</strong>
                                 </div>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="iq-productbox iq-gridlist">
                     <div class="media">
                        <div class="shopping-body">
                           <div class="product-image">
                              <img class="hover img-fluid" src="{{ URL::asset('images/product/02.jpg') }}" alt="product image">
                           </div>
                           <ul class="product-icon">
                              <li><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                           </ul>
                           <div class="btn-box">
                              <a class="button" href="#"><img src="{{ URL::asset('images/icon/001.png') }}" alt="">Add to cart</a>
                           </div>
                        </div>
                        <div class="media-body">
                           <div class="shopping-footer">
                              <div class="product-detail text-left">
                                 <h5><a href="#">Women fancy tops</a></h5>
                                 <div class="shop-price">
                                    <del>$130.00</del>&nbsp;&nbsp;<strong>$98.50</strong>
                                 </div>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="iq-productbox iq-gridlist">
                     <div class="media">
                        <div class="shopping-body">
                           <div class="product-image">
                              <img class="hover img-fluid" src="{{ URL::asset('images/product/03.jpg') }}" alt="product image">
                           </div>
                           <ul class="product-icon">
                              <li><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                           </ul>
                           <div class="btn-box">
                              <a class="button" href="#"><img src="{{ URL::asset('images/icon/001.png') }}" alt="">Add to cart</a>
                           </div>
                        </div>
                        <div class="media-body">
                           <div class="shopping-footer">
                              <div class="product-detail text-left">
                                 <h5><a href="#">Women fancy tops</a></h5>
                                 <div class="shop-price">
                                    <del>$130.00</del>&nbsp;&nbsp;<strong>$98.50</strong>
                                 </div>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="iq-productbox iq-gridlist">
                     <div class="media">
                        <div class="shopping-body">
                           <div class="product-image">
                              <img class="hover img-fluid" src="{{ URL::asset('images/product/04.jpg') }}" alt="product image">
                           </div>
                           <ul class="product-icon">
                              <li><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                           </ul>
                           <div class="btn-box">
                              <a class="button" href="#"><img src="{{ URL::asset('images/icon/001.png') }}" alt="">Add to cart</a>
                           </div>
                        </div>
                        <div class="media-body">
                           <div class="shopping-footer">
                              <div class="product-detail text-left">
                                 <h5><a href="#">Women fancy tops</a></h5>
                                 <div class="shop-price">
                                    <del>$130.00</del>&nbsp;&nbsp;<strong>$98.50</strong>
                                 </div>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="iq-productbox iq-gridlist">
                     <div class="media">
                        <div class="shopping-body">
                           <div class="product-image">
                              <img class="hover img-fluid" src="{{ URL::asset('images/product/05.jpg') }}" alt="product image">
                           </div>
                           <ul class="product-icon">
                              <li><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                           </ul>
                           <div class="btn-box">
                              <a class="button" href="#"><img src="{{ URL::asset('images/icon/001.png') }}" alt="">Add to cart</a>
                           </div>
                        </div>
                        <div class="media-body">
                           <div class="shopping-footer">
                              <div class="product-detail text-left">
                                 <h5><a href="#">Women fancy tops</a></h5>
                                 <div class="shop-price">
                                    <del>$130.00</del>&nbsp;&nbsp;<strong>$98.50</strong>
                                 </div>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="iq-productbox iq-gridlist">
                     <div class="media">
                        <div class="shopping-body">
                           <div class="product-image">
                              <img class="hover img-fluid" src="{{ URL::asset('images/product/06.jpg') }}" alt="product image">
                           </div>
                           <ul class="product-icon">
                              <li><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                           </ul>
                           <div class="btn-box">
                              <a class="button" href="#"><img src="{{ URL::asset('images/icon/001.png') }}" alt="">Add to cart</a>
                           </div>
                        </div>
                        <div class="media-body">
                           <div class="shopping-footer">
                              <div class="product-detail text-left">
                                 <h5><a href="#">Women fancy tops</a></h5>
                                 <div class="shop-price">
                                    <del>$130.00</del>&nbsp;&nbsp;<strong>$98.50</strong>
                                 </div>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="iq-productbox iq-gridlist">
                     <div class="media">
                        <div class="shopping-body">
                           <div class="product-image">
                              <img class="hover img-fluid" src="{{ URL::asset('images/product/01.jpg') }}" alt="product image">
                           </div>
                           <ul class="product-icon">
                              <li><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                           </ul>
                           <div class="btn-box">
                              <a class="button" href="#"><img src="{{ URL::asset('images/icon/001.png') }}" alt="">Add to cart</a>
                           </div>
                        </div>
                        <div class="media-body">
                           <div class="shopping-footer">
                              <div class="product-detail text-left">
                                 <h5><a href="#">Women fancy tops</a></h5>
                                 <div class="shop-price">
                                    <del>$130.00</del>&nbsp;&nbsp;<strong>$98.50</strong>
                                 </div>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- products end -->
            <!-- pagination start -->
            <div class="row">
               <div class="col-sm-12">
                  <div class="pagi-box">
                     <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                           <li class="page-item">
                              <a class="page-link" href="#" aria-label="Previous">
                                 <span aria-hidden="true">&laquo;</span>
                                 <span class="sr-only">Previous</span>
                              </a>
                           </li>
                           <li class="page-item active"><a class="page-link" href="#">1</a></li>
                           <li class="page-item"><a class="page-link" href="#">2</a></li>
                           <li class="page-item"><a class="page-link" href="#">3</a></li>
                           <li class="page-item">
                              <a class="page-link" href="#" aria-label="Next">
                                 <span aria-hidden="true">&raquo;</span>
                                 <span class="sr-only">Next</span>
                              </a>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
            <!-- pagination end -->
         </div>
      </div>
   </div>
</section>
<!--=================================
Main Content -->
@endsection

@section('script')
<script src='{{ URL::asset('homepage/js/slick/slick.min.js') }}'></script>
<script src='{{ URL::asset('homepage/js/price_range_script.js') }}'></script>
<script src='{{ URL::asset('homepage/js/jquery-ui.js') }}'></script>
@endsection