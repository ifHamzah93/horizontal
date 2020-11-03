@extends('homepage.template')
@section('title') Blog @endsection
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
                           <h2>Shop Blog</h2>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <nav aria-label="breadcrumb" class="text-right">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.html"><i class="ion-android-home"></i>Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Blog</li>
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
   <div class="iq-blogbox">
      <div class="container">
         <div class="row">
            <div class="col-lg-6">
               <div class="iq-blog-entry wow slideInUp">
                  <div class="iq-entry-image">
                     <img class="img-fluid" src="{{ URL::asset('images/blog/01.jpg') }}" alt="">
                  </div>
                  <div class="iq-blog-detail">
                     <div class="iq-entry-title">
                        <a href="{{ url('blog-detail-left') }}">
                           <h5>Irreplaceable Is Different</h5>
                        </a>
                     </div>
                     <span class="date"><a href="">24 December, 2017</a></span>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="iq-blog-entry wow slideInUp">
                  <div class="iq-entry-image">
                     <img class="img-fluid" src="{{ URL::asset('images/blog/02.jpg') }}" alt="">
                  </div>
                  <div class="iq-blog-detail">
                     <div class="iq-entry-title">
                        <a href="{{ url('blog-detail-left') }}">
                           <h5>Beauty In Everything</h5>
                        </a>
                     </div>
                     <span class="date"><a href="">01 June, 2012</a></span>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="iq-blog-entry wow slideInUp">
                  <div class="iq-entry-image">
                     <img class="img-fluid" src="{{ URL::asset('images/blog/03.jpg') }}" alt="">
                  </div>
                  <div class="iq-blog-detail">
                     <div class="iq-entry-title">
                        <a href="{{ url('blog-detail-left') }}">
                           <h5>She Can Conquer The World</h5>
                        </a>
                     </div>
                     <span class="date"><a href="">10 March, 2010</a></span>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="iq-blog-entry wow slideInUp">
                  <div class="iq-entry-image">
                     <img class="img-fluid" src="{{ URL::asset('images/blog/04.jpg') }}" alt="">
                  </div>
                  <div class="iq-blog-detail">
                     <div class="iq-entry-title">
                        <a href="{{ url('blog-detail-left') }}">
                           <h5>Serving Its Purpose</h5>
                        </a>
                     </div>
                     <span class="date"><a href="">14 August, 2016</a></span>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="iq-blog-entry wow slideInUp">
                  <div class="iq-entry-image">
                     <img class="img-fluid" src="{{ URL::asset('images/blog/05.jpg') }}" alt="">
                  </div>
                  <div class="iq-blog-detail">
                     <div class="iq-entry-title">
                        <a href="{{ url('blog-detail-left') }}">
                           <h5>Shoes Transforms Attitude</h5>
                        </a>
                     </div>
                     <span class="date"><a href="">20 February, 2014</a></span>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="iq-blog-entry wow slideInUp">
                  <div class="iq-entry-image">
                     <img class="img-fluid" src="{{ URL::asset('images/blog/06.jpg') }}" alt="">
                  </div>
                  <div class="iq-blog-detail">
                     <div class="iq-entry-title">
                        <a href="{{ url('blog-detail-left') }}">
                           <h5>She Can Conquer The World</h5>
                        </a>
                     </div>
                     <span class="date"><a href="">02 November, 2013</a></span>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="iq-blog-entry wow slideInUp">
                  <div class="iq-entry-image">
                     <img class="img-fluid" src="{{ URL::asset('images/blog/07.jpg') }}" alt="">
                  </div>
                  <div class="iq-blog-detail">
                     <div class="iq-entry-title">
                        <a href="{{ url('blog-detail-left') }}">
                           <h5>Beauty In Everything</h5>
                        </a>
                     </div>
                     <span class="date"><a href="">24 December, 2017</a></span>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="iq-blog-entry wow slideInUp">
                  <div class="iq-entry-image">
                     <img class="img-fluid" src="{{ URL::asset('images/blog/08.jpg') }}" alt="">
                  </div>
                  <div class="iq-blog-detail">
                     <div class="iq-entry-title">
                        <a href="{{ url('blog-detail-left') }}">
                           <h5>Irreplaceable Is Different</h5>
                        </a>
                     </div>
                     <span class="date"><a href="">09 December, 2001</a></span>
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