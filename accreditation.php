<?php
 $pagetitle="accreditation";
  include("includes/adminheader.php");
//  $department= department($_SESSION['student_user']);
  $staff_id= $_SESSION['staff_user'];
 $sql="SELECT * FROM staffs WHERE staff_id ='$staff_id'";
     $query=mysqli_query($db,$sql);
?>
<div class="container " style="padding-top:100px; ">
  <div class="row justify-content-center">
    <div class="col-lg-8">
       <table class="table table-hover bg-light">
 <form action="<?php $_php_self ?>" method="POST" >
  <tr class="alert-success"><td><b>Sn</b></td><td><b>Surname</b></td><td><b>Name</b></td><td><b>Staff ID</b></td><td><b>Sex</b></td><td><i class="fa fa-check-square-o"></i></td></tr>
<?php
$count=1;
     while ($result=mysqli_fetch_array($query)) 
      {
                        echo"<tr class='text-capitalize'>"."<td><b>".$count++."</b> </td>"."<td>" .$result['surname']."</td>"."<td class=''>" .$result['name']."</td>"."<td>" .$result['staff_id']."</td>"."<td class=''>" .$result['sex']."</td>".
                        "<td>";

if ($result['accredit']==1) {
  echo"<button type='submit' name='accredit' value='".$result['staff_id']."' class='btn btn-sm bg-warning' style='color:#fff;'>ACCREDITED</button></td>"."</tr>";
               
}
else{
                    echo "<button type='submit' name='accredit' value='".$result['staff_id']."' class='btn btn-sm bg-success' style='color:#fff;padding:4px 16px;'> ACCREDIT </button></td>"."</tr>";
                }}
                    ?>
</form>
</table>
</div>
</div>
</div>
<?php
 if (isset($_POST['accredit'])) 
                {
                  exec('C:/thumbprint/Validation.bat',$output);
                  $myfile=fopen('finger.txt','r');
$file=fread($myfile,15);
$trim=trim($file);
                $accredit_con=$_POST['accredit'];
                $accredit="1";
                $accredit_sql = "SELECT * FROM users WHERE matric='$accredit_con'";
                $retval = mysqli_query( $db,$accredit_sql );
            
           echo $trim." ".$result_retval['id'];  
           while ( $result_retval=mysqli_fetch_array( $retval)) {
if ($trim>0) {

                   if($result_retval['accredit']==0 )
                        {
 function rand_code($len=5)
{
 $min_lenght= 0 ;
$max_lenght = 100;
$bigL =
"ABCDEFGHIJKLMNOPQRSTUVWXYZ" ;
$number = "0123456789" ;
$bigB = str_shuffle($bigL);
 $numberS = str_shuffle($number);
$RandCode1 = str_shuffle( $numberS.$bigB);
 $RandCode2 = str_shuffle($RandCode1);
 $RandCode = $RandCode1.$RandCode2;
if ($len>$min_lenght && $len<$max_lenght)
 {
 $CodeEX = substr($RandCode, 0 ,$len);
}
else
{
$CodeEX = $RandCode;
}
return $CodeEX ;
}
 $passkey=rand_code($len=5);
                          $sql="UPDATE users SET accredit='$accredit' , passkey='$passkey' WHERE  matric='$accredit_con'";
                           $result=mysqli_query($db,$sql);

                      if ($result) 
                             {
                                 echo "<script type='text/javascript'> alert('SUCCESSFULLY ACCREDITTED, YOUR PASSKEY IS (>> $passkey<< )')</script>";
                             }
                       }
                       else
                       {
                         $accredit_sql = "SELECT passkey FROM users WHERE matric='$accredit_con'";
                $retval = mysqli_query( $db,$accredit_sql );
                $result_retval=mysqli_fetch_array( $retval);
                $passkey=$result_retval['passkey'];
                         echo "<script type='text/javascript'> alert('ALREADY ACCREDITTED YOUR PASSKEY IS (>> $passkey << )')</script>";
                       }
                   }else
                   {
                   echo "<script type='text/javascript'> alert('INVALID USERID')</script>";
                   }
                   $path="finger.txt";
$myfile = fopen($path, "w") or die("Unable to open file!");
fwrite($myfile, "");
fclose($myfile);
}  
                 }
                           ?>
