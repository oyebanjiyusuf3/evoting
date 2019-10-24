<?php
$pagetitle="Vote";
include("includes/header2.php");
if (isset($_POST['submit'])) {
 if (empty($_POST['president'])) {
  echo "<div class='error bg-danger text-center text-light'>PLEASE SELECT A VALUE IN PRESIDENT</div>";
 }
 elseif
  (empty($_POST['vice'])) {
  echo "<div class='error bg-danger text-center text-light'>PLEASE SELECT A VALUE IN VICE PRESIDENT</div>";
 }
 elseif
  (empty($_POST['secretary'])) {
  echo "<div class='error bg-danger text-center text-light'>PLEASE SELECT A VALUE IN SECRETARY</div>";
 }
 elseif
  (empty($_POST['libarian'])) {
  echo "<div class='error bg-danger text-center text-light'>PLEASE SELECT A VALUE IN LIBARIAN</div>";
 }
 elseif
  (empty($_POST['sport'])) {
  echo "<div class='error bg-danger text-center text-light'>PLEASE SELECT A VALUE IN SPORT DIRECTOR</div>";
 }
 elseif
  (empty($_POST['welfare'])) {
  echo "<div class='error bg-danger text-center text-light'>PLEASE SELECT A VALUE IN WELFARE DIRECTOR</div>";
 }
 elseif
  (empty($_POST['social'])) {
  echo "<div class='error bg-danger text-center text-light'>PLEASE SELECT A VALUE IN SOCIAL DIRECTOR</div>";
 }elseif
  (empty($_POST['pro'])) {
  echo "<div class='error bg-danger text-center text-light'>PLEASE SELECT A VALUE IN PRO</div>";
 }
 else{
  $president=$_POST['president'];
 $vice=$_POST['vice'];
 $secretary=$_POST['secretary'];
 $libarian=$_POST['libarian'];
 $sport=$_POST['sport'];
 $welfare=$_POST['welfare'];
 $social=$_POST['social'];
 $pro=$_POST['pro'];
 $vote="1";
  $matric=$_SESSION['login_user'];
$accredit_sql = "SELECT * FROM users WHERE matric='$matric'";
                        $retval = mysqli_query( $db,$accredit_sql );
                        $result_retval=mysqli_fetch_array( $retval);
              
                            if($result_retval['vote']=="1")
                            {
                               echo "<script type='text/javascript'> alert('YOU HAVE ALREADY VOTED')</script>";
                        }
else
{

$sql1="UPDATE users SET president='$president', vice='$vice', secretary= '$secretary', libarian= '$libarian', sport= '$sport', welfare= '$welfare' , social= '$social', pro= '$pro', vote='$vote'
   WHERE matric='$matric'";
    $result1=mysqli_query($db,$sql1);
    if ($result1) {
    echo "<script type='text/javascript'> alert('Successfully voted')</script>
<script type='text/javascript'>
history.back();</script>
    ";
  }}
}
}
?>
<div class="container body ">
  <div class="row justify-content-center">
<form method='POST' style="margin-top: 20px;"><table class='table table-hover vote'>
<thead>
    <tr>
 <th class='alert-success  text-center' colspan='7'> Election for <?php echo department($_SESSION['login_user']); ?></th>
    </tr></thead>
    <div>
<?php
 $department=department($_SESSION['login_user']);
 $sql="SELECT * FROM voted WHERE department ='$department' and position='PRESIDENT' ";
$query=mysqli_query($db,$sql);
echo "<thead>
    <tr>
 <th class=' bg-dark text-light' colspan='7'>PRESIDENT </th>
    </tr></thead>
 <tbody class=' alert-secondary text-capitalize'>
