<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com">

    <title>Shipp-group Pour vos livraisons</title>

    <link rel="stylesheet" href="/assets/landing/vendor/animate/animate.css">
    <link rel="stylesheet" href="/assets/landing/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/landing/css/maicons.css">
    <link rel="stylesheet" href="/assets/landing/vendor/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="/assets/landing/css/theme.css")}}">
    <script src="https://cdn.tailwindcss.com"></script>



</head>
<body>


  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <nav class="navbar navbar-expand-lg navbar-light navbar-float  ">
    <div class="container ">
      <a href="/" class="navbar-brand">Shipp<span class="text-primary">-group</span></a>

      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse"  id="navbarContent">
        <ul class="navbar-nav ml-lg-4 pt-3 pt-lg-0">
          <li class="nav-item active">
            <a href="/" class="relative top-0.5 nav-link">Acceuil</a>
          </li>
         @auth
           @if (auth()->user()->type == "livreur")
            <li class="relative top-0.5 nav-item">
                <a href="/livreur" class="nav-link">Mes commandes</a>
            </li>
          @else
            <li class="relative top-0.5 nav-item">
                <a href="/pageclient" class="nav-link">Mes commandes</a>
            </li>
          @endif
         @endauth
          <li class="nav-item relative top-0.5 bottom-2">
            <a href="/about" class="nav-link">Qui sommes-nous?</a>
          </li>
          <!-- <li class="nav-item">
            <a href="/blog" class="nav-link">News</a>
          </li> -->

        </ul>
    @auth
    <div class="navbar-nav ml-lg-4 pt-1 ">
      @auth
        @if (auth()->user()->type == "livreur")
        <a href="/profilelivreur" class="nav-link">Mon compte</a>
        @else
        <a href="/profile" class="nav-link">Mon compte</a>
        @endif
      @endauth
      <div class=" bottom-2">
        <a href="/logout" class=" relative bottom-0.4 nav-link">Se déconnecter</a>
      </div>
  </div>
        

    @endauth
    @guest
    <div class="navbar-nav ml-lg-4 pt-1">
        <div class="">
          <a href="/login" class="nav-link">Se connecter</a>
        </div>
        <div class="">
          <a href="/choix" class="nav-link">Créer un compte</a>
        </div>
    </div>
    @endguest

      </div>
    </div>
  </nav>

    @yield('content')


    <footer class="page-footer">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-lg-3 py-3">
            <h3>Shipp<span class="text-primary">-group</span></h3>
            <p>Pour vos livraisons.</p>

            <p><a href="#" >laetitiabomanindezai@gmail.com</a></p>
            <p><a href="#">+225 07-07-06-38-08</a></p>
          </div>
          <!-- <div class="col-lg-3 py-3">
            <h5>Quick Links</h5>
            <ul class="footer-menu">
              <li><a href="#">How it works</a></li>
              <li><a href="#">Security</a></li>
              <li><a href="#">Pricing</a></li>
              <li><a href="#">Resources</a></li>
              <li><a href="#">Report a Bug</a></li>
            </ul>
          </div>
          <div class="col-lg-3 py-3">
            <h5>About Us</h5>
            <ul class="footer-menu">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Jobs</a></li>
              <li><a href="#">Our Teams</a></li>
              <li><a href="#">Testimonials</a></li>
              <li><a href="#">News & Press</a></li>
            </ul>
          </div> -->
          <div class="col-lg-3 py-3">
            <h5>Nous suivre</h5>


            <div class="sosmed-button mt-4">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-google"></span></a>
              <a href="#"><span class="mai-logo-linkedin"></span></a>
            </div>
          </div>
        </div>

        <div class="row ">
          <div class="col-sm-6 py-10">
            <p id="copyright">&copy; 2022 <a href="/home">Shipp-group</a>. All rights reserved</p>
          </div>

        </div>
      </div> <!-- .container -->
    </footer> <!-- .page-footer -->



  <script src="/assets/landing/js/jquery-3.5.1.min.js"></script>
  <script src="/assets/landing/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/landing/vendor/wow/wow.min.js"></script>
  <script src="/assets/landing/vendor/owl-carousel/js/owl.carousel.min.js"></script>
  <script src="/assets/landing/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="/assets/landing/vendor/animateNumber/jquery.animateNumber.min.js"></script>
  <script src="/assets/landing/js/google-maps.js"></script>
  <script src="/assets/landing/js/theme.js"></script>



</body>
</html>
