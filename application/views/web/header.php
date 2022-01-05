<!DOCTYPE html>
<html lang="zxx">
<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-K3WKLBE0G6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-K3WKLBE0G6');
</script>
  <!--====== Required meta tags ======-->
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!--====== Title ======-->
  <title> Rock 2 Polish </title>
  <!--====== Favicon Icon ======-->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.ico" type="img/png" />
  <!--====== Animate Css ======-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.min.css">
  <!--====== Bootstrap css ======-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
  <!--====== Fontawesome css ======-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" />
  <!--====== Flaticon css ======-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flaticon.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/flaticon/flaticon-2.css" />
  <!--====== Magnific Popup css ======-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css" />
  <!--====== Owl Carousel css ======-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slick.css" />
  <!--====== Nice Select ======-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/nice-select.css" />
  <!--====== Mapbox ======-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/leaflet.css" />

  <!--====== Bootstrap Datepicker ======-->

  <!--====== Ion Rangeslider ======-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ion.rangeSlider.min.css" />
  <!--====== Default css ======-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/default.css" />
  <!--====== Style css ======-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />
  <style>
  #li .active {
    color:            #F8F8F8;
    background-color: #4f81bd;


}
 /** just copy and paste this entire code in your stylesheet **/


/*ul,
li {
  margin: 0;
  padding: 0;
  list-style: none;
}
body {
  margin: 0;
  padding: 0;

}


.diamondCon {
  width: 200px;
  height: 200px;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  position: absolute;
  margin: auto;
}

.diamond {
  display: block;
  width: 200px;
  height: 200px;
  position: relative;
}

.diamond li {
  position: absolute;
  width: 0;
  height: 0;
  border-style: solid;
  opacity: 0;
  z-index: 100;
  transition: 400ms ease;
}

.diamond li:nth-child(1) {
  border-width: 20px 20px 0 20px;
  border-color: #7AD997 transparent transparent transparent;
  left: 0;
  right: 0;
  margin: auto;
  animation: traingle1 200ms 2.2s ease, opacity 2s 2.4s ease infinite;
  animation-fill-mode: forwards;
}

.diamond li:nth-child(2) {
  border-width: 0 20px 20px 20px;
  border-color: transparent transparent #64C592;
  left: 59px;
  animation: traingle2 200ms 1.8s ease, opacity 2s 2.4s ease infinite;
  animation-fill-mode: forwards;
}

.diamond li:nth-child(3) {
  border-width: 0 20px 20px 20px;
  border-color: transparent transparent #54B28D;
  right: 59px;
  animation: traingle3 200ms 2s ease, opacity 2s 2.4s ease infinite;
  animation-fill-mode: forwards;
}

.diamond li:nth-child(4) {
  border-width: 0 20px 20px 20px;
  border-width: 20px 20px 0 20px;
  border-color: #7AD997 transparent transparent transparent;
  animation: traingle4 200ms 1.6s ease, opacity 2s 2.6s ease infinite;
  animation-fill-mode: forwards;
}

.diamond li:nth-child(5) {
  border-width: 0 20px 20px 20px;
  border-width: 20px 20px 0 20px;
  border-color: #B4FEA5 transparent transparent transparent;
  animation: traingle5 200ms 1.4s ease, opacity 2s 2.6s ease infinite;
  animation-fill-mode: forwards;
}

.diamond li:nth-child(6) {
  border-width: 0 20px 20px 20px;
  border-color: transparent transparent #90EF9D;
  left: 0;
  right: 0;
  margin: auto;
  animation: traingle6 200ms 1.2s ease, opacity 2s 2.6s ease infinite;
  animation-fill-mode: forwards;
}

.diamond li:nth-child(7) {
  border-width: 20px 20px 0 20px;
  border-color: #C9FEAC transparent transparent transparent;
  left: 0;
  right: 0;
  margin: auto;
  animation: traingle7 200ms 1s ease, opacity 2s 2.8s ease infinite;
  animation-fill-mode: forwards;
}

.textCon {
  width: 200px;
  height: 50px;
  position: absolute;
  top: 0;
  text-align: center;
  line-height: 50px;
  font-size: 30px;
  font-family: Dancing Script;
  color: #fff;
  opacity: 0;
  animation: text 500ms 2.4s ease;
  animation-fill-mode: forwards;
}

@keyframes traingle1 {
  0% {
    top: -50px;
    opacity: 0;
  }
  100% {
    top: 0;
    opacity: 1;
  }
}

@keyframes traingle2 {
  0% {
    top: -50px;
    opacity: 0;
  }
  100% {
    top: 1px;
    opacity: 1;
  }
}

@keyframes traingle3 {
  0% {
    top: -50px;
    opacity: 0;
  }
  100% {
    top: 1px;
    opacity: 1;
  }
}

@keyframes traingle4 {
  0% {
    right: 59px;
    top: -33px;
    opacity: 0;
  }
  100% {
    right: 59px;
    top: 22px;
    opacity: 1;
  }
}

@keyframes traingle5 {
  0% {
    left: 59px;
    top: -33px;
    opacity: 0;
  }
  100% {
    left: 59px;
    top: 22px;
    opacity: 1;
  }
}

@keyframes traingle6 {
  0% {
    top: -33px;
    opacity: 0;
  }
  100% {
    top: 23px;
    opacity: 1;
  }
}

@keyframes traingle7 {
  0% {
    top: -10px;
    opacity: 0;
  }
  100% {
    top: 44px;
    opacity: 1;
  }
}

@keyframes opacity {
  0% {
    opacity: 1;
  }
  50% {
    opacity: 0.3;
  }
  100% {
    opacity: 1;
  }
}

@keyframes text {
  0% {
    top: 0;
    opacity: 0;
  }
  100% {
    top: 70px;
    opacity: 1;
  }
}*/
</style>
  </style>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '814386532690399');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=814386532690399&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>

