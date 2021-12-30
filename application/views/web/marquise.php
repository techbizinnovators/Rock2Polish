<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
/* =============================================
* RADIO BUTTONS
=============================================== */



#radios label + label {
	margin-left: 15px;
}

input[type="radio"] {
	opacity: 0; /* hidden but still tabable */
	position: absolute;
}

input[type="radio"] + span {
	font-family: 'Material Icons';
	color: #B3CEFB;
	border-radius: 50%;
	padding: 12px;
	transition: all 0.4s;
	-webkit-transition: all 0.4s;
}

input[type="radio"]:checked + span {
	color: #D9E7FD;
  background-color: #4285F4;
}

input[type="radio"]:focus + span {
	color: #fff;
}

/* ================ TOOLTIPS ================= */

#radios label:hover::before {
	content: attr(for);
	font-family: Roboto, -apple-system, sans-serif;
	text-transform: capitalize;
	font-size: 11px;
	position: absolute;
	top: 170%;
	left: 0;
	right: 0;
	opacity: 0.75;
	background-color: #323232;
	color: #fff;	
	padding: 4px;
	border-radius: 3px;
  display: block;
}

/* =============================================
* CENTERING, CONTAINER STYLING ETC || IGNORE
=============================================== */

h1 {
	font-weight: 300;
	color: #D9E7FD;
	text-align: center;
	margin-bottom: 50px;
}

