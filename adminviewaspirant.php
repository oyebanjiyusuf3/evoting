<?php
$pagetitle="View Asspirant";
  include("includes/adminheader.php");
?>
<div class="container " >
  <div class="row justify-content-center">
    <div class="col-lg-8">
   <table class="table table-hover bg-light" style="margin-top:20px; ">

<?php
$staff_id=$_SESSION['student_user'];
echo " <thead>
    <tr>
 <th class='alert-success text-center text-uppercase' colspan='6'><b> List of Aspirants</b></th>
    </tr>
    <tr class='alert-light text-dark'><td><b>Sn</b></td><td><b>Surname</b></td><td><b>Name</b></td><td><b>Staff ID</b></td><td><b>Position</b></td></tr>
  </thead><tbody class='text-capitalize'>";

$sql="SELECT * FROM aspirants WHERE staff_id ='$staff_id' and position='PRESIDENT' or position='VICE PRESIDENT'
or position='SECRETARY'
or position='LIBARIAN'
or position='SPORTS DIRECTOR'
or position='WELFARE DIRECTOR'
or position='SOCIAL DIRECTOR'
or position='PRO'
";
$query=mysqli_query($db,$sql);
$count=1;
while ($result=mysqli_fetch_array($query))
{ 
echo"<tr>"."<td>".$count++."</td>"."<td>" .$result['surname']."</td>"."<td class=''>" .$result['name']."</td>"."<td>" .$result['staff_id']."</td>".
"<td>".$result['position']."</td></tr><br>";
}
?>
</tbody>
</table>
</div></div></div></div></div>