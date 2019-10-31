<?php
session_start();
/* Your authentication key */
$authKey = "abgbsaxhbsadbasbhdjhsajhd";

/* Multiple mobiles numbers separated by comma */
$mobileNumber = $_POST["phone"];

/* Sender ID,While using route4 sender id should be 6 characters long. */
$senderId = "ABCDEF";

/* Your message to send, Add URL encoding here. */
$rndno=rand(1000, 9999);
$message = urlencode("otp number.".$rndno);

/* Define route */
$route = "route=4";
/* Prepare you post parameters */
$postData = array(
    'authkey' => $authKey,
    'mobiles' => $mobileNumber,
    'message' => $message,
    'sender' => $senderId,
    'route' => $route
);

/* API URL*/
$url="https://control.msg91.com/api/sendhttp.php";

/* init the resource */
$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    /*,CURLOPT_FOLLOWLOCATION => true */
));


/* Ignore SSL certificate verification */
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


/* get response */
$output = curl_exec($ch);

/* Print error if any */
if(curl_errno($ch))
{

    echo 'error:' . curl_error($ch);
}

curl_close($ch);

if(isset($_POST['btn-save']))
{
	
$_SESSION['name']=$_POST['name'];
$_SESSION['email']=$_POST['email'];
$_SESSION['phone']=$_POST['phone'];
$_SESSION['otp']=$rndno;
header( "Location: otp.php" );

}
?>