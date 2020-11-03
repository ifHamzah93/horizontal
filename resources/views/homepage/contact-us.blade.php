@extends('homepage.template')
@section('title') Contact US @endsection
@section('content')
<!--======= Breadcrumb Left With BG Image =======-->
<div class="iq-breadcrumb">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <div class="box-space">
               <div class="iq-breadcrumb-box">
                  <div class="row align-items-center">
                     <div class="col-lg-7">
                        <div class="breadcrumb-title">
                           <h2>Contact Us</h2>
                        </div>
                     </div>
                     <div class="col-lg-5">
                        <nav aria-label="breadcrumb" class="text-right">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.html"><i class="ion-android-home"></i>Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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
<div class="main-content">
   <section class="iq-contactbox">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12 no-spec">
               <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.840289118572!2d144.95373631550405!3d-37.81720974201396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1543402448828" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-5 position-relative">
               <div class="contact-bg">
                  <div class="row">
                     <div class="col-lg-12 re-mtb-30">
                        <div class="iq-contact">
                           
                           <i class="fa fa-home" aria-hidden="true"></i>
                           <h5 class="small-title">Address</h5>
                           <p>1234 North Luke Lane, South Bend, IN 360001.</p>
                        </div>
                     </div>
                     <div class="col-lg-12 re-mtb-30">
                        <div class="iq-contact">
                           
                           <i class="fa fa-phone" aria-hidden="true"></i>
                           <h5 class="small-title">Phone</h5>
                           <p>+0123 456 789</p>
                        </div>
                     </div>
                     <div class="col-lg-12 re-mtb-30">
                        <div class="iq-contact">
                           <i class="fa fa-envelope" aria-hidden="true"></i>
                           <h5 class="small-title">Email</h5>
                           <p>mail@qwilo.com</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="contact-box">
                  <form class="form-horizontal" id="contactform" method="post">
                     <div class="contact-form">
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="section-field">
                                 <input id="name" type="text" placeholder="Name*" name="name">
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="section-field">
                                 <input type="email" placeholder="Email*" name="email">
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="section-field">
                                 <input type="text" placeholder="Phone*" name="phone">
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="section-field textarea">
                                 <textarea class="input-message" placeholder="Your Message*" rows="5" name="message"></textarea>
                              </div>
                              <input type="hidden" name="action" value="sendEmail">
                              <button id="submit" name="submit" type="submit" value="Send" class="button pull-right">Send Message</button>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
<!--=================================
Main Content -->
@endsection