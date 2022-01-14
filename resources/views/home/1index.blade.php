@extends('layouts.app')
@section('title' , 'Home')
@section('content')

<header id="fh5co-header"  data-stellar-background-ratio="0.5">
		
    <div class="container">	
        <div class="row">

        <!-- Modal -->
        <!--<div class="modal fade modal-xl" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            
                        <div class="modal-dialog " role="document">
                            
                            <div class="modal-content">
                                <div class="modal-header">
                                    
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                <div class="modal-body" id="yt-player">
                                <iframe id="ytplayer" width="100%" height="500" autoplay=1 src="https://www.youtube.com/embed/H3-MDQsBC5M?rel=0" frameborder="0" allowfullscreen></iframe>
                                </div>
                            
                            </div>
                        </div>
                    </div>-->
            <!-- Carousel container -->
            <div id="my-pics" class="carousel slide" data-ride="carousel"  data-interval="3000">

                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                    <li data-target="#my-pics" data-slide-to="0" class="active"></li>
                    <!--<li data-target="#my-pics" data-slide-to="1"></li>
                    <li data-target="#my-pics" data-slide-to="2"></li>
                    <li data-target="#my-pics" data-slide-to="3"></li>-->
                    </ol>

                    

                    <!-- Content -->
                    <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="item active">
                    <img src="images/slider-yeni.jpeg" alt="" style="opacity: 0.7;">
                    <div class="carousel-caption">
                        <h3 style="text-transform: uppercase;"></h3>
                    </div>
                    </div>

                    <!-- Slide 2 -->
                    <!--<div class="item">
                    <img src="images/slider2.jpg" alt="" style="opacity: 0.7;">
                    <div class="carousel-caption">
                        <h3 style="text-transform: uppercase;">Yaşamlarınıza Dokunmaya Gelİyoruz</h3>
                    </div>
                    </div>-->

                    <!-- Slide 3 -->
                    <!--<div class="item">
                    <img src="images/slider3.jpg" alt="" style="opacity: 0.7;"> 
                    <div class="carousel-caption">
                        <h3 style=" text-transform: uppercase;">Yaşamlarınıza Dokunmaya Gelİyoruz</h3>
                    </div>
                    </div>-->

                    <!-- Slide 4 -->
                    <!--<div class="item">
                    <img src="images/slider4.jpg" alt="" style="opacity: 0.7;">
                    <div class="carousel-caption">
                        <h3 style=" text-transform: uppercase;">Yaşamlarınıza Dokunmaya Gelİyoruz</h3>
                    </div>
                    </div>-->

            </div>

                    
            
        </div>
    </div>
</header>



<!--<div id="fh5co-trainer">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>OKTAY YAVUZARSLAN</h2>
                

            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 animate-box">
                <div class="trainer">
                    <a href="#"><img class="img-responsive" src="images/1.jpg" alt="trainer"></a>
                    <div class="title">
                        <h3><a href="#">Oktay Yavuzarslan</a></h3>
                        
                    </div>
                    <div class="desc text-center">
                        <ul class="fh5co-social-icons">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 animate-box">
                <div class="trainer">
                    <a href="#"><img class="img-responsive" src="images/2.jpg" alt="trainer"></a>
                    <div class="title">
                        <h3><a href="#">Oktay Yavuzarslan</a></h3>
                        
                    </div>
                    <div class="desc text-center">
                        <ul class="fh5co-social-icons">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 animate-box">
                <div class="trainer">
                    <a href="#"><img class="img-responsive" src="images/3.jpg" alt="trainer"></a>
                    <div class="title">
                        <h3><a href="#">Oktay Yavuzarslan</a></h3>
                        
                    </div>
                    <div class="desc text-center">
                        <ul class="fh5co-social-icons">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->


<div id="fh5co-pricing">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2><a href="{{ route('packages.index') }}">Paketler</a> </h2>
                <p>Herkese uygun, çalışma saatlerinize göre ayarlanmış paketler...</p>
                
            </div>
        </div>
        <div class="row">
            <div class="pricing">
                
                @foreach ($packages as $package)
                
                <div class="col-md-3 animate-box" >
                    
                    <div class="price-box" style="background-image: url({{ $package->package_image }}); background-size: cover; height: 350px;">
                        
                        <h2 class="pricing-plan">{{ $package->package_name  }} </h2>
                        <div class="price"><sup class="currency"></sup><small></small></div>
                        <ul class="classes">
                            <li></li>
                            <!--<li class="color">10 Swimming Lesson</li>
                            <li>10 Yoga Classes</li>
                            <li class="color">20 Aerobics</li>
                            <li>10 Zumba Classes</li>
                            <li class="color">5 Massage</li>
                            <li>10 Body Building</li>-->
                        </ul>
                        
                          <form  action="database/function.php" method="POST" enctype="multipart/form-data" style="position: absolute; bottom: 0";>
                            @csrf
                            <input type="hidden" name="packageId" value="{{ $package->id  }}">
                            <input type="hidden" name="packageName" value="{{ $package->package_name  }}">
                            
                            {{-- <input type="hidden" name="customerId" value="{{ $customer_id  }}"> --}}
                        
                            <button class="btn btn-primary" type="submit" name="buyPackage" onclick="return confirm('Bu Paketi satın alıyorsunuz! Devam?')">{{ $package->package_price  }} TL</button> 
                        </form> 
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


<div id="fh5co-gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                <h2>Değİşİmler</h2>
                <p>Etkili program öncesi ve sonrası fotoğrafları</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row row-bottom-padded-md" style="margin-bottom: 5%;">
            
            
        </div>
    </div>




<div id="fh5co-started" class="fh5co-bg" style="background-image: url(images/img_bg_3.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h2>İndİrİm Avantajlarımızdan Faydalanın <br><span> <a href="pricing.php"> hemen paket alın </a> <br> sİze özel <span class="percent"></span> İndİrİmlerden yararlanın</span></h2>
            </div>
        </div>

        

  <div class="col-sm-6 col-lg-6 py-3 wow zoomIn" style="background-color: black;">
  <a href="https://www.organiksatinal.com/" target="_blank"><div class="img-place client-img">
    <img src="mobile/assets/img/clients/0000189.png" alt="">
    </div></a>
  </div>
  <div class="col-sm-6 col-lg-6 py-3 wow zoomIn" style="background-color: black;">
  <a href="https://www.sasu.com.tr/" target="_blank"> <div class="img-place client-img">
      <img src="mobile/assets/img/clients/Sasu_Logo.png" alt="">
    </div></a>
  </div>
 




    </div>
</div>

@endsection