<tr>
<div class='btn-group' data-toggle='buttons'>";
while ($result=mysqli_fetch_array($query)) {
      echo"<th><table><tr><th>
                      <img src='".$result['image']."' height='130px'/></th><th>Name:  ".$result['surname']." ".$result['name'].
                       "<hr>Matric:  ".$result['matric']." </th></tr>
                       <tr><th colspan='2'> <label class='btn btn-secondary'>
    <input type='radio' name='president' value='".$result['matric']."' required  autocomplete='off'> Vote
  </label></th></tr>
                       </table></th>
                      ";
}
echo "</div></tr>";
?>
</div>

<div>
<?php
 $department=department($_SESSION['login_user']);
 $sql="SELECT * FROM voted WHERE department ='$department' and  position='VICE PRESIDENT' 
";
$query=mysqli_query($db,$sql);
echo "<thead>
    <tr>
 <th class=' bg-dark text-light' colspan='7'>VICE PRESIDENT</th>
    </tr></thead>
 <tbody class=' alert-secondary text-capitalize'>
<tr>
<div class='btn-group' data-toggle='buttons'>";
while ($result=mysqli_fetch_array($query)) {
      echo"<th><table><tr><th>
                      <img src='".$result['image']."' height='130px'/></th><th>Name:  ".$result['surname']." ".$result['name'].
                       "<hr>Matric:  ".$result['matric']." </th></tr>
                       <tr><th colspan='2'> <label class='btn btn-secondary'>
    <input type='radio' name='vice' value='".$result['matric']."' required autocomplete='off'> Vote
  </label></th></tr>
                       </table></th>
                      ";
}
echo "</div></tr>";
?>

<div>
<?php
 $department=department($_SESSION['login_user']);
 $sql="SELECT * FROM voted WHERE department ='$department' and position='SECRETARY' 
";
$query=mysqli_query($db,$sql);

echo "<thead>
    <tr>
 <th class=' bg-dark text-light' colspan='7'>SECRETARY</th>
    </tr></thead>
 <tbody class=' alert-secondary text-capitalize'>
<tr>
<div class='btn-group' data-toggle='buttons'>";
while ($result=mysqli_fetch_array($query)) {
      echo"<th><table><tr><th>
                      <img src='".$result['image']."' height='130px'/></th><th>Name:  ".$result['surname']." ".$result['name'].
                       "<hr>Matric:  ".$result['matric']." </th></tr>
                       <tr><th colspan='2'> <label class='btn btn-secondary'>
    <input type='radio' name='secretary' value='".$result['matric']."' required autocomplete='off'> Vote
      </label></th></tr>
                       </table></th>
                      ";
}
echo "</div></tr>";
?>
</div>
<div>
<?php
 $department=department($_SESSION['login_user']);
 $sql="SELECT * FROM voted WHERE department ='$department' and position='LIBARIAN' 
";
$query=mysqli_query($db,$sql);
echo "<thead>
    <tr>
 <th class=' bg-dark text-light' colspan='7'>LIBARIAN</th>
    </tr></thead>
 <tbody class=' alert-secondary text-capitalize'>
<tr>
<div class='btn-group' data-toggle='buttons'>";
while ($result=mysqli_fetch_array($query)) {
      echo"<th><table><tr><th>
                      <img src='".$result['image']."' height='130px'/></th><th>Name:  ".$result['surname']." ".$result['name'].
                       "<hr>Matric:  ".$result['matric']." </th></tr>
                       <tr><th colspan='2'> <label class='btn btn-secondary'>
    <input type='radio' value='".$result['matric']."' name='libarian' required autocomplete='off'> Vote
  </label></th></tr>
                       </table></th>
                      ";
}
echo "</div></tr>";
?>
</div>
<div>
<?php
 $department=department($_SESSION['login_user']);
 $sql="SELECT * FROM voted WHERE department ='$department' and  position='SPORTS DIRECTOR' 
";
$query=mysqli_query($db,$sql);
echo "<thead>
    <tr>
 <th class=' bg-dark text-light' colspan='7'>SPORTS DIRECTOR</th>
    </tr></thead>
 <tbody class=' alert-secondary text-capitalize'>
