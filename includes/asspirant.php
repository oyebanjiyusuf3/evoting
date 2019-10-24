<?php
include("includes/header.php");
?>
<form method="POST" encrtype="multipart/form-data">
<input type="text" name="surname" class="form-control" required placeholder="Please enter your surname"><br>
<input type="text" name="name" class="form-control" required  placeholder="Please enter your name"><br>
<input type="text" name="matric" class="form-control" required  placeholder="Please enter matric number"><br>
male:&nbsp;&nbsp;<input type="radio"  id="myradio" name="sex" required  value="male" >&nbsp;&nbsp;&nbsp;
female:&nbsp;&nbsp;<input type="radio" id="myradio" name="sex" required value="female">
<select required  class="form-control" name="level"><br>
<option  value="">select your level</option> 
<option  value= "hnd 3">Hnd 3</option>
<option  value= "hnd 2">Hnd 2</option>
<option  value= "hnd 1">Hnd 1</option>
<option  value= "nd 3">Nd 3</option>
<option  value= "nd 2">Nd 2</option>
<option  value= "nd 1">Nd 1</option>
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