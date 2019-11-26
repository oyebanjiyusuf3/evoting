<?php
$pagetitle="OTP Page";
include('includes/studenthead.php');
?>

<div class="container-fluid body">
<div class="container  ">
<div class="row justify-content-center">

                        <form method="POST" action="process.php" class="col-lg-5" style="margin-top:100px;">
                        <div class='error bg-success text-center text-light text-uppercase'>Enter your provided Email and Phone Number during Registration to receive OTP</div>
                        <br>
<div class="form-group">
    <label for="inputEmail3" class="col-form-label font-weight-bold">Email</label>
  
        <input type="text" class="form-control" type="email" required placeholder="Enter you Email" name="email">
  </div>

 <div class="form-group">
    <label for="inputPassword3" class="col-form-label font-weight-bold">Phone Number</label>
      <input type="text" class="form-control" required id="input" name="phone" placeholder="Enter your Phone Number">
  </div>

<div class="form-group">
      <button type="submit" class="btn btn-success" name="btn-save">Submit</button>
  </div>
  <!-- <span class="text-success form-text">If you have issues trying to login ? <em>kindly visit your admin</em> for registration</span><br><br> -->
</form>
</div>
</div>
</div>
</div>