<body>

  <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="<?php echo base_url(); ?>https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
  <!--====== PRELOader ======-->
 <!--<div class="preloader">
 <div class="diamondCon">
  <ul class="diamond">
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
</ul>
<div class="textCon">Rock 2 Polish Gems</div>
</div>

  </div>-->
  <!--====== HEADER START ======-->
  <header class="header-three header-absolute sticky-header sigma-header">
    <div class="header-top">
      <div class="container-fluid container-custom-three">
        <div class="d-md-flex align-items-center justify-content-between">


          <ul class="header-top-info">


          </ul>
        </div>
      </div>
    </div>
    <div class="main-menu-area sticky-header">
      <div class="container-fluid container-custom-three">
        <div class="nav-container d-flex align-items-center justify-content-between">
          <!-- Site Logo -->
          <div class="site-logo site-logo-text">
            <a href="<?php echo base_url(); ?>">

              <div class="site-logo-text">
              <img src="<?php echo base_url(); ?>assets/rock2polish.png" style="width:100px;height:90px;" alt="Logo">

              </div>
            </a>
          </div>
          <!-- Main Menu -->
          <div class="nav-menu d-lg-flex align-items-center justify-content-between">
            <!-- Navbar Close Icon -->
            <div class="navbar-close">
              <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
            </div>
            <!-- Mneu Items -->
            <div class="sigma-header-nav">
              <div class="container">
                <div class="sigma-header-nav-inner">
                  <nav>
                    <ul class="sigma-main-menu">
                      <li class="menu-item">
                        <a href="<?php echo base_url(); ?>">
                          Home
                        </a>

                      </li>

                      <li class="menu-item">
                        <a href="<?php echo base_url(); ?>Main/about">
                     About
                        </a>
                      </li>


                      </li>

                      <li class="menu-item menu-item-has-children menu-item-has-megamenu">
                        <a href="<?php echo base_url();?>Main/shop">
                          Shop
                        </a>
                        <div class="sub-menu">
                          <div class="container">
                            <div class="row">
                              <div class="col-lg-3">
                                <ul class="sigm-megamenu-nav nav nav-tabs">
                                  <li class="nav-item">
                                    <a href="#tab1" class="nav-link active" data-toggle="tab"><i class="fal fa-gem"></i> Loose Diamonds</a>
                                  </li>


                                </ul>
                              </div>
                              <div class="col-lg-9">
                                <div class="tab-content">
                                  <div class="tab-item show active" id="tab1">
                                    <div class="row">
                                      <div class="col-lg-4">
                                        <div class="sigma-megamenu-navbox menu-item-has-children">
                                          <h5 class="sigma-title"><a href="<?php echo base_url();?>Main/shop">Shapes</a></h5>
                                          <ul class="sub-menu">
                                            <li class="menu-item">
                                              <a href="<?php echo base_url();?>Main/load_round">Round</a>
                                            </li>

                                            <li class="menu-item">
                                              <a href="<?php echo base_url();?>Main/radiant">Radiant</a>
                                            </li>
                                            <li class="menu-item">
                                              <a href="<?php echo base_url();?>Main/princess">Princess</a>
                                            </li>
                                            <li class="menu-item">
                                              <a href="<?php echo base_url();?>Main/pearl">Pear</a>
                                            </li>
                                            <li class="menu-item">
                                              <a href="<?php echo base_url();?>Main/oval">Oval</a>
                                            </li>

                                          </ul>
                                        </div>
                                      </div>
                                      <div class="col-lg-4">
                                        <div class="sigma-megamenu-navbox menu-item-has-children">
                                          <h5 class="sigma-title" style="visibility:hidden;">Other Shop Pages</h5>
                                          <ul class="sub-menu">
                                          <li class="menu-item">
                                                <a href="<?php echo base_url();?>Main/marquise">Marquise</a>
                                              </li>
                                              <li class="menu-item">
                                                <a href="<?php echo base_url();?>Main/heart">Heart</a>
                                              </li>
                                              <li class="menu-item">
                                                <a href="<?php echo base_url();?>Main/emerald">Emerald</a>
                                              </li>
                                              <li class="menu-item">
                                                <a href="#">Cushion</a>
                                              </li>
                                              <li class="menu-item">
                                                <a href="<?php echo base_url();?>Main/asscher">Asscher</a>
                                              </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <div class="col-lg-4">
                                        <div class="sigma-megamenu-img">
                                          <a href="#">
                                            <img src="<?php echo base_url();?>assets/menu.png" alt="img">
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="menu-item"><a href="<?php echo base_url(); ?>Main/master_cut">Master Cut</a>
            </li>
                      <li class="menu-item">
                        <a href="<?php echo base_url(); ?>Main/jewellery">
                          Jewellery
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="<?php echo base_url(); ?>Main/contact">
                          Contact
                        </a>
                      </li>

                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
          <!-- navbar right content -->
          <div class="menu-right-buttons">
            <!-- Log in icon -->
           <!-- <div class="login-btn">
              <a href="#" id="loginBtn"><i class="fal fa-user"></i></a>
            </div>-->
            <!-- search btton -->
            <!-- <div class="search">
              <a href="<?php echo base_url(); ?>#" class="search-icon" id="searchBtn">
                <i class="fal fa-search open-icon"></i>
                <i class="fal fa-times close-icon"></i>
              </a>
              <div class="search-form">
                <form action="#">
                  <input type="text" placeholder="Search your keyword...">
                  <button type="submit"><i class="far fa-search"></i></button>
                </form>
              </div>
            </div>-->
            <!-- Off canvas Toggle -->
            <div class="toggle">
              <a href="<?php echo base_url(); ?>#" id="offCanvasBtn"><i class="fal fa-bars"></i></a>
            </div>
           <!-- <div class="toggle dropdown-btn">
              <span class="sigma-notification">0</span>
              <a href="<?php echo base_url(); ?>#"><i class="fal fa-shopping-bag"></i></a>-->
           <!--<div class="dropdown-menu cart-dropdown-menu">
                <ul class="cart-items-box">
                    <li class="cart-item">
                      <div class="img">
                        <img src="<?php echo base_url(); ?>assets/img/cart/1.jpg" alt="img">
                      </div>
                      <div class="content">
                        <h5><a href="<?php echo base_url(); ?>#">Oak Wood Cutting Board</a></h5>
                        <p>2x 10,000$</p>
                      </div>
                    </li>
                    <li class="cart-item">
                      <div class="img">
                        <img src="<?php echo base_url(); ?>assets/img/cart/2.jpg" alt="img">
                      </div>
                      <div class="content">
                        <h5><a href="<?php echo base_url(); ?>#">Oak Wood Cutting Board</a></h5>
                        <p>2x 10,000$</p>
                      </div>
                    </li>
                    <li class="cart-item">
                      <div class="img">
                        <img src="<?php echo base_url(); ?>assets/img/cart/3.jpg" alt="img">
                      </div>
                      <div class="content">
                        <h5><a href="<?php echo base_url(); ?>#">Oak Wood Cutting Board</a></h5>
                        <p>2x 10,000$</p>
                      </div>
                    </li>
                    <li class="cart-item">
                      <div class="img">
                        <img src="<?php echo base_url(); ?>assets/img/cart/4.jpg" alt="img">
                      </div>
                      <div class="content">
                        <h5><a href="<?php echo base_url(); ?>#">Oak Wood Cutting Board</a></h5>
                        <p>2x 10,000$</p>
                      </div>
                    </li>
                  </ul>
                <div class="cart-items-box">
                  <div class="cart-item">
                    <span>Subtotal</span>
                    <span>20,0000</span>
                  </div>
                  <div class="cart-item actions">
                    <button type="button" class="main-btn btn-filled">Checkout</button>
                    <button type="button" class="main-btn btn-borderd">View Cart</button>
                  </div>
                </div>
              </div>-->
            </div>
            <!-- Navbar Toggler -->
            <div class="navbar-toggler">
              <span></span><span></span><span></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Mobile Header Start -->
    <div class="sigma-mobile-header">
      <div class="container">
        <div class="sigma-mobile-header-inner">
          <!-- Site Logo -->
          <div class="site-logo site-logo-text">
            <a href="<?php echo base_url(); ?>">

              <div class="site-logo-text">
              <img src="<?php echo base_url(); ?>assets/rock2polish.png" style="width:100px;height:90px;" alt="Logo">

              </div>
            </a>
          </div>
          <div class="sigma-hamburger-menu">
            <div class="sigma-menu-btn">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Mobile Header End -->
    <!-- Mobile Menu Start -->
    <aside class="sigma-mobile-menu">
        <ul class="sigma-main-menu">
        <li class="menu-item">
            <a href="<?php echo base_url(); ?>">
            Home
            </a>
          </li>
          <li class="menu-item">
            <a href="<?php echo base_url(); ?>Main/about">
            About
            </a>
          </li>
          <li class="menu-item">
            <a href="<?php echo base_url(); ?>Main/shop">
            Shop
            </a>
          </li>
          <li class="menu-item"><a href="<?php echo base_url(); ?>Main/master_cut">Master Cut</a>
            </li>
          <li class="menu-item">
            <a href="<?php echo base_url(); ?>Main/jewellery">
            Jewellery
            </a>
          <li class="menu-item">
            <a href="<?php echo base_url(); ?>Main/contact">
            Contact
            </a>
          </li>
        </ul>
      </aside>
    <!-- Mobile Menu End -->
  </header>
  <!--====== HEADER PART END ======-->

  <!--====== OFF CANVAS START ======-->
  <div class="offcanvas-wrapper">
      <div class="offcanvas-overly"></div>
      <div class="offcanvas-widget">
        <a href="<?php echo base_url(); ?>#" class="offcanvas-close"><i class="fal fa-times"></i></a>
        <!-- Search Widget -->
      <!--  <div class="widget search-widget">
          <h5 class="widget-title">Search Diamond</h5>
          <form action="#">
            <input type="text" placeholder="Search for diamond...">
            <button type="submit"><i class="far fa-search"></i>
            </button>
          </form>
        </div>-->
        <!-- About Widget -->
        <div class="widget about-widget">
          <h5 class="widget-title" style="text-align:justify;">About us</h5>
          <p style="text-align:justify;">Rock 2 Polish is one among the leading name with the widest collection of lab created diamonds available within the market.</p>
          <p style="text-align:justify;">Our diamonds are grown in a complicated facility using minimal energy keeping the world safe from mining impact & presenting a Clean and Green Eco Friendly Lab Grown Diamond.
