<?php
 $pagetitle="profile";
include("includes/header.php");
$con=$_SESSION['user_profile'];
$sql = "SELECT * FROM aspirants WHERE staff_id='$con'";
$retval = mysqli_query( $db,$sql );
$result=mysqli_fetch_array($retval);
if($retval )
     {
  $id=$result['surname'].'&nbsp;'.$result['name'];
  $surnam=$result['surname'];
  $nam=$result['name'];
  $staff_id=$result['staff_id'];
  $position=$result['position'];
                       }


?>
<div class="container bg-light">
  <div class="row justify-content-center">
    <div class="col-lg-8  text-capitalize">
<form action="<?php $_php_self ?>" method='POST'>
 <table class="table table-hover">
  <thead>
    <tr>
 <th scope="col" class="alert-success"> Edit Profile for <?php echo $result['name']."&nbsp;".$result['surname'];?></th>
    </tr>
  </thead>
  <tbody class=" alert-secondary">
     <tr>
      <th >
<div >
<?php echo "<img src='".$result['image']."' height='150px'/>"; ?>
</div>
</th>
</tr>
    <tr><th>
  Surname :  <?php echo $result['surname'];?>
   <div class="input-group">
        <input type='text' class='form-control' name='surname'  placeholder='Edit your surname' >
         <span class="input-group-btn">
  <button name='sn' class="btn btn-secondary" >update</button>
</span>
</div></th>
</tr>
    <tr><th>
 Name : <?php echo $result['name'];?>
 <div class="input-group"> 
  <input type='text' name='name' class='form-control'  placeholder='Edit your name' >
   <span class="input-group-btn">
  <button name="na" class="btn btn-secondary" >update</button>
  </span>
</div>
</th>
</tr>
    <tr><th>
  Staff ID : <?php echo $result['staff_id'];?>
  <div class="input-group"> 
    <input type='text' name='matric' class='form-control'   placeholder='Edit your matric'>
    <span class="input-group-btn">
  <button name='mat' class="btn btn-secondary" >update</button>
  </span>
</div>
</th>
</tr>
    <tr>
<th>
 Sex : <?php echo $result['sex'];?>
 <div class="input-group">
  <div class='form-control'>
Male
  <input type='radio' name='sex' class='form-control' value='male' >
  Female
  <input type='radio' name='sex' class='form-control' value='female'>
    <span class="input-group-btn">
  <button name='se'  class="btn btn-secondary" >update</button>
  </span>
</div></th></tr>
    <tr><th scope="row">
      Level: <?php echo $result['level'];?>
<div class="input-group">
 <select  class='form-control' name='level'>
  <option value="--Edit your level--" ></option> 
  <option  value= 'hnd 3'>Hnd 3</option>
  <option  value= 'hnd 2'>Hnd 2</option>
  <option  value= 'hnd 1'>Hnd 1</option>
  <option  value= 'nd 3'>Nd 3</option>
  <option  value= 'nd 2'>Nd 2</option>
  <option  value= 'nd 1'>Nd 1</option>
  </select> 
    <span class="input-group-btn">
  <button name='lv' class="btn btn-secondary" >update</button>
  </span>
</div>
</th>
 </tr>
</table>
<a href="editprofile.php">Back</a>
 </tbody>
  </form>
  </div>
</div></div>

                       <?php
                        $se=$result['sex'];
if (isset($_POST['sn'])) {
                       $matric= $_SESSION['user_profile'];
                       $surname=$_POST['surname'];
  $sql="UPDATE users SET surname='$surname'  WHERE matric='$matric'";
    $result=mysqli_query($db,$sql);
    if ($result) {
   echo "<script type='text/javascript'> alert('Surname Successfully Updated')</script>
<script type='text/javascript'>
history.back();</script>
   ";  
    }
}

if (isset($_POST['na'])) {
                       $matric= $_SESSION['user_profile'];
                       $name=$_POST['name'];
  $sql="UPDATE users SET name='$name'  WHERE matric='$matric'";
    $result=mysqli_query($db,$sql);
    if ($result) {
    echo "<script type='text/javascript'> alert('Name Successfully Updated')</script>
<script type='text/javascript'>
history.back();</script>
    ";
    }
}
    if (isset($_POST['mat'])) {
                       $matric= $_SESSION['user_profile'];
                       $matric=$_POST['matric'];
  $sql="UPDATE users SET matric='$matric'  WHERE matric='$matric'";
    $result=mysqli_query($db,$sql);
    if ($result) {
    echo "<script type='text/javascript'> alert('Matric Successfully updated')</script>
<script type='text/javascript'>
history.back();</script>
    ";
}
}
    if (isset($_POST['se'])) {
                       $matric= $_SESSION['user_profile'];
                       if (isset($_POST['sex'])) {
                       $sex=$_POST['sex'];  
                       }
                       else
                       {
                       $sex=$se;
                       }
                        $sql="UPDATE users SET sex='$sex'  WHERE matric='$matric'";
    $result=mysqli_query($db,$sql);
    if ($result) {
    echo "<script type='text/javascript'> alert('Sex Successfully Updated')</script>
<script type='text/javascript'>
history.back();</script>
    ";
  
}}
    if (isset($_POST['lv'])) {
                       $matric= $_SESSION['user_profile'];
                       $level=$_POST['level'];
  $sql="UPDATE users SET level='$level'  WHERE matric='$matric'";
    $result=mysqli_query($db,$sql);
    if ($result) {
    echo "<script type='text/javascript'> alert('Level Successfully Updated')</script>
<script type='text/javascript'>
history.back();</script>
    ";
    }
}

                    
?>
<div class="text-center" style="background-color:rgb(64,126,60);margin-top:100px;height:100px;color:#fff;">
               <section><b>copyright&copy;</b> 2019 - All Rights Reserved - www.yabatech.edu.ng</section>  
    </div></body>
    </html>