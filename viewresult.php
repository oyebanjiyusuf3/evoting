<?php
require("includes/header2.php");


if(empty($_SESSION['student_user'])){
$department=department($_SESSION['login_user']);
}else
{
	$department=department($_SESSION['student_user']);		
}

?>



<div class="container body ">
  <div class="row justify-content-center">
  <div class="col-8">
  <table class='table table-hover vote ' style="margin-top: 20px;">
<thead>
    <tr>
 <th class='alert-success  text-center' colspan='6'>Result for <?php echo department($_SESSION['login_user']); ?></th>
    </tr></thead>
<?php
// position for president
echo "<thead>
    <tr>
 <th class=' bg-dark text-light' colspan='7'>PRESIDENT </th>
    </tr></thead>";
$sql="SELECT * FROM voted WHERE department ='$department' and position='PRESIDENT'";
$query=mysqli_query($db,$sql);
  $count=0;
 
while ($result=mysqli_fetch_array($query))
{ $count++;
	
if($count==1){
			$president1=$result['matric'];
			$fullname1=$result['name']." ".$result['surname'];
	}
	if($count==2){
		$president2=$result['matric'];
		$fullname2=$result['name']." ".$result['surname'];
	}
} 

$kpresident1=0;
$kpresident2=0;
$sql="SELECT * FROM users WHERE department ='$department' and president='$president1'";
$query=mysqli_query($db,$sql);
if ($query) {
	while ($result=mysqli_fetch_array($query))
{$kpresident1++;
}
}

$sql="SELECT * FROM users WHERE department ='$department' and president='$president2'";
$query=mysqli_query($db,$sql);
if ($query) {
	while ($result=mysqli_fetch_array($query))
{$kpresident2++;
}
}
echo "<tr><th>".$fullname1."</th><th>".$kpresident1."</th></tr><tr><th>".$fullname2."</th><th>".$kpresident2."</th></tr>";
;
?>

<?php
// position for vice president
echo "<thead>
    <tr>
 <th class=' bg-dark text-light' colspan='7'>VICE PRESIDENT </th>
    </tr></thead>";
$sql="SELECT * FROM voted WHERE department ='$department' and position='VICE PRESIDENT'";
$query=mysqli_query($db,$sql);
  $count=0;
 
while ($result=mysqli_fetch_array($query))
{ $count++;
	
if($count==1){
			$president1=$result['matric'];
			$fullname1=$result['name']." ".$result['surname'];
	}
	if($count==2){
		$president2=$result['matric'];
		$fullname2=$result['name']." ".$result['surname'];
	}
} 

$kpresident1=0;
$kpresident2=0;
$sql="SELECT * FROM users WHERE department ='$department' and vice='$president1'";
$query=mysqli_query($db,$sql);
if ($query) {
	while ($result=mysqli_fetch_array($query))
{$kpresident1++;
}
}

$sql="SELECT * FROM users WHERE department ='$department' and vice='$president2'";
$query=mysqli_query($db,$sql);
if ($query) {
	while ($result=mysqli_fetch_array($query))
{$kpresident2++;
}
}
echo "<tr><th>".$fullname1."</th><th>".$kpresident1."</th></tr><tr><th>".$fullname2."</th><th>".$kpresident2."</th></tr>";
;
?>





<?php
// position for secretary
echo "<thead>
    <tr>
 <th class=' bg-dark text-light' colspan='7'>SECRETARY </th>
    </tr></thead>";
$sql="SELECT * FROM voted WHERE department ='$department' and position='SECRETARY'";
$query=mysqli_query($db,$sql);
  $count=0;
 
while ($result=mysqli_fetch_array($query))
{ $count++;
	
if($count==1){
			$president1=$result['matric'];
			$fullname1=$result['name']." ".$result['surname'];
	}
	if($count==2){
		$president2=$result['matric'];
		$fullname2=$result['name']." ".$result['surname'];
	}
} 

$kpresident1=0;
$kpresident2=0;
$sql="SELECT * FROM users WHERE department ='$department' and secretary='$president1'";
$query=mysqli_query($db,$sql);
if ($query) {
	while ($result=mysqli_fetch_array($query))
{$kpresident1++;
}
}

$sql="SELECT * FROM users WHERE department ='$department' and secretary='$president2'";
$query=mysqli_query($db,$sql);
if ($query) {
	while ($result=mysqli_fetch_array($query))
{$kpresident2++;
}
}
echo "<tr><th>".$fullname1."</th><th>".$kpresident1."</th></tr><tr><th>".$fullname2."</th><th>".$kpresident2."</th></tr>";
;
?>


<?php

// position for liberian
echo "<thead>
    <tr>
 <th class=' bg-dark text-light' colspan='7'> LIBERIAN </th>
    </tr></thead>";
$sql="SELECT * FROM voted WHERE department ='$department' and position='LIBERIAN'";
$query=mysqli_query($db,$sql);
  $count=0;
 
while ($result=mysqli_fetch_array($query))
{ $count++;
	
if($count==1){
			$president1=$result['matric'];
			$fullname1=$result['name']." ".$result['surname'];
	}
	if($count==2){
		$president2=$result['matric'];
		$fullname2=$result['name']." ".$result['surname'];
	}
} 

$kpresident1=0;
$kpresident2=0;
$sql="SELECT * FROM users WHERE department ='$department' and libarian='$president1'";
$query=mysqli_query($db,$sql);
if ($query) {
	while ($result=mysqli_fetch_array($query))
{$kpresident1++;
}
}

