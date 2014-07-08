<?php
include 'connect.php';
session_start();
if(isset($_SESSION['user'])){
	$uname=$_SESSION['user'];
}
else{
	$uname="Guest";
}
$probid = $_POST['probid'];
$sol = $_POST['sol'];
$sql = "INSERT INTO solution(`solution_id`, `probid`, `statement`, `username`) VALUES (NULL, '".$probid."', '".$sol."', '".$uname."');";
$res=mysqli_query($con,$sql);
?>
