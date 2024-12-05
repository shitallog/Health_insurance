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

.category-item {
    display: flex;
    align-items: center;
    justify-content: start; /* Align items to the left */
}

.category-logo {
    width: 40px; /* Adjust the logo size */
    height: auto;
}

.category-name {
    margin-left: 10px; /* Add space between the logo and name */
    font-size: 16px; /* Adjust font size */
    font-weight: bold; /* Make the name bold */
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

                    <li class="nav-item mega-menu d-none d-lg-block">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        Insurance Product
    </a>
    <div class="dropdown-menu mega-menu-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mega-menu-content">
                        <div class="row">
                            <!-- Loop through insurance categories dynamically -->
                            @foreach ($insuranceCategories as $category)
                            <div class="col-md-4">
    <div class="category-item d-flex align-items-center justify-content-start">
        <a href="{{ route('frontend.product') }}" class="d-flex align-items-center">
            <!-- Logo image -->
            <img src="/{{ $category->image }}" class="category-logo" alt="{{ $category->name }}">
            <!-- Category name -->
            <h6 class="category-name ml-2">{{ $category->name }}</h6>
        </a>
    </div>
</div>

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>

<!-- Mobile dropdown version -->
<li class="nav-item dropdown d-block d-lg-none">
    <a href="product.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        Insurance Product
    </a>
    <ul class="dropdown-menu">
        <!-- Loop through categories for mobile view -->
        @foreach ($insuranceCategories as $category)
        <li class="nav-item">
            <a href="{{ route('frontend.product') }}" class="nav-link">{{ $category->name }}</a>
        </li>
        @endforeach
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
    <div class="banner-two-area">
   <!-- <div class="container-fluid"> -->
      <div class="row align-items-center">
         <div class="col-lg-12">
            <!-- Swiper Slider -->
            <div class="swiper-container">
               <div class="swiper-wrapper">
                  <!-- Slide 1 -->
                  <div class="swiper-slide">
                     <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6 col-12 text-center">
                           <img src="{{ asset('frontend/assets/images/banner/cargo.png') }}" alt="Slide 1" class="img-fluid">
                        </div>
                        <div class="col-lg-7 col-md-6 col-12 text-center">
                           <h1 style="color:#b7031a;">Smart Insurance For Your Better Life</h1>
                           <p>In today's fast-paced world, securing your future is crucial.</p>
                        </div>
                     </div>
                  </div>
                  <!-- Slide 2 -->
                  <div class="swiper-slide">
                     <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6 col-12 text-center">
                           <img src="{{ asset('frontend/assets/images/banner/aircrapt.png') }}" alt="Slide 2" class="img-fluid">
                        </div>
                        <div class="col-lg-7 col-md-6 col-12 text-center">
                           <h1 style="color:#b7031a;">Protect What Matters Most</h1>
                           <p>Ensure peace of mind with comprehensive insurance coverage.</p>
                        </div>
                     </div>
                  </div>
                  <!-- Add more slides -->
                  <div class="swiper-slide">
                     <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6 col-12 text-center">
                           <img src="https://png.pngtree.com/png-clipart/20240328/original/pngtree-front-behind-and-side-view-white-truck-png-image_14702150.png" alt="Slide 3" class="img-fluid">
                        </div>
                        <div class="col-lg-7 col-md-6 col-12 text-center">
                           <h1 style="color:#b7031a;">Tailored Plans For Your Needs</h1>
                           <p>Customized solutions to fit your lifestyle and budget.</p>
                        </div>
                     </div>
                  </div>
                  <!-- Slide 1 -->
                  <div class="swiper-slide">
                     <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6 col-12 text-center">
                           <img src="{{ asset('frontend/assets/images/banner/tailor.png') }}" alt="Slide 1" class="img-fluid">
                        </div>
                        <div class="col-lg-7 col-md-6 col-12 text-center">
                           <h1 style="color:#b7031a;">Smart Insurance For Your Better Life</h1>
                           <p>In today's fast-paced world, securing your future is crucial.</p>
                        </div>
                     </div>
                  </div>
                  <!-- Slide 1 -->
                  <div class="swiper-slide">
                     <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6 col-12 text-center">
                           <img src="{{ asset('frontend/assets/images/banner/car.png') }}" alt="Slide 1" class="img-fluid">
                        </div>
                        <div class="col-lg-7 col-md-6 col-12 text-center">
                           <h1 style="color:#b7031a;">Smart Insurance For Your Better Life</h1>
                           <p>In today's fast-paced world, securing your future is crucial.</p>
                        </div>
                     </div>
                  </div>
                  <!-- Slide 1 -->
                  <div class="swiper-slide">
                     <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6 col-12 text-center">
                           <img src="{{ asset('frontend/assets/images/banner/bike.png') }}"alt="Slide 1" class="img-fluid">
                        </div>
                        <div class="col-lg-7 col-md-6 col-12 text-center">
                           <h1 style="color:#b7031a;">Smart Insurance For Your Better Life</h1>
                           <p>In today's fast-paced world, securing your future is crucial.</p>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6 col-12 text-center">
                           <img src="{{ asset('frontend/assets/images/banner/rickshaw.png') }}"alt="Slide 1" class="img-fluid">
                        </div>
                        <div class="col-lg-7 col-md-6 col-12 text-center">
                           <h1 style="color:#b7031a;">Smart Insurance For Your Better Life</h1>
                           <p>In today's fast-paced world, securing your future is crucial.</p>
                        </div>
                     </div>
                  </div>
                  
               </div>
               <!-- Add Pagination -->
               <div class="swiper-pagination"></div>
            </div>
         </div>
      </div>
   <!-- </div> -->
</div>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<script>
   // Initialize Swiper
   var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1, // Default: 1 slide per view
      spaceBetween: 30,
      loop: true,
      autoplay: {
         delay: 3000,
         disableOnInteraction: false,
      },
      pagination: {
         el: '.swiper-pagination',
         clickable: true,
      },
      breakpoints: {
         768: { // Tablets and up
            slidesPerView: 1,
         },
         992: { // Desktops and up
            slidesPerView: 1,
         },
      },
   });
