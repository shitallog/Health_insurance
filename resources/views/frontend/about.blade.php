<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <!-- Favicon -->
      <link rel="icon" type="image/png" href="{{ asset('assets/images/headerlogo-removebg-preview.png') }}">
      
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
      
      <!-- Additional Stylesheets -->
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/boxicons.min.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.min.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/fancybox.min.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/odometer.min.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.default.min.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/scrollCue.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/navbar.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/footer.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/dark.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
      
      <!-- External Libraries -->
      <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

      <!-- Page Title -->
      <title>@yield('title', 'SWAMI MITRA INSURANCE')</title>
      
      @stack('styles')
   </head>
   <body>
      <!--<div class="preloader">-->
      <!--   <div class="lds-ripple">-->
      <!--      <div></div>-->
      <!--      <div></div>-->
      <!--      <div></div>-->
      <!--      <div></div>-->
      <!--   </div>-->
      <!--</div>-->
      <div class="header-area">
         <div class="container-fluid">
            <div class="row align-items-center">
               <div class="col-lg-6 col-sm-3 col-md-3">
                  <div class="header-left-bar-text">
                     <ul class="list-inline">
                        <li>
                           <a href="https://www.facebook.com/" target="_blank">
                           <i class="bx bxl-facebook"></i>
                           </a>
                        </li>
                        <li>
                           <a href="https://twitter.com/" target="_blank">
                           <i class="bx bxl-twitter"></i>
                           </a>
                        </li>
                        <li>
                           <a href="https://www.linkedin.com/" target="_blank">
                           <i class="bx bxl-linkedin"></i>
                           </a>
                        </li>
                        <li>
                           <a href="https://www.google.com/" target="_blank">
                           <i class="bx bxl-google"></i>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-6 col-sm-9 col-md-9">
                  <div class="header-right-content text-end">
                     <ul class="list-inline">
                        <li class="d-inline">
                           <img src="assets/images/phone.svg" alt="Phone">
                           <a href="tel:(+0188)7689870859">+91 768 987 0859</a>
                        </li>
                        <li class="d-inline">
                           <img src="assets/images/email.svg" alt="Email">
                           <a href="/cdn-cgi/l/email-protection#ee87808881ae878081809a868b838b9dc08d8183"><span class="__cf_email__" data-cfemail="327b5c545d725b5c5d5c465a575f57411c515d5f">info@sawamitrainsurance.com</span></a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="navbar-area">
         <div class="main-responsive-nav">
            <div class="container">
               <div class="main-responsive-menu">
                  <div class="logo">
                     <a href="#">
                     <img src="assets/images/headerlogo-removebg-preview.png" class="black-logo" alt="image" style="max-width: 33%;">
                     <img src="assets/images/headerlogo-removebg-preview.png" class="white-logo" alt="image" style="max-width: 33%;">
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="main-navbar">
            <div class="container-fluid">
               <nav class="navbar navbar-expand-md navbar-light">
                  <a class="" href="index.php">
                  <!--<img src="assets/images/headerlogo-removebg-preview.png" class="black-logo" alt="image" style="max-width: 33%;">-->
                  <img src="assets/images/headerlogo-removebg-preview.png" class="white-logo" alt="image" style="max-width: 33%;">
                  </a>
                  <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                   <ul class="navbar-nav ms-auto">
    <li class="nav-item">
      <a href="{{ route('frontend.index') }}" class="nav-link">Home</a>
    </li>
    <li class="nav-item">
      <a href="{{ route('frontend.about') }}" class="nav-link" style="white-space: nowrap;">About us</a>
    </li>
    <li class="nav-item mega-menu  d-none d-lg-block">
      <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        Insurance Product
        
      </a>
      <div class="dropdown-menu mega-menu-content">
      <div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="mega-menu-content">
      <div class="row">
  <div class="col-md-4">
    <div class="">
      <h6 class="card-title">General Insurance</h6>
     <ul class="list-group list-group-flush">
    <li class="list-group-item" style="list-style: none;">
        <a href="#"><i class="fas fa-heartbeat"></i> Life Insurance</a>
    </li>
    <li class="list-group-item" style="list-style: none;">
        <a href="#"><i class="fas fa-car"></i> Motor Insurance</a>
    </li>
    <li class="list-group-item" style="list-style: none;">
        <a href="#"><i class="fas fa-plane"></i> Travel Insurance</a>
    </li>
    <li class="list-group-item" style="list-style: none;">
        <a href="#"><i class="fas fa-home"></i> Property Insurance</a>
    </li>
    <li class="list-group-item" style="list-style: none;">
        <a href="#"><i class="fas fa-anchor"></i> Marine Insurance</a>
    </li>
    <li class="list-group-item" style="list-style: none;">
        <a href="#"><i class="fas fa-utensils"></i> Food Insurance</a>
    </li>
    <li class="list-group-item" style="list-style: none;">
        <a href="#"><i class="fas fa-shield-alt"></i> Comprehensive Insurance</a>
    </li>
    <li class="list-group-item" style="list-style: none;">
        <a href="#"><i class="fas fa-seedling"></i> Agriculture Insurance</a>
    </li>
