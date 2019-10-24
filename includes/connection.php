<?php
     define('HOST','localhost');
     define('USER','root');
     define('PASS','');
     define('DB','evoting');
     $db = mysqli_connect(HOST,USER,PASS,DB) or die('could not connect to database');
?>