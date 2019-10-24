
<?php
require("includes/header2.php");
	if(empty($_SESSION['student_user'])){
$department=department($_SESSION['login_user']);
}else
{
	$department=department($_SESSION['student_user']);		
}
$sql="SELECT * FROM voted WHERE department ='$department' and position='PRESIDENT'";
$query=mysqli_query($db,$sql);
  $count=0;
 
while ($result=mysqli_fetch_array($query))
{ $count++;
	
if($count==1){
			$president1=$result['matric'];
	}
	if($count==2){
		$president2=$result['matric'];	
	}
} 
$k=0;
$sql="SELECT president FROM users WHERE department ='$department'";
$query=mysqli_query($db,$sql);
while ($result=mysqli_fetch_array($query))
{if ($kpresident1==$result['president']) {
$k++;
	echo $k ;
}
}
?>