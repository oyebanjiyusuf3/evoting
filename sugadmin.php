<?php
include("includes/studenthead.php");
if (isset($_POST['submit']))  {
   $username1=strtolower($_POST['username']);
  $password=strtolower($_POST['password']);
$sql = "SELECT * FROM add_admin WHERE username='$username1' and password='$password'";
  $result=mysqli_query($db,$sql) or die("could not select database");
  $count=mysqli_num_rows($result);
if ($count==1) {
                               $_SESSION['admin_user']=$username1;
                            header('location:Admin_Registration.php');
                             
                         }
                        
                    else
                        {
                          echo"<div class='error bg-danger text-center text-light'>Invalid Username or Password</div>";
}
                      }
?>

<div class="container-fluid bg-light body">
<div class="container  ">
<div class="row justify-content-center">
                        <form method="POST" class="col-lg-5">

<div class="form-group" style="margin-top:100px;">
    <label for="inputEmail3" class="col-form-label font-weight-bold">Username</label>
  
        <input type="text" class="form-control " required placeholder="Username" name="username">
  </div>

 <div class="form-group">
    <label for="inputPassword3" class="col-form-label font-weight-bold">Password</label>
      <input type="password" class="form-control" required id="inputPassword" name="password" placeholder="Password">
  </div>

<div class="form-group">
      <button type="submit" class="btn btn-success" name="submit">Sign in</button>
  </div>
  <span class="text-success font-weight-light form-text">If you have issues trying to login ? <em>kindly visit your department</em> for registration</span><br><br>

</form>

</div>
</div>
</div>


</div>
</body>
</html>