</ul>


    </div>
  </div>
  <div class="col-md-4">
    <div class="">
      <h6 class="card-title">Life Insurance</h6>
     <ul class="list-group list-group-flush">
    <li class="list-group-item" style="list-style: none;">
        <a href="#"><i class="fas fa-calendar-check"></i> Whole Life Insurance</a>
    </li>
    <li class="list-group-item" style="list-style: none;">
        <a href="#"><i class="fas fa-file-invoice-dollar"></i> Endowment Policy</a>
    </li>
    <li class="list-group-item" style="list-style: none;">
        <a href="#"><i class="fas fa-piggy-bank"></i> Pension Plan</a>
    </li>
    <li class="list-group-item" style="list-style: none;">
        <a href="#"><i class="fas fa-link"></i> Unit Linked Insurance</a>
    </li>
    <li class="list-group-item" style="list-style: none;">
        <a href="#"><i class="fas fa-users"></i> Group Insurance</a>
    </li>
    <li class="list-group-item" style="list-style: none;">
        <a href="#"><i class="fas fa-money-bill-wave"></i> Money Back Policy</a>
    </li>
    <li class="list-group-item" style="list-style: none;">
        <a href="#"><i class="fas fa-paw"></i> Pet Insurance</a>
    </li>
</ul>

    </div>
  </div>
  <div class="col-md-4">
    <div class="">
      <h6 class="card-title">Health Insurance</h6>
     <ul class="list-group list-group-flush">
    <li class="list-group-item" style="list-style: none;">
        <a href="#"><i class="fas fa-heartbeat"></i> Medi Claim</a>
    </li>
    <li class="list-group-item" style="list-style: none;">
        <a href="#"><i class="fas fa-car"></i> Car Insurance</a>
    </li>
    <li class="list-group-item" style="list-style: none;">
        <a href="#"><i class="fas fa-plane"></i> Travel Insurance</a>
    </li>
    <li class="list-group-item" style="list-style: none;">
        <a href="#"><i class="fas fa-child"></i> Child Plan</a>
    </li>
    <li class="list-group-item" style="list-style: none;">
        <a href="#"><i class="fas fa-users"></i> Family Floater</a>
    </li>
    <li class="list-group-item" style="list-style: none;">
        <a href="#"><i class="fas fa-wheelchair"></i> Disability Insurance</a>
    </li>
    <li class="list-group-item" style="list-style: none;">
        <a href="#"><i class="fas fa-briefcase-medical"></i> Business Health Insurance</a>
    </li>
    <li class="list-group-item" style="list-style: none;">
        <a href="#"><i class="fas fa-paw"></i> Animal Insurance</a>
    </li>
</ul>

    </div>
  </div>
