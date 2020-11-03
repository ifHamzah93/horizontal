@extends('homepage.template')
@section('title') Register @endsection
@section('content')
<!--=================================
   Main Content -->
<!--================================
   Login -->
<div class="main-content particles position-relative">
   <div class="circle"></div>
   <div class="circle two"></div>
   <div class="plus">+</div>
   <div class="triangle"></div>
   <div class="shape-1"><img src="images/shape/01.png" alt=""></div>
   <div class="shape-1 two"><img src="images/shape/01.png" alt=""></div>
   <section class="iq-login-regi">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12">
               <div class="heading-title text-center">
                  <h2 class="title"><span>register</span></h2>
                  <div class="big-text">register</div>
               </div>
            </div>
         </div>
         <div class="row justify-content-md-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
               <div class="iq-login register-box">
                  <form>
                     <div class="form-group">
                        <label for="exampleInputName">Name</label>
                        <input type="text" class="form-control" id="exampleInputName" placeholder="Name">
                     </div>
                     <div class="form-group">
                        <label for="exampleInputEmail">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email">
                     </div>
                     <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                     </div>
                     <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirm Password">
                     </div>
                     <button type="submit" class="button">Register</button>
                  </form>
                  <div class="row">
                     <div class="col-md-6 col-sm-12">
                        <ul class="iq-media">
                           <li><a href="#" class="fb"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#" class="tw"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#" class="gplus"><i class="fa fa-google"></i></a></li>
                           <li><a href="#" class="lkd"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                     </div>
                     <div class="col-md-6 col-sm-12">
                        <div class="text-right">
                           <div class="link">Already Have an Account?</div>
                           <div class="link"><a href="login.html">Login</a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
<!--================================
   Login -->
<!--=================================
   Main Content -->
@endsection