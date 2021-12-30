 <!--====== BREADCRUMB PART START
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */

  color: white; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 15px; /* Some padding */
  border-radius: 10px; /* Rounded corners */
  font-size: 18px; /* Increase font size */ ======-->
   <style>
   
.icon-bar {
  position: fixed;
  top: 58%;
  z-index: 99;
  outline: none;
  cursor: pointer;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);

}
 .icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
  visibility: visible;
    opacity: 1;
    z-index:99;
}

.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

.twitter {
  background: #55ACEE;
  color: white;
}

.google {
  background: #dd4b39;
  color: white;
}

.linkedin {
  background: #007bb5;
  color: white;
}

.youtube {
  background: #bb0000;
  color: white;
}


</style>

<div class="icon-bar">

<button type="submit" class="main-btn btn-filled" data-toggle="modal" data-target="#exampleModal" style="font-weight:500;">Consult</button>
</div>
    <section class="breadcrumb-area" style="background-image: url(<?php echo base_url();?>assets/04.jpg);margin-top:30px;">

        <div class="container">
            <div class="breadcrumb-text">
                <span>EVERYONE CAN SHINE</span>
                <h2 class="page-title">Jewellery</h2>
                <ul class="breadcrumb-nav">
                    <li><a href="<?php echo base_url();?>">Home</a></li>
                    <li class="active">Jewellery</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="about-section" style="position:unset;">
        <div class="container">
           
            <div class="about-text-box">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="<?php echo base_url();?>assets/jw/home_jw2.jpeg" alt="images">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-text">
                           
                            <h3>       Your style statement, our ultimate commitment... </h3>
                            <p style="font-size:17px;">
                     
We not only carve out the optimum shape you desire, but also customise opulent jewellery of your glam selection. Wether it be your casual everyday wear jewellery, proposal rings or wedding sets, we assure you the most unique and exemplary designs, quality and price.</p>
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->
    <!--====== GALLERY START ======-->
    <div class="gallery-wrappper">
        <div class="container">
            <div class="gallery-loop">
                <div class="single-gallery-image wow fadeInUp" data-wow-delay=".3s" >
                    <a href="<?php echo base_url();?>assets/jw/jw3.jpeg" class="popup-image">
                        <img src="<?php echo base_url();?>assets/jw/jw3.jpeg" alt="Images" class="img-responsive" >
                    </a>
                </div>
                <div class="single-gallery-image wow fadeInUp" data-wow-delay=".4s">
                    <a href="<?php echo base_url();?>assets/jw/jw10.jpeg" class="popup-image">
                        <img src="<?php echo base_url();?>assets/jw/jw10.jpeg" alt="Images" class="img-responsive">
                    </a>
                </div>
                <div class="single-gallery-image wow fadeInUp" data-wow-delay=".5s">
                    <a href="<?php echo base_url();?>assets/jw/big_jewel.jpeg" class="popup-image">
                        <img src="<?php echo base_url();?>assets/jw/big_jewel.jpeg" alt="Images">
                    </a>
                </div>
                <div class="single-gallery-image wow fadeInUp" data-wow-delay=".6s">
                    <a href="<?php echo base_url();?>assets/jw/home_jw8.jpeg" class="popup-image">
                        <img src="<?php echo base_url();?>assets/jw/home_jw8.jpeg" alt="Images">
                    </a>
                </div>
                <div class="single-gallery-image wow fadeInUp" data-wow-delay=".7s">
                    <a href="<?php echo base_url();?>assets/jw/home_jw9.jpeg" class="popup-image">
                        <img src="<?php echo base_url();?>assets/jw/home_jw9.jpeg" alt="Images">
                    </a>
                </div>
                <div class="single-gallery-image wow fadeInUp" data-wow-delay=".8s">
                    <a href="<?php echo base_url();?>assets/jw/big_jw2.jpeg" class="popup-image">
                        <img src="<?php echo base_url();?>assets/jw/big_jw2.jpeg" alt="Images">
                    </a>
                </div>
                <div class="single-gallery-image wow fadeInUp" data-wow-delay=".9s">
                    <a href="<?php echo base_url();?>assets/jw/jw5.jpeg" class="popup-image">
                        <img src="<?php echo base_url();?>assets/jw/jw5.jpeg" alt="Images" >
                    </a>
                </div>
                <div class="single-gallery-image wow fadeInUp" data-wow-delay="1.1s">
                    <a href="<?php echo base_url();?>assets/jw/jw6.jpeg" class="popup-image">
                        <img src="<?php echo base_url();?>assets/jw/jw6.jpeg" alt="Images">
                    </a>
                </div>
                <div class="single-gallery-image wow fadeInUp" data-wow-delay=".9s">
                    <a href="<?php echo base_url();?>assets/jw/big_jw3.jpeg" class="popup-image">
                        <img src="<?php echo base_url();?>assets/jw/big_jw3.jpeg" alt="Images">
                    </a>
                </div>
                <div class="single-gallery-image wow fadeInUp" data-wow-delay="1.1s">
                    <a href="<?php echo base_url();?>assets/jw/jw12.jpeg" class="popup-image">
                        <img src="<?php echo base_url();?>assets/jw/jw12.jpeg" alt="Images" class="slider-img">
                    </a>
                </div>
                <div class="single-gallery-image wow fadeInUp" data-wow-delay="1.1s">
                    <a href="<?php echo base_url();?>assets/jw/home_jw1.jpeg" class="popup-image">
                        <img src="<?php echo base_url();?>assets/jw/home_jw1.jpeg" alt="Images" class="slider-img">
                    </a>
                </div>
                
            </div>
        </div>
    </div>
 
    
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
            <h3 class="title"> Virtual Appointment</h3>
            <p style="color:white;">Book your inquiry appointment  and we'll connect you to one of our consultants. </p>

            <div class="contact-form">
                <form method="post" action="<?php echo base_url();?>Main/send_jewellery">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-30">
                                <span class="icon"><i class="far fa-user"></i></span>
                                <input type="text" name="name" placeholder="Your full name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-30">
                                <span class="icon"><i class="far fa-envelope"></i></span>
                                <input type="email" name="email" placeholder="Enter email address" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group mb-30">
                                <span class="icon"><i class="far fa-phone"></i></span>
                                <input type="text" name="contact" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="Add phone number" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group mb-30" style="background:black;">
                             
                            <select name="inquiry_for">
                                <option value="">Inquiry For</option>
                                <option value="Diamond Ring">Diamond Ring</option>
                                <option value="Gold Bracelete">Gold Bracelete</option>
                                <option value="Diamond Necklace">Diamond Necklace</option>
                                <option value="Gold Necklace">Gold Necklace</option>
                                <option value="Gold Bangles">Gold Bangles</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group mb-30">
                                <span class="icon"><i class="far fa-phone"></i></span>
                                <input type="text" name="message" placeholder="Inquiry Message" required>
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
    