</div>
    </li>
     <li class="nav-item dropdown d-block d-lg-none">
      <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        Insurance Product
       
      </a>
      <ul class="dropdown-menu">
        <li class="nav-item">
          <a href="#" class="nav-link">Health Insurance</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Life Insurance</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">General Insurance</a>
        </li>
        <!-- ... -->
      </ul>
    </li>
    
    <li class="nav-item dropdown">
      <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        Renew Policy
       
      </a>
      <ul class="dropdown-menu">
        <li class="nav-item">
          <a href="#" class="nav-link">Renew Policy</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Terms Life Renewal</a>
        </li>
        <!-- ... -->
      </ul>
    </li>


    <!--<li class="nav-item dropdown">-->
    <!--  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">-->
    <!--    Claim-->
    <!--    <i class="bx bx-down-arrow-alt"></i>-->
    <!--  </a>-->
    <!--  <ul class="dropdown-menu">-->
    <!--    <li class="nav-item">-->
    <!--      <a href="blog.html" class="nav-link">Claim</a>-->
    <!--    </li>-->
    <!--    <li class="nav-item">-->
    <!--      <a href="author.html" class="nav-link">Author</a>-->
    <!--    </li>-->
        <!-- ... -->
    <!--  </ul>-->
    <!--</li>-->
    
    <li class="nav-item">
      <a href="{{ route('frontend.contact') }}" class="nav-link" style="white-space: nowrap;">Contact Us</a>
    </li>
  </ul>
  
</div>
               </nav>
            </div>
         </div>
         <!--<div class="others-option-for-responsive">-->
         <!--   <div class="container">-->
         <!--      <div class="dot-menu">-->
         <!--         <div class="inner">-->
         <!--            <div class="circle circle-one"></div>-->
         <!--            <div class="circle circle-two"></div>-->
         <!--            <div class="circle circle-three"></div>-->
         <!--         </div>-->
         <!--      </div>-->
               <!--<div class="container">-->
               <!--   <div class="option-inner">-->
               <!--      <div class="others-options d-flex align-items-center">-->
               <!--         <div class="option-item">-->
               <!--            <button class="searchbtn" type="button">-->
               <!--            <i class="bx bx-search"></i>-->
               <!--            </button>-->
               <!--         </div>-->
               <!--         <div class="option-item">-->
               <!--            <a href="contact.html" class="default-btn">Get A Quote</a>-->
               <!--         </div>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--</div>-->
         <!--   </div>-->
         <!--</div>-->
      </div>
      <div class="search-area">
         <div class="container">
            <button type="button" class="close-searchbox">
            <i class="bx bx-x"></i>
            </button>
            <form action="#" class="search-form">
               <div class="form-group">
                  <input type="search" placeholder="Search Here">
               </div>
            </form>
         </div>
      </div>

      <div class="page-banner-area">
<div class="container">
<div class="single-page-banner-content">
<h3>About Us</h3>
<ul>
<li>
<a href="index.html">Home</a>
</li>
<li>About Us</li>
</ul>
</div>
</div>
</div>


<div class="about-style-2-area pb-70">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="single-about-2-content">
               <div class="section-title left-title">
                  <span class="top-title">About Us</span>
                  <h2 style="font-size:30px;">Protecting What Matters with Innovative Solutions</h2>
                  <p>At Swamitra Insurance, we are committed to providing innovative and reliable insurance solutions that protect what matters most to you. With years of experience in the industry, we offer a wide range of insurance products, including life, health, vehicle, and property insurance, tailored to meet your unique needs.
                  </p>
                  <p>At Swamitra Insurance, we are committed to providing innovative and reliable insurance solutions that protect what matters most to you. With years of experience in the industry, we offer a wide range of insurance products, including life, health, vehicle, and property insurance, tailored to meet your unique needs.
                  </p>
               </div>
               <div class="row justify-content-center">
                  <div class="col-lg-4 col-sm-4 col-md-4">
                     <div class="best-support-card">
                        <img src="assets/images/about/customer-service.svg" alt="customer">
                        <h3 style="color: black;">Best Support</h3>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-4 col-md-4">
                     <div class="best-support-card card2">
                        <img src="assets/images/about/agent.svg" alt="agent">
                        <h3 style="color: black;">Expert Agent</h3>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-4 col-md-4">
                     <div class="best-support-card">
                        <img src="assets/images/about/world.svg" alt="world">
                        <h3 style="color: black;">Best In World</h3>
                     </div>
                  </div>
               </div>
             
            </div>
         </div>
         <div class="col-lg-6">
            <div class="about2-img">
               <div class="about2-main">
                  <div class="row">
                     <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="img-style1">
                           <img src="assets/images/about/about-2-img-1.webp" alt="about">
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="img-style2">
                           <img src="assets/images/about/about-2-img-2.webp" alt="about">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="about2-img1">
                  <img src="assets/images/about/about-2-img-3.webp" alt="about">
               </div>
               <div class="about2-main-img11">
                  <img src="assets/images/about/about-2-main-img.webp" alt="about">
               </div>
               <div class="about2-odometer-card">
                  <div class="about2-odometer">
                     <h2>
                        <span class="odometer" data-count="30">00</span>
                     </h2>
                     <p>Years Experience </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="about-two-shape">
      <img src="assets/images/about/about-2-shape.webp" alt="image">
   </div>