$sql="SELECT * FROM users WHERE department ='$department' and libarian='$president2'";
$query=mysqli_query($db,$sql);
if ($query) {
	while ($result=mysqli_fetch_array($query))
{$kpresident2++;
}
}
echo "<tr><th>".$fullname1."</th><th>".$kpresident1."</th></tr><tr><th>".$fullname2."</th><th>".$kpresident2."</th></tr>";
;
?>

<?php
// position for SPORT DIRECTOR
echo "<thead>
    <tr>
 <th class=' bg-dark text-light' colspan='7'>SPORT DIRECTOR </th>
    </tr></thead>";
$sql="SELECT * FROM voted WHERE department ='$department' and position='SPORTS DIRECTOR'";
$query=mysqli_query($db,$sql);
  $count=0;
 
while ($result=mysqli_fetch_array($query))
{ $count++;
	
if($count==1){
			$president1=$result['matric'];
			$fullname1=$result['name']." ".$result['surname'];
	}
	if($count==2){
		$president2=$result['matric'];
		$fullname2=$result['name']." ".$result['surname'];
	}
} 

$kpresident1=0;
$kpresident2=0;
$sql="SELECT * FROM users WHERE department ='$department' and sport='$president1'";
$query=mysqli_query($db,$sql);
if ($query) {
	while ($result=mysqli_fetch_array($query))
{$kpresident1++;
}
}

$sql="SELECT * FROM users WHERE department ='$department' and sport='$president2'";
$query=mysqli_query($db,$sql);
if ($query) {
	while ($result=mysqli_fetch_array($query))
{$kpresident2++;
}
}
echo "<tr><th>".$fullname1."</th><th>".$kpresident1."</th></tr><tr><th>".$fullname2."</th><th>".$kpresident2."</th></tr>";
;
?>


<?php
// position for WELFARE DIRECTOR
echo "<thead>
    <tr>
 <th class=' bg-dark text-light' colspan='7'>WELFARE DIRECTOR </th>
    </tr></thead>";
$sql="SELECT * FROM voted WHERE department ='$department' and position='WELFARE DIRECTOR'";
$query=mysqli_query($db,$sql);
  $count=0;
 
while ($result=mysqli_fetch_array($query))
{ $count++;
	
if($count==1){
			$president1=$result['matric'];
			$fullname1=$result['name']." ".$result['surname'];
	}
	if($count==2){
		$president2=$result['matric'];
		$fullname2=$result['name']." ".$result['surname'];
	}
} 

$kpresident1=0;
$kpresident2=0;
$sql="SELECT * FROM users WHERE department ='$department' and welfare='$president1'";
$query=mysqli_query($db,$sql);
if ($query) {
	while ($result=mysqli_fetch_array($query))
{$kpresident1++;
}
}

$sql="SELECT * FROM users WHERE department ='$department' and welfare='$president2'";
$query=mysqli_query($db,$sql);
if ($query) {
	while ($result=mysqli_fetch_array($query))
{$kpresident2++;
}
}
echo "<tr><th>".$fullname1."</th><th>".$kpresident1."</th></tr><tr><th>".$fullname2."</th><th>".$kpresident2."</th></tr>";
;
?>


<?php
// position for SOCIAL DIRECTOR
echo "<thead>
    <tr>
 <th class=' bg-dark text-light' colspan='7'>SOCIAL DIRECTOR </th>
    </tr></thead>";
$sql="SELECT * FROM voted WHERE department ='$department' and position='SOCIAL DIRECTOR'";
$query=mysqli_query($db,$sql);
  $count=0;
 
while ($result=mysqli_fetch_array($query))
{ $count++;
	
if($count==1){
			$president1=$result['matric'];
			$fullname1=$result['name']." ".$result['surname'];
	}
	if($count==2){
		$president2=$result['matric'];
		$fullname2=$result['name']." ".$result['surname'];
	}
} 

$kpresident1=0;
$kpresident2=0;
$sql="SELECT * FROM users WHERE department ='$department' and social='$president1'";
$query=mysqli_query($db,$sql);
if ($query) {
	while ($result=mysqli_fetch_array($query))
{$kpresident1++;
}
}

$sql="SELECT * FROM users WHERE department ='$department' and social='$president2'";
$query=mysqli_query($db,$sql);
if ($query) {
	while ($result=mysqli_fetch_array($query))
{$kpresident2++;
}
}
echo "<tr><th>".$fullname1."</th><th>".$kpresident1."</th></tr><tr><th>".$fullname2."</th><th>".$kpresident2."</th></tr>";
;
?>


<?php
// position for PRO
echo "<thead>
    <tr>
 <th class=' bg-dark text-light' colspan='7'>PRO </th>
    </tr></thead>";
$sql="SELECT * FROM voted WHERE department ='$department' and position='PRO'";
$query=mysqli_query($db,$sql);
  $count=0;
 
while ($result=mysqli_fetch_array($query))
{ $count++;
	
if($count==1){
			$president1=$result['matric'];
			$fullname1=$result['name']." ".$result['surname'];
	}
	if($count==2){
		$president2=$result['matric'];
		$fullname2=$result['name']." ".$result['surname'];
	}
} 

$kpresident1=0;
$kpresident2=0;
$sql="SELECT * FROM users WHERE department ='$department' and pro='$president1'";
$query=mysqli_query($db,$sql);
if ($query) {
	while ($result=mysqli_fetch_array($query))
{$kpresident1++;
}
}

$sql="SELECT * FROM users WHERE department ='$department' and pro='$president2'";
$query=mysqli_query($db,$sql);
if ($query) {
	while ($result=mysqli_fetch_array($query))
{$kpresident2++;
}
}
echo "<tr><th>".$fullname1."</th><th>".$kpresident1."</th></tr><tr><th>".$fullname2."</th><th>".$kpresident2."</th></tr>";
;
?>

</table>
</div>
</div>

</div>