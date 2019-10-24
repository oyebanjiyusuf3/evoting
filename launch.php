<?php
ob_start();
session_start();
//exec('C:/thumbprint/Enrollment.bat' ,$output);
//ini_set('max_execution_time', 1);
$de=exec('C:/thumbprint/Enrollment.bat',$output);
echo $de;
//$command='C:/thumbprint/Enrollment.bat';
ob_end_clean();
header("location:studenthead.php");
exit();
//$path="c:/faces/image.txt";
//$myfile = fopen($path, "w") or die("Unable to open file!");



//$txt = $_REQUEST['username'];zz*
//fwrite($myfile, $txt);
//fclose($myfile);
//echo $output;

?>