</div>
<hr>

<div class="services-two-area pt-100 pb-100">
<div class="container">
<div class="section-title">
<span class="top-title">Our Services</span>
<h2>Our Best Insurance Services</h2>
</div>
<div class="row">
<div class="col-lg-6">
<div class="services-img">
<img src="assets/images/services/services-1.webp" alt="services">
</div>
<div class="services-img-1">
<img src="assets/images/services/services-2.webp" alt="services">
</div>
</div>
<div class="col-lg-6">
<div class="single-services-two-content">
<div class="services-btn">
<a href="services-details.html" class="default-btn btn-style-2">View All</a>
</div>
<div class="services-shape3">
<img src="assets/images/services/services-border-shape.webp" alt="shape">
</div>
<div class="services-card-two d-flex align-items-center">
<div class="services-icon">
<img src="assets/images/services/services-2-icon-1.svg" alt="icon1">
</div>
<h3><a href="services-details.html">Home Insurance</a></h3>
</div>
<div class="services-card-two card2 d-flex align-items-center">
<div class="services-icon">
<img src="assets/images/services/services-2-icon-2.svg" alt="icon1">
</div>
<h3><a href="services-details.html">Car Insurance</a></h3>
</div>
<div class="services-card-two card3 d-flex align-items-center">
<div class="services-icon">
<img src="assets/images/services/services-2-icon-3.svg" alt="icon1">
</div>
<h3><a href="services-details.html">Health Insurance</a></h3>
</div>
<div class="services-card-two card4 d-flex align-items-center">
<div class="services-icon">
<img src="assets/images/services/services-2-icon-4.svg" alt="icon1">
</div>
<h3><a href="services-details.html">Travel Insurance</a></h3>
</div>
<div class="services-card-two card5 d-flex align-items-center">
<div class="services-icon">
<img src="assets/images/services/services-2-icon-5.svg" alt="icon1">
</div>
<h3><a href="services-details.html">Business Insurance</a></h3>
</div>
</div>
</div>
</div>
</div>
</div>





<div class="footer-area pt-100">
<div class="container">
<div class="row pb-100">
<div class="col-lg-3 col-sm-6 col-md-6" data-cue="slideInUp">
<div class="footer-widget">
    <h2>About Us</h2>
    <hr>
