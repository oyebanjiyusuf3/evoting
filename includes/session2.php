<?php
session_start();
	if(!isset($_SESSION['login_user']))
{
 header("location:index.php");
}
?>