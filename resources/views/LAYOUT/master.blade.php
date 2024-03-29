
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>E-commerce</title>


      <link rel="icon" type="image/png" href="../../../../../../dist/img/ecommerce.png" />
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/chosen.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/color-01.css')}}">

        
      
      

  </head>

@php

    $txt="";

    $txt_Error="";

@endphp

@if(Session::has('success'))

  @php($txt=Session::get('success'))

@endif

 
@if(Session::has('Error'))

  @php($txt_Error=Session::get('Error'))

@endif
<!-- Created by Hamza WALED -->

    <body>
         
        <script src="{{asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/chosen.jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('assets/js/functions.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>

<div class="super_container">
    <!-- Header -->
    <header class="header">
        <!-- Top Bar -->
        <div class="top_bar">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-row">
                        <div class="top_bar_contact_item">
                            <div class="top_bar_icon"></div>
                            @if(Auth::user()->Gender == '1')
                                <b>Mr.{{Auth::user()->Name}}</b>
                            @endif
                            @if(Auth::user()->Gender == '2')
                               <b>Ms.{{Auth::user()->Name}}</b> 
                            @endif
                        </div>
                        
                        <div class="top_bar_content ml-auto">
                            
                            <div class="top_bar_user">
                                
                                <div><a href="/logout"> Sign out</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Header Main -->
        <div class="header_main">
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="col-lg-2 col-sm-3 col-3 order-1">
                        <div class="logo_container">
                            <div class="logo">
                              <img src="../../../../../../dist/img/ecommerce2.png" style="   width: 100px;
  height: 100px;">
                            </div>
                        </div>
                    </div> <!-- Search -->
                    <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                        <div class="header_search">
                            <div class="header_search_content">
                                <div class="header_search_form_container">
                                    <form action="#" class="header_search_form clearfix"> <input type="search" required="required" class="header_search_input" placeholder="Search for products...">
                                        <div class="custom_dropdown" style="display: none;">
                                            <div class="custom_dropdown_list"> <span class="custom_dropdown_placeholder clc">All Categories</span> <i class="fas fa-chevron-down"></i>
                                                <ul class="custom_list clc">
                                                    <li><a class="clc" href="#">All Categories</a></li>
                                                    <li><a class="clc" href="#">Computers</a></li>
                                                    <li><a class="clc" href="#">Laptops</a></li>
                                                    <li><a class="clc" href="#">Cameras</a></li>
                                                    <li><a class="clc" href="#">Hardware</a></li>
                                                    <li><a class="clc" href="#">Smartphones</a></li>
                                                </ul>
                                            </div>
                                        </div> <button type="submit" class="header_search_button trans_300" value="Submit"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918770/search.png" alt=""></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Wishlist -->
                    <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                        <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                            <div class="wishlist d-flex flex-row align-items-center justify-content-end">
                                <div class="wishlist_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918681/heart.png" alt=""></div>
                                <div class="wishlist_content">
                                    <div class="wishlist_text"><a href="#">Wishlist</a></div>
                                    <div class="wishlist_count">10</div>
                                </div>
                            </div> <!-- Cart -->
                            <div class="cart">
                                <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                    <div class="cart_icon"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918704/cart.png" alt="">
                                        <div class="cart_count"><span>3</span></div>
                                    </div>
                                    <div class="cart_content">
                                        <div class="cart_text"><a href="{{route('CART_page')}}">Cart</a></div>
                                        <div class="cart_price">$185</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Main Navigation -->
        <nav class="main_nav">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="main_nav_content d-flex flex-row">
                            <!-- Categories Menu -->
                            <!-- Main Nav Menu -->
                            <div class="main_nav_menu">
                                <ul class="standard_dropdown main_nav_dropdown">
                                    <li><a href="#">Home<i class="fas fa-chevron-down"></i></a></li>
                                    <li class="hassubs"> <a href="#">Laptop<i class="fas fa-chevron-down"></i></a>
                                        <ul>
                                            <li> <a href="#">Lenovo<i class="fas fa-chevron-down"></i></a>
                                                <ul>
                                                    <li><a href="#">Lenovo 1<i class="fas fa-chevron-down"></i></a></li>
                                                    <li><a href="#">Lenovo 3<i class="fas fa-chevron-down"></i></a></li>
                                                    <li><a href="#">Lenovo 2<i class="fas fa-chevron-down"></i></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">DELL<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="#">APPLE<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="#">HP<i class="fas fa-chevron-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="hassubs"> <a href="#">Featured Brands<i class="fas fa-chevron-down"></i></a>
                                        <ul>
                                            <li> <a href="#">APPLE<i class="fas fa-chevron-down"></i></a>
                                                <ul>
                                                    <li><a href="#">Laptop<i class="fas fa-chevron-down"></i></a></li>
                                                    <li><a href="#">Mobiles<i class="fas fa-chevron-down"></i></a></li>
                                                    <li><a href="#">Ipads<i class="fas fa-chevron-down"></i></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Samsung<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="#">Lenovo<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="#">DELL<i class="fas fa-chevron-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="hassubs"> <a href="#">Pages<i class="fas fa-chevron-down"></i></a>
                                        <ul>
                                            <li><a href="shop.html">Shop<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="product.html">Product<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="blog_single.html">Blog Post<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="regular.html">Regular Post<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="cart.html">Cart<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
                                    <li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
                                </ul>
                            </div> <!-- Menu Trigger -->
                            <div class="menu_trigger_container ml-auto">
                                <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                    <div class="menu_burger">
                                        <div class="menu_trigger_text">menu</div>
                                        <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav> <!-- Menu -->
        <div class="page_menu">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="page_menu_content">
                            <div class="page_menu_search">
                                <form action="#"> <input type="search" required="required" class="page_menu_search_input" placeholder="Search for products..."> </form>
                            </div>
                            <ul class="page_menu_nav">
                               
                                
                                <li class="page_menu_item"> <a href="#">Home<i class="fa fa-angle-down"></i></a> </li>
                                <li class="page_menu_item has-children"> <a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
                                        <li class="page_menu_item has-children"> <a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
                                            <ul class="page_menu_selection">
                                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="page_menu_item has-children"> <a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="page_menu_item has-children"> <a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a></li>
                                <li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a></li>
                            </ul>
                            <div class="menu_contact">
                                <div class="menu_contact_item">
                                    <div class="menu_contact_icon"><img src="images/phone_white.png" alt=""></div>+38 068 005 3570
                                </div>
                                <div class="menu_contact_item">
                                    <div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="content">
