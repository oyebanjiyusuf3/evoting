<?php


$pagetitle="Home";
include("includes/studenthead.php");
include("accreditation.php");
 session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST")  {
   $username=strtolower($_POST['username']);
  $password=strtoupper($_POST['password']);
$accredit_sql = "SELECT * FROM users WHERE matric='$username'";
                        $retval = mysqli_query( $db,$accredit_sql );
                        $result_retval=mysqli_fetch_array( $retval);
              
                            if($result_retval['accredit']==0)
                            {
                               echo "<script type='text/javascript'> alert('YOU HAVE NOT BEED ACCREDITTED TO VOTE PLEASE VISIT YOUR DEPARTMENT')</script>";
                        }
                        else{

  $sql= "SELECT id FROM users WHERE matric='$username' AND  passkey='$password'";
  $result=mysqli_query($db,$sql) or die("could not select database");
  $count=mysqli_num_rows($result);

if ($count==1) {
                             $_SESSION['login_user']=$username; 
                            header('location:vote.php');
                             
                         }
                        
                    else
                        {
                          echo "<div class='error bg-danger text-center text-light'>Invalid Username or Password</div>";
                        } }
}
?>
<div class="container-fluid bg-light body">
<div class="container  ">
<div class="row justify-content-center">
                        <form method="POST" class="col-lg-5" style="margin-top: 100px;">

<div class="form-group">
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
  <span class="text-success form-text">If you have issues trying to login ? <em>kindly visit your department</em> for registration</span><br><br>
</form>
</div>
</div>
</div>
<div class="footer ico-0001">
 <div class="text-center ico-0001" style="background-color:rgb(64,126,60);margin-top:100px;height:100px;color:#fff;">
               <section><b>copyright&copy;</b> 2019 - All Rights Reserved - www.yabatech.edu.ng</section>  
    </div>

</div>

</div>