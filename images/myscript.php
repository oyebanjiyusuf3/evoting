<?php
session_start();
$image=$_FILES['webcam']['tmp_name'];
$_SESSION["image"]=$image;
	?>