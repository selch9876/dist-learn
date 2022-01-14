@extends('layouts.app')

@section('title' , 'Home')

@section('content')

<!-- HOME -->
<section id="home">
    <div class="row">

              <div class="owl-carousel owl-theme home-slider">
                   <div class="item item-first" style="background-image: url({{ URL::asset('known/images/slider-image1.jpg') }});">
                        <div class="caption">
                             <div class="container">
                                  <div class="col-md-6 col-sm-12">
                                       <h1>Distance Learning Education Center</h1>
                                       <h3>Our online courses are designed to fit in your industry supporting all-round with latest technologies.</h3>
                                       <a href="#feature" class="section-btn btn btn-default smoothScroll">Discover more</a>
                                  </div>
                             </div>
                        </div>
                   </div>

                   <div class="item item-second" style="background-image: url({{ URL::asset('known/images/slider-image2.jpg') }});">
                        <div class="caption">
                             <div class="container">
                                  <div class="col-md-6 col-sm-12">
                                       <h1>Start your journey with our practical courses</h1>
                                       <h3>Our video courses are built in partnership with technology leaders and are designed to meet industry demands.</h3>
                                       <a href="#courses" class="section-btn btn btn-default smoothScroll">Take a course</a>
                                  </div>
                             </div>
                        </div>
                   </div>

                   <div class="item item-third" style="background-image: url({{ URL::asset('known/images/slider-image3.jpg') }});">
                        <div class="caption">
                             <div class="container">
                                  <div class="col-md-6 col-sm-12">
                                       <h1>Efficient Learning Methods</h1>
                                       <h3>Nam eget sapien vel nibh euismod vulputate in vel nibh. Quisque eu ex eu urna venenatis sollicitudin ut at libero. Visit <a rel="nofollow" href="https://www.facebook.com/templatemo">templatemo</a> page.</h3>
                                       <a href="#contact" class="section-btn btn btn-default smoothScroll">Let's chat</a>
                                  </div>
                             </div>
                        </div>
                   </div>
              </div>
    </div>
</section>


<!-- FEATURE -->
<section id="feature">
    <div class="container">
         <div class="row">

              <div class="col-md-4 col-sm-4">
                   <div class="feature-thumb">
                        <span>01</span>
                        <h3>Trending Courses</h3>
                        <p>Known is free education HTML Bootstrap Template. You can download and use this for your website.</p>
                   </div>
              </div>

              <div class="col-md-4 col-sm-4">
                   <div class="feature-thumb">
                        <span>02</span>
                        <h3>Books & Library</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et dolore magna.</p>
                   </div>
              </div>

              <div class="col-md-4 col-sm-4">
                   <div class="feature-thumb">
                        <span>03</span>
                        <h3>Certified Teachers</h3>
                        <p>templatemo provides a wide variety of free Bootstrap Templates for you. Please tell your friends about us. Thank you.</p>
                   </div>
              </div>

         </div>
    </div>
</section>












<!-- CONTACT -->
<section id="contact">
    <div class="container">
         <div class="row">

              <div class="col-md-6 col-sm-12">
                   <form id="contact-form" role="form" action="" method="post">
                        <div class="section-title">
                             <h2>Contact us <small>we love conversations. let us talk!</small></h2>
                        </div>

                        <div class="col-md-12 col-sm-12">
                             <input type="text" class="form-control" placeholder="Enter full name" name="name" required="">
              
                             <input type="email" class="form-control" placeholder="Enter email address" name="email" required="">

                             <textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message" required=""></textarea>
                        </div>

                        <div class="col-md-4 col-sm-12">
                             <input type="submit" class="form-control" name="send message" value="Send Message">
                        </div>

                   </form>
              </div>

              <div class="col-md-6 col-sm-12">
                   <div class="contact-image">
                        <img src="images/contact-image.jpg" class="img-responsive" alt="Smiling Two Girls">
                   </div>
              </div>

         </div>
    </div>
</section>    
@endsection