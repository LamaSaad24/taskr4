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

    <!-- start shop  -->
    <section class="shop my-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 my-3">
                    <div class="item">
                        <img class="w-100" src="assets/img/xshop01.png.pagespeed.ic.YgJRjyP3IB.webp" alt="">
                        <div class="body">
                            <h2 class=" fs-4 fw-bolder text-white text-capitalize">laptop collection</h2>
                            <a class="text-white mt-2 text-uppercase" href="store.html">shop now  <i class="fa-solid fa-circle-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="item">
                        <img class="w-100" src="assets/img/xshop03.png.pagespeed.ic.7lsQL1UJA9.webp" alt="">
                        <div class="body">
                            <h2 class=" fs-4 fw-bolder text-white text-capitalize">
                                Accessories collection</h2>
                            <a class="text-white mt-2 text-uppercase" href="store.html">shop now  <i class="fa-solid fa-circle-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="item">
                        <img class="w-100" src="assets/img/xshop02.png.pagespeed.ic.JMo4guOhuU.webp" alt="">
                        <div class="body">
                            <h2 class=" fs-4 fw-bolder text-white text-capitalize">cameras collection</h2>
                            <a class="text-white mt-2 text-uppercase" href="store.html">shop now  <i class="fa-solid fa-circle-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end shop  -->

    <!-- start product  -->
    <section class="products my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-uppercase">new products</h2>
                </div>
                <div class="col-md-6">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button"
                             role="tab" aria-controls="home-tab-pane" aria-selected="true">Laptops</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Smartphones</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Cameras</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false">Accessories</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content mt-3" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        
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
                                        <a href="product.html">
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
                                        <a href="product.html">
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
                                        <a href="product.html">
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
                                        <a href="product.html">
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
                                        <a href="product.html">
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
                                        <a href="product.html">
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
                                        <a href="product.html">
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
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        <div class="row">
                            <!-- start item  -->
                            <div class="col-md-3">
                                <div class="item">
                                    <div class="label">
                                        <span>new</span>
                                        <span>-30%</span>
                                    </div>
                                    <div class="img">
                                        <img class="w-100" src="assets/img/xproduct05.png.pagespeed.ic.THq_JuCB2a.webp" alt="">
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
                                        <a href="product.html">
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
                                        <a href="product.html">
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
                                        <img class="w-100" src="assets/img/xproduct06.png.pagespeed.ic.hnP3x9P-Fz.webp" alt="">
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
                                        <a href="product.html">
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
                                        <a href="product.html">
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
                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                        <div class="row">
                            <!-- start item  -->
                            <div class="col-md-3">
                                <div class="item">
                                    <div class="label">
                                        <span>new</span>
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
                                        <a href="product.html">
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
                                        <a href="product.html">
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
                                        <a href="product.html">
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
                                        <a href="product.html">
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
                    <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
                        <div class="row">
                            <!-- start item  -->
                            <div class="col-md-3">
                                <div class="item">
                                    <div class="label">
                                        <span>new</span>
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
                                        <a href="product.html">
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
                                        <a href="product.html">
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
                                        <img class="w-100" src="assets/img/xproduct08.png.pagespeed.ic.VCq0LEalYT.webp" alt="">
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
                                        <a href="product.html">
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
                                        <img class="w-100" src="assets/img/xproduct09.png.pagespeed.ic.1JkuDEQEIw.webp" alt="">
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
                                        <a href="product.html">
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
            </div>
        </div>
    </section>
    <!-- end product  -->

    <!-- start hot-deaal -->
    <section class="hot-deal my-5 py-5">
        <div class="container text-center">
            <div class="countdown">
                <ul class="list d-flex flex-wrap justify-content-center align-items-center">
                    <li>
                        <h3>02</h3>
                        <span>days</span>
                    </li>
                    <li>
                        <h3>10</h3>
                        <span>hours</span>
                    </li>
                    <li>
                        <h3>34</h3>
                        <span>mins</span>
                    </li>
                    <li>
                        <h3>60</h3>
                        <span>secs</span>
                    </li>
                </ul>
            </div>
            <h2 class="my-3 fw-bolder ">
                HOT DEAL THIS WEEK
            </h2>
            <p>
                NEW COLLECTION UP TO 50% OFF
            </p>
            <a href="#" class="rounded-pill">shop now</a>
        </div>
    </section>
    <!-- end hot-deaal -->

    <!-- start product  -->
    <section class="products my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>top selling</h2>
                </div>
                <div class="col-md-6">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Laptops</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Smartphones</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Cameras</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false">Accessories</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content mt-3" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        
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
                                        <a href="product.html">
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
                                        <a href="product.html">
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
                                        <a href="product.html">
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
                                        <a href="product.html">
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
                                        <a href="product.html">
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
                                        <a href="product.html">
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
                                        <a href="product.html">
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
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        <div class="row">
                            <!-- start item  -->
                            <div class="col-md-3">
                                <div class="item">
                                    <div class="label">
                                        <span>new</span>
                                        <span>-30%</span>
                                    </div>
                                    <div class="img">
                                        <img class="w-100" src="assets/img/xproduct05.png.pagespeed.ic.THq_JuCB2a.webp" alt="">
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
                                        <a href="product.html">
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
                                        <a href="product.html">
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
                                        <img class="w-100" src="assets/img/xproduct06.png.pagespeed.ic.hnP3x9P-Fz.webp" alt="">
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
                                        <a href="product.html">
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
                                        <a href="product.html">
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
                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                        <div class="row">
                            <!-- start item  -->
                            <div class="col-md-3">
                                <div class="item">
                                    <div class="label">
                                        <span>new</span>
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
                                        <a href="product.html">
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
                                        <a href="product.html">
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
                                        <a href="product.html">
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
                                        <a href="product.html">
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
                    <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
                        <div class="row">
                            <!-- start item  -->
                            <div class="col-md-3">
                                <div class="item">
                                    <div class="label">
                                        <span>new</span>
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
                                        <a href="product.html">
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
                                        <a href="product.html">
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
                                        <img class="w-100" src="assets/img/xproduct08.png.pagespeed.ic.VCq0LEalYT.webp" alt="">
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
                                        <a href="product.html">
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
                                        <img class="w-100" src="assets/img/xproduct09.png.pagespeed.ic.1JkuDEQEIw.webp" alt="">
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
                                        <a href="product.html">
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
            </div>
        </div>
    </section>
    <!-- end product  -->

    <!-- start top-selling  -->
    <section class="top-selling my-5 py-5">
        <div class="container">
            <div class="row ">
                <div class="col-md-4 my-3 top-selling-item">
                    <div class="item">
                        <div class="product d-flex justify-content-center align-items-center">
                            <div class="img w-25">
                                <img class="w-100" src="assets/img/xproduct01.png.pagespeed.ic.flJc5JT8yl.webp" >
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                            </div>
                        </div>
                        <div class="product d-flex justify-content-center align-items-center">
                            <div class="img w-25">
                                <img class="w-100" src="assets/img/xproduct02.png.pagespeed.ic.zbvcFh0rRy.webp" >
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                            </div>
                        </div>
                         <div class="product d-flex justify-content-center align-items-center">
                            <div class="img w-25">
                                <img class="w-100" src="assets/img/xproduct03.png.pagespeed.ic.cQrB7wvQ5E.webp" >
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product d-flex justify-content-center align-items-center">
                            <div class="img w-25">
                                <img class="w-100" src="assets/img/xproduct04.png.pagespeed.ic.Nmz_g7OX-H.webp" >
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                            </div>
                        </div>
                        <div class="product d-flex justify-content-center align-items-center">
                            <div class="img w-25">
                                <img class="w-100" src="assets/img/xproduct02.png.pagespeed.ic.zbvcFh0rRy.webp" >
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                            </div>
                        </div>
                         <div class="product d-flex justify-content-center align-items-center">
                            <div class="img w-25">
                                <img class="w-100" src="assets/img/xproduct03.png.pagespeed.ic.cQrB7wvQ5E.webp" >
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product d-flex justify-content-center align-items-center">
                            <div class="img w-25">
                                <img class="w-100" src="assets/img/xproduct07.png.pagespeed.ic.96craXAXfp.webp" >
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                            </div>
                        </div>
                        <div class="product d-flex justify-content-center align-items-center">
                            <div class="img w-25">
                                <img class="w-100" src="assets/img/xproduct02.png.pagespeed.ic.zbvcFh0rRy.webp" >
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                            </div>
                        </div>
                         <div class="product d-flex justify-content-center align-items-center">
                            <div class="img w-25">
                                <img class="w-100" src="assets/img/xproduct03.png.pagespeed.ic.cQrB7wvQ5E.webp" >
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3 top-selling-item">
                    <div class="item">
                        <div class="product d-flex justify-content-center align-items-center">
                            <div class="img w-25">
                                <img class="w-100" src="assets/img/xproduct01.png.pagespeed.ic.flJc5JT8yl.webp" >
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                            </div>
                        </div>
                        <div class="product d-flex justify-content-center align-items-center">
                            <div class="img w-25">
                                <img class="w-100" src="assets/img/xproduct02.png.pagespeed.ic.zbvcFh0rRy.webp" >
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                            </div>
                        </div>
                         <div class="product d-flex justify-content-center align-items-center">
                            <div class="img w-25">
                                <img class="w-100" src="assets/img/xproduct03.png.pagespeed.ic.cQrB7wvQ5E.webp" >
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product d-flex justify-content-center align-items-center">
                            <div class="img w-25">
                                <img class="w-100" src="assets/img/xproduct04.png.pagespeed.ic.Nmz_g7OX-H.webp" >
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                            </div>
                        </div>
                        <div class="product d-flex justify-content-center align-items-center">
                            <div class="img w-25">
                                <img class="w-100" src="assets/img/xproduct02.png.pagespeed.ic.zbvcFh0rRy.webp" >
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                            </div>
                        </div>
                         <div class="product d-flex justify-content-center align-items-center">
                            <div class="img w-25">
                                <img class="w-100" src="assets/img/xproduct03.png.pagespeed.ic.cQrB7wvQ5E.webp" >
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product d-flex justify-content-center align-items-center">
                            <div class="img w-25">
                                <img class="w-100" src="assets/img/xproduct07.png.pagespeed.ic.96craXAXfp.webp" >
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                            </div>
                        </div>
                        <div class="product d-flex justify-content-center align-items-center">
                            <div class="img w-25">
                                <img class="w-100" src="assets/img/xproduct02.png.pagespeed.ic.zbvcFh0rRy.webp" >
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                            </div>
                        </div>
                         <div class="product d-flex justify-content-center align-items-center">
                            <div class="img w-25">
                                <img class="w-100" src="assets/img/xproduct03.png.pagespeed.ic.cQrB7wvQ5E.webp" >
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3 top-selling-item">
                    <div class="item">
                        <div class="product d-flex justify-content-center align-items-center">
                            <div class="img w-25">
                                <img class="w-100" src="assets/img/xproduct01.png.pagespeed.ic.flJc5JT8yl.webp" >
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                            </div>
                        </div>
                        <div class="product d-flex justify-content-center align-items-center">
                            <div class="img w-25">
                                <img class="w-100" src="assets/img/xproduct02.png.pagespeed.ic.zbvcFh0rRy.webp" >
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                            </div>
                        </div>
                         <div class="product d-flex justify-content-center align-items-center">
                            <div class="img w-25">
                                <img class="w-100" src="assets/img/xproduct03.png.pagespeed.ic.cQrB7wvQ5E.webp" >
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product d-flex justify-content-center align-items-center">
                            <div class="img w-25">
                                <img class="w-100" src="assets/img/xproduct04.png.pagespeed.ic.Nmz_g7OX-H.webp" >
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                            </div>
                        </div>
                        <div class="product d-flex justify-content-center align-items-center">
                            <div class="img w-25">
                                <img class="w-100" src="assets/img/xproduct02.png.pagespeed.ic.zbvcFh0rRy.webp" >
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                            </div>
                        </div>
                         <div class="product d-flex justify-content-center align-items-center">
                            <div class="img w-25">
                                <img class="w-100" src="assets/img/xproduct03.png.pagespeed.ic.cQrB7wvQ5E.webp" >
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product d-flex justify-content-center align-items-center">
                            <div class="img w-25">
                                <img class="w-100" src="assets/img/xproduct07.png.pagespeed.ic.96craXAXfp.webp" >
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                            </div>
                        </div>
                        <div class="product d-flex justify-content-center align-items-center">
                            <div class="img w-25">
                                <img class="w-100" src="assets/img/xproduct02.png.pagespeed.ic.zbvcFh0rRy.webp" >
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                            </div>
                        </div>
                         <div class="product d-flex justify-content-center align-items-center">
                            <div class="img w-25">
                                <img class="w-100" src="assets/img/xproduct03.png.pagespeed.ic.cQrB7wvQ5E.webp" >
                            </div>
                            <div class="body">
                                <h3 class="cat">category</h3>
                                <h4>product name </h4>
                                <p>
                                    <span>$980.00</span>
                                    <span>$990.67</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- start top-selling  -->

    <!-- start newsletter  -->
    <section class="newsletter">
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