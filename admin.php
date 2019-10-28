<?php
$pagetitle="Admin Page";
include('includes/studenthead.php');
if ( isset($_POST['submit'])) 
{  
 $username=$_POST['username'];
  $password=$_POST['password'];

  $sql= "SELECT * FROM admins WHERE username='$username' AND password='$password'";
    $result=mysqli_query($db,$sql) or die("could not select database");
  $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
  $count=mysqli_num_rows($result);
    

if ($count==1) {
  session_start();
                              $_SESSION['student_user']=$username;  
                            header('location:staffhome.php');
                         }
                        
                    else
                        {
                          echo"<div class='error bg-danger text-center text-light'>Invalid Username or Password</div>";
                        } 
}
mysqli_close($db);
?><div class="container-fluid body">
<div class="container  ">
<div class="row justify-content-center">
                        <form method="POST" class="col-lg-5" style="margin-top:100px;">

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
  <!-- <span class="text-success form-text">If you have issues trying to login ? <em>kindly visit your admin</em> for registration</span><br><br> -->
</form>
</div>
</div>
</div>
</div>