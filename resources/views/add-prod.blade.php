<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- import slick css  -->
    <link rel="stylesheet" href="{{url("assets/external/slick/slick.css")}}">
    <link rel="stylesheet" href="{{url("assets/external/slick/slick-theme.css")}}">
    <!-- import bootstrap  -->
    <link rel="stylesheet" href="{{url("assets/css/bootstrap.min.css")}}">
    <!-- import font awesome  -->
    <link rel="stylesheet" href="{{url("assets/css/all.min.css")}}">
    <!-- import media css -->
    <link rel="stylesheet" href="{{url("assets/css/media.css")}}">
    <!-- import main css -->
    <link rel="stylesheet" href="{{url("assets/css/style.css")}}">
</head>
<body>
    

    <!-- start top-navbar  -->
    <div class="top-navbar">
        <div class="container">
            <div class="content d-flex flex-wrap justify-content-between align-items-center">
                <ul class="list left">
                    <li class="item">
                        <a href="#"><i class="fa-solid fa-phone"></i>+021-95-51-84</a>
                    </li>
                    <li class="item">
                        <a href="#"><i class="fa-regular fa-envelope"></i>email@email.com</a>
                    </li>
                    <li class="item">
                        <a href="#"><i class="fa-solid fa-location-dot"></i>1734 Stonecoal Road</a>
                    </li>
                </ul>
                <ul class="list right">
                    <li class="item">
                        <a href="#"><i class="fa-solid fa-dollar-sign"></i>USD</a>
                    </li>
                    <li class="item">
                        <a href="#"><i class="fa-solid fa-user"></i>My Account</a>
                    </li>
                    <li class="item">
                        <a href="login.html"><i class="fa-solid fa-right-to-bracket"></i>Login</a>
                    </li>
                    <li class="item">
                        <a href="register.html"><i class="fa-solid fa-user"></i>Register</a>
                    </li>
                    <li class="item">
                        <a href="#">
                            <i class="fa-solid fa-right-from-bracket"></i> logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end top-navbar  -->


    <!-- start navbar  -->
    <nav class="navbar">
        <div class="container">
            <div class="content row w-100">
                <div class="logo col-md-2 col-6 d-flex justify-content-center align-items-center mx-auto ">
                    <img src="assets/img/download.webp" class="w-100" alt="electonic logo">
                </div>
                <div class="search col-md-7  d-flex align-items-center justify-content-center">
                    <form action="" class="d-flex w-75 ">
                        <select>
                            <option>All Categories</option>
                            <option>Category 1</option>
                            <option>Category 2</option>
                        </select>
                        <input type="text" placeholder="Search here" class="w-100">
                        <button>Search</button>
                    </form>
                </div>
                <div class="cart col-md-3 d-flex justify-content-center align-items-center">
                    <ul class="list d-flex pt-4">
                        <li class="item">
                            <a href="#">
                                <span class="num">2</span>
                                <i class="fa-regular fa-heart"></i>
                                <span>Your Wishlist</span>
                            </a>
                        </li>
                        <li class="item dropdown">
                            <a href="#" class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="num">3</span>
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span>Your Cart</span>
                            </a>
                            <div class="cart-dropdown   dropdown-menu">
                                <div class="cart-list p-2">
                                    <div class="product position-relative d-flex  justify-content-center align-items-center">
                                        <div class="img me-3 w-25">
                                            <img class="w-100" src="assets/img/xproduct01.png.pagespeed.ic.flJc5JT8yl.webp" alt="">
                                        </div>
                                        <div class="body">
                                            <h2>PRODUCT NAME GOES HERE</h2>
                                            <p>1*  <span class="ms-3 fw-bolder">$670.6</span></p>
                                        </div>
                                        <div class="delete"> <i class="fa-solid fa-xmark"></i> </div>
                                    </div>
                                    <div class="product position-relative d-flex  justify-content-center align-items-center">
                                        <div class="img me-3 w-25">
                                            <img class="w-100" src="assets/img/xproduct01.png.pagespeed.ic.flJc5JT8yl.webp" alt="">
                                        </div>
                                        <div class="body">
                                            <h2>PRODUCT NAME GOES HERE</h2>
                                            <p>1*  <span class="ms-3 fw-bolder">$670.6</span></p>
                                        </div>
                                        <div class="delete"> <i class="fa-solid fa-xmark"></i> </div>
                                    </div>
                                    <div class="product position-relative d-flex  justify-content-center align-items-center">
                                        <div class="img me-3 w-25">
                                            <img class="w-100" src="assets/img/xproduct01.png.pagespeed.ic.flJc5JT8yl.webp" alt="">
                                        </div>
                                        <div class="body">
                                            <h2>PRODUCT NAME GOES HERE</h2>
                                            <p>1*  <span class="ms-3 fw-bolder">$670.6</span></p>
                                        </div>
                                        <div class="delete"> <i class="fa-solid fa-xmark"></i> </div>
                                    </div>
                                </div>
                                <div class="cart-summary">
                                    <span>3 item(s) selected</span>
                                    <p>SUBTOTAL : $245.00</p>
                                </div>
                                <div class="cart-btns d-flex">
                                    <a href="cart.html">View Cart</a>
                                    <a href="checkout.html">Checkout <i class="fa-solid fa-circle-arrow-right"></i></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar  -->

    <!-- start navigation  -->
    <div class="navigation d-lg-block d-xl-block d-none">
        <div class="container">
            <ul class="list">
                <li class="item active"><a href="{{ url('/') }}">home</a></li>
                <li class="item"><a href="{{ url('/store') }}">store</a></li>
                <li class="item"><a href="{{ url('/product') }}">product</a></li>
                <li class="item"><a href="{{ url('/add-prod') }}">add new product</a></li>
                {{-- <li class="item"><a href="store.html">smartphones</a></li>
                <li class="item"><a href="store.html">cameras</a></li>
                <li class="item"><a href="store.html">accessories</a></li> --}}
            </ul>
        </div>
    </div>
    <!-- end navigation  -->

    <!-- start breadcrumb -->
    <div  id="breadcrumb">
        <div class="container d-flex  align-items-center">
                <h2>Your Checkout</h2>
                <nav  aria-label="breadcrumb">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="index.html">HOME </a></li>
                    <li class="breadcrumb-item"><a href="#">Checkout </a></li>
                </ol>
                </nav>

        </div>
    </div>
    <!-- end breadcrumb -->


    <main>
        <div class="container my-4">
            <div class="row">
                <div class="col-lg-6 col-md-6 m-auto my-3 pe-3">
                    <h3 class="mb-4">ADD new product</h3>
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="title">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="desc">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="price">
                        </div>
                        <div class="mb-3">
                            <input type="file" class="form-control" placeholder="image">
                            
                        </div>
                        <div class="mb-3">
                            <button type="" class="btn btn-primary w-100 rounded-pill">ADD</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>


    
    <!-- start footer  -->
    <footer>
        <div class="footer-top py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 my-3">
                        <h3 class="text-white fw-bold">ABOUT US</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
                        <ul class="contact">
                            <li> <i class="fa-solid fa-location-pin"></i> <a href="#">1734 Stonecoal Road</a> </li>
                            <li> <i class="fa-solid fa-phone"></i> <a href="#">+021-95-51-84</a> </li>
                            <li> <i class="fa-solid fa-envelope"></i> <a href="#">email@email.com</a> </li>
                        </ul>
                    </div>
                    <div class="col-md-3 my-3">
                        <h3 class="text-white fw-bold">CATEGORIES</h3>
                        <ul>
                            <li> <a href="#">Hot deals</a> </li>
                            <li> <a href="#">Laptops</a> </li>
                            <li> <a href="#">Smartphones</a> </li>
                            <li> <a href="#">Cameras</a> </li>
                            <li> <a href="#">Accessories</a> </li>
                        </ul>
                    </div>
                    <div class="col-md-3 my-3">
                        <h3 class="text-white fw-bold">INFORMATION</h3>
                            <ul>
                                <li> <a href="#">About Us</a> </li>
                                <li> <a href="#">Contact Us</a> </li>
                                <li> <a href="#">Privacy Policy</a> </li>
                                <li> <a href="#">Orders and Returns</a> </li>
                                <li> <a href="#">Terms & Conditions</a> </li>
                            </ul>
                    </div>
                    <div class="col-md-3 my-3">
                        <h3 class="text-white fw-bold">SERVICE</h3>
                            <ul>
                                <li> <a href="#">My Account</a> </li>
                                <li> <a href="#">View Cart</a> </li>
                                <li> <a href="#">Wishlist</a> </li>
                                <li> <a href="#">Track My Order</a> </li>
                                <li> <a href="#">Help</a> </li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom py-4">
            <div class="container">
                <ul class="d-flex justify-content-center flex-wrap align-items-center">
                    <li><a href="#"><i class="fa-brands fa-cc-visa"></i></a></li>
                    <li><a href="#"><i class="fa-regular fa-credit-card"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-cc-paypal"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-cc-mastercard"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-cc-discover"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-cc-amex"></i></a></li>
                </ul>
                <p class="text-center">Copyright ©2022 All rights reserved | This template is made with  by Colorlib</p>
            </div>
        </div>
    </footer>
    <!-- end footer  -->

    

    <!-- import jquery  -->
    <script src="{{url("assets/js/jquery-1.11.0.min.js")}}"></script>
    <!-- import slick js -->
    <script src="{{ url("assets/external/slick/slick.min.js") }}"></script>
    <!-- import bootstrap js  -->
    <script src="{{ url("assets/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ url("assets/js/main.js") }}"></script>
</body>
</html>