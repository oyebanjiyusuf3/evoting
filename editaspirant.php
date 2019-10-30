<?php 
 $pagetitle="Aspirant profile";
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
                $matric=$_POST['update'];
            if ($matric) {
              $_SESSION['user_profile'] = $matric;
              header("location:updateprofile.php");
            }
            }
?>
<div class="container " >
  <div class="row justify-content-center">
    <div class="col-lg-9 text-capitalize">
      <?php
    //   $department=department($_SESSION['student_user']);
$sql="SELECT * FROM aspirants WHERE staff_id ='$staff_id'";
$query=mysqli_query($db,$sql);
echo "<table class='table table-hover bg-light ' style='margin-top:-100px; '><form method='POST'>";
echo " <thead>
    <tr>
 <th class='alert-success text-center text-uppercase' colspan='7'><b> User Profile for ".$staff_id."</b></th>
    </tr>
    <tr class='alert-light text-dark'><td><b>Sn</b></td><td><b>Surname</b></td><td><b>Name</b></td><td><b>Matric</b></td><td><b>Sex</b></td><td><i class='fa fa-trash'></i></td><td><i class='fa fa-refresh'></i></td></b></tr>
  </thead>";{$count=1;
while ($result=mysqli_fetch_array($query)) 
echo"<tbody><tr>"."<td>".$count++."</td>"."<td>" .$result['surname']."</td>"."<td class=''>" .$result['name']."</td>"."<td>" .$result['matric']."</td>"."<td class=''>" .$result['sex']."</td>".
"<td><button type='submit' name='delete' value='".$result['matric']."' class='btn btn-sm btn-danger '>DELETE</button></td>".
"<td><button type='submit' name='update' value='".$result['matric']."' class='btn btn-sm bg-success' style='color:#fff;' >UPDATE</button></td>"."</tr><br>";
}
echo "</tbody></form></table>";
?>
</div>
</div>
</div>
<div class="text-center" style="background-color:rgb(64,126,60);margin-top:100px;height:100px;color:#fff;">
               <section><b>copyright&copy;</b> 2019 - All Rights Reserved - www.yabatech.edu.ng</section>  
    </div>
  </body>
    </html>
