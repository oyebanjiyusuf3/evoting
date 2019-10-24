<?php
 $pagetitle="accreditation";
  include("includes/header.php");
  $department= department($_SESSION['student_user']);
 $sql="SELECT * FROM users WHERE department ='$department' and vote='1'";
     $query=mysqli_query($db,$sql);
?>
<div class="container bg-light" style="padding-top:100px; ">
  <div class="row justify-content-center">
    <div class="col-lg-8">
       <table class="table table-hover">
 <form action="<?php $_php_self ?>" method="POST" >
  <tr class="alert-success "><td><b>Sn</b></td><td><b>Surname</b></td><td><b>Name</b></td><td><b>Matric</b></td><td><b>Sex</b></td></tr>
<?php
$count=1;
     while ($result=mysqli_fetch_array($query)) 
      {
                        echo"<tr>"."<td><b>".$count++."</b> </td>"."<td>" .$result['surname']."</td>"."<td class=''>" .$result['name']."</td>"."<td>" .$result['matric']."</td>"."<td class=''>" .$result['sex']."</td>".
                        "</tr>";}
                    ?>
</form>
</table>
</div>
</div>
</div>
<?php
    ?>
