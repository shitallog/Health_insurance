<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
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
    <title>SWAMI MITRA INSURANCE </title>
    <link rel="icon" type="image/png" href="{{ asset('frontend/assets/images/headerlogo-removebg-preview.png') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Bootstrap CSS (Make sure to include this in the <head> section of your HTML) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS (Include this before the closing </body> tag) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


    <style>
    .navbar {
        margin-left: auto;
        margin-right: auto;
        display: grid;
    }

    .navbar-nav {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        /* Optional: Adds space between items */
    }

    .mega-menu-content .row {
        justify-content: center;
        /* Ensures dropdown content is centered */
    }
    @media (max-width: 992px) { /* Targets devices smaller than 992px (tablet and mobile) */
  .header-logo-center{
    display: none;
  }
}

    </style>
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
            <div class="col-lg-6 col-sm-6 col-md-6">
                    <div class="header-right-content text-satrt">
                        <ul class="list-inline">
                            <li class="d-inline">
                                <img src="{{ asset('frontend/assets/images/phone.svg') }}" alt="Phone">
                                <a href="tel:(+0188)7689870859">+91 768 987 0859</a>
                            </li>
                            <li class="d-inline">
                                <img src="{{ asset('frontend/assets/images/email.svg') }}" alt="Email">
                                <a href="/cdn-cgi/l/email-protection#ee87808881ae878081809a868b838b9dc08d8183"><span
                                        class="__cf_email__"
                                        data-cfemail="327b5c545d725b5c5d5c465a575f57411c515d5f">info@sawamitrainsurance.com</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3 col-md-3">
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
              

                <div class="col-lg-3 col-sm-9 col-md-9">
  <div class="header-right-content text-end">
    <div class="others-options d-flex align-items-center justify-content-end">
      <div class="option-item ps-2 pe-3">
        <a href="{{ route('login') }}" class="default-btn" style="font-size: 15px;">Login</a>
      </div>
      <div class="option-item">
        <a href="{{ route('register') }}" class="default-btn" style="font-size: 15px;">Signup</a>
      </div>
    </div>
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
                            <img src="{{ asset('frontend/assets/images/headerlogo-removebg-preview.png') }}" class="black-logo" alt="image">
                            <img src="{{ asset('frontend/assets/images/headerlogo-removebg-preview.png') }}" class="white-logo" alt="imagge">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-navbar">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light justify-content-center">
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{{ route('frontend.index') }}" class="nav-link">Home</a>
                            </li>
                            <!-- <li class="nav-item">
                        <a href="about.php" class="nav-link" style="white-space: nowrap;">About us</a>
                    </li> -->

                            <li class="nav-item mega-menu  d-none d-lg-block">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
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
                                                                    
                                                                    <li class="list-group-item"
                                                                        style="list-style: none;">
                                                                        <a href="product.php"><i class="fas fa-car"></i>
                                                                            Motor Insurance</a>
                                                                    </li>
                                                                    
                                                                    <li class="list-group-item"
                                                                        style="list-style: none;">
                                                                        <a href="product.php"><i
                                                                                class="fas fa-home"></i> Home
                                                                            Insurance</a>
                                                                    </li>
                                                                    <li class="list-group-item"
                                                                        style="list-style: none;">
                                                                        <a href="product.php"><i
                                                                                class="fas fa-plane"></i> Travel
                                                                            Insurance</a>
                                                                    </li>
                                                                    <li class="list-group-item"
                                                                        style="list-style: none;">
                                                                        <a href="product.php"><i
                                                                                class="fas fa-home"></i> Property
                                                                            Insurance</a>
                                                                    </li>
                                                                    <li class="list-group-item"
                                                                        style="list-style: none;">
                                                                        <a href="product.php"><i
                                                                                class="fas fa-anchor"></i> Marine
                                                                            Insurance</a>
                                                                    </li>
                                                                    <li class="list-group-item"
                                                                        style="list-style: none;">
                                                                        <a href="product.php"><i
                                                                                class="fas fa-utensils"></i> Food
                                                                            Insurance</a>
                                                                    </li>
                                                                    <li class="list-group-item"
                                                                        style="list-style: none;">
                                                                        <a href="product.php"><i
                                                                                class="fas fa-shield-alt"></i>
                                                                            Comprehensive Insurance</a>
                                                                    </li>
                                                                    <li class="list-group-item"
                                                                        style="list-style: none;">
                                                                        <a href="product.php"><i
                                                                                class="fas fa-seedling"></i> Agriculture
                                                                            Insurance</a>
                                                                    </li>
                                                                </ul>


                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="">
                                                                <h6 class="card-title">Life Insurance</h6>
                                                                <ul class="list-group list-group-flush">
                                                                    <li class="list-group-item"
                                                                        style="list-style: none;">
                                                                        <a href="product.php"><i
                                                                                class="fas fa-calendar-check"></i> Whole
                                                                            Life Insurance</a>
                                                                    </li>
                                                                    <li class="list-group-item"
                                                                        style="list-style: none;">
                                                                        <a href="product.php"><i
                                                                                class="fas fa-file-invoice-dollar"></i>
                                                                            Endowment Policy</a>
                                                                    </li>
                                                                    <li class="list-group-item"
                                                                        style="list-style: none;">
                                                                        <a href="product.php"><i
                                                                                class="fas fa-piggy-bank"></i> Pension
                                                                            Plan</a>
                                                                    </li>
                                                                    <li class="list-group-item"
                                                                        style="list-style: none;">
                                                                        <a href="product.php"><i
                                                                                class="fas fa-link"></i> Unit Linked
                                                                            Insurance</a>
                                                                    </li>
                                                                    <li class="list-group-item"
                                                                        style="list-style: none;">
                                                                        <a href="product.php"><i
                                                                                class="fas fa-calendar-check"></i> Term Life Insurence</a>
                                                                    </li>
                                                                    <li class="list-group-item"
                                                                        style="list-style: none;">
                                                                        <a href="product.php"><i
                                                                                class="fas fa-users"></i> Group
                                                                            Insurance</a>
                                                                    </li>
                                                                    <li class="list-group-item"
                                                                        style="list-style: none;">
                                                                        <a href="product.php"><i
                                                                                class="fas fa-money-bill-wave"></i>
                                                                            Money Back Policy</a>
                                                                    </li>
                                                                    <li class="list-group-item"
                                                                        style="list-style: none;">
                                                                        <a href="product.php"><i class="fas fa-paw"></i>
                                                                            Pet Insurance</a>
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="">
                                                                <h6 class="card-title">Health Insurance</h6>
                                                                <ul class="list-group list-group-flush">
                                                                    <li class="list-group-item"
                                                                        style="list-style: none;">
                                                                        <a href="product.php"><i
                                                                                class="fas fa-heartbeat"></i> Mediclaim</a>
                                                                    </li>
                                                                    <li class="list-group-item"
                                                                        style="list-style: none;">
                                                                        <a href="product.php"><i
                                                                                class="fas fa-child"></i> Child Plan</a>
                                                                    </li>
                                                                    <li class="list-group-item"
                                                                        style="list-style: none;">
                                                                        <a href="product.php"><i
                                                                                class="fas fa-users"></i> Family
                                                                            Floater</a>
                                                                    </li>
                                                                    <li class="list-group-item"
                                                                        style="list-style: none;">
                                                                        <a href="product.php"><i class="fas fa-wheelchair"></i>
                                                                        Critical Illness Insurence</a>
                                                                    </li>

                                                                    <li class="list-group-item"
                                                                        style="list-style: none;">
                                                                        <a href="product.php"><i
                                                                                class="fas fa-wheelchair"></i>
                                                                            Disability Insurance</a>
                                                                    </li>
                                                                    <li class="list-group-item"
                                                                        style="list-style: none;">
                                                                        <a href="product.php"><i class="fas fa-paw"></i>
                                                                            Animal Insurance</a>
                                                                    </li>
                                                                    <li class="list-group-item"
                                                                        style="list-style: none;">
                                                                        <a href="product.php"><i
                                                                                class="fas fa-briefcase-medical"></i>
                                                                            Business Health Insurance</a>
                                                                    </li>

                                                                    <li class="list-group-item"
                                                                        style="list-style: none;">
                                                                        <a href="product.php"><i class="fas fa-wheelchair"></i>

                                                                            Senior Citizen Insurence</a>
                                                                    </li>
                                                                    
                                                                    
                                                                   
                                                                    
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>
                            </li>

                            <li class="nav-item dropdown d-block d-lg-none">
                                <a href="product.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Insurance Product

                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="product.php" class="nav-link">Health Insurance</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="product.php" class="nav-link">Life Insurance</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="product.php" class="nav-link">General Insurance</a>
                                    </li>
                                    <!-- ... -->
                                </ul>
                            </li>
                          
                            <li class="nav-item dropdown header-logo-center">
                                <a class="" href="index.php">
                                    <img src="{{ asset('frontend/assets/images/headerlogo-removebg-preview.png') }}" class="white-logo"
                                        alt="image" style="max-width: 150px;">
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a href="product.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">Renew Policy</a>
                                <ul class="dropdown-menu" style="left: 0%;">
                                    <li class="nav-item">
                                        <a href="product.php" class="nav-link">Renew Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="product.php" class="nav-link">Terms Life Renewal</a>
                                    </li>
                                    <!-- ... -->
                                </ul>
                            </li>

                           

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

