
<div class="background">
<section class="breadcrumb-area" style="background-image: url(<?php echo base_url();?>assets/diamond_ba1.png);margin-top:30px;">
        <div class="container">
            <div class="breadcrumb-text">
                <span>EVERYONE CAN SHINE</span>
                <h2 class="page-title">Forgot-Password Page</h2>
                <ul class="breadcrumb-nav">
                    <li><a href="<?php echo base_url();?>">Home</a></li>
                    <li class="active">Forgot-Password</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="contact-part pt-115 ">
        <div class="container">
    <h2 style="text-align: center; padding: 1rem;">If you forgotten your password, you can reset it here.</h2>
             <div class="contact-form">
                <form action="<?php echo base_url();?>Main/send_contact" method="post">
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

                      

                        <div class="col-md-6">
                            <div class="input-group mb-30">
                                <span class="icon"><i class="far fa-phone"></i></span>
                                <input type="text" name="contact" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="Enter your 6 digit code"  required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-30">
                                <span class="icon"><i class="far fa-lock"></i></span>
                                <input type="text" name="password" placeholder="Create New Password" required>
                                   </div>
                                 
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-30">
                                <span class="icon"><i class="far fa-lock"></i></span>
                                <input type="text" name="password" placeholder="Confirm New Password" required>
                                   </div>
                                 
                        </div>

                        <div class="col-12 text-center">
                            <button type="submit" class="main-btn btn-filled">Reset Password</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!--====== Modal Popup End ======-->