</script>

<style>
   .banner-two-area .swiper-slide img {
      max-width: 100%;
      height: auto;
   }
   .banner-two-area .swiper-slide h1 {
    font-weight: 700;
      font-size: 58px;
        line-height: 75px;
        margin-bottom: 5px;
   }
   .banner-two-area .swiper-slide p {
      font-size: 19px;
      line-height: 1.6;
   }
   @media (max-width: 576px) {
      .banner-two-area .swiper-slide h1 {
         font-size: 20px;
      }
      .banner-two-area .swiper-slide p {
         font-size: 14px;
      }
   }
</style>



<style>

/* Default styles */
.single-services-card {
   background-color: #f8f9fa; /* Example background color */
   transition: all 0.3s ease-in-out;
   padding: 15px;
   border-radius: 8px;
   text-align: center;
}

.single-services-card h6 {
   color: #333;
   margin: 0;
   transition: all 0.3s ease-in-out;
}

.service-link {
   text-decoration: none;
   color: #333;
   transition: all 0.3s ease-in-out;
}

.services-icon img {
   width: 50px; /* Adjust as needed */
   transition: all 0.3s ease-in-out;
}

/* Hover effects */
.hover-effect:hover .single-services-card {
   background-color: white; /* Change background to white */
   box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Optional hover shadow */
}

.hover-effect:hover h6 {
   color: white; /* Change text color to white */
}

.hover-effect:hover .service-link {
   color: white; /* Change link color to white */
}

.hover-effect:hover .services-icon img {
   filter: brightness(0) invert(1); /* Make image white (for icons) */
}
</style>


