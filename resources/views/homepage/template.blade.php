<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title> @yield('title') | Skote - Responsive Bootstrap 4 Admin Dashboard</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
      <meta content="Themesbrand" name="author" />
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <link rel="shortcut icon" href="{{ URL::asset('images/favicon.ico')}}">

      @yield('css')
      <link href="{{ URL::asset('homepage/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ URL::asset('homepage/css/style.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ URL::asset('homepage/css/responsive.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ URL::asset('homepage/css/custom.css') }}" rel="stylesheet" type="text/css" />
    </head>

    @yield('body')
    <body>
    	<!-- loading -->
      <div id="loading">
         <div id="loading-center">
            <img src="{{ URL::asset('images/loader.png') }}" alt="loder">
         </div>
      </div>
      <!-- loading End -->
      <!--=================================
      header -->
      <header>
         <!-- menu start -->
         <nav id="menu-1" class="mega-menu">
            <!-- menu list items container -->
            <section class="menu-list-items">
               <div class="container-fluid">
                  <div class="row align-items-center">
                     <div class="col-lg-2 lg-one">
                        <!-- menu logo -->
                        <ul class="menu-logo">
                           <li>
                              <a href="{{ url('') }}">
                                 <img id="logo_img" src="{{ URL::asset('images/logo.png') }}" alt="logo">
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="col-lg-8 d-flex justify-content-center">
                        <!-- menu links -->
                        <ul class="menu-links">
                           <!-- active class -->
                           <li class="active"><a href="{{ url('') }}">HOME</a></li>
                           <li>
                              <a href="javascript:void(0)">WOMEN</a>
                              <div class="drop-down grid-col-12">
                                 <!--grid row-->
                                 <div class="grid-row">
                                    <!--grid column 3-->
                                    <div class="grid-col-3">
                                       <h3>Clothing</h3>
                                       <ul>
                                          <li><a href="#">T-shirts</a></li>
                                          <li><a href="#">Trousers</a></li>
                                          <li><a href="#">Jeans</a></li>
                                          <li><a href="#">Shirts</a></li>
                                       </ul>
                                    </div>
                                    <!--grid column 3-->
                                    <div class="grid-col-3">
                                       <h3>Shoes</h3>
                                       <ul>
                                          <li><a href="#">Sports Shoes</a></li>
                                          <li><a href="#">Formal Shoes </a></li>
                                          <li><a href="#">Casual Shoes</a></li>
                                          <li><a href="#">Sneakers</a></li>
                                       </ul>
                                    </div>
                                    <!--grid column 3-->
                                    <div class="grid-col-3">
                                       <h3>Accessories</h3>
                                       <ul>
                                          <li><a href="#">Watches</a></li>
                                          <li><a href="#">Bracelet</a></li>
                                          <li><a href="#">Bangles </a></li>
                                       </ul>
                                    </div>
                                    <div class="grid-col-3">
                                       <ul class="header-bg">
                                          <li> <img src="{{ URL::asset('images/header/women.jpg') }}" alt="#"></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <a href="javascript:void(0)">MEN</a>
                              <div class="drop-down grid-col-12">
                                 <!--grid row-->
                                 <div class="grid-row">
                                    <!--grid column 3-->
                                    <div class="grid-col-3">
                                       <h3>Clothing</h3>
                                       <ul>
                                          <li><a href="#">T-shirts</a></li>
                                          <li><a href="#">Trousers</a></li>
                                          <li><a href="#">Jeans</a></li>
                                          <li><a href="#">Shirts</a></li>
                                       </ul>
                                    </div>
                                    <!--grid column 3-->
                                    <div class="grid-col-3">
                                       <h3>Shoes</h3>
                                       <ul>
                                          <li><a href="#">Sports Shoes</a></li>
                                          <li><a href="#">Formal Shoes </a></li>
                                          <li><a href="#">Casual Shoes</a></li>
                                          <li><a href="#">Sneakers</a></li>
                                       </ul>
                                    </div>
                                    <!--grid column 3-->
                                    <div class="grid-col-3">
                                       <h3>Accessories</h3>
                                       <ul>
                                          <li><a href="#">Watches</a></li>
                                          <li><a href="#">Bracelet</a></li>
                                          <li><a href="#">Bangles </a></li>
                                       </ul>
                                    </div>
                                    <div class="grid-col-3">
                                       <ul class="header-bg">
                                          <li> <img src="{{ URL::asset('images/header/men.jpg') }}" alt="#"></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <a href="javascript:void(0)">KIDS</a>
                              <div class="drop-down grid-col-12">
                                 <!--grid row-->
                                 <div class="grid-row">
                                    <!--grid column 3-->
                                    <div class="grid-col-3">
                                       <h3>Clothing</h3>
                                       <ul>
                                          <li><a href="#">T-shirts</a></li>
                                          <li><a href="#">Trousers</a></li>
                                          <li><a href="#">Jeans</a></li>
                                          <li><a href="#">Shirts</a></li>
                                       </ul>
                                    </div>
                                    <!--grid column 3-->
                                    <div class="grid-col-3">
                                       <h3>Shoes</h3>
                                       <ul>
                                          <li><a href="#">Sports Shoes</a></li>
                                          <li><a href="#">Formal Shoes </a></li>
                                          <li><a href="#">Casual Shoes</a></li>
                                          <li><a href="#">Sneakers</a></li>
                                       </ul>
                                    </div>
                                    <!--grid column 3-->
                                    <div class="grid-col-3">
                                       <h3>Accessories</h3>
                                       <ul>
                                          <li><a href="#">Watches</a></li>
                                          <li><a href="#">Bracelet</a></li>
                                          <li><a href="#">Bangles </a></li>
                                       </ul>
                                    </div>
                                    <div class="grid-col-3">
                                       <ul class="header-bg">
                                          <li> <img src="{{ URL::asset('images/header/kid.jpg') }}" alt="#"></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <a href="javascript:void(0)">SHOP</a>
                              <!-- drop down multilevel  -->
                              <ul class="drop-down-multilevel">
                                 <li> <a href="{{ url('shop-detail/4') }}"> Shop Detail </a> </li>
                                 <li> <a href="{{ url('shop-detail-sidebar') }}"> Shop Detail Sidebar </a> </li>
                                 <li> <a href="{{ url('shopgrid-sidebar') }}"> Shopgrid Sidebar </a> </li>
                                 <li> <a href="{{ url('shoplisting-sidebar') }}"> Shoplisting Sidebar </a> </li>
                                 <li> <a href="{{ url('cart') }}">Cart</a></li>
                                 <li> <a href="{{ url('checkout') }}">Checkout</a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="javascript:void(0)">PAGES</a>
                              <!-- drop down multilevel  -->
                              <ul class="drop-down-multilevel">
                                 <li>
                                    <a href="javascript:void(0)">Blog<i class="fa fa-angle-right fa-indicator"></i> </a>
                                    <!-- drop down second level -->
                                    <ul class="drop-down-multilevel">
                                       <li><a href="{{ url('blog') }}">Blog</a></li>
                                       <li><a href="{{ url('blog-detail-left') }}">Blog Detail Left</a></li>
                                       <li><a href="{{ url('blog-detail-right') }}">Blog Detail Right</a></li>
                                    </ul>
                                 </li>
                                 <li> <a href="{{ url('register-consumer') }}">Register </a></li>
                              </ul>
                           </li>
                           <li><a href="{{ url('contact-us') }}">CONTACT US</a></li>
                        </ul>
                     </div>
                     <div class="col-lg-2 no-spec">
                        <div class="topbar float-right">
                           <div class="topbar-right">
                              <ul class="list-inline">
                                 <li class="list-inline-item">
                                    <ul class="list-inline iq-left">
                                       <li class="list-inline-item"><a href="#">Wishlist</a></li>
                                       <li class="list-inline-item"><a href="#">Stores</a></li>
                                    </ul>
                                 </li>
                                 <li class="list-inline-item no-line">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                       <option>English</option>
                                       <option>Spanish</option>
                                       <option>Dutch</option>
                                       <option>Russian</option>
                                       <option>Arabic</option>
                                    </select>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <ul class="menu-sidebar pull-right">
                           <li>
                              <a href="#">ACCOUNT</a>
                           </li>
                           <li class="shop-cart">
                              <div class="iq-pos-r">
                                 <a href="#" class="iq-cart iq-pos-r" id="cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span class="cart-count">2</span></a>
                                 <!-- Shopping Cart -->
                                 <div class="cart-box">
                                    <div class="cart-header">
                                       <div class="iq-font-black">Shopping Cart</div>
                                    </div>
                                    <div class="cart-product">
                                       
                                       <div class="cart-title clearfix">
                                          <a href="#">Product name <strong>x2</strong> </a>
                                          <div class="cart-price">
                                             <del>$15.99</del> <ins>$10.49</ins>
                                          </div>
                                       </div>
                                       <div class="cart-close">
                                          <a href="#"> <i class="fa fa-trash"></i> </a>
                                       </div>
                                    </div>
                                    <div class="cart-product">
                                       
                                       <div class="cart-title clearfix">
                                          <a href="#">Product name <strong>x2</strong> </a>
                                          <div class="cart-price">
                                             <del>$15.99</del> <ins>$10.49</ins>
                                          </div>
                                       </div>
                                       <div class="cart-close">
                                          <a href="#"> <i class="fa fa-trash"></i> </a>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- / Shopping Cart END -->
                              </div>
                           </li>
                           <li>
                              <a href="#" id="btn-search"><i class="fa fa-search" aria-hidden="true"></i></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </section>
         </nav>
      </header>
      <!-- search -->
      <div class="search">
         <button id="btn-search-close" class="btn btn--search-close" aria-label="Close search form">
         <i class="fa fa-close" aria-hidden="true"></i>
         </button>
         <form class="search__form">
            <input class="search__input" name="search" type="search" placeholder="Qwilo Search" autocomplete="off" autocapitalize="off" spellcheck="false">
            <span class="search__info">Hit enter to search or ESC to close</span>
         </form>
         <div class="search__related">
            <div class="search__suggestion iq-font-white">
               <h3 class="iq-font-white iq-tw-6">May We Suggest?</h3>
               <p>#drone #funny #catgif #broken #lost #hilarious #good #red #blue #nono #why #yes #yesyes #aliens #green</p>
            </div>
            <div class="search__suggestion iq-font-white">
               <h3 class="iq-font-white iq-tw-6">Is It This?</h3>
               <p>#good #red #hilarious #blue #nono #why #yes #yesyes #aliens #green #drone #funny #catgif #broken #lost</p>
            </div>
            <div class="search__suggestion iq-font-white">
               <h3 class="iq-font-white iq-tw-6">Where Art Thou?</h3>
               <p>#broken #lost #good #red #funny #hilarious #catgif #blue #nono #why #yes #yesyes #aliens #green #drone</p>
            </div>
         </div>
      </div>
      <!-- /search END -->
      <!--=================================
      header -->
	    <!-- Begin page -->
	    <div id="layout-wrapper">
	        <div class="main-content">
	            <div class="page-content">
	                <!-- Start content -->
	                <div class="container-fluid">
	                    @yield('content')
	                </div> <!-- content -->
	            </div>
	        </div>
	        <!-- ============================================================== -->
	        <!-- End Right content here -->
	        <!-- ============================================================== -->
	    </div>

    	<footer class="iq-footer particles position-relative">
         <div class="plus">+</div>
         <div class="triangle"></div>
         <div class="shape-1"><img src="{{ URL::asset('images/shape/01.png') }}" alt="#"></div>
         <!-- newsletter -->
         
         <div class="container">
            <div class="iq-newsletter">
               <div class="row">
                  <div class="col-lg-12 col-md-12">
                     <div class="heading-title text-center">
                        <h2 class="title"><span>Newsletter</span></h2>
                        <div class="big-text">Notifications</div>
                     </div>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                  <div class="col-md-6 offset-md-3">
                     <form>
                        <div class="form-group">
                           <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                           <button type="submit" class="btn"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <!-- newsletter end -->
         <!-- footer top -->
         <div class="footer-top">
            <div class="container">
               <div class="row">
                  <div class="col-lg-2 col-md-6 col-sm-12 re-mtb-30">
                     <h5 class="small-title">Shopping</h5>
                     <ul class="menu">
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Kids</a></li>
                        <li><a href="#">Gift Cards</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 re-mtb-30">
                     <h5 class="small-title">Useful Links</h5>
                     <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                           <ul class="menu">
                              <li><a href="#">Contact Us</a></li>
                              <li><a href="#">FAQ</a></li>
                              <li><a href="#">T&C</a></li>
                              <li><a href="#">Terms Of Use</a></li>
                           </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                           <ul class="menu">
                              <li><a href="#">Shipping</a></li>
                              <li><a href="#">Cancellation</a></li>
                              <li><a href="#">Returns</a></li>
                              <li><a href="#">Blog</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 re-mtb-30">
                     <div class="download-box">
                        <h5 class="small-title">Experience App On Mobile</h5>
                        <p>Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        <a href="#"><img class="img-fluid" src="{{ URL::asset('images/download/playstore.png') }}" alt="#"></a>
                        <a href="#"><img class="img-fluid img-2" src="{{ URL::asset('images/download/appstore.png') }}" alt="#"></a>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 re-mtb-30">
                     <div class="contact-bg">
                        <h5 class="small-title">Contact Us</h5>
                        <ul class="iq-contact">
                           <li>
                              <div class="round"></div>
                              <i class="fa fa-home" aria-hidden="true"></i>
                              <p>1234 North Luke Lane, South Bend, IN 360001.</p>
                           </li>
                           <li>
                              <div class="round"></div>
                              <i class="fa fa-phone" aria-hidden="true"></i>
                              <p>+0123 456 789</p>
                           </li>
                           <li>
                              <div class="round"></div>
                              <i class="fa fa-envelope" aria-hidden="true"></i>
                              <p>mail@qwilo.com</p>
                           </li>
                        </ul>
                     </div>
                     <div class="media-box">
                        <h6>Follow on Social Media:</h6>
                        <ul class="iq-media-blog text-left">
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-google"></i></a></li>
                           <li><a href="#"><i class="fa fa-github"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- footer top end -->
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <hr>
               </div>
            </div>
         </div>
         <!-- footer bottom -->
         <div class="footer-bottom">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-4 col-md-12 col-sm-12 text-center re-tb-spec order-lg-2 order-md-1">
                     <div class="footer-logo">
                        <a href="index.html">
                        <img id="footer_logo_img" class="img-fluid" src="{{ URL::asset('images/logo.png') }}" alt="logo">
                     </a>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-7 re-tb-spec order-lg-1 order-md-2">
                     <div class="iq-copyright text-left">
                        Copyright <a href="#">Qwilo</a> All Rights Reserved
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-5 re-tb-spec order-lg-3 order-md-3">
                     <div class="iq-paysys text-left">
                        <ul class="iq-paybox">
                           <li><a href="#"><img class="img-fluid" src="{{ URL::asset('images/paysys/01.png') }}" alt="#"></a></li>
                           <li><a href="#"><img class="img-fluid" src="{{ URL::asset('images/paysys/02.png') }}" alt="#"></a></li>
                           <li><a href="#"><img class="img-fluid" src="{{ URL::asset('images/paysys/03.png') }}" alt="#"></a></li>
                           <li><a href="#"><img class="img-fluid" src="{{ URL::asset('images/paysys/04.png') }}" alt="#"></a></li>
                           <li><a href="#"><img class="img-fluid" src="{{ URL::asset('images/paysys/05.png') }}" alt="#"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- footer bottom end -->
      </footer>
    <!-- END wrapper -->

    <div id="back-to-top">
		<a class="top" id="top" href="#top"> <i class="fa fa-long-arrow-up" aria-hidden="true"></i> </a>
	</div>
	<script src="{{ URL::asset('homepage/js/jquery.min.js') }}"></script>
	<script src="{{ URL::asset('homepage/js/popper.min.js') }}"></script>
	<script src="{{ URL::asset('homepage/js/bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('homepage/js/mega-menu/mega_menu.js') }}"></script>
   <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
	<script src="{{ URL::asset('homepage/js/main.js') }}"></script>
	<script src="{{ URL::asset('homepage/js/custom.js') }}"></script>
   @yield('script')
   </body>
</html>