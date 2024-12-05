<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/multi_step/style.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
    <link rel="stylesheet" href="style.css" />
    <script src="script.js" defer></script>
    <title>Registraion Form</title>
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
                                <a href="contact.php" class="nav-link" style="white-space: nowrap;">Contact Us</a>
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


  <div class="container">
  <button class= "text-left btn btn-lg text-white" style="color:white;"><a href="" >Go back to Product<a></button>

  <div class="row">
    <!-- Form Section -->
    <div class="col-lg-6 col-sm-6 col-md-6">
      <form action="#" class="form">
        <h1 class="text-center">Great! Let’s start with proposer details</h1>
        <p class="text-center">Proposer is going to pay the premium and avail tax benefits</p>

        <!-- Progress Bar -->
        <div class="progressbar">
          <div class="progress" id="progress"></div>
          <div class="progress-step progress-step-active" data-title="Intro"></div>
          <div class="progress-step" data-title="Contact"></div>
          <div class="progress-step" data-title="ID"></div>
          <div class="progress-step" data-title="Password"></div>
        </div>

        <!-- Step 1: Proposer's Details -->
        <div class="form-step form-step-active">
          <h2>Proposer's Details</h2>
          <div class="input-group">
            <label for="username">Full Name as per your ID Card</label>
            <input type="text" name="username" id="username" required />
          </div>

          <div class="input-group">
            <label for="pancard">PAN CARD</label>
            <input type="text" name="pancard" id="pancard" required />
          </div>

          <div class="input-group">
            <label for="gender">Select Gender</label>
            <select class="form-control" name="gender" id="gender" required>
              <option value="">--Select--</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
            </select>
          </div>

          <div class="input-group">
            <label for="marital-status">Marital Status</label>
            <select class="form-control" name="marital-status" id="marital-status" required>
              <option value="">--Select--</option>
              <option value="single">Single</option>
              <option value="married">Married</option>
              <option value="divorced">Divorced</option>
            </select>
          </div>

          <!-- Social Status -->
          <h3>Social Status</h3>
          <div class="input-group">
            <label for="social-status">What is your social status?</label>
            <input type="text" name="social-status" id="social-status" />
          </div>

          <!-- Address Section -->
          <h3>Address</h3>
          <div class="input-group">
            <label for="address-line1">Address Line 1</label>
            <input type="text" name="address-line1" id="address-line1" required />
          </div>
          <div class="input-group">
            <label for="address-line2">Address Line 2</label>
            <input type="text" name="address-line2" id="address-line2" />
          </div>
          <div class="input-group">
            <label for="city">City</label>
            <input type="text" name="city" id="city" required />
          </div>
          <div class="input-group">
            <label for="state">State/Province</label>
            <input type="text" name="state" id="state" required />
          </div>
          <div class="input-group">
            <label for="zip">Postal/ZIP Code</label>
            <input type="text" name="zip" id="zip" pattern="[0-9]{5}" title="Enter a 5-digit ZIP code" required />
          </div>
          <div class="input-group">
            <label for="country">Country</label>
            <select name="country" class="form-control" id="country" required>
              <option value="">--Select--</option>
              <option value="usa">United States</option>
              <option value="canada">Canada</option>
              <option value="uk">United Kingdom</option>
            </select>
          </div>

          <!-- Contact Details Section -->
          <h3>Contact Details</h3>
          <div class="input-group">
            <label for="phone">Phone Number</label>
            <input type="tel" name="phone" id="phone" pattern="[0-9]{10}" title="Enter a 10-digit phone number" required />
          </div>
          <div class="input-group">
            <label for="email">Email Address</label>
            <input type="email" name="email" id="email" required />
          </div>

          <!-- Next Button -->
          <div>
            <a href="#" class="btn btn-primary btn-next width-50 ml-auto">Next</a>
          </div>
        </div>

        <!-- Step 2: Additional Details -->
        <div class="form-step">
          <div class="input-group">
            <label for="phone">PAN CARD</label>
            <input type="text" name="phone" id="phone" />
          </div>
          <div class="input-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" />
          </div>
          <div class="btns-group">
            <a href="#" class="btn btn-primary btn-prev">Previous</a>
            <a href="#" class="btn  btn-primary btn-next">Next</a>
          </div>
        </div>

        <!-- Step 3: National ID & Date of Birth -->
        <div class="form-step">
          <div class="input-group">
            <label for="dob">Date of Birth</label>
            <input type="date" name="dob" id="dob" />
          </div>
          <div class="input-group">
            <label for="national-id">National ID</label>
            <input type="number" name="national-id" id="national-id" />
          </div>
          <div class="btns-group">
            <a href="#" class="btn btn-primary btn-prev">Previous</a>
            <a href="#" class="btn btn-primary btn-next">Next</a>
          </div>
        </div>

        <!-- Step 4: Password -->
        <div class="form-step">
          <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required />
          </div>
          <div class="input-group">
            <label for="confirmPassword">Confirm Password</label>
            <input type="password" name="confirmPassword" id="confirmPassword" required />
          </div>
          <div class="btns-group">
            <a href="#" class="btn-primary btn btn-prev">Previous</a>
            <input type="submit" value="Submit" class="btn btn-primary" />
          </div>
        </div>
      </form>
      </div>

    <!-- Plan Card Section -->
    <div class="col-lg-6">
    <div class="card" >
  <div class="card-header" id="headingOne">
    <h2 class="mb-0">
      <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Care Supreme - Value
      </button>
    </h2>
  </div>

 
<div class="plan-card">
@if($products->isEmpty())
            <p>No products available.</p>
        @else
            @foreach ($products as $product)
    <div class="plan-header">
        <div class="logo-section">
        @if($product->image)
                  
                            <img src="/{{ $product->image }}" class="category-logo" alt="{{ $product->name }}" style="width:80px;">
                           
                        @endif
            
        </div>
        <div class="plan-info">
            <h2>{{ $product->name }}</h2>
            <p class="discount-text">Inclusive of 5% direct discount*</p>
            <p class="warning-text">20% co-payment applicable on treatment outside the network list</p>
           <ul class="plan-features">
    <li><span class="checkmark"></span> Single Pvt AC Room</li>
    <li><span class="checkmark"></span> ₹2.5 lakh Renewal Bonus</li>
    <li><span class="checkmark"></span> Unlimited Restoration of cover</li>
</ul>
            <div class="links">
                <a href="#">View all features</a>
                <a href="#">Watch plan video</a>
            </div>
        </div>
    </div>
    <div class="plan-pricing">
        <div class="cover-amount">
            <p>Cover amount</p>
            <span>₹{{ number_format($product->cover_amount, 2) }}</span>
        </div>
        <div class="cashless-hospitals">
            <p>Cashless hospitals</p>
            <span>₹{{ $product->cashless_hospitals }}</span>
        </div>
        <div class="price-button">
    <span class="price"> <a href="{{ route('frontend.Proposer') }}">₹{{ number_format($product->monthly_price, 2) }}/month</a>
    </span>
    
</div>

        <div class="compare-section">
            <input type="checkbox" id="compare">
            <label for="compare">Add to compare</label>
        </div>

        @endforeach
        @endif
    </div>

</div>

</div>
    
  </div>
</div>
</div>
    <script src="{{ asset('frontend/multi_step/script.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  








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
