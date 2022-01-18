<!DOCTYPE html>
<html lang="en">
<head>

     <title>@yield('title')</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="{{ URL::asset('known/css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ URL::asset('known/css/font-awesome.min.css') }}">
     <link rel="stylesheet" href="{{ URL::asset('known/css/owl.carousel.css') }}">
     <link rel="stylesheet" href="{{ URL::asset('known/css/owl.theme.default.min.css') }}">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{ URL::asset('known/css/templatemo-style.css') }}">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container"> 
               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="{{ route('home.index') }}" class="navbar-brand">DistLearn</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse mb-5" >
                    <ul class="nav navbar-nav navbar-nav-first">

                         <li><a href="{{ route('home.index') }}" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About</a></li>
                         <li><a href="{{ route('home.team') }}" class="smoothScroll">Our Teachers</a></li>
                         <li><a href="{{ route('packages.index') }}" class="smoothScroll">Packages</a></li>
                         <li><a href="{{ route('home.reviews') }}" class="smoothScroll">Reviews</a></li>
                         <li><a href="#contact" class="smoothScroll">Contact</a></li>
                         
                        <!-- Authentication Links -->
                        
                         @if (Auth::guard('student')->check())
                         <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   {{Auth::guard('student')->user()->name}}
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('student.dashboard') }}">Profile</a>
                                <form id="logout-form" action="{{ route('student.logout') }}" method="get">
                                   @csrf
                                   <a id="submitLink" class="dropdown-item" href="#">Logout</a>
                                </form>  
                              </div>
                            </li>
                         
                         @else
                         <li><a  href="{{ route('student.login') }}">{{ __('Login') }}</a></li>
                              @if (Route::has('register'))
                              <li ><a  href="{{ route('student.register') }}">{{ __('Register') }}</a></li>
                              @endif
                         @endif
                         
                         {{--  @if(Auth::user())
                              @if (Auth::user()->is_admin == true)
                              <li><a href="{{ route('admin.index') }}" class="smoothScroll">Admin</a></li>   
                              @endif
                         @endif  --}}
                         
                         <li><a href="#"><i class="fa fa-phone"></i> +90 123 45 67</a></li>
                         
                    </ul>

                    
               </div>

          </div>
     </section>

     <div class="container pt-5">

          @if (session('status'))
              <div class="alert alert-success">
                {{ session('status') }}
              </div>
          @endif
     </div>
   
     @yield('content')


     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Headquarter</h2>
                              </div>
                              <address>
                                   <p>1800 dapibus a tortor pretium,<br> Integer nisl dui, ABC 12000</p>
                              </address>

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>

                              <div class="copyright-text"> 
                                   <p>Copyright <small class="block">&copy; Selçuk Oktay <?php echo date("Y");?></small></p>
                                   
                                   <p>Design: TemplateMo</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contact Info</h2>
                              </div>
                              <address>
                                   <p>+65 2244 1100, +66 1800 1100</p>
                                   <p><a href="mailto:youremail.co">hello@youremail.co</a></p>
                              </address>

                              <div class="footer_menu">
                                   <h2>Quick Links</h2>
                                   <ul>
                                        <li><a href="#">Career</a></li>
                                        <li><a href="#">Investor</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Refund Policy</a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div class="section-title">
                                   <h2>Newsletter Signup</h2>
                              </div>
                              <div>
                                   <div class="form-group">
                                        <form action="#" method="get">
                                             <input type="email" class="form-control" placeholder="Enter your email" name="email" id="email" required="">
                                             <input type="submit" class="form-control" name="submit" id="form-submit" value="Send me">
                                        </form>
                                        <span><sup>*</sup> Please note - we do not spam your email.</span>
                                   </div>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="{{ URL::asset('known/js/jquery.js') }}"></script>
     <script src="{{ URL::asset('known/js/bootstrap.min.js') }}"></script>
     <script src="{{ URL::asset('known/js/owl.carousel.min.js') }}"></script>
     <script src="{{ URL::asset('known/js/smoothscroll.js') }}"></script>
     <script src="{{ URL::asset('known/js/custom.js') }}"></script>

     <script>
     document.getElementById("submitLink").onclick = function() {
    document.getElementById("logout-form").submit();
     }
     </script>

</body>
</html>