</p>
        </div>
        <!-- Nav Widget -->
        <div class="widget nav-widget">
          <h5 class="widget-title">Our pages</h5>
          <ul>
            <li><a href="<?php echo base_url();?>Main/about">About Us</a>
            </li>


            <li><a href="<?php echo base_url(); ?>Main/master_cut">Master Cut</a>
            </li>
            <li><a href="<?php echo base_url(); ?>Main/shop">Shop</a>
            </li>
            <li><a href="<?php echo base_url(); ?>Main/jewellery">Jewellery</a>
            </li>
            <li><a href="<?php echo base_url(); ?>Main/contact">Contact</a>
            </li>
            <!-- <li><a href="https://www.termsofusegenerator.net/live.php?token=Mi4OFMypCbIXT3A50AihtVcWNkpiINVe">Terms & Conditions</a>
            </li>
            <li><a href="https://www.privacypolicygenerator.info/live.php?token=5i2Pgglq2lxZr05boe6icyHBVL5AuVMZ">Privacy Policy</a>
            </li> -->
          </ul>
        </div>
        <!-- Social Link -->
        <div class="widget social-link">
          <h5 class="widget-title">Contact with us</h5>
          <ul>
            <li><a href="https://www.facebook.com/Rock 2 Polishgems19"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li><a href="https://twitter.com/GemsRock 2 Polish"><i class="fab fa-twitter"></i></a>
            </li>
            <li><a href="https://www.instagram.com/Rock 2 Polish_gems/"><i class="fab fa-instagram"></i></a>
            </li>
            <li><a href="https://www.linkedin.com/in/Rock 2 Polish-gems-0a3a261b9/?originalSubdomain=in"><i class="fab fa-linkedin"></i></a>
            </li>

          </ul>
        </div>
      </div>
    </div>
  <!--====== OFF CANVAS END ======-->
<script>
$(window).load(function(){
	$('.cssloader').fadeOut('slow',function(){$(this).remove();});
});
</script>