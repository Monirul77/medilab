<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="{{ asset('fontend') }}/css/maicons.css">

  <link rel="stylesheet" href="{{ asset('fontend') }}/css/bootstrap.css">

  <link rel="stylesheet" href="{{ asset('fontend') }}/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="{{ asset('fontend') }}/vendor/animate/animate.css">

  <link rel="stylesheet" href="{{ asset('fontend') }}/css/theme.css">
     
</head>

<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +8801647336747</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> monirul7377227@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="/"><span class="text-primary">One</span>-Health</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('about')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('doctor')}}">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('news')}}">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('contact')}}">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('my-appoint')}}">MyAppoint</a>
            </li>

            <li class="nav-item">
             <a class="btn btn-secondary ml-lg-3" href="{{route('appointment')}} ">Appointment </a>  
              
            </li>
            @auth
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{ route('home') }}">{{Auth::user()->name}} </a>
            </li>

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3 btn-block" href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </li>

            @else


            <li class="nav-item">
             <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login </a>  
              
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}"> Register</a>
            </li>
            @endauth
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>


  @yield('content')

  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Editorial Team</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Join as Doctors</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Our partner</h5>
          <ul class="footer-menu">
            <li><a href="#">One-Fitness</a></li>
            <li><a href="#">One-Drugs</a></li>
            <li><a href="#">One-Live</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">Golapbag Jartabary Dhaka</p>
          <a href="#" class="footer-link">+8801647336747</a>
          <a href="#" class="footer-link">monirul7377227@gmail.com</a>

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2022 <a href="https://macodeid.com/" target="_blank">Monirul75</a>. All right reserved</p>
    </div>
  </footer>

  <script src="{{ asset('fontend') }}/js/jquery-3.5.1.min.js"></script>

  <script src="{{ asset('fontend') }}/js/bootstrap.bundle.min.js"></script>

  <script src="{{ asset('fontend') }}/vendor/owl-carousel/js/owl.carousel.min.js"></script>

  <script src="{{ asset('fontend') }}/vendor/wow/wow.min.js"></script>

  <script src="{{ asset('fontend') }}/js/theme.js"></script>
  
   
</body>

</html>