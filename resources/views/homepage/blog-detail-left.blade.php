@extends('homepage.template')
@section('title') Blog Detail Left @endsection
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
                           <h2>Blog Detail Left</h2>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <nav aria-label="breadcrumb" class="text-right">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.html"><i class="ion-android-home"></i>Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Blog Detail left</li>
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
   <div class="iq-blogdetailbox">
      <div class="container">
         <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
               <div class="iq-post-sidebar">
                  <div class="iq-sidebar-widget search-box">
                     <h5>Search Here</h5>
                     <div class="iq-widget-search"> <i class="fa fa-search"></i>
                        <input type="search" placeholder="Search" class="form-control placeholder">
                     </div>
                  </div>
                  <div class="iq-sidebar-widget about-box">
                     <img class="img-fluid w-100" src="{{ URL::asset('images/blog/about.jpg') }}" alt="#">
                     <div class="about-text">
                        <h5>About Blog</h5>
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, consequat ipsum, nec sagittist.</p>
                     </div>
                  </div>
                  <div class="iq-sidebar-widget">
                     <h5>Tags</h5>
                     <ul class="iq-tag list-inline">
                        <li><a href="#">Bootstrap</a>(1)</li>
                        <li><a href="#">HTML5</a>(5)</li>
                        <li><a href="#">Wordpress</a>(3)</li>
                        <li><a href="#">CSS3</a>(7)</li>
                        <li><a href="#">Creative</a>(6)</li>
                        <li><a href="#">Multipurpose</a>(2)</li>
                        <li><a href="#">Bootstrap</a>(7)</li>
                        <li><a href="#">HTML5</a>(4)</li>
                        <li><a href="#">Wordpress</a>(2)</li>
                     </ul>
                  </div>
                  <div class="iq-sidebar-widget">
                     <h5> Recently Products</h5>
                     <div class="iq-widget-menu">
                        <div class="list-inline iq-widget-menu">
                           <ul class="iq-post">
                              <li>
                                 <div class="post-img"> <img src="{{ URL::asset('images/gallery/01.jpg') }}" alt="#"> </div>
                                 <div class="post-blog">
                                    <a href="#">irreplaceable is different</a>
                                    <span class="date">24 December, 2017</span>
                                 </div>
                              </li>
                              <li>
                                 <div class="post-img"> <img src="{{ URL::asset('images/gallery/02.jpg') }}" alt="#"> </div>
                                 <div class="post-blog">
                                    <a href="#">beauty in everything</a>
                                    <span class="date">01 January, 2018</span>
                                 </div>
                              </li>
                              <li>
                                 <div class="post-img"> <img src="{{ URL::asset('images/gallery/03.jpg') }}" alt="#"> </div>
                                 <div class="post-blog">
                                    <a href="#">she can conquer the world</a>
                                    <span class="date">20 December, 2013</span>
                                 </div>
                              </li>
                              <li>
                                 <div class="post-img"> <img src="{{ URL::asset('images/gallery/04.jpg') }}" alt="#"> </div>
                                 <div class="post-blog">
                                    <a href="#">serving its purpose</a>
                                    <span class="date">02 March, 2010</span>
                                 </div>
                              </li>
                              <li>
                                 <div class="post-img"> <img src="{{ URL::asset('images/gallery/05.jpg') }}" alt="#"> </div>
                                 <div class="post-blog">
                                    <a href="#">Shoes transforms attitude</a>
                                    <span class="date">09 June, 2012</span>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
                  <div class="col-lg-8 re-mtb-30">
                     <div class="iq-blogbox">
                        <div class="iq-blog-entry">
                           <div class="iq-blog-detail">
                              <div class="iq-entry-tag">
                                 <span> fashion</span>
                                 <span> style</span>
                              </div>
                              <div class="iq-entry-title">
                                 <a href="#">
                                    <h5>Fashion: is part of the daily air and it changes all the time!</h5>
                                 </a>
                                 <span class="date"><a href="">24 December, 2017</a></span>
                              </div>
                           </div>
                           <div class="iq-entry-image">
                              <img class="img-fluid" src="images/blog/01.jpg" alt="">
                           </div>
                           <div class="iq-detail-box">
                              <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no.</p>
                              <div class="special-text">
                                 <i class="fa fa-quote-left" aria-hidden="true"></i>
                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                              </div>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                           </div>
                        </div>
                        <div class="blog-commentbox">
                           <div class="media info-block">
                              <img class="mr-3" src="{{ URL::asset('images/review/01.jpg') }}" alt="Generic placeholder image">
                              <div class="media-body">
                                 <h6>Rinks Kevin</h6>
                                 <div class="iq-comment-metadata white"><a href="#"><i class="fa fa-calendar"></i>
                                    <span>May 10, 2017 at 12:00 am</span>
                                 </a>
                              </div>
                              <p> CEO &amp; It was popularised in the 1960s with the and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                           </div>
                        </div>
                        <div id="comments">
                           <h3 >Comments <small>/ 21</small></h3>
                           <ol class="list-inline iq-comment-list">
                              <li>
                                 <div class="media iq-comments-media">
                                    <img class="mr-3" src="{{ URL::asset('images/review/02.jpg') }}" alt="Generic placeholder image">
                                    <div class="media-body">
                                       <h6>Kevin Martin</h6>
                                       <div class="iq-comment-metadata"><a href="#"><i class="fa fa-calendar"></i>
                                          <span>May 14, 2017 at 5:00 pm</span>
                                       </a>
                                    </div>
                                    <a href="#" class="btn-black green">Reply</a>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                 </div>
                              </div>
                              <ul>
                                 <li>
                                    <div class="media iq-comments-media">
                                       <img class="mr-3" src="{{ URL::asset('images/review/01.jpg') }}" alt="Generic placeholder image">
                                       <div class="media-body">
                                          <h6>Rinks Kevin</h6>
                                          <div class="iq-comment-metadata">
                                             <a href="#"><i class="fa fa-calendar"></i>
                                                <span>May 18, 2017 at 1:46 pm</span>
                                             </a>
                                          </div>
                                          <a href="#" class="btn-black green">Reply</a>
                                          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </li>
                           <li>
                              <div class="media iq-comments-media">
                                 <img class="mr-3" src="{{ URL::asset('images/review/04.jpg') }}" alt="Generic placeholder image">
                                 <div class="media-body">
                                    <h6>Martin</h6>
                                    <div class="iq-comment-metadata">
                                       <a href="#"><i class="fa fa-calendar"></i>
                                          <span>May 21, 2017 at 2:26 pm</span>
                                       </a>
                                    </div>
                                    <a href="#" class="btn-black green">Reply</a>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                 </div>
                              </div>
                           </li>
                        </ol>
                     </div>
                     <div class="blog-contact">
                        <h3>Leave a Reply</h3>
                        <div class="formmessage">Success/Error Message Goes Here</div>
                        <form class="form-horizontal" id="contactform" method="post">
                           <div class="contact-form">
                              <div class="row">
                                 <div class="col-lg-4 col-sm-12">
                                    <div class="section-field">
                                       <input id="name" type="text" placeholder="Name*" name="name">
                                    </div>
                                 </div>
                                 <div class="col-lg-4 col-sm-12">
                                    <div class="section-field">
                                       <input type="email" placeholder="Email*" name="email">
                                    </div>
                                 </div>
                                 <div class="col-lg-4 col-sm-12">
                                    <div class="section-field">
                                       <input type="text" placeholder="Phone*" name="phone">
                                    </div>
                                 </div>
                                 <div class="col-lg-12 col-sm-12">
                                    <div class="section-field textarea">
                                       <textarea class="input-message" placeholder="Comment*" rows="5" name="message"></textarea>
                                    </div>
                                    <input type="hidden" name="action" value="sendEmail">
                                    <button id="submit" name="submit" type="submit" value="Send" class="button pull-right">Submit</button>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--=================================
Main Content -->
<!--=================================
@endsection