<div class="page-banner-area blog-page-are">
<div class="container">
<div class="single-page-banner-content">
<h1>Contact Us</h1>
<ul>
<li>
<a href="index.html">Home</a>
</li>
<li>Contact Us</li>
</ul>
</div>
</div>
</div>


<div class="contact-us-area pt-100">
<div class="container">
<div class="section-title">
<span class="top-title">Get In Touch</span>
<h2>Fill In The Contact Now</h2>
</div>
<div class="row">
<div class="col-lg-6">
<div class="single-contact-img">
<div class="contact-main-img">
<img src="assets/images/contact-us-img-5.webp" alt="contact-us">
</div>
<div class="contact-us-img1" data-cue="zoomIn">
<img src="assets/images/contact-us-img-1.webp" alt="contact-us">
</div>
<div class="contact-us-img2" data-cue="rotateIn">
<img src="assets/images/contact-us-img-2.webp" alt="contact-us">
</div>
<div class="contact-us-img3" data-cue="zoomIn" data-duration="2000">
<img src="assets/images/contact-us-img-3.webp" alt="contact-us">
</div>
<div class="contact-us-img4" data-cue="slideInLeft">
<img src="assets/images/contact-us-img-4.webp" alt="contact-us">
</div>
<div class="contact-main-image1s">
<img src="assets/images/contact-main-bg-img.webp" alt="main">
</div>
</div>
</div>
<div class="col-lg-6">
<div class="contact-form">
<form method="POST" action="{{ route('contact.store') }}" id="contactForm">
@csrf
<div class="row">
<div class="col-lg-12 col-md-6">
<div class="form-group">
<label for="name">Your Name:</label>

