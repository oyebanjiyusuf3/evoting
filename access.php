<?php
$myfile=fopen('finger.txt','r');
echo fread($myfile,2);
$path="finger.txt";
$myfile = fopen($path, "w") or die("Unable to open file!");
//$txt = $_REQUEST['username'];zz*
fwrite($myfile, "");
fclose($myfile);
//echo $val[1];
//$myfile = fopen($path, "w") or die("Unable to open file!");
//exec('C:/xampp/htdocs/evoting/Enrollment.cmd', $output);
//print_r($output);
?>








































