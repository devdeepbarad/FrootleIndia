<?php
date_default_timezone_set("Asia/Calcutta");
$servername   = "localhost";
$database = "blendtecindia";
$username = "root";
$password = "";

$con=mysqli_connect($servername,$username,$password,$database);
$conn=new PDO("mysql:host=".$servername.";dbname=".$database,$username,$password);
?>