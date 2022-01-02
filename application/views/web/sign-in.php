

<div class="background" style=" background-image: url(https://c4.wallpaperflare.com/wallpaper/1020/435/817/stones-cut-diamonds-wallpaper-preview.jpg);">
<section class="breadcrumb-area" style="background-image: url(<?php echo base_url();?>assets/diamond_ba1.png);margin-top:30px;">
        <div class="container">
            <div class="breadcrumb-text">
                <span>EVERYONE CAN SHINE</span>
                <h2 class="page-title">Log-in/Sign-in Page</h2>
                <ul class="breadcrumb-nav">
                    <li><a href="<?php echo base_url();?>">Home</a></li>
                    <li class="active">Profile</li>
                </ul>
            </div>
        </div>
    </section>



<div class="container mt-2 mb-4">
  <div class="col-sm-8 ml-auto mr-auto" style="margin-top:3rem; background-color:#000;">
    <ul class="nav nav-pills nav-fill mb-1" id="pills-tab" role="tablist">
      <li class="nav-item"> <a class="nav-link active" id="pills-signin-tab" data-toggle="pill" href="#pills-signin" role="tab" aria-controls="pills-signin" aria-selected="true">Sign In</a> </li>
      <li class="nav-item"> <a class="nav-link" id="pills-signup-tab" data-toggle="pill" href="#pills-signup" role="tab" aria-controls="pills-signup" aria-selected="false">Sign Up</a> </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-signin" role="tabpanel" aria-labelledby="pills-signin-tab">
        <div class="col-sm-12 border border-primary shadow rounded pt-2">
            <form method="post" id="singninFrom">
            <div class="form-group">
              <label class="font-weight-bold">Email <span class="text-danger">*</span></label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Enter valid email" required>
            </div>
            <div class="form-group">
              <label class="font-weight-bold">Password <span class="text-danger">*</span></label>
              <input type="password" name="password" id="password" class="form-control" placeholder="***********" required>
            </div>
            <div class="form-group">
              <div class="row">
               
                <div class="col text-right"> <a href="javascript:;" data-toggle="modal" data-target="#forgotPass">Forgot Password?</a> </div>
              </div>
            </div>
            <div class="form-group">
              <input type="submit" name="submit" value="Sign In" class="btn btn-block btn-primary">
            </div>
          </form>
        </div>
      </div>
      <div class="tab-pane fade" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">
        <div class="col-sm-12 border border-primary shadow rounded pt-2">
    
          <form method="post" id="singnupFrom">
            <div class="form-group">
              <label class="font-weight-bold">Email <span class="text-danger">*</span></label>
              <input type="email" name="signupemail" id="signupemail" class="form-control" placeholder="Enter valid email" required>
            </div>
            <div class="form-group">
              <label class="font-weight-bold">User Name <span class="text-danger">*</span></label>
              <input type="text" name="signupusername" id="signupusername" class="form-control" placeholder="Choose your user name" required>
            </div>
            <div class="form-group">
              <label class="font-weight-bold">Phone #</label>
              <input type="text" name="signupphone" id="signupphone" class="form-control" placeholder="(000)-(0000000)">
            </div>
            <div class="form-group">
              <label class="font-weight-bold">Password <span class="text-danger">*</span></label>
              <input type="password" name="signuppassword" id="signuppassword" class="form-control" placeholder="***********" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;"
                required>
            </div>
            <div class="form-group">
              <label class="font-weight-bold">Confirm Password <span class="text-danger">*</span></label>
              <input type="password" name="signupcpassword" id="signupcpassword" class="form-control" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" placeholder="***********" required>
            </div>
            <div class="form-group">
              <label> I agree with the <a href="javascript:;">Terms &amp; Conditions</a> for Registration.</label>
            </div>
            <div class="form-group">
              <input type="submit" name="signupsubmit" value="Sign Up" class="btn btn-block btn-primary">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="forgotPass" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form method="post" id="forgotpassForm">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Forgot Password</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Email <span class="text-danger">*</span></label>
              <input type="email" name="forgotemail" id="forgotemail" class="form-control" placeholder="Enter your valid email..." required>
            </div>
            <div class="form-group">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Sign In</button>
            <button type="submit" name="forgotPass" class="btn btn-primary"><i class="fa fa-envelope"></i> Send Request</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>