#radios {
	text-align: center;
	margin 0 auto;
}
input[type=text]{
  border: 3px solid #555;
}
</style>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/9.1.0/nouislider.css'>
<!--====== BREADCRUMB PART START ======-->
 <!--====== BREADCRUMB PART START ======-->
 <section class="breadcrumb-area" style="background-image: url(<?php echo base_url();?>assets/diamond_ba1.png);margin-top:30px;">
        <div class="container">
            <div class="breadcrumb-text">
                <span>EVERYONE CAN SHINE</span>
                <h2 class="page-title">Shop</h2>
                <ul class="breadcrumb-nav">
                    <li><a href="<?php echo base_url();?>">Home</a></li>
                    <li class="active">Shop</li>
                </ul>
            </div>
        </div>
    </section>
  <!--====== BREADCRUMB PART END ======-->

  <section class="Shop-section pt-115">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="shop-detail-image">
            <div class="detail-slider-1">
              <div class="slide-item">
                <div class="image-box">
                  <a href="#">
                  <iframe class="popup-video" style="background:grey;" height="550" width="100%" src="https://view.gem360.in/gem360/2410201352-KM68-12H/gem360-2410201352-KM68-12H.html">
                   </iframe>
                   </a>
              
                </div>
              </div>
              
            </div>
            <div class="detail-slider-2">
             
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="shop-detail-content">
            <h3 class="product-title mb-20">Marquise Shape</h3>
          
            </span>
            <div class="desc mb-20 pb-20 border-bottom">
       
            </div>
            <div class="mt-20 mb-20">
              <div class="d-inline-block other-info">
                <h6>Availability:
                  <span class="text-success ml-2">In Stock</span>
                </h6>
              </div>
              <div class="ml-2 d-inline-block other-info">
                <h6>Availab sizes:
                  <span class="grey ml-2">0.01 carat - 10+ carat</span>
                </h6>
              </div>
            </div>
            <form method="post" action="<?php echo base_url();?>Main/send_diamond">
                    <input type="hidden" name="shape" value="Marquise">
            <div class="color-sec mb-20">
             <center> <label style="color: #fcd462;"><u>Color</u></label></center>
              <div class="color-box">
         
              <div id="radios" style="font-size:20px;">
              <label for="D">D
                <input type="radio" name="color" id="D" value="D"/>
                <span><i class="fa fa-gem"></i></span>
              </label>								
              <label for="E" >E
                <input type="radio" name="color" id="E" value="E" />
                <span><i class="fa fa-gem"></i></span>
              </label>
              <label for="F" >F
                <input type="radio" name="color" id="F" value="F" />
                <span><i class="fa fa-gem"></i></span>
              </label>
              <label for="G" >G
                <input type="radio" name="color" id="G" value="G" />
                <span><i class="fa fa-gem"></i></span>
              </label>
              <label for="H" >H
                <input type="radio" name="color" id="H" value="H" />
                <span><i class="fa fa-gem"></i></span>
              </label>
              <label for="I" >I
                <input type="radio" name="color" id="I" value="I" />
                <span><i class="fa fa-gem"></i></span>
              </label>
              <label for="J" >J
                <input type="radio" name="color" id="J" value="J" />
                <span><i class="fa fa-gem"></i></span>
              </label>
              <label for="K" >K
                <input type="radio" name="color" id="K" value="K" />
                <span><i class="fa fa-gem"></i></span>
              </label>
            </div>
           
              </div>
            </div>
            <div class="color-sec mb-20">
             <center> <label style="color: #fcd462;"><u>Clarity</u></label></center>
              <div class="color-box">
         
              <div id="radios" style="font-size:15px;">
              <label for="IF" >IF
			<input type="radio" name="clarity" id="IF" value="IF" />
			<span><i class="fa fa-gem"></i></span>
		</label>

    <label for="VVS1" >VVS1
			<input type="radio" name="clarity" id="VVS1" value="VVS1" />
			<span><i class="fa fa-gem"></i></span>
		</label>
    <label for="VVS2" >VVS2
			<input type="radio" name="clarity" id="VVS2" value="VVS2" />
			<span><i class="fa fa-gem"></i></span>
		</label>
		
    <label for="VS1" >VS1
			<input type="radio" name="clarity" id="VS1" value="VS1" />
			<span><i class="fa fa-gem"></i></span>
		</label>
    <label for="VS2" >VS2
			<input type="radio" name="clarity" id="VS2" value="VS2" />
			<span><i class="fa fa-gem"></i></span>
		</label>
    <label for="SI1" >SI1
			<input type="radio" name="clarity" id="SI1" value="SI1" />
			<span><i class="fa fa-gem"></i></span>
		</label>
 
 
  
 
	</div>
           
              </div>
            </div>
           
            <div class="color-sec mb-20">
            <center>
              <label style="color: #fcd462;"><u>Size</u></label>
            
              <div class="color-box">
              <input type="text" class="input-qty" name="size" placeholder="Size"  placeholder="Contact Number" ></center>
           
              </div>
              

            </div>
         
          <!--  <div class="color-sec mb-20" id="myDIV">
              <label>Personal Information</label>
              <div class="color-box">
              <input type="text" class="input-qty" name="name" placeholder="Full Name">
              <input type="text" class="input-qty" name="name" placeholder="Email Address">
              <input type="text" class="input-qty" name="name" placeholder="Contact Number">
              </div>
            </div>-->
            <div class="quantity-cart d-block d-sm-flex">
           
                    
              
              <div class="cart-btn pl-40">
              <a href="#" class="main-btn btn-border" data-toggle="modal" data-target="#exampleModal">SHOP REQUEST</a>
              </div>
            </div>
            
          </div>
        </div>
 
      </div>
    </div>
    
     
    <section class="about-section">
        <div class="container">
           
            <ul class="about-features">
                <li class="wow fadeInUp" data-wow-delay=".3s">
                    <a href="<?php echo base_url();?>Main/load_round">
                       
                        <img src="<?php echo base_url();?>assets/shapes/round.png"></img>
                        <span class="title">Round</span>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".4s">
                    <a href="<?php echo base_url();?>Main/heart">
                    <img src="<?php echo base_url();?>assets/shapes/heart.png"></img>
                        <span class="title">Heart</span>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".5s">
                    <a href="<?php echo base_url();?>Main/princess">
                    <img src="<?php echo base_url();?>assets/shapes/princess.png"></img>
                        <span class="title">Princess</span>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".6s">
                    <a href="<?php echo base_url();?>Main/pearl">
                    <img src="<?php echo base_url();?>assets/shapes/pearl.png"></img>
                        <span class="title">Pear</span>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".7s">
                    <a href="<?php echo base_url();?>Main/cushion">
                    <img src="<?php echo base_url();?>assets/shapes/cushion.png"></img>
                        <span class="title">Cushion</span>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".3s">
                    <a href="<?php echo base_url();?>Main/radiant">
                       
                        <img src="<?php echo base_url();?>assets/shapes/radiant.png"></img>
                        <span class="title">Radiant</span>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".4s">
                    <a href="<?php echo base_url();?>Main/oval">
                    <img src="<?php echo base_url();?>assets/shapes/oval.png"></img>
                        <span class="title">Oval</span>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".5s">
                    <a href="<?php echo base_url();?>Main/marquise">
                    <img src="<?php echo base_url();?>assets/shapes/marquise.png"></img>
                        <span class="title">Marquise</span>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".6s">
                    <a href="<?php echo base_url();?>Main/emerald">
                    <img src="<?php echo base_url();?>assets/shapes/emerald.png"></img>
                        <span class="title">Emerald</span>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".7s">
                    <a href="<?php echo base_url();?>Main/asscher">
                    <img src="<?php echo base_url();?>assets/shapes/asscher.png"></img>
                        <span class="title">Asscher</span>
                    </a>
                </li>
            </ul>
            
        </div>
    </section>
  </section>

<!-- Modal -->
<div class="modal fade on-load-modal" id="exampleModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="background-image: url(assets/popup-image.jpg)">
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="close popup-trigger" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <div class="modal-inner">
            <h3 class="title">please fill up personal information</h3>
            <p style="color:white;">Book your inquiry appointment  and we'll connect you to one of our consultants. </p>

            <div class="contact-form">
                <form action="#">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-30">
                                <span class="icon"><i class="far fa-user"></i></span>
                                <input type="text" placeholder="Your full name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-30">
                                <span class="icon"><i class="far fa-envelope"></i></span>
                                <input type="email" placeholder="Enter email address" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group mb-30">
                                <span class="icon"><i class="far fa-phone"></i></span>
                                <input type="text" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="Add phone number" required>
                            </div>
                        </div>
                        
                       
                        <div class="col-12 text-center">
                            <button type="submit" class="main-btn btn-filled">Submit Details</button>
                        </div>
                    </div>
                </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
<script>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
</form>


