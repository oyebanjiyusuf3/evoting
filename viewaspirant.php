<?php
$pagetitle="View Asspirant";
  include("includes/header.php");
?>
<div class="container " >
  <div class="row justify-content-center">
    <div class="col-lg-8">
   <table class="table table-hover bg-light" style="margin-top:-200px; ">

<?php
$department=department($_SESSION['student_user']);
echo " <thead>
    <tr>
 <th class='alert-success text-center text-uppercase' colspan='6'><b> List of Aspirants for ".$department."</b></th>
    </tr>
    <tr class='alert-light text-dark'><td><b>Sn</b></td><td><b>Surname</b></td><td><b>Name</b></td><td><b>Matric</b></td><td><b>Position</b></td></tr>
  </thead><tbody class='text-capitalize'>";

$sql="SELECT * FROM voted WHERE department ='$department' and position='PRESIDENT' or position='VICE PRESIDENT'
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
echo"<tr>"."<td>".$count++."</td>"."<td>" .$result['surname']."</td>"."<td class=''>" .$result['name']."</td>"."<td>" .$result['matric']."</td>".
"<td>".$result['position']."</td></tr><br>";
}
?>
</tbody>
</table>
</div></div></div></div></div>