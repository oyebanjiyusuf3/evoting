<?php
session_start();
	if(!isset($_SESSION['student_user']))
{
 header("location:index.php");
}
?>