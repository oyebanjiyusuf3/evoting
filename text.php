<?php 
$myfile=fopen('finger.txt','r');
$file=fread($myfile,15);
$trim=trim($file);
echo $trim;