<a href="index.html">
<!-- <img src="assets/images/black-logo.webp" class="black-logo" alt="logo">
<img src="assets/images/white-logo.webp" class="white-logo" alt="logo"> -->
</a>
<p style="color:#ffffff;font-size: 16px;font-family: system-ui;font-weight: 600;
">Facilis est et expedita distinct libero teor cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime expedita placeat facere possimus.</p>
<ul class="follow-list">
<li>
<a href="https://www.facebook.com/" target="_blank">
<i class="bx bxl-facebook"></i>
</a>
</li>
<li>
<a href="https://twitter.com/" target="_blank">
<i class="bx bxl-twitter"></i>
</a>
</li>
<li>
<a href="https://www.linkedin.com/" target="_blank">
<i class="bx bxl-linkedin"></i>
</a>
</li>
<li>
<a href="https://www.google.com/" target="_blank">
<i class="bx bxl-google"></i>
</a>
</li>
</ul>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-md-6" data-cue="slideInUp">
<div class="footer-widget footer-widget-link2">
<h2>Important Links</h2>
<hr>
<ul class="footer-widget-list">
<li>
<a href="index.php"><i class="bx bx-chevron-right"></i>Home</a>
</li>
<li>
<a href="#"><i class="bx bx-chevron-right"></i>About Us</a>
</li>
<li>
<a href=""><i class="bx bx-chevron-right"></i>How It Works</a>
</li>
<li>
<a href="#"><i class="bx bx-chevron-right"></i>Blog</a>
</li>
<li>
<a href="#"><i class="bx bx-chevron-right"></i>Contact Us</a>
</li>
</ul>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-md-6" data-cue="slideInUp">
<div class="footer-widget footer-widget-link">
<h2>Our Services</h2>
 <hr>
<ul class="footer-widget-list">

<li>
<a href="services-details.html"><i class="bx bx-chevron-right"></i>Finances Management</a>
</li>
<li>
<a href="services-details.html"><i class="bx bx-chevron-right"></i>Home Insurance</a>
</li>
<li>
<a href="services-details.html"><i class="bx bx-chevron-right"></i>Health Insurance</a>
</li>
<li>
<a href="services-details.html"><i class="bx bx-chevron-right"></i>General Insurance</a>
</li>
</ul>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-md-6" data-cue="slideInUp">
<div class="footer-widget">
<h2>Get In Touch</h2>
 <hr>


<div class="touch-content">
<div class="contact-icon">
<img src="assets/images/contact-map.svg" alt="svg">
</div>
<p style="color:#ffffff;font-size: 16px;font-family: system-ui;font-weight: 600;">No. 12, Ribon Building, Walse street, Australia</p>
</div>
<div class="touch-content">
<div class="contact-icon">
<img src="assets/images/contact-mail.svg" alt="svg">
</div>
<a href="/cdn-cgi/l/email-protection#abc3cec7c7c4ebc2c5c4c585c8c4c6"><span class="__cf_email__" data-cfemail="cea6aba2a2a18ea7a0a1a0e0ada1a3" style="color:#ffffff;font-size: 16px;font-family: system-ui;font-weight: 600;">info@sawamitrainsurance.com</span></a>
</div>
<div class="touch-content">
<div class="contact-icon">
<img src="assets/images/contact-phone.svg" alt="svg">
</div>
<a href="tel:(800)2162020" style="color:#ffffff;font-size: 16px;font-family: system-ui;font-weight: 600;">(800) 216 2020</a>
</div>
</div>
</div>
</div>
</div>
<div class="footer-shape-1">
<img src="assets/images/footer-shape-1.webp" alt="footer">
</div>
<div class="footer-shape-2">
<img src="assets/images/footer-shape-2.webp" alt="footer">
</div>
<!--<div class="copyright-content">-->
<!--    <div class="d-flex justify-content-between align-items-center flex-wrap">-->
<!--        <div class="left-content">-->
<!--              <p>bCopy Right <a href="" target="_blank">Swami Mitra Insurance</a></p>-->
<!--        </div>-->
<!--        <div class="right-content">-->
          
<!--              <p> <b>Design By</b><a href="#" target="_blank">Technobizzr</a></p>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

</div>


<div class="go-top">
<i class="bx bxs-chevrons-up"></i>
<i class="bx bxs-chevrons-up"></i>
</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/ajaxchimp.min.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.js"></script>
<script src="assets/js/appear.min.js"></script>
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/jquery.meanmenu.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/fancybox.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/scrollCue.min.js"></script>
<script src="assets/js/subscribe-custom.js"></script>
<script src="assets/js/main.js"></script>
<script></script>
</body>
</html>      