<div class="services-area pt-100 pb-70">
   <div class="container">
      <div class="services-top-item d-flex align-items-end justify-content-between">
         <div class="section-title left-title">
            <span class="top-title">Our Product</span>
         </div>
         <a href="product.php" class="default-btn btn-style-2">All Services</a>
      </div>
      <div class="row" data-cues="slideInUp">
      
      @foreach ($insuranceCategories as $category)
    <div class="col-lg-2 col-sm-6 col-md-6 col-6 hover-effect">
        <div class="single-services-card d-flex align-items-center">
            <div class="services-icon bg-icon-color2">
            <img src="/{{ $category->image }}" width="100px">
                <!-- Correctly link to the image using the image filename -->
                </div>
            <h6><a href="{{ route('frontend.product') }}" class="service-link">{{ $category->name }}</a></h6>
        </div>
    </div>
@endforeach

         
      </div>
   </div>
</div>
<!--<div class="features-area pt-100 pb-70">-->
<!--   <div class="container">-->
<!--      <div class="swiper-container">-->
<!--         <div class="swiper-wrapper">-->
<!--            <div class="swiper-slide">-->
<!--               <div class="single-features-card">-->
<!--                  <div class="features-icon">-->
<!--                     <img src="assets/images/features/features-icon-1.svg" alt="features-1">-->
<!--                  </div>-->
<!--                  <h3>Trustworthy Company</h3>-->
<!--                  <p>Placeat facere assumenda est, omnis dolor repellendus poribus autem.</p>-->
<!--               </div>-->
<!--            </div>-->
<!--            <div class="swiper-slide">-->
<!--               <div class="single-features-card bg-color-1">-->
<!--                  <div class="features-icon">-->
<!--                     <img src="assets/images/features/features-icon-2.svg" alt="features-1">-->
<!--                  </div>-->
<!--                  <h3>Money Back Guarantee</h3>-->
<!--                  <p>Placeat facere assumenda est, omnis dolor repellendus poribus autem.</p>-->
<!--               </div>-->
<!--            </div>-->
<!--            <div class="swiper-slide">-->
<!--               <div class="single-features-card bg-color-2">-->
<!--                  <div class="features-icon">-->
<!--                     <img src="assets/images/features/features-icon-3.svg" alt="features-1">-->
<!--                  </div>-->
<!--                  <h3>Awesome Support</h3>-->
<!--                  <p>Placeat facere assumenda est, omnis dolor repellendus poribus autem.</p>-->
<!--               </div>-->
<!--            </div>-->
<!--            <div class="swiper-slide">-->
<!--               <div class="single-features-card bg-color-3">-->
<!--                  <div class="features-icon">-->
<!--                     <img src="assets/images/features/features-icon-4.svg" alt="features-1">-->
<!--                  </div>-->
<!--                  <h3>Anytime Cancellation</h3>-->
<!--                  <p>Placeat facere assumenda est, omnis dolor repellendus poribus autem.</p>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
         <!-- Navigation Buttons -->
<!--         <div class="swiper-button-next"></div>-->
<!--         <div class="swiper-button-prev"></div>-->
         <!-- Pagination -->
