<?php
$pagetitle="Asspirant Registration";
include("includes/adminheader.php");

if (isset($_POST['register'])) 
{

        $matric=$_POST['matric'];
        $matr = "([f|p]/[h|n]d/[0-9][0-9]/[0-9][0-9][0-9][0-9][0-9][0-9][0-9]$)";

           if (preg_match($matr, $matric)===1) 
             {
                   
                      $surname=strtolower($_POST['surname']);
                      $name=strtolower($_POST['name']);
                      // $department =strtolower(department($matric));
                      $position=$_POST['position'];
                      $raw_data=$_POST['image'];
                      $image=$raw_data;



                      $sqli="SELECT * FROM voted WHERE position='$position' and matric='$matric'";
                        $retval = mysqli_query( $db,$sqli );
                        $result_retval=mysqli_fetch_array( $retval);
                        $result_count=mysqli_num_rows($retval);
                       if ($result_count>=2) {
                        echo "<script type='text/javascript'> alert('CAN NOT REGISTER, LIMIT EXCEEDED')</script>";
                       }
else{
                      $sq = "SELECT id FROM voted WHERE matric = '$matric' ";
                      $res=mysqli_query($db,$sq) or die("could not connect");
                      $row = mysqli_fetch_array($res,MYSQLI_ASSOC);
                      $count = mysqli_num_rows($res);

               if ($count=='1') 
                   {
                      echo "<div class='alert alert-warning text-center' role='alert'><i class='fa fa-exclamation-triangle text-center'></i> YOU ALREADY HAVE AN ACCOUNT</div>";
                   }

               else
                  {
                      $sql="INSERT INTO voted (surname,name,matric,department,image,position)VALUES ('$surname','$name','$matric','$department','$image','$position') ";
                      $result=mysqli_query($db,$sql);

                      if ($result) 
                             {
                                 echo "<script type='text/javascript'> alert('SUBMITTED SUCCESSFULLY')</script>";
                             }

                      if (!$result) 
                             {
                                echo "<div class='alert alert-warning text-center' role='alert'><i class='fa fa-exclamation-triangle text-center'></i> COULD NOT UPLOAD TO DATABASE</div>";
                             }

                  } }
             }

           else 
             {
                 echo "<div class='alert alert-warning text-center' role='alert'><i class='fa fa-exclamation-triangle text-center'></i> INVALID MATRIC NUMBER</div>";
             } 
       
}
mysqli_close($db);

?>
<div class="container-fluid bg-light body">
<div class="container  ">
<div class="row justify-content-center">
  <div class="col-lg-6">
  <form method="POST" encrtype="multipart/form-data" style="margin-top:100px; ">
<input type="text" name="surname" class="form-control" required placeholder="Please enter your surname"><br>
<input type="text" name="name" class="form-control" required  placeholder="Please enter your name"><br>
<input type="text" name="matric" class="form-control" required  placeholder="Please enter matric number"><br>
<select required  class="form-control" name="position"><br>
          <option>--SELECT POST--</option>
          <option value='PRESIDENT'>PRESIDENT</option>
          <option value='VICE PRESIDENT'>VICE PRESIDENT</option>
          <option value='SECRETARY'>SECRETARY</option>
          <option value='LIBARIAN'>LIBARIAN</option>
          <option value='SPORTS DIRECTOR'>SPORTS DIRECTOR</option>
          <option value='WELFARE DIRECTOR'>WELFARE DIRECTOR</option>
          <option value='SOCIAL DIRECTOR'>SOCIAL DIRECTOR</option>
          <option value='PRO'>PRO</option>
</select><br>

<input type="button" value="Access Camera" onClick="setup(); $(this).hide();">
  <input type="text" id="results" name="image" value="" style="display:none;" required>
    <div id="my_camera" class="form-image">
    </div>
      <div id="pre_take_buttons">
        <input type=button value="Take Snapshot" class="form-control col-lg-3 col-md-3 col-sm-6 col-xs-12 my-2 mr-sm-2" onClick="preview_snapshot()">
      </div>
      <div id="post_take_buttons" style="display:none" class="form-inline my-2 my-lg-0">
        <input type=button value="&lt; Take Another" class="form-control col-lg-3 col-md-4 col-sm-6 col-xs-12 my-2 mr-sm-2" onClick="cancel_preview()">
           <input type=button value="Save Photo &gt;" class="form-control col-lg-3 col-md-4 col-sm-6 col-xs-12 my-2 mr-sm-2" onClick="save_photo()" style="font-weight:bold;">
</div>
<button type="submit" name="register" class="btn btn-secondary btn-form">REGISTER</button>
</form>
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

</div></div></div></div>