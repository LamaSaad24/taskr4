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
    <div id="breadcrumb">
        <div class="container d-flex  align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="index.html">HOME </a></li>
                    <li class="breadcrumb-item"><a href="index.html">ALL CATEGORIES </a></li>
                    <li class="breadcrumb-item"><a href="index.html">ACCESSORIES </a></li>
                    <li class="breadcrumb-item"><a href="index.html">PRODUCT NAME </a></li>
                </ol>
            </nav>

        </div>
    </div>
    <!-- end breadcrumb -->


    <main>
        <div class="container my-4">
            <div class="row">
                <div class="col-md-5 my-2 slider-for">
                    <img clss="w-100" src="assets/img/xproduct01.png.pagespeed.ic.flJc5JT8yl.webp" alt="">
                    <img clss="w-100" src="assets/img/xproduct02.png.pagespeed.ic.zbvcFh0rRy.webp" alt="">
                    <img clss="w-100" src="assets/img/xproduct03.png.pagespeed.ic.cQrB7wvQ5E.webp" alt="">
                    <img clss="w-100" src="assets/img/xproduct04.png.pagespeed.ic.Nmz_g7OX-H.webp" alt="">
                    <img clss="w-100" src="assets/img/xproduct05.png.pagespeed.ic.THq_JuCB2a.webp" alt="">
                    <img clss="w-100" src="assets/img/xproduct06.png.pagespeed.ic.hnP3x9P-Fz.webp" alt="">
                </div>
                <div class="col-md-2 my-2 slider-nav">
                    <img clss="w-100" src="assets/img/xproduct01.png.pagespeed.ic.flJc5JT8yl.webp" alt="">
                    <img clss="w-100" src="assets/img/xproduct02.png.pagespeed.ic.zbvcFh0rRy.webp" alt="">
                    <img clss="w-100" src="assets/img/xproduct03.png.pagespeed.ic.cQrB7wvQ5E.webp" alt="">
                    <img clss="w-100" src="assets/img/xproduct04.png.pagespeed.ic.Nmz_g7OX-H.webp" alt="">
                    <img clss="w-100" src="assets/img/xproduct05.png.pagespeed.ic.THq_JuCB2a.webp" alt="">
                    <img clss="w-100" src="assets/img/xproduct06.png.pagespeed.ic.hnP3x9P-Fz.webp" alt="">
                </div>
                <div class="col-md-5 mt-4 product-details">
                    <h2 class="fw-bold text-uppercase">PRODUCT NAME GOES HERE</h2>
                    <div class="rating position-relative my-3">
                        <i class="fa-regular fa-star fill"></i>
                        <i class="fa-regular fa-star fill"></i>
                        <i class="fa-regular fa-star fill"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <a href="#">10 Review(s) | Add your review</a>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <form action="" class="my-3">
                        <div class="row">
                            <div class="my-2 col">
                                <label for="">SIZE</label>
                                <select class="border py-1 px-2" name="" id="">
                                    <option value="">s</option>
                                    <option value="">l</option>
                                    <option value="">xl</option>
                                    <option value="">xxl</option>
                                </select>
                            </div>
                            <div class="my-2 col">
                                <label for="">COLOR</label>
                                <select class="border py-1 px-2" name="" id="">
                                    <option value="">red</option>
                                    <option value="">l</option>
                                    <option value="">xl</option>
                                    <option value="">xxl</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="my-2 col">
                                <label for="">QTY</label>
                                <input class="py-1 px-2  border" type="number" name="" id="" value="5" min="0" max="10">
                            </div>
                            <div class="my-2 col">
                                <div class="add_to_cart">
                                    <button><i class="fa-solid fa-cart-shopping"></i> add to cart</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <p>
                        <a href="#"><i class="fa-regular fa-heart"></i>ADD TO WISHLIST </a>
                        <a href="#"><i class="fa-solid fa-right-left"></i> ADD TO COMPARE</a>
                    </p>
                    <p>
                        <small>CATEGORY:</small>
                        <a href="#">cat1</a>
                        <a href="#">cat2</a>
                    </p>
                    <p>
                        <small>SHARE:</small>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-google"></i></a>
                        <a href="#"><i class="fa-brands fa-google-plus"></i></a>
                    </p>
                </div>
            </div>
            <div class="mt-5">
                <nav class="product-nav">
                    <div class="nav nav-tabs position-relative justify-content-center" id="nav-tab" role="tablist">
                      <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                      <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
                      <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
                    </div>
                  </nav>
                  <div class="tab-content mt-4" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">

                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">

                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                  </div>
            </div>
            <div class="mt-4 products">
                <h2 class="text-center mb-3">RELATED PRODUCTS</h2>
                <div class="row products-items products-slider position-relative">
                    <!-- start item  -->
                    <div class="col-md-3">
                        <div class="item">
                            <div class="label">
                                <span>-30%</span>
                            </div>
                            <div class="img">
                                <img class="w-100" src="assets/img/xproduct01.png.pagespeed.ic.flJc5JT8yl.webp" alt="">
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                                <div class="rating position-relative">
                                    <i class="fa-regular fa-star fill"></i>
                                    <i class="fa-regular fa-star fill"></i>
                                    <i class="fa-regular fa-star fill"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                            </div>
                            <div class="btns mt-3  d-flex justify-content-center">
                                <a href="#">
                                    <i class="fa-regular fa-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-solid fa-right-left"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                            </div>
                            <div class="add_to_cart">
                                <a href="#"><i class="fa-solid fa-cart-shopping"></i> add to cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- end item  -->
                    <!-- start item  -->
                    <div class="col-md-3">
                        <div class="item">
                            <div class="label">
                                <span>new</span>
                                <span>-30%</span>
                            </div>
                            <div class="img">
                                <img class="w-100" src="assets/img/xproduct02.png.pagespeed.ic.zbvcFh0rRy.webp" alt="">
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                                <div class="rating position-relative">
                                    <i class="fa-regular fa-star fill"></i>
                                    <i class="fa-regular fa-star fill"></i>
                                    <i class="fa-regular fa-star fill"></i>
                                    <i class="fa-regular fa-star fill"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                            </div>
                            <div class="btns mt-3  d-flex justify-content-center">
                                <a href="#">
                                    <i class="fa-regular fa-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-solid fa-right-left"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                            </div>
                            <div class="add_to_cart">
                                <a href="#"><i class="fa-solid fa-cart-shopping"></i> add to cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- end item  -->
                    <!-- start item  -->
                    <div class="col-md-3">
                        <div class="item">
                            <div class="label">
                                <span>new</span>
                            </div>
                            <div class="img">
                                <img class="w-100" src="assets/img/xproduct03.png.pagespeed.ic.cQrB7wvQ5E.webp" alt="">
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                                <div class="rating position-relative">
                                    <i class="fa-regular fa-star fill"></i>
                                    <i class="fa-regular fa-star fill"></i>
                                    <i class="fa-regular fa-star "></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                            </div>
                            <div class="btns mt-3  d-flex justify-content-center">
                                <a href="#">
                                    <i class="fa-regular fa-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-solid fa-right-left"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                            </div>
                            <div class="add_to_cart">
                                <a href="#"><i class="fa-solid fa-cart-shopping"></i> add to cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- end item  -->
                    <!-- start item  -->
                    <div class="col-md-3">
                        <div class="item">
                            <div class="label">
                                <!-- <span>new</span>
                                <span>-30%</span> -->
                            </div>
                            <div class="img">
                                <img class="w-100" src="assets/img/xproduct04.png.pagespeed.ic.Nmz_g7OX-H.webp" alt="">
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                                <div class="rating position-relative">
                                    <i class="fa-regular fa-star fill"></i>
                                    <i class="fa-regular fa-star fill"></i>
                                    <i class="fa-regular fa-star fill"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                            </div>
                            <div class="btns mt-3  d-flex justify-content-center">
                                <a href="#">
                                    <i class="fa-regular fa-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-solid fa-right-left"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                            </div>
                            <div class="add_to_cart">
                                <a href="#"><i class="fa-solid fa-cart-shopping"></i> add to cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- end item  -->
                     <!-- start item  -->
                     <div class="col-md-3">
                        <div class="item">
                            <div class="label">
                                <!-- <span>new</span>
                                <span>-30%</span> -->
                            </div>
                            <div class="img">
                                <img class="w-100" src="assets/img/xproduct04.png.pagespeed.ic.Nmz_g7OX-H.webp" alt="">
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                                <div class="rating position-relative">
                                    <i class="fa-regular fa-star fill"></i>
                                    <i class="fa-regular fa-star fill"></i>
                                    <i class="fa-regular fa-star fill"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                            </div>
                            <div class="btns mt-3  d-flex justify-content-center">
                                <a href="#">
                                    <i class="fa-regular fa-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-solid fa-right-left"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                            </div>
                            <div class="add_to_cart">
                                <a href="#"><i class="fa-solid fa-cart-shopping"></i> add to cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- end item  -->
                     <!-- start item  -->
                    <div class="col-md-3">
                        <div class="item">
                            <div class="label">
                                <!-- <span>new</span>
                                <span>-30%</span> -->
                            </div>
                            <div class="img">
                                <img class="w-100" src="assets/img/xproduct04.png.pagespeed.ic.Nmz_g7OX-H.webp" alt="">
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                                <div class="rating position-relative">
                                    <i class="fa-regular fa-star fill"></i>
                                    <i class="fa-regular fa-star fill"></i>
                                    <i class="fa-regular fa-star fill"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                            </div>
                            <div class="btns mt-3  d-flex justify-content-center">
                                <a href="#">
                                    <i class="fa-regular fa-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-solid fa-right-left"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                            </div>
                            <div class="add_to_cart">
                                <a href="#"><i class="fa-solid fa-cart-shopping"></i> add to cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- end item  -->
                     <!-- start item  -->
                    <div class="col-md-3">
                        <div class="item">
                            <div class="label">
                                <!-- <span>new</span>
                                <span>-30%</span> -->
                            </div>
                            <div class="img">
                                <img class="w-100" src="assets/img/xproduct04.png.pagespeed.ic.Nmz_g7OX-H.webp" alt="">
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                                <div class="rating position-relative">
                                    <i class="fa-regular fa-star fill"></i>
                                    <i class="fa-regular fa-star fill"></i>
                                    <i class="fa-regular fa-star fill"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                            </div>
                            <div class="btns mt-3  d-flex justify-content-center">
                                <a href="#">
                                    <i class="fa-regular fa-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-solid fa-right-left"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                            </div>
                            <div class="add_to_cart">
                                <a href="#"><i class="fa-solid fa-cart-shopping"></i> add to cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- end item  -->
                </div>
            </div>
        </div>
    </main>


    <!-- start newsletter  -->
    <section class="newsletter mt-4">
        <div class="container">
            <h2>Sign Up for the <strong>NEWSLETTER</strong></h2>
            <div class="send my-4 d-flex justify-content-center">
                <form action="" class="d-flex w-50 ">
                    <input type="text" placeholder="Search here" class="w-100">
                    <button>Search</button>
                </form>
            </div>
            <ul class="social">
                <li class="item">
                    <a href="#" class=""><i class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li class="item">
                    <a href="#" class=""><i class="fa-brands fa-twitter"></i></a>
                </li>
                <li class="item">
                    <a href="#" class=""><i class="fa-brands fa-instagram"></i></a>
                </li>
                <li class="item">
                    <a href="#" class=""><i class="fa-brands fa-pinterest"></i></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- end newsletter  -->



    <!-- start footer  -->
    <footer>
        <div class="footer-top py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 my-3">
                        <h3 class="text-white fw-bold">ABOUT US</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut.</p>
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
                <p class="text-center">Copyright ©2022 All rights reserved | This template is made with by Colorlib</p>
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
    <script>
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            fade: true,
            infinite: true,
            speed: 300,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            arrows: true,
            centerMode: true,
            centerPadding: 0,
            focusOnSelect: true,
            vertical: true,
            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        arrows: false,
                        vertical: false,
                        dots: true
                    }
                }
            ]
        });
    </script>
</body>

</html>