<!--         <div class="swiper-pagination"></div>-->
<!--      </div>-->
<!--   </div>-->
<!--</div>-->
<div class="about-style-2-area pb-70">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="single-about-2-content">
               <div class="section-title left-title">
                  <span class="top-title">About Us</span>
                  <h2>Protecting What Matters with Innovative Solutions</h2>
                  <p>At Swamitra Insurance, we are committed to providing innovative and reliable insurance solutions that protect what matters most to you. With years of experience in the industry, we offer a wide range of insurance products, including life, health, vehicle, and property insurance, tailored to meet your unique needs.
                  </p>
               </div>
               <div class="row justify-content-center">
                  <div class="col-lg-4 col-sm-4 col-md-4">
                     <div class="best-support-card">
                        <img src="{{ asset('frontend/assets/images/about/customer-service.svg') }}" alt="customer">
                        <h3 style="color: black;">Best Support</h3>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-4 col-md-4">
                     <div class="best-support-card card2">
                        <img src="{{ asset('frontend/assets/images/about/agent.svg') }}" alt="agent">
                        <h3 style="color: black;">Expert Agent</h3>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-4 col-md-4">
                     <div class="best-support-card">
                        <img src="{{ asset('frontend/assets/images/about/world.svg') }}"alt="world">
                        <h3 style="color: black;">Best In World</h3>
                     </div>
                  </div>
               </div>
               <a href="#" class="default-btn btn-style-2">Read More</a>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="about2-img">
               <div class="about2-main">
                  <div class="row">
                     <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="img-style1">
                           <img src="{{ asset('frontend/assets/images/about/about-2-img-1.webp') }}"alt="about">
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="img-style2">
                           <img src="{{ asset('frontend/assets/images/about/about-2-img-2.webp') }}" alt="about">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="about2-img1">
                  <img src="{{ asset('frontend/assets/images/about/about-2-img-3.webp') }}" alt="about">
               </div>
               <div class="about2-main-img11">
                  <img src="{{ asset('frontend/assets/images/about/about-2-main-img.webp') }}"alt="about">
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
      <img src="{{ asset('frontend/assets/images/about/about-2-shape.webp') }}" alt="image">
   </div>
</div>
<!-- <div class="panther-area">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-4 col-md-12">
            <div class="client-odometer">
               <h2>
                  <span class="odometer" data-count="35,046">00</span>
                  <span class="target">+</span>
               </h2>
               <p>Trusted By Over Happy Customers Including</p>
            </div>
         </div>
         <div class="col-lg-8 col-md-12">
            <div class="panther-slider owl-carousel owl-theme">
               <div class="panther-logo">
                  <img src="assets/images/pantner/pantner-logo-1.webp" alt="panther-logo">
               </div>
               <div class="panther-logo">
                  <img src="assets/images/pantner/pantner-logo-2.webp" alt="panther-logo">
               </div>
               <div class="panther-logo">
                  <img src="assets/images/pantner/pantner-logo-3.webp" alt="panther-logo">
               </div>
               <div class="panther-logo">
                  <img src="assets/images/pantner/pantner-logo-4.webp" alt="panther-logo">
               </div>
               <div class="panther-logo">
                  <img src="assets/images/pantner/pantner-logo-1.webp" alt="panther-logo">
               </div>
               <div class="panther-logo">
                  <img src="assets/images/pantner/pantner-logo-2.webp" alt="panther-logo">
               </div>
               <div class="panther-logo">
                  <img src="assets/images/pantner/pantner-logo-3.webp" alt="panther-logo">
               </div>
               <div class="panther-logo">
                  <img src="assets/images/pantner/pantner-logo-4.webp" alt="panther-logo">
               </div>
            </div>
         </div>
      </div>
   </div>
   </div> -->