<tr>
<div class='btn-group' data-toggle='buttons'>";
while ($result=mysqli_fetch_array($query)) {
      echo"<th><table><tr><th>
                      <img src='".$result['image']."' height='130px'/></th><th>Name:  ".$result['surname']." ".$result['name'].
                       "<hr>Matric:  ".$result['matric']." </th></tr>
                       <tr><th colspan='2'> <label class='btn btn-secondary'>
    <input type='radio' name='sport' value='".$result['matric']."' required autocomplete='off'> Vote
  </label></th></tr>
                       </table></th>
                      ";
}
echo "</div></tr>";
?>
</div>
<div>
<?php
 $department=department($_SESSION['login_user']);
 $sql="SELECT * FROM voted WHERE department ='$department' and  position='WELFARE DIRECTOR' 
";
$query=mysqli_query($db,$sql);
echo "<thead>
    <tr>
 <th class=' bg-dark text-light' colspan='7'>WELFARE DIRECTOR</th>
    </tr></thead>
 <tbody class=' alert-secondary text-capitalize'>
<tr>
<div class='btn-group' data-toggle='buttons'>";
while ($result=mysqli_fetch_array($query)) {
      echo"<th><table><tr><th>
                      <img src='".$result['image']."' height='130px'/></th><th>Name:  ".$result['surname']." ".$result['name'].
                       "<hr>Matric:  ".$result['matric']." </th></tr>
                       <tr><th colspan='2'> <label class='btn btn-secondary'>
    <input type='radio' name='welfare' value='".$result['matric']."' required autocomplete='off'> Vote
  </label></th></tr>
                       </table></th>
                      ";
}
echo "</div></tr>";
?>
</div>
<div>
<?php
 $department=department($_SESSION['login_user']);
 $sql="SELECT * FROM voted WHERE department ='$department' and  position='SOCIAL DIRECTOR' 
";
$query=mysqli_query($db,$sql);
echo "<thead>
    <tr>
 <th class=' bg-dark text-light' colspan='7'>SOCIAL DIRECTOR</th>
    </tr></thead>
 <tbody class=' alert-secondary text-capitalize'>
<tr>
<div class='btn-group' data-toggle='buttons'>";
while ($result=mysqli_fetch_array($query)) {
      echo"<th><table><tr><th>
                      <img src='".$result['image']."' height='130px'/></th><th>Name:  ".$result['surname']." ".$result['name'].
                       "<hr>Matric:  ".$result['matric']." </th></tr>
                       <tr><th colspan='2'> <label class='btn btn-secondary'>
    <input type='radio' name='social' value='".$result['matric']."' required autocomplete='off'> Vote
                       </table></th>
                      ";
}
echo "</div></tr>";
?>
</div>
<div>
<?php
 $department=department($_SESSION['login_user']);
 $sql="SELECT * FROM voted WHERE department ='$department' and  position='PRO' 
";
$query=mysqli_query($db,$sql);
echo "<thead>
    <tr>
 <th class=' bg-dark text-light' colspan='7'>PRO</th>
    </tr></thead>
 <tbody class=' alert-secondary text-capitalize'>
<tr>
<div class='btn-group' data-toggle='buttons'>";
while ($result=mysqli_fetch_array($query)) {
      echo"<th><table><tr><th>
                      <img src='".$result['image']."' height='130px'/></th><th>Name:  ".$result['surname']." ".$result['name'].
                       "<hr>Matric:  ".$result['matric']." </th></tr>
                       <tr><th colspan='2'> <label class='btn btn-secondary'>
    <input type='radio' name='pro' value='".$result['matric']."' required autocomplete='off'> Vote
  </label></th></tr>
                       </table></th>
                      ";
}
echo "</div></tr>";
?>
</div>
<tr><th colspan="2"><button type="submit"class="form-control" name="submit">Submit</button></th></tr>
</table>
</form>
</div>

</div>