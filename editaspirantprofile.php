<?php 
 $pagetitle="profile";
  include("includes/adminheader.php");
if (isset($_POST['delete'])) 
                  {
                        $con=$_POST['delete'];
                        $sql = "DELETE FROM aspirants WHERE staff_id='$con'";
                        $retval = mysqli_query( $db,$sql );
                    if(! $retval )
                            {
                               die('Could not delete data ');
                            }
                      echo "<script type='text/javascript'> alert('Deleted data successfully')</script>
<script type='text/javascript'>
history.back();</script>
                      ";
                  }

if (isset($_POST['update'])) 
                {
                  echo "<style type='text/css'>
                  .first{display:none; }
                </style>";
                $staff_id=$_POST['update'];
            if ($staff_id) {
              $_SESSION['user_profile'] = $staff_id;
              header("location:updateaspirantprofile.php");
            }
            }
?>
<div class="container " >
  <div class="row justify-content-center">
    <div class="col-lg-9 text-capitalize">
      <?php
      // $department=department($_SESSION['student_user']);
      $staff_id=$_SESSION['student_user'];
      
      $sql="SELECT * FROM aspirants WHERE staff_id ='$staff_id' and position='PRESIDENT' or position='VICE PRESIDENT'
      or position='SECRETARY'
      or position='LIBARIAN'
      or position='SPORTS DIRECTOR'
      or position='WELFARE DIRECTOR'
      or position='SOCIAL DIRECTOR'
      or position='PRO'
      ";
$query=mysqli_query($db,$sql);
echo "<table class='table table-hover bg-light ' style='margin-top:-20px; '><form method='POST'>";
echo " <thead>
    <tr>
 <th class='alert-success text-center text-uppercase' colspan='7'><b> User Profile for all APPLICANTS</b></th>
    </tr>
    <tr class='alert-light text-dark'><td><b>Sn</b></td><td><b>Surname</b></td><td><b>Name</b></td><td><b>Staff ID</b></td><td><b>Position</b></td><td><i class='fa fa-trash'></i></td><td><i class='fa fa-refresh'></i></td></b></tr>
  </thead>";{$count=1;
while ($result=mysqli_fetch_array($query)) 
echo"<tbody><tr>"."<td>".$count++."</td>"."<td>" .$result['surname']."</td>"."<td class=''>" .$result['name']."</td>"."<td>" .$result['staff_id']."</td>"."<td class=''>" .$result['position']."</td>".
"<td><button type='submit' name='delete' value='".$result['staff_id']."' class='btn btn-sm btn-danger '>DELETE</button></td>".
"<td><button type='submit' name='update' value='".$result['staff_id']."' class='btn btn-sm bg-success' style='color:#fff;' >UPDATE</button></td>"."</tr><br>";
}
echo "</tbody></form></table>";
?>
</div>
</div>
</div>
<div class="text-center" style="background-color:rgb(64,126,60);margin-top:350px;height:100px;color:#fff;">
               <section><b>copyright&copy;</b> 2019 - All Rights Reserved - www.yabatech.edu.ng</section>  
    </div>
  </body>
    </html>