<div class="panther-area">
   <div class="container">
      <div class="row align-items-center">
      </div>
      <div class="col-lg-12 col-md-12">
         <div class="panther-slider owl-carousel owl-theme">
            <div class="panther-logo">
               <img src="frontend/assets/images/pantner/pantner-logo-1.webp') }}" alt="panther-logo">
            </div>
            <div class="panther-logo">
               <img src="{{ asset('frontend/assets/images/pantner/pantner-logo-2.webp') }}" alt="panther-logo">
            </div>
            <div class="panther-logo">
               <img src="{{ asset('frontend/assets/images/pantner/pantner-logo-3.webp') }}" alt="panther-logo">
            </div>
            <div class="panther-logo">
               <img src="{{ asset('frontend/assets/images/pantner/pantner-logo-4.webp') }}" alt="panther-logo">
            </div>
            <div class="panther-logo">
               <img src="{{ asset('frontend/assets/images/pantner/pantner-logo-1.webp') }}" alt="panther-logo">
            </div>
            <div class="panther-logo">
               <img src="{{ asset('frontend/assets/images/pantner/pantner-logo-2.webp') }}" alt="panther-logo">
            </div>
            <div class="panther-logo">
               <img src="{{ asset('frontend/assets/images/pantner/pantner-logo-3.webp') }}" alt="panther-logo">
            </div>
            <div class="panther-logo">
               <img src="{{ asset('frontend/assets/images/pantner/pantner-logo-4.webp') }}" alt="panther-logo">
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<!-- <div class="about-area pt-100 pb-100">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-6">
            <div class="single-about-image">
               <img src="assets/images/about/about-1.webp" alt="about-1">
               <div class="about-shape">
                  <img src="assets/images/about/about-shape-1.webp" alt="about-shape">
               </div>
               <div class="about-shape-1">
                  <img src="assets/images/about/about-shape-2.webp" alt="about-shape">
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="single-about-content">
               <div class="section-title left-title">
                  <span class="top-title">About Our Company</span>
                  <h2>Insurance Always Ready To Protect Your Life & Business</h2>
                  <p>Dislike men who are so beguiled and demoralized by the charms of pleasure of the moment so blinded by desire, that they cannot foresee the pain and trouble that are bound.</p>
               </div>
               <ul>
                  <li class="list-inline"><img src="assets/images/about/about-icon.svg" alt="about-icon"> Refresing to get such a personal touch.</li>
                  <li class="list-inline"><img src="assets/images/about/about-icon.svg" alt="about-icon">Duis aute irure dolor in reprehenderit in voluptate.</li>
                  <li class="list-inline"><img src="assets/images/about/about-icon.svg" alt="about-icon">Velit esse cillum dolore eu fugiat nulla pariatur.</li>
               </ul>
               <div class="about-btn d-flex align-items-center">
                  <a href="about.html" class="default-btn">Read More</a>
                  <div class="call-experts">
                     <div class="phone-call">
                        <img src="assets/images/phone-call.svg" alt="phone-call">
                     </div>
                     <span>Call To Our Experts</span>
                     <a href="tel:(+0188)76898708">(+0188) 768 98708</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="about-shape3">
      <img src="assets/images/about/about-shape-3.webp" alt="image">
   </div>
   </div> -->
