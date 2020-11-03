@extends('homepage.template')
@section('title') Shop Detail @endsection
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
                     <div class="col-lg-6 col-sm-12">
                        <div class="breadcrumb-title">
                           <h2>Shop Detail</h2>
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-12">
                        <nav aria-label="breadcrumb" class="text-right">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.html"><i class="ion-android-home"></i>Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">shop detail</li>
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
<div class="main-content particles position-relative">
   <div class="circle"></div>
   <div class="circle two"></div>
   <div class="plus">+</div>
   <div class="triangle"></div>
   <div class="triangle two"></div>
   <div class="shape-1"><img src="{{ URL::asset('images/shape/01.png') }}" alt=""></div>
   <div class="shape-1 two"><img src="{{ URL::asset('images/shape/01.png') }}" alt=""></div>
   <div class="shape-2 two"><img src="{{ URL::asset('images/shape/02.png') }}" alt=""></div>
   <section class="iq-shopdetail-box" data-twttr-rendered="true" data-spy="scroll" data-target=".bs-docs-sidebar">
      <div class="container">
         <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
               <div class="iq-slick">
                  <div class="slider slider-for">
                     <div><img class="img-fluid" alt="#" src="{{ URL::asset('assets/images/product/'.$produk['gambar1']) }}"></div>
                     <div><img class="img-fluid" alt="#" src="{{ URL::asset('assets/images/product/'.$produk['gambar2']) }}"></div>
                     <div><img class="img-fluid" alt="#" src="{{ URL::asset('assets/images/product/'.$produk['gambar3']) }}"></div>
                     <div><img class="img-fluid" alt="#" src="{{ URL::asset('assets/images/product/'.$produk['gambar4']) }}"></div>
                  </div>
                  <div class="slider slider-nav">
                     <div><img class="img-fluid" alt="#" src="{{ URL::asset('assets/images/product/'.$produk['gambar1']) }}"></div>
                     <div><img class="img-fluid" alt="#" src="{{ URL::asset('assets/images/product/'.$produk['gambar2']) }}"></div>
                     <div><img class="img-fluid" alt="#" src="{{ URL::asset('assets/images/product/'.$produk['gambar3']) }}"></div>
                     <div><img class="img-fluid" alt="#" src="{{ URL::asset('assets/images/product/'.$produk['gambar4']) }}"></div>
                     <div><img class="img-fluid" alt="#" src="{{ URL::asset('assets/images/product/'.$produk['gambar1']) }}"></div>
                     <div><img class="img-fluid" alt="#" src="{{ URL::asset('assets/images/product/'.$produk['gambar2']) }}"></div>
                     <div><img class="img-fluid" alt="#" src="{{ URL::asset('assets/images/product/'.$produk['gambar3']) }}"></div>
                     <div><img class="img-fluid" alt="#" src="{{ URL::asset('assets/images/product/'.$produk['gambar4']) }}"></div>
                  </div>
               </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 position-relative">
               <div class="iq-shopdetail">
                  <div class="detail-top">
                     <span class="top-lable">fashion</span>
                     <h3>Clothes</h3>
                     <div class="shop-price w-100 d-inline-block">
                        <del>$130.00</del>&nbsp;&nbsp;<strong>Rp. {{ $produk['harga'] }}</strong>
                     </div>
                     <div class="rate-box">
                        <div class="iq-rating">
                           <ul class="list-inline float-left">
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                           </ul>
                           <ul class="review-text">
                              <li><a href="">3 Review (s)</a></li>
                              <li class="add-rev"><a href="">Add Review</a></li>
                           </ul>
                        </div>
                     </div>
                     <p>{{ $produk['deskripsi'] }}</p>
                  </div>
                  <div class="detail-bottom">
                     <div class="product_meta">
                        <ul>
                           <li><span>Category:</span> {{ $produk['kategori'] }}</li>
                           <li><span>Availability:</span> Available</li>
                           <li><span>Product code:</span> #1010</li>
                           <li><span>tags:</span> Fashion, Style, Classic</li>
                        </ul>
                     </div>
                     <!--Quantity -->
                     <ul class="align-items-center selection-box">
                        <li>
                           <div class="form-group short-size">
                              <select class="form-control" id="exampleFormControlSelect1">
                                 <option>Selct size</option>
                                 <option>small</option>
                                 <option>Medium</option>
                                 <option>Large</option>
                                 <option>extra small</option>
                                 <option>extra large</option>
                              </select>
                           </div>
                        </li>
                        <li>
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
                        </li>
                        <li>
                           <a class="btn-black" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>
                        </li>
                     </ul>
                     <!-- button -->
                     <div class="all-button">
                        <a class="button w-100" href="#">Add To Cart</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row iq-detailleft">
            <div class="col-sm-12">
               <div class="tab-box">
                  <ul class="nav nav-tabs text-left" id="myTab" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-expanded="true" aria-selected="true">Description</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Parameter</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link active" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact-tab" aria-selected="false">Review</a>
                     </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem
                           Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary. 
                        </p>
                     </div>
                     <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <table class="table">
                           <tbody>
                              <tr>
                                 <th scope="row">Weight</th>
                                 <td>0.15 kg</td>
                              </tr>
                              <tr>
                                 <th scope="row">Total Coins</th>
                                 <td>1, 2, 3, 4, 5</td>
                              </tr>
                              <tr>
                                 <th scope="row">Price &amp; Volatility</th>
                                 <td>US$0.30, US$32, US$2</td>
                              </tr>
                              <tr>
                                 <th scope="row">Wallets</th>
                                 <td>w1, w2 &amp; w3</td>
                              </tr>
                              <tr>
                                 <th scope="row">Tax</th>
                                 <td>US$32</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="review-text">
                                 <div class="rating-body iq-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                       <li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                       <li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                       <li class="list-inline-item"><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                       <li class="list-inline-item"><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                    </ul>
                                 </div>
                                 <div class="media  btn-brd">
                                    <img class="mr-3" alt="#" src="{{ URL::asset('images/review/01.jpg') }}">
                                    <div class="media-body">
                                       <h6>Nina Dobrev</h6>
                                       <div class="iq-comment-metadata"><a href="#"><i class="fa fa-calendar"></i>
                                          <span>May 14, 2017 at 5:00 pm</span>
                                          </a>
                                       </div>
                                       <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="review-text">
                                 <div class="rating-body iq-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                       <li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                       <li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                       <li class="list-inline-item"><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                       <li class="list-inline-item"><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                    </ul>
                                 </div>
                                 <div class="media  btn-brd">
                                    <img class="mr-3" alt="#" src="{{ URL::asset('images/review/02.jpg') }}">
                                    <div class="media-body">
                                       <h6>Nick Jonas</h6>
                                       <div class="iq-comment-metadata"><a href="#"><i class="fa fa-calendar"></i>
                                          <span>May 14, 2017 at 5:00 pm</span>
                                          </a>
                                       </div>
                                       <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="review-text">
                                 <div class="rating-body iq-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                       <li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                       <li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                       <li class="list-inline-item"><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                       <li class="list-inline-item"><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                    </ul>
                                 </div>
                                 <div class="media  btn-brd">
                                    <img class="mr-3" alt="#" src="{{ URL::asset('images/review/03.jpg') }}">
                                    <div class="media-body">
                                       <h6>Ria somani</h6>
                                       <div class="iq-comment-metadata"><a href="#"><i class="fa fa-calendar"></i>
                                          <span>May 14, 2017 at 5:00 pm</span>
                                          </a>
                                       </div>
                                       <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="review-input">
                                  <h6>Your Review:</h6>
                                 <form>
                                    <div class="row">
                                       <div class="col-lg-4 col-md-6 col-sm-12">
                                          <div class="form-group">
                                       <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Name*">
                                    </div>
                                       </div>
                                       <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                       <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="Your Email*">
                                    </div>
                                       </div>
                                       <div class="col-lg-4 col-md-6 col-sm-12">
                                           <div class="form-group">
                                       <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="Phone*">
                                    </div>
                                       </div>
                                       <div class="col-lg-12 col-md-6 col-sm-12">
                                            <div class="form-group">
                                       <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your Comment*"></textarea>
                                    </div>
                                       </div>
                                    </div>
                                    <a class="btn-black" href="#">Submit</a>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- product start -->
      <div class="iq-product-box">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12">
                  <div class="heading-title text-center">
                     <h2 class="title"><span>Related Products</span></h2>
                     <div class="big-text">New Items</div>
                  </div>
               </div>
            </div>
            <div class="row">
               @foreach($product_all as $item)
               <div class="col-lg-3 col-md-6 col-sm-12">
                  <div class="iq-productbox">
                     <div class="shopping-body">
                        <div class="product-image">
                           <img class="hover" src="{{ URL::asset('assets/images/product/'.$item['gambar1']) }}" alt="product image">
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
                     <div class="shopping-footer">
                        <div class="product-detail">
                           <h6><a href="#">{{ $item['nama'] }}</a></h6>
                           <div class="shop-price">
                              <del>$130.00</del>&nbsp;&nbsp;<strong>Rp. {{ $item['harga'] }}</strong>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
      <!-- product end -->
   </section>
</div>
<!--=================================
Main Content -->
@endsection

@section('script')
<script src='{{ URL::asset('homepage/js/slick/slick.min.js') }}'></script>
@endsection