<input type="text" class="form-control" id="name" name="name" placeholder="Your Name"  required>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12 col-md-6">
<div class="form-group">
<label for="email">Email Address:</label>

<input type="email" class="form-control" id="email" name="email"   placeholder="Email Address"  required>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12 col-md-6">
<div class="form-group">
<label for="subject">Subject:</label>

<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject"  required>
<div class="help-block with-errors"></div>
</div>
</div>

<div class="col-lg-12">
<div class="form-group">
<label for="message">Your Message:</label>


<textarea class="form-control" id="message"  name="message" rows="5" placeholder="Your Message" required></textarea>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<div class="form-check">
<input name="gridCheck" value="I agree to the terms and privacy policy." class="form-check-input" type="checkbox" id="gridCheck" required="">
<label class="form-check-label" for="gridCheck">
Accept <a href="terms-of-service.html">Terms Of Services</a> And<a href="privacy-policy.html">privacy policy</a>
</label>
<div class="help-block with-errors gridCheck-error"></div>
</div>
</div>
</div>
<div class="col-lg-12 col-md-12">
<button type="submit" class="default-btn">
Submit Now
</button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>


<div class="contact-area pt-70">
<div class="container">
<div class="contact-card-item">
<div class="row justify-content-center">
<div class="col-lg-4 col-sm-6 col-md-6">
<div class="contact-card">
<div class="contact-icon">
<img src="assets/images/contact-phone-2.svg" alt="Phone">
</div>
<h2>Phone Number</h2>
<p><a href="tel:(305) 547-9909">+(305) 547-9909</a></p>
<a href="tel:(305) 547-9908">+(305) 547-9908</a>
</div>
</div>
<div class="col-lg-4 col-sm-6 col-md-6">
<div class="contact-card">
<div class="contact-icon">
<img src="assets/images/contact-email.svg" alt="Email">
</div>
<h2>Sent Us Email</h2>
<p><a href="/cdn-cgi/l/email-protection#fe969b929291be97909190d09d9193"><span class="__cf_email__" data-cfemail="4d25282121220d24232223632e2220">[email&#160;protected]</span></a></p>
<a href="/cdn-cgi/l/email-protection#60090e060f20090e0f0e4e030f0d"><span class="__cf_email__" data-cfemail="7910171f163910171617571a1614">[email&#160;protected]</span></a>
</div>
</div>
<div class="col-lg-4 col-sm-6 col-md-6">
<div class="contact-card">
<div class="contact-icon">
<img src="assets/images/location-icon.svg" alt="images">
</div>
<h2>Our Location</h2>
<p>382 NE 191st NY Miami, FL 33179-3899</p>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="map-area">
<div class="container-fluid">
<div class="place-map">
<iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830902776!2d-74.11976379633643!3d40.69766374862956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1667807354267!5m2!1sen!2sbd"></iframe>
</div>
</div>
</div>









<div class="footer-area pt-100">
    <div class="container">
        <div class="row pb-100">
            <div class="col-lg-3 col-sm-6 col-md-6" data-cue="slideInUp">
                <div class="footer-widget">
                    <a href="index.php">
                        <img src="{{ asset('frontend/assets/images/headerlogo-removebg-preview.png') }}" class="black-logo" alt="logo">
                        <img src="{{ asset('frontend/assets/images/headerlogo-removebg-preview.png') }}" class="white-logo" alt="logo">
                    </a>
                    <p style="color:#ffffff;font-size: 16px;font-family: system-ui;font-weight: 600;
">At Swamitra Insurance, we are committed to providing innovative and reliable insurance solutions that protect what
                        matters most to you. With years of experience in the .</p>
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
                            <h2 class="text-white">About Us</h2>
                    <hr>
                    <ul class="footer-widget-list">
                        <li>
                            <a href="index.php"><i class="bx bx-chevron-right"></i>Home</a>
                        </li>
                        <li>
                            <a href="#"><i class="bx bx-chevron-right"></i>About Us</a>
                        </li>

                        <li>
                            <a href="#"><i class="bx bx-chevron-right"></i>Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6" data-cue="slideInUp">
                <div class="footer-widget footer-widget-link">
                    <h2 class="text-white">Our Services</h2>
                    <hr>
                    <ul class="footer-widget-list">

                        <li>
                            <a href="#"><i class="bx bx-chevron-right"></i>Finances Management</a>
                        </li>
                        <li>
                            <a href="#"><i class="bx bx-chevron-right"></i>Home Insurance</a>
                        </li>
                        <li>
                            <a href="#"><i class="bx bx-chevron-right"></i>Health Insurance</a>
                        </li>
                        <li>
                            <a href="#"><i class="bx bx-chevron-right"></i>General Insurance</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6" data-cue="slideInUp">
                <div class="footer-widget">
                    <h2 class="text-white">Get In Touch</h2>
                    <hr>


                    <div class="touch-content">
                        <div class="contact-icon">
                            <img src="{{ asset('frontend/assets/images/contact-map.svg') }}" alt="svg">
                        </div>
                        <p style="color:#ffffff;font-size: 16px;font-family: system-ui;font-weight: 600;">Office
                            260,Satra Plaza, Palm Beach Road,Sector 19D, Vashi, Navi Mumbai, Maharashtra 400703</p>
                    </div>
                    <div class="touch-content">
                        <div class="contact-icon">
                            <img src="{{ asset('frontend/assets/images/contact-mail.svg') }}" alt="svg">
                        </div>
                        <a href="/cdn-cgi/l/email-protection#abc3cec7c7c4ebc2c5c4c585c8c4c6"><span class="__cf_email__"
                                data-cfemail="cea6aba2a2a18ea7a0a1a0e0ada1a3"
                                style="color:#ffffff;font-size: 16px;font-family: system-ui;font-weight: 600;">info@sawamitrainsurance.com</span></a>
                    </div>
                    <div class="touch-content">
                        <div class="contact-icon">
                        <img src="{{ asset('frontend/assets/images/contact-phone.svg') }}" alt="svg">
                        </div>
                        <a href="tel:+91 768 987 0859 "
                            style="color:#ffffff;font-size: 16px;font-family: system-ui;font-weight: 600;">+91 768 987
                            0859 </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-shape-1">
    <img src="{{ asset('frontend/assets/images/footer-shape-1.webp') }}" alt="footer">
</div>
<div class="footer-shape-2">
    <img src="{{ asset('frontend/assets/images/footer-shape-2.webp') }}" alt="footer">
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


<script data-cfasync="false" src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/ajaxchimp.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/form-validator.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/contact-form-script.js') }}"></script>
<script src="{{ asset('frontend/assets/js/appear.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.meanmenu.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/fancybox.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/scrollCue.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/subscribe-custom.js') }}"></script>
<script src="{{ asset('frontend/assets/js/main.js') }}"></script>
<script></script>
</body>

</html>

    