<div class="testimonials-area pt-100 pb-100">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-6">
            <div class="{{ asset('single-testimonials-img') }}">
               <div class="testimonials-main">
                  <img src="{{ asset('frontend/assets/images/testimonials/testimonials-img-1.webp') }}"alt="testimonials1">
               </div>
               <div class="testimonials-bg-shape12">
                  <img src="{{ asset('frontend/assets/images/testimonials/testimonials-img-bg-shape1.webp') }}"alt="testimonials">
               </div>
               <div class="testimonials-img2">
                  <img src="{{ asset('frontend/assets/images/testimonials/testimonials-img-2.webp') }}"alt="testimonials2">
               </div>
               <div class="testimonials-img3">
                  <img src="{{ asset('frontend/assets/images/testimonials/testimonials-img-3.webp') }}" alt="testimonials2">
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="single-testimonials-content">
               <div class="section-title left-title">
                  <!-- <span class="top-title">Testimonials</span> -->
                  <h2>What Our Customers Says</h2>
                  <p>It is easy and straightforward to distinguish. For free time, when we have the option to solve it, nothing prevents us from doing what we want to do the most.</p>
               </div>
               <div class="testimonials-slider owl-carousel owl-theme">
                  <div class="testimonials-item">
                     <div class="testimonials-client d-flex align-items-center">
                        <img src="{{ asset('frontend/assets/images/testimonials/testimonials-img-4.webp') }}" alt="testimonials">
                        <div class="testimonials-text">
                           <h3 style="color:#202020;">Frank Senbeans</h3>
                           
                        </div>
                     </div>
                     <div class="testimonials-card">
                        <div class="quote-icon">
                           <img src="{{ asset('frontend/assets/images/testimonials/quote.svg') }}"alt="quote">
                        </div>
                        <p>Which is the same as saying through shrinking from toil and pain is
                           cases are perfectly simple and easy to distinguish in a free hour whenour power of choice is untrammelled and when nothing.
                        </p>
                     </div>
                  </div>
                  <div class="testimonials-item">
                     <div class="testimonials-client d-flex align-items-center">
                        <img src="{{ asset('frontend/assets/images/testimonials/testimonials-img-2.webp') }}" alt="testimonials">
                        <div class="testimonials-text">
                           <h3 style="color:#202020;">Ash Wednesday</h3>
                          
                        </div>
                     </div>
                     <div class="testimonials-card">
                        <div class="quote-icon">
                           <img src="{{ asset('frontend/assets/images/testimonials/quote.svg') }}" alt="quote">
                        </div>
                        <p>Which is the same as saying through shrinking from toil and pain is
                           cases are perfectly simple and easy to distinguish in a free hour whenour power of choice is untrammelled and when nothing.
                        </p>
                     </div>
                  </div>
                  <div class="testimonials-item">
                     <div class="testimonials-client d-flex align-items-center">
                        <img src="{{ asset('frontend/assets/images/testimonials/testimonials-img-3.webp') }}" alt="testimonials">
                        <div class="testimonials-text">
                           <h3 style="color:#202020;">Graham Cracker</h3>
                          
                        </div>
                     </div>
                     <div class="testimonials-card">
                        <div class="quote-icon">
                           <img src="{{ asset('frontend/assets/images/testimonials/quote.svg') }}" alt="quote">
                        </div>
                        <p>Which is the same as saying through shrinking from toil and pain is
                           cases are perfectly simple and easy to distinguish in a free hour whenour power of choice is untrammelled and when nothing.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="services-area pt-100 pb-70">
   <div class="container">
      <div class="services-top-item d-flex align-items-end justify-content-between">
         <div class="section-title left-title">
            <span class="top-title">Corporate Agent of</span>
         </div>
        
      </div>
      <div class="row" data-cues="slideInUp">
        
          <div class="col-lg-2 col-sm-6 col-md-6 col-6">
            <div class="single-services-card1">
               <div class="panther-logo1">
                  <img src="https://www.canarahsbclife.com/content/dam/choice/header/images/logo.png" alt="panther-logo">
               </div>
            </div>
         </div>
          <div class="col-lg-2 col-sm-6 col-md-6 col-6">
            <div class="single-services-card1">
               <div class="panther-logo1">
                  <img src="https://files.cholamandalam.com/assets/images/chola_logo.svg" alt="panther-logo">
               </div>
            </div>
         </div>
        
          <div class="col-lg-2 col-sm-6 col-md-6 col-6">
            <div class="single-services-card1">
               <div class="panther-logo1">
                  <img src="{{ asset('frontend/assets/images/ageasefaderal.jpg') }}"alt="panther-logo">
               </div>
            </div>
         </div>
          <div class="col-lg-2 col-sm-6 col-md-6 col-6">
            <div class="single-services-card1">
               <div class="panther-logo1">
                  <img src="{{ asset('frontend/assets/images/avivalifeinsurance.png') }}" alt="panther-logo">
               </div>
            </div>
         </div>
          <div class="col-lg-2 col-sm-6 col-md-6 col-6">
            <div class="single-services-card1">
               <div class="panther-logo1">
                  <img src="{{ asset('frontend/assets/images/bajaalinze.jpg') }}" alt="panther-logo">
               </div>
            </div>
         </div>
          <div class="col-lg-2 col-sm-6 col-md-6 col-6">
            <div class="single-services-card1">
               <div class="panther-logo1">
                  <img src="{{ asset('frontend/assets/images/bandhanlife.jfif') }}" alt="panther-logo">
               </div>
            </div>
         </div>
          <div class="col-lg-2 col-sm-6 col-md-6 col-6">
            <div class="single-services-card1">
               <div class="panther-logo1">
                  <img src="{{ asset('frontend/assets/images/bhartiaxa.png') }}" alt="panther-logo">
               </div>
            </div>
         </div>
          <div class="col-lg-2 col-sm-6 col-md-6 col-6">
            <div class="single-services-card1">
               <div class="panther-logo1">
                  <img src="{{ asset('frontend/assets/images/canaralife.png') }}"alt="panther-logo">
               </div>
            </div>
         </div>
          <div class="col-lg-2 col-sm-6 col-md-6 col-6">
            <div class="single-services-card1">
               <div class="panther-logo1">
                  <img src="{{ asset('frontend/assets/images/careinsurance.png') }}" alt="panther-logo">
               </div>
            </div>
         </div>
          <div class="col-lg-2 col-sm-6 col-md-6 col-6">
            <div class="single-services-card1">
               <div class="panther-logo1">
                  <img src="{{ asset('frontend/assets/images/lifeinsurance.png') }}" alt="panther-logo">
               </div>
            </div>
         </div>
          <div class="col-lg-2 col-sm-6 col-md-6 col-6">
            <div class="single-services-card1">
               <div class="panther-logo1">
                  <img src="{{ asset('frontend/assets/images/edelewis.png') }}"alt="panther-logo">
               </div>
            </div>
         </div>
          <div class="col-lg-2 col-sm-6 col-md-6 col-6">
            <div class="single-services-card1">
               <div class="panther-logo1">
                  <img src="{{ asset('frontend/assets/images/hdfcergo.png') }}"alt="panther-logo">
               </div>
            </div>
         </div>
          <div class="col-lg-2 col-sm-6 col-md-6 col-6">
            <div class="single-services-card1">
               <div class="panther-logo1">
                  <img src="{{ asset('frontend/assets/images/pantner/pantner-logo-1.webp') }}" alt="panther-logo">
               </div>
            </div>
         </div>
          <div class="col-lg-2 col-sm-6 col-md-6 col-6">
            <div class="single-services-card1">
               <div class="panther-logo1">
                  <img src="{{ asset('frontend/assets/images/icilamboard.webp') }}" alt="panther-logo">
               </div>
            </div>
         </div>
          <div class="col-lg-2 col-sm-6 col-md-6 col-6">
            <div class="single-services-card1">
               <div class="panther-logo1">
                  <img src="{{ asset('frontend/assets/images/iffico.webp') }}" alt="panther-logo">
               </div>
            </div>
         </div>
          <div class="col-lg-2 col-sm-6 col-md-6 col-6">
            <div class="single-services-card1">
               <div class="panther-logo1">
                  <img src="{{ asset('frontend/assets/images/indiafirst.png') }}" alt="panther-logo">
               </div>
            </div>
         </div>
          <div class="col-lg-2 col-sm-6 col-md-6 col-6">
            <div class="single-services-card1">
               <div class="panther-logo1">
                  <img src="{{ asset('frontend/assets/images/kotak.avif') }}" alt="panther-logo">
               </div>
            </div>
         </div>
         <!-- <div class="col-lg-2 col-sm-6 col-md-6 col-6">-->
         <!--   <div class="single-services-card  align-items-center">-->
         <!--      <div class="panther-logo">-->
         <!--         <img src="assets/images/pantner/pantner-logo-1.webp" alt="panther-logo">-->
         <!--      </div>-->
         <!--   </div>-->
         <!--</div>-->
         <!-- <div class="col-lg-2 col-sm-6 col-md-6 col-6">-->
         <!--   <div class="single-services-card  align-items-center">-->
         <!--      <div class="panther-logo">-->
         <!--         <img src="assets/images/pantner/pantner-logo-1.webp" alt="panther-logo">-->
         <!--      </div>-->
         <!--   </div>-->
         <!--</div>-->
         <!-- <div class="col-lg-2 col-sm-6 col-md-6 col-6">-->
         <!--   <div class="single-services-card  align-items-center">-->
         <!--      <div class="panther-logo">-->
         <!--         <img src="assets/images/pantner/pantner-logo-1.webp" alt="panther-logo">-->
         <!--      </div>-->
         <!--   </div>-->
         <!--</div>-->
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
