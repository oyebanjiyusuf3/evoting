<?php
$pagetitle="Staff Registration";
include("includes/adminheader.php");

if (isset($_POST['register'])) 
{
exec('C:/thumbprint/Enrollment.bat',$_SESSION['enrol']);
$myfile=fopen('finger.txt','r');
$file=fread($myfile,15);
$trim=trim($file);
        $staff_id=$_POST['staff_id'];
        $age=$_POST['age'];
        $staff = "([f|p]/[0-9][0-9]/[0-9][0-9][0-9][0-9][0-9][0-9][0-9]$)";
        $ag="([0-9][0-9]$)";

   if (preg_match($ag, $age)===1) 
   {
       if ($age < 40) 
       {

           if (preg_match($staff, $staff_id)===1) 
             {
                      $finger=$trim;
                      $passkey=strtolower($_POST['passkey']);
                      $surname=strtolower($_POST['surname']);
                      $name=strtolower($_POST['name']);
                      $age=strtolower($_POST['age']);
                      $sex=strtolower($_POST['sex']);
                      // $department =strtolower(department($matric));
                      $raw_data=$_POST['image'];
                      $image=$raw_data;
                      $sq = "SELECT id FROM staffs WHERE staff_id = '$staff_id' ";
                      $res=mysqli_query($db,$sq) or die("could not connect");
                      $row = mysqli_fetch_array($res,MYSQLI_ASSOC);
                      $count = mysqli_num_rows($res);

               if ($count=='1') 
                   {
                      echo "<div class='alert alert-warning text-center' role='alert'><i class='fa fa-exclamation-triangle text-center'></i> YOU ALREADY HAVE AN ACCOUNT</div>";
                   }

               else
                  {
                      $sql="INSERT INTO staffs (staff_id,passkey,surname,name,age,sex,image,fingerprint)VALUES ('$staff_id','$passkey','$surname','$name','$age','$sex','$image','$finger') ";
                      $result=mysqli_query($db,$sql);

                      if ($result) 
                             {
                                 echo "<script type='text/javascript'> alert('SUBMITTED SUCCESSFULLY')</script>";
                             }

                      if (!$result) 
                             {
                                echo "<div class='alert text-center alert-warning' role='alert'><i class='fa fa-exclamation-triangle text-center'></i> COULD NOT UPLOAD TO DATABASE</div>";
                             }

                  } 
             }

           else 
             {
                 echo "<div class='alert text-center alert-warning' role='alert'><i class='fa fa-exclamation-triangle text-center'></i> INVALID STAFF NUMBER</div>";
             } 
       }
     else 
      {
         echo "<div class='alert text-center alert-warning' role='alert'><i class='fa fa-exclamation-triangle text-center'></i> AGE MUST NOT BE MORE THAN 40YEARS OR LESS THAN 18YEARS</div>";
      } 
}
else 
  {
     echo "<div class='alert text-center alert-warning' role='alert'><i class='fa fa-exclamation-triangle text-center'></i>
     AGE MUST NOT CONTAIN AN ALPHABET
      </div>";
  } 
  $path="finger.txt";
$myfile = fopen($path, "w") or die("Unable to open file!");
fwrite($myfile, "");
fclose($myfile);
}
mysqli_close($db);

?>
<div class="container-fluid bg-light body">
<div class="container  ">
<div class="row justify-content-center">
  <div class="col-lg-6">
  <div class='error bg-primary text-center text-light' style="margin-top:20px;">STAFF REGISTRATION PAGE</div>
<form method="POST" encrtype="multipart/form-data" style="margin-top:50px; ">
<input type="text" name="staff_id" class="form-control" required placeholder="Please enter your staff number"><br>
<input type="password" name="passkey" class="form-control" required placeholder="Please enter your password"><br>
<input type="text" name="surname" class="form-control" required placeholder="Please enter your surname"><br>
<input type="text" name="name" class="form-control" required  placeholder="Please enter your name"><br>
<input type="text" name="age" class="form-control" required placeholder="Please enter your age"><br>
<!-- <input type="text" name="matric" class="form-control" required  placeholder="Please enter your staff ID"><br>
<input type="text" name="bvn" class="form-control" required  placeholder="Please enter your BVN"><br> -->
male:&nbsp;&nbsp;<input type="radio"  id="myradio" name="sex" required  value="male" >&nbsp;&nbsp;&nbsp;
female:&nbsp;&nbsp;<input type="radio" id="myradio" name="sex" required value="female">
<!-- <select required  class="form-control" name="level"><br>
<option  value="">select your level</option> 
<option  value= "hnd 3">Hnd 3</option>
<option  value= "hnd 2">Hnd 2</option>
<option  value= "hnd 1">Hnd 1</option>
<option  value= "nd 3">Nd 3</option>
<option  value= "nd 2">Nd 2</option>
<option  value= "nd 1">Nd 1</option>
</select><br> --><br><br>
<input type="button" value="Access Camera" onClick="setup(); $(this).hide();">
  <input type="text" id="results" name="image" value="" style="display:none;">
    <div id="my_camera" class="form-image">
    </div>
      <div id="pre_take_buttons">
        <input type=button value="Take Snapshot" class="form-control col-lg-3 col-md-3 col-sm-6 col-xs-12 my-2 mr-sm-2" onClick="preview_snapshot()">
      </div>
      <div id="post_take_buttons" style="display:none" class="form-inline my-2 my-lg-0">
        <input type=button value="&lt; Take Another" class="form-control col-lg-3 col-md-4 col-sm-6 col-xs-12 my-2 mr-sm-2" onClick="cancel_preview()">
           <input type=button value="Save Photo &gt;" class="form-control col-lg-3 col-md-4 col-sm-6 col-xs-12 my-2 mr-sm-2" onClick="save_photo()" style="font-weight:bold;">
</div><br>

<input type="button" value="Access Thumb Print"><br><br>

<button type="submit" name="register" class="btn btn-primary btn-form">REGISTER</button>
</form>
</div>
</div>
</div>
</div>
<script language="JavaScript">
                     Webcam.set({
                       width: 320,
                       height: 240,
                       image_format: 'jpeg',
                       jpeg_quality: 90
                     });
    var shutter = new Audio();
    shutter.autoplay = false;
    shutter.src = navigator.userAgent.match(/Firefox/) ? 'js/shutter.ogg' : 'js/shutter.mp3';
    
 function setup() {
      Webcam.reset();
      Webcam.attach( '#my_camera' );
    }

    function preview_snapshot() {
      try { shutter.currentTime = 0; } catch(e) {;}
      shutter.play();
            Webcam.freeze();
      document.getElementById('pre_take_buttons').style.display = 'none';
      document.getElementById('post_take_buttons').style.display = '';
    }
    
    function cancel_preview() {
            Webcam.unfreeze();
      document.getElementById('pre_take_buttons').style.display = '';
      document.getElementById('post_take_buttons').style.display = 'none';
    }

    function save_photo() {
       Webcam.snap( function(data_uri) {
          document.getElementById('results').value = 
          data_uri;
      } );
       }
  </script>