@yield('content')
      </div>


    <div style="height: 700px"> </div>
</div>
       
     


 </body>

        <footer class="footer">
            <div class="row">
                <div class="col-sm-6 col-md-4 footer-navigation">
                    <h3><a href="#">E-<span>commerce</span></a></h3>
                    <p class="links"><a href="#">Home</a><strong>  · </strong><a href="#">About</a><strong>  · </strong><a href="#">Contact</a></p>
                    <p class="company-name">Copyright &copy; E-commerce.  <b> All rights reserved.</b> </p>
                </div>
                <div class="col-sm-6 col-md-4 footer-contacts">
                    <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                        <p><span class="new-line-span">Casablanca</span></p>
                    </div>
                    <div><i class="fa fa-phone footer-contacts-icon"></i>
                        <p class="footer-center-info email text-left"> +212 643085998</p>
                    </div>
                    <div><i class="fa fa-envelope footer-contacts-icon"></i>
                        <p> h.waled@aui.ma</p>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4 footer-about">
                    <h4>About the company</h4>
                    <p>We are one of the best companies in the whole word. <br>
                    WANT TO SEE WHY?<br>
                    <i class="fa fa-arrow-right"></i> Visit our website.</p>
                    <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
                </div>
            </div>
        </footer>

 <style>
    .footer {
       position: sticky;
       bottom: 0;
     }
         footer {
          position:fixed;
          background-color: #292c2f;
          box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
          box-sizing: border-box;
          width: 100%;
          text-align: left;
          font: bold 16px sans-serif;
          padding: 55px 50px;
          bottom: 0;
          
          color: #fff
      }

      .footer-navigation h3 {
          margin: 0;
          font: normal 36px Cookie, cursive;
          margin-bottom: 20px;
          color: #fff
      }

      .footer-navigation h3 a {
          text-decoration: none;
          color: #fff
      }

      .footer-navigation h3 span {
          color: #5383d3
      }

      .footer-navigation p.links a {
          color: #fff;
          text-decoration: none
      }

      .footer-navigation p.company-name {
          color: #8f9296;
          font-size: 14px;
          font-weight: normal;
          margin-top: 20px
      }

      @media (max-width:767px) {
          .footer-contacts {
              margin: 30px 0
          }
      }

      .footer-contacts p {
          display: inline-block;
          color: #ffffff;
          vertical-align: middle
      }

      .footer-contacts p a {
          color: #5383d3;
          text-decoration: none
      }

      .fa.footer-contacts-icon {
          background-color: #33383b;
          color: #fff;
          font-size: 18px;
          width: 38px;
          height: 38px;
          border-radius: 50%;
          text-align: center;
          line-height: 38px;
          margin: 10px 15px 10px 0
      }

      span.new-line-span {
          display: block;
          font-weight: normal;
          display: block;
          font-weight: normal;
          font-size: 14px;
          line-height: 2
      }

      .footer-about h4 {
          display: block;
          color: #fff;
          font-size: 14px;
          font-weight: bold;
          margin-bottom: 20px
      }

      .footer-about p {
          line-height: 20px;
          color: #92999f;
          font-size: 13px;
          font-weight: normal;
          margin: 0
      }

      div.social-links {
          margin-top: 20px;
          color: #fff
      }

      .social-links a {
          display: inline-block;
          width: 35px;
          height: 35px;
          cursor: pointer;
          background-color: #33383b;
          border-radius: 2px;
          font-size: 20px;
          color: #ffffff;
          text-align: center;
          line-height: 35px;
          margin-right: 5px;
          margin-bottom: 5px
      }



      body {
          background: #eee
      }
       </style>
      <style>
             
             @charset "utf-8";
      @import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900|Rubik:300,400,500,700,900');

      * {
          margin: 0;
          padding: 0;
          -webkit-font-smoothing: antialiased;
          -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
          text-shadow: rgba(0, 0, 0, .01) 0 0 1px
      }

      body {
          font-family: 'Rubik', sans-serif;
          font-size: 14px;
          font-weight: 400;
          background: #FFFFFF;
          color: #000000
      }

      div {
          display: block;
          position: relative;
          -webkit-box-sizing: border-box;
          -moz-box-sizing: border-box;
          box-sizing: border-box
      }

      ul {
          list-style: none;
          margin-bottom: 0px
      }

      p {
          font-family: 'Rubik', sans-serif;
          font-size: 14px;
          line-height: 1.7;
          font-weight: 400;
          color: #828282;
          -webkit-font-smoothing: antialiased;
          -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
          text-shadow: rgba(0, 0, 0, .01) 0 0 1px
      }

      p a {
          display: inline;
          position: relative;
          color: inherit;
          border-bottom: solid 1px #ffa07f;
          -webkit-transition: all 200ms ease;
          -moz-transition: all 200ms ease;
          -ms-transition: all 200ms ease;
          -o-transition: all 200ms ease;
          transition: all 200ms ease
      }

      a,
      a:hover,
      a:visited,
      a:active,
      a:link {
          text-decoration: none;
          -webkit-font-smoothing: antialiased;
          -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
          text-shadow: rgba(0, 0, 0, .01) 0 0 1px
      }

      p a:active {
          position: relative;
          color: #FF6347
      }

      p a:hover {
          color: #FFFFFF;
          background: #ffa07f
      }

      p a:hover::after {
          opacity: 0.2
      }

      ::selection {}

      p::selection {}

      h1 {
          font-size: 48px
      }

      h2 {
          font-size: 36px
      }

      h3 {
          font-size: 24px
      }

      h4 {
          font-size: 18px
      }

      h5 {
          font-size: 14px
      }

      h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
          font-family: 'Rubik', sans-serif;
          font-weight: 500;
          -webkit-font-smoothing: antialiased;
          -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
          text-shadow: rgba(0, 0, 0, .01) 0 0 1px
      }

      h1::selection,
      h2::selection,
      h3::selection,
      h4::selection,
      h5::selection,
      h6::selection {}

      .form-control {
          color: #db5246
      }

      section {
          display: block;
          position: relative;
          box-sizing: border-box
      }

      .clear {
          clear: both
      }

      .clearfix::before,
      .clearfix::after {
          content: "";
          display: table
      }

      .clearfix::after {
          clear: both
      }

      .clearfix {
          zoom: 1
      }

      .float_left {
          float: left
      }

      .float_right {
          float: right
      }

      .trans_200 {
          -webkit-transition: all 200ms ease;
          -moz-transition: all 200ms ease;
          -ms-transition: all 200ms ease;
          -o-transition: all 200ms ease;
          transition: all 200ms ease
      }

      .trans_300 {
          -webkit-transition: all 300ms ease;
          -moz-transition: all 300ms ease;
          -ms-transition: all 300ms ease;
          -o-transition: all 300ms ease;
          transition: all 300ms ease
      }

      .trans_400 {
          -webkit-transition: all 400ms ease;
          -moz-transition: all 400ms ease;
          -ms-transition: all 400ms ease;
          -o-transition: all 400ms ease;
          transition: all 400ms ease
      }

      .trans_500 {
          -webkit-transition: all 500ms ease;
          -moz-transition: all 500ms ease;
          -ms-transition: all 500ms ease;
          -o-transition: all 500ms ease;
          transition: all 500ms ease
      }

      .fill_height {
          height: 100%
      }

      .super_container {
          width: 100%;
          overflow: hidden
      }

      .prlx_parent {
          overflow: hidden
      }

      .prlx {
          height: 130% !important
      }

      .nopadding {
          padding: 0px !important
      }

      .button {
          display: inline-block;
          background: #0e8ce4;
          border-radius: 5px;
          height: 48px;
          -webkit-transition: all 200ms ease;
          -moz-transition: all 200ms ease;
          -ms-transition: all 200ms ease;
          -o-transition: all 200ms ease;
          transition: all 200ms ease
      }

      .button a {
          display: block;
          font-size: 18px;
          font-weight: 400;
          line-height: 48px;
          color: #FFFFFF;
          padding-left: 35px;
          padding-right: 35px
      }

      .button:hover {
          opacity: 0.8
      }

      .header {
          position: relative;
          width: 100%;
          z-index: 10
      }

      .top_bar {
          width: 100%;
          height: 56px;
          background: #fafafa;
          border-bottom: solid 1px rgba(0, 0, 0, 0.05);
          z-index: 2
      }

      .header.scrolled .top_bar {
          display: none
      }

      .top_bar_contact {
          display: inline-block
      }

      .top_bar_contact_item {
          font-size: 16px;
          font-weight: 300;
          line-height: 56px;
          margin-right: 40px
      }

      .top_bar_contact_item:not(:first-child) {
          margin-right: 0px
      }

      .top_bar_contact_item a {
          font-size: 16px;
          font-weight: 300;
          line-height: 56px;
          color: #000;
          -webkit-transition: all 200ms ease;
          -moz-transition: all 200ms ease;
          -ms-transition: all 200ms ease;
          -o-transition: all 200ms ease;
          transition: all 200ms ease
      }

      .top_bar_contact_item a:hover {
          color: #8a8a8a
      }

      .top_bar_contact_item:last-child {
          margin-right: 0px
      }

      .top_bar_icon {
          display: inline-block;
          margin-right: 14px;
          -webkit-transform: translateY(-2px);
          -moz-transform: translateY(-2px);
          -ms-transform: translateY(-2px);
          -o-transform: translateY(-2px);
          transform: translateY(-2px)
      }

      .top_bar_menu {
          display: inline-block
      }

      .top_bar_dropdown li {
          padding-left: 13px;
          padding-right: 13px
      }

      .standard_dropdown li {
          display: inline-block;
          position: relative;
          height: 56px
      }

      .standard_dropdown li li {
          display: block;
          width: 100%
      }

      .standard_dropdown li li a {
          display: block;
          width: 100%;
          border-bottom: solid 1px #f2f2f2;
          font-size: 16px
      }

      .standard_dropdown li:last-child a {
          border-bottom: none
      }

      .standard_dropdown li.hassubs>a i {
          display: inline-block;
          margin-left: 5px
      }

      .standard_dropdown li a {
          display: block;
          position: relative;
          font-size: 16px;
          font-weight: 300;
          color: #000000;
          line-height: 56px;
          white-space: nowrap;
          -webkit-transition: all 200ms ease;
          -moz-transition: all 200ms ease;
          -ms-transition: all 200ms ease;
          -o-transition: all 200ms ease;
          transition: all 200ms ease
      }

      .standard_dropdown li a:hover {
          color: #0e8ce4
      }

      .standard_dropdown li a i {
          display: none;
          -webkit-transform: translateY(-1px);
          -moz-transform: translateY(-1px);
          -ms-transform: translateY(-1px);
          -o-transform: translateY(-1px);
          transform: translateY(-1px);
          font-size: 12px
      }

      .standard_dropdown li ul {
          display: block;
          position: absolute;
          top: 120%;
          left: 0;
          width: auto;
          visibility: hidden;
          opacity: 0;
          background: #FFFFFF;
          box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.1);
          -webkit-transition: opacity 0.3s ease;
          -moz-transition: opacity 0.3s ease;
          -ms-transition: opacity 0.3s ease;
          -o-transition: opacity 0.3s ease;
          transition: all 0.3s ease;
          z-index: 1
      }

      .standard_dropdown li:hover>ul {
          top: 100%;
          visibility: visible;
          opacity: 1
      }

      .standard_dropdown ul ul {
          left: 100%;
          top: 0 !important
      }

      .top_bar_user {
          display: inline-block;
          margin-left: 35px
      }

      .user_icon {
          display: inline-block;
          margin-right: 7px;
          -webkit-transform: translateY(-2px);
          -moz-transform: translateY(-2px);
          -ms-transform: translateY(-2px);
          -o-transform: translateY(-2px);
          transform: translateY(-2px);
          width: 15px
      }

      .user_icon img {
          width: 100%
      }

      .top_bar_user div {
          display: inline-block
      }

      .top_bar_user div:nth-child(2) {
          margin-right: 21px
      }

      .top_bar_user div:nth-child(2)::after {
          display: block;
          position: absolute;
          top: 50%;
          -webkit-transform: translateY(-50%);
          -moz-transform: translateY(-50%);
          -ms-transform: translateY(-50%);
          -o-transform: translateY(-50%);
          transform: translateY(-50%);
          right: -13px;
          width: 1px;
          height: 17px;
          background: rgba(0, 0, 0, 0.1);
          content: ''
      }

      .top_bar_user a {
          font-size: 16px;
          font-weight: 300;
          line-height: 56px;
          color: #000;
          -webkit-transition: all 200ms ease;
          -moz-transition: all 200ms ease;
          -ms-transition: all 200ms ease;
          -o-transition: all 200ms ease;
          transition: all 200ms ease
      }

      .top_bar_user a:hover {
          color: #8a8a8a
      }

      .header_main {
          z-index: 1
      }

      .header.scrolled .header_main {
          display: none
      }

      .header_main_item {
          top: 50%;
          -webkit-transform: translateY(-50%);
          -moz-transform: translateY(-50%);
          -ms-transform: translateY(-50%);
          -o-transform: translateY(-50%);
          transform: translateY(-50%)
      }

      .logo_container {
          height: 80px
      }

      .logo {

          top: 50%;
          -webkit-transform: translateY(-50%);
          -moz-transform: translateY(-50%);
          -ms-transform: translateY(-50%);
          -o-transform: translateY(-50%);
          transform: translateY(-50%)
      }

      .logo a {
          font-size: 36px;
          font-weight: 500;
          color: #0e8ce4
      }

      .header_search {
          height: 90px
      }

      .header_search_content {
          top: 50%;
          -webkit-transform: translateY(-50%);
          -moz-transform: translateY(-50%);
          -ms-transform: translateY(-50%);
          -o-transform: translateY(-50%);
          transform: translateY(-50%)
      }

      .header_search_form_container {
          width: 100%;
          height: 50px;
          border: solid 1px #e5e5e5;
          border-radius: 5px
      }

      .header_search_form {
          width: 100%;
          height: 100%
      }

      .header_search_input {
          display: block;
          position: relative;
          width: calc((100% - 50px) * 0.601);
          height: 100%;
          line-height: 50px;
          border: none !important;
          outline: none !important;
          padding-left: 26px;
          color: #7f7f7f;
          float: left
      }

      .header_search_input::-webkit-input-placeholder {
          font-size: 16px !important;
          font-weight: 300;
          line-height: 50px;
          color: #a3a3a3 !important
      }

      .header_search_input:-moz-placeholder {
          font-size: 16px !important;
          font-weight: 300;
          line-height: 50px;
          color: #a3a3a3 !important
      }

      .header_search_input::-moz-placeholder {
          font-size: 16px !important;
          font-weight: 300;
          line-height: 50px;
          color: #a3a3a3 !important
      }

      .header_search_input:-ms-input-placeholder {
          font-size: 16px !important;
          font-weight: 300;
          line-height: 50px;
          color: #a3a3a3 !important
      }

      .header_search_input::input-placeholder {
          font-size: 16px !important;
          font-weight: 300;
          line-height: 50px;
          color: #a3a3a3 !important
      }

      .custom_dropdown {
          width: calc((100% - 50px) * 0.399);
          height: 50px;
          float: left;
          padding-left: 26px
      }

      .custom_dropdown::before {
          display: block;
          position: absolute;
          top: 50%;
          -webkit-transform: translateY(-50%);
          -moz-transform: translateY(-50%);
          -ms-transform: translateY(-50%);
          -o-transform: translateY(-50%);
          transform: translateY(-50%);
          left: 0;
          width: 1px;
          height: 28px;
          background: #e5e5e5;
          content: ''
      }

      .custom_dropdown_list i {
          display: inline-block;
          color: #a3a3a3;
          font-size: 10px;
          margin-left: 3px;
          -webkit-transform: translateY(-1px);
          -moz-transform: translateY(-1px);
          -ms-transform: translateY(-1px);
          -o-transform: translateY(-1px);
          transform: translateY(-1px)
      }

      .custom_dropdown_placeholder {
          display: inline-block;
          font-size: 16px;
          font-weight: 300;
          color: #a3a3a3;
          line-height: 48px;
          cursor: pointer
      }

      .custom_dropdown_placeholder i {}

      .custom_list {
          text-align: left;
          position: absolute;
          padding: 0;
          top: 75px;
          left: -15px;
          visibility: hidden;
          opacity: 0;
          box-shadow: 0 0 25px rgba(63, 78, 100, 0.15);
          -webkit-transition: opacity 0.2s ease;
          -moz-transition: opacity 0.2s ease;
          -ms-transition: opacity 0.2s ease;
          -o-transition: opacity 0.2s ease;
          transition: all 0.2s ease
      }

      .custom_list.active {
          visibility: visible;
          opacity: 1;
          top: 50px;
          box-shadow: 0 0 25px rgba(63, 78, 100, 0.15);
          -webkit-transition: opacity 0.3s ease;
          -moz-transition: opacity 0.3s ease;
          -ms-transition: opacity 0.3s ease;
          -o-transition: opacity 0.3s ease;
          transition: all 0.3s ease
      }

      .custom_list li {
          height: 35px;
          padding-left: 15px;
          padding-right: 15px;
          background: #FFFFFF
      }

      .custom_list li a {
          display: block;
          color: #a3a3a3;
          line-height: 35px;
          border-bottom: solid 1px #ededed;
          -webkit-transition: all 200ms ease;
          -moz-transition: all 200ms ease;
          -ms-transition: all 200ms ease;
          -o-transition: all 200ms ease;
          transition: all 200ms ease
      }

      .custom_list li a:hover {
          color: #0e8ce4
      }

      select {
          display: inline;
          border: 0;
          width: auto;
          margin-left: 10px;
          outline: none;
          -webkit-appearance: none;
          -moz-appearance: none;
          border-bottom: 2px solid #555;
          color: #7b00ff;
          -webkit-transition: all .4s ease-in-out;
          transition: all .4s ease-in-out
      }

      select:hover {
          cursor: pointer
      }

      select option {
          border: 0;
          border-bottom: 1px solid #555;
          padding: 10px;
          -webkit-appearance: none;
          -moz-appearance: none
      }

      .header_search_button {
          position: absolute;
          top: 0;
          right: 0;
          width: 50px;
          height: 100%;
          background: #0e8ce4;
          border: none;
          outline: none;
          cursor: pointer;
          border-top-right-radius: 5px;
          border-bottom-right-radius: 5px
      }

      .wishlist_cart {
          height: 90px
      }

      .wishlist {
          margin-right: 50px
      }

      .wishlist_icon img {
          width: 100%
      }

      .wishlist_content {
          margin-left: 14px
      }

      .wishlist_text a {
          font-size: 18px;
          font-weight: 400;
          color: #000000;
          -webkit-transition: all 200ms ease;
          -moz-transition: all 200ms ease;
          -ms-transition: all 200ms ease;
          -o-transition: all 200ms ease;
          transition: all 200ms ease
      }

      .wishlist_text a:hover {
          color: #0e8ce4
      }

      .wishlist_count {
          margin-top: -2px;
          color: #a3a3a3;
          font-size: 14px
      }

      .cart_count {
          position: absolute;
          bottom: -1px;
          right: -14px;
          width: 23px;
          height: 23px;
          background: #0e8ce4;
          border-radius: 50%;
          text-align: center
      }

      .cart_count span {
          display: block;
          line-height: 23px;
          font-size: 12px;
          color: #FFFFFF;
          -webkit-transform: translateY(1px);
          -moz-transform: translateY(1px);
          -ms-transform: translateY(1px);
          -o-transform: translateY(1px);
          transform: translateY(1px)
      }

      .cart_icon img {
          width: 100%
      }

      .cart_content {
          margin-left: 28px
      }

      .cart_text a {
          font-size: 18px;
          font-weight: 400;
          color: #000000;
          -webkit-transition: all 200ms ease;
          -moz-transition: all 200ms ease;
          -ms-transition: all 200ms ease;
          -o-transition: all 200ms ease;
          transition: all 200ms ease
      }

      .cart_text a:hover {
          color: #0e8ce4
      }

      .cart_price {
          font-size: 14px;
          color: #a3a3a3;
          margin-top: -2px
      }

      .main_nav {
          width: 100%;
          border-top: solid 1px #f2f2f2;
          box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.1);
          background: #FFFFFF
      }

      .header.scrolled .main_nav {
          position: fixed;
          top: 0;
          left: 0;
          -webkit-transition: all 200ms ease;
          -moz-transition: all 200ms ease;
          -ms-transition: all 200ms ease;
          -o-transition: all 200ms ease;
          transition: all 200ms ease
      }

      .main_nav_content {
          width: 100%;
          height: 60px
      }

      .cat_menu_container {
          width: 293px;
          height: 100%;
          background: #0e8ce4;
          padding-left: 35px;
          cursor: pointer;
          z-index: 1
      }

      .cat_menu_title {
          height: 100%
      }

      .cat_burger {
          width: 18px;
          height: 14px
      }

      .cat_burger span {
          display: block;
          position: absolute;
          left: 0;
          width: 100%;
          height: 2px;
          background: #FFFFFF
      }

      .cat_burger span:nth-child(2) {
          top: 6px
      }

      .cat_burger span:nth-child(3) {
          top: 12px
      }

      .cat_menu_text {
          font-size: 18px;
          font-weight: 400;
          color: #FFFFFF;
          text-transform: uppercase;
          margin-left: 20px
      }

      .cat_menu_container ul {
          display: block;
          position: absolute;
          top: 100%;
          left: 0;
          min-width: 100%;
          background: #FFFFFF;
          box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.1);
          -webkit-transition: opacity 0.3s ease;
          -moz-transition: opacity 0.3s ease;
          -ms-transition: opacity 0.3s ease;
          -o-transition: opacity 0.3s ease;
          transition: all 0.3s ease
      }

      .cat_menu_container>ul {
          padding-top: 13px
      }

      .cat_menu_container:hover .cat_menu {
          visibility: visible;
          opacity: 1
      }

      .cat_menu li {
          display: block;
          position: relative;
          width: auto;
          height: 46px;
          border-bottom: solid 1px #f2f2f2;
          padding-left: 35px;
          padding-right: 30px;
          white-space: nowrap
      }

      .cat_menu li.hassubs>a i {
          display: block
      }

      .cat_menu li a {
          display: block;
          position: relative;
          font-size: 16px;
          font-weight: 300;
          color: #000000;
          line-height: 46px;
          -webkit-transition: all 200ms ease;
          -moz-transition: all 200ms ease;
          -ms-transition: all 200ms ease;
          -o-transition: all 200ms ease;
          transition: all 200ms ease
      }

      .cat_menu li a:hover {
          color: #0e8ce4
      }

      .cat_menu li a i {
          display: none;
          position: absolute;
          top: 50%;
          -webkit-transform: translateY(-50%);
          -moz-transform: translateY(-50%);
          -ms-transform: translateY(-50%);
          -o-transform: translateY(-50%);
          transform: translateY(-50%);
          right: 0;
          font-size: 12px
      }

      .cat_menu li ul {
          display: block;
          position: absolute;
          top: 35px;
          left: 100%;
          visibility: hidden;
          opacity: 0;
          width: 100%;
          background: #FFFFFF;
          box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.1)
      }

      .cat_menu li:hover>ul {
          top: 0;
          visibility: visible;
          opacity: 1
      }

      .main_nav_dropdown li {
          margin-right: 35px
      }

      .main_nav_dropdown li:last-child {
          margin-right: 0px
      }

      .main_nav_dropdown li a {
          font-size: 18px;
          font-weight: 400;
          color: #a19a9a;
          line-height: 60px
      }

      .main_nav_dropdown li li {
          padding-left: 15px;
          padding-right: 15px;
          margin-right: 0px
      }

      .menu_trigger_container {
          display: none;
          width: auto;
          height: 100%;
          padding-right: 25px;
          padding-left: 25px;
          cursor: pointer
      }

      .menu_trigger {
          height: 100%
      }

      .menu_burger_inner {
          display: inline-block
      }

      .menu_trigger_text {
          display: inline-block;
          font-size: 18px;
          font-weight: 400;
          color: #FFFFFF;
          text-transform: uppercase;
          margin-right: 16px
      }

      .page_menu {
          margin-top: 15px;
          -webkit-transition: all 500ms ease;
          -moz-transition: all 500ms ease;
          -ms-transition: all 500ms ease;
          -o-transition: all 500ms ease;
          transition: all 500ms ease
      }

      .page_menu_content {
          height: 0px;
          background: #0e8ce4;
          padding-left: 15px;
          padding-right: 15px;
          overflow: hidden
      }

      .page_menu_search {
          display: none;
          width: 100%;
          margin-top: 30px;
          margin-bottom: 30px
      }

      .page_menu_search_input {
          width: 100%;
          height: 40px;
          background: #FFFFFF;
          border: none;
          outline: none;
          padding-left: 25px
      }

      .page_menu_item {
          display: block;
          position: relative;
          border-bottom: solid 1px rgba(255, 255, 255, 0.1);
          vertical-align: middle
      }

      .page_menu_item>a {
          display: block;
          color: #FFFFFF;
          font-weight: 500;
          height: 50px;
          line-height: 50px;
          font-size: 14px;
          text-transform: uppercase;
          -webkit-transition: all 200ms ease;
          -moz-transition: all 200ms ease;
          -ms-transition: all 200ms ease;
          -o-transition: all 200ms ease;
          transition: all 200ms ease
      }

      .page_menu_item>a:hover {
          color: #b5aec4
      }

      .page_menu_item a i {
          display: none;
          margin-left: 8px
      }

      .page_menu_item.has-children>a>i {
          display: inline-block
      }

      .page_menu_selection {
          margin: 0;
          width: 100%;
          height: 0px;
          overflow: hidden;
          z-index: 1
      }

      .page_menu_selection li {
          padding-left: 10px;
          padding-right: 10px;
          line-height: 50px
      }

      .page_menu_selection li a {
          display: block;
          color: #FFFFFF;
          border-bottom: solid 1px rgba(255, 255, 255, 0.1);
          font-size: 14px;
          text-transform: uppercase;
          -webkit-transition: opacity 0.3s ease;
          -moz-transition: opacity 0.3s ease;
          -ms-transition: opacity 0.3s ease;
          -o-transition: opacity 0.3s ease;
          transition: all 0.3s ease
      }

      .page_menu_selection li a:hover {
          color: #b5aec4
      }

      .page_menu_selection li:last-child a {
          border-bottom: none
      }

      .menu_contact_item {
          display: inline-block;
          font-size: 12px;
          font-weight: 300;
          line-height: 56px;
          margin-right: 40px;
          color: #FFFFFF
      }

      .menu_contact_item:not(:first-child) {
          margin-right: 0px
      }

      .menu_contact_item a {
          font-size: 12px;
          font-weight: 300;
          line-height: 56px;
          color: #FFFFFF;
          -webkit-transition: all 200ms ease;
          -moz-transition: all 200ms ease;
          -ms-transition: all 200ms ease;
          -o-transition: all 200ms ease;
          transition: all 200ms ease
      }

      .menu_contact_item a:hover {
          color: #8a8a8a
      }

      .menu_contact_item:last-child {
          margin-right: 0px
      }

      .menu_contact_icon {
          display: inline-block;
          margin-right: 14px;
          -webkit-transform: translateY(-2px);
          -moz-transform: translateY(-2px);
          -ms-transform: translateY(-2px);
          -o-transform: translateY(-2px);
          transform: translateY(-2px)
      }

      @media (min-width: 1200px) {
          .container {
              max-width: 1300px !important
          }
      }

      @media only screen and (max-width: 1199px) {
          .main_nav_dropdown li {
              margin-right: 30px
          }

          .main_nav_dropdown li a {
              font-size: 16px
          }
      }

      @media only screen and (max-width: 991px) {
          .header_search {
              height: 50px
          }

          .custom_dropdown {
              text-align: left
          }

          .main_nav {
              margin-top: 56px
          }

          .main_nav_menu {
              display: none
          }

          .logo_container,
          .wishlist_cart {
              height: 125px
          }

          .main_nav_content {
              background: #0e8ce4
          }

          .menu_trigger_container {
              display: block
          }

          .top_bar {
              height: 40px
          }

          .top_bar_contact_item {
              font-size: 12px;
              margin-right: 20px;
              line-height: 40px
          }

          .top_bar_contact_item a {
              font-size: 12px;
              line-height: 40px
          }

          .top_bar_icon {
              margin-right: 4px
          }

          .top_bar_icon img {
              width: 70%
          }

          .top_bar_menu {
              display: none
          }

          .top_bar_user a {
              font-size: 12px;
              line-height: 40px
          }

          .user_icon {
              -webkit-transform: translateY(-1px);
              -moz-transform: translateY(-1px);
              -ms-transform: translateY(-1px);
              -o-transform: translateY(-1px);
              transform: translateY(-1px);
              width: 12px
          }
      }

      @media only screen and (max-width: 767px) {
          .header_search {
              display: none
          }

          .page_menu_search {
              display: block
          }

          .main_nav {
              margin-top: 0px
          }
      }

      @media only screen and (max-width: 575px) {
          h2 {
              font-size: 24px
          }

          p {
              font-size: 13px
          }

          .top_bar {
              display: none
          }

          .logo_container,
          .wishlist_cart {
              height: 72px
          }

          .logo a {
              font-size: 24px
          }

          .cat_burger {
              width: 16px;
              height: 12px
          }

          .cat_burger span:nth-child(2) {
              top: 5px
          }

          .cat_burger span:nth-child(3) {
              top: 10px
          }

          .menu_trigger_text {
              font-size: 13px;
              margin-right: 10px
          }

          .wishlist {
              margin-right: 23px
          }

          .wishlist_content {
              margin-left: 6px
          }

          .wishlist_text {
              display: none
          }

          .cart_text {
              display: none
          }

          .wishlist_text a,
          .cart_text a {
              font-size: 14px
          }

          .wishlist_count,
          .cart_price {
              font-size: 12px
          }

          .wishlist_icon {
              width: 20px
          }

          .cart_content {
              margin-left: 18px
          }

          .cart_icon {
              width: 17px
          }

          .cart_count {
              width: 21px;
              height: 21px
          }

          .cart_count span {
              line-height: 21px
          }

          .top_bar_user {
              margin-left: 0px
          }

          .header_search {
              display: none
          }

          .main_nav {
              width: calc(100% + 30px);
              margin-left: -15px;
              margin-right: -15px;
              margin-top: 0px
          }

          .main_nav_content {
              height: 35px
          }

          .menu_trigger_container {
              padding-right: 15px
          }

          .page_menu_item>a {
              font-size: 12px
          }

          .page_menu_selection li a {
              font-size: 12px
          }

          .button {
              height: 32px
          }

          .button a {
              font-size: 12px;
              line-height: 32px;
              padding-left: 25px;
              padding-right: 25px
          }
}
</style>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

      <script>
        $(document).ready(function()
{
"use strict";

var menuActive = false;
var header = $('.header');
setHeader();
initCustomDropdown();
initPageMenu();

function setHeader()
{

if(window.innerWidth > 991 && menuActive)
{
closeMenu();
}
}

function initCustomDropdown()
{
if($('.custom_dropdown_placeholder').length && $('.custom_list').length)
{
var placeholder = $('.custom_dropdown_placeholder');
var list = $('.custom_list');
}

placeholder.on('click', function (ev)
{
if(list.hasClass('active'))
{
list.removeClass('active');
}
else
{
list.addClass('active');
}

$(document).one('click', function closeForm(e)
{
if($(e.target).hasClass('clc'))
{
$(document).one('click', closeForm);
}
else
{
list.removeClass('active');
}
});

});

$('.custom_list a').on('click', function (ev)
{
ev.preventDefault();
var index = $(this).parent().index();

placeholder.text( $(this).text() ).css('opacity', '1');

if(list.hasClass('active'))
{
list.removeClass('active');
}
else
{
list.addClass('active');
}
});


$('select').on('change', function (e)
{
placeholder.text(this.value);

$(this).animate({width: placeholder.width() + 'px' });
});
}

/*

4. Init Page Menu

*/

function initPageMenu()
{
if($('.page_menu').length && $('.page_menu_content').length)
{
var menu = $('.page_menu');
var menuContent = $('.page_menu_content');
var menuTrigger = $('.menu_trigger');

//Open / close page menu
menuTrigger.on('click', function()
{
if(!menuActive)
{
openMenu();
}
else
{
closeMenu();
}
});

//Handle page menu
if($('.page_menu_item').length)
{
var items = $('.page_menu_item');
items.each(function()
{
var item = $(this);
if(item.hasClass("has-children"))
{
item.on('click', function(evt)
{
evt.preventDefault();
evt.stopPropagation();
var subItem = item.find('> ul');
if(subItem.hasClass('active'))
{
subItem.toggleClass('active');
TweenMax.to(subItem, 0.3, {height:0});
}
else
{
subItem.toggleClass('active');
TweenMax.set(subItem, {height:"auto"});
TweenMax.from(subItem, 0.3, {height:0});
}
});
}
});
}
}
}

function openMenu()
{
var menu = $('.page_menu');
var menuContent = $('.page_menu_content');
TweenMax.set(menuContent, {height:"auto"});
TweenMax.from(menuContent, 0.3, {height:0});
menuActive = true;
}

function closeMenu()
{
var menu = $('.page_menu');
var menuContent = $('.page_menu_content');
TweenMax.to(menuContent, 0.3, {height:0});
menuActive = false;
}


});
      </script>
      <script>
        $(function () {
          // Summernote
          $('#summernote').summernote()

          // CodeMirror
          /*CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai"
          });*/
        })
          function REMOVE(url) {
    // body...
          swal({
          title: "Etes-vous sûr de vouloir supprimer?",
          text: "Une fois supprimées, vous ne pourrez plus récupérer ces données !",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {

            window.location.href=url;
            
          }else{
            return false;
          } 
      });
  }
  var valid = "{{$txt}}";

var erreur = "{{$txt_Error}}";

if(valid!=""){

  swal("Opération réussie !", valid, "success");//"success" IS THE IMAGE, "Operation done successfully !" IS THE MESSAGE DISPLAYED , valid
          

}

if(erreur!=""){

   swal("Impossible de supprimer!", valid, "error");

}
$('.duallistbox').bootstrapDualListbox()

    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

      </script>
      @yield('script')
 
</html>
  