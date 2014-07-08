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
$sol = $_POST['sol_id'];
$sql = "INSERT INTO problem_solution(`probid`, `solution_id`) VALUES ('".$probid."','".$sol."');";
$sql1="SELECT username from solution where solution_id='".$sol."'";
$res1=mysqli_query($con,$sql1);
$row1 = mysqli_fetch_array($res1);
$win=$row1['username'];
$sql2="SELECT points from user where username='".$win."'";
$res2=mysqli_query($con,$sql2);
$row2 = mysqli_fetch_array($res2);
$pnt=$row2['points'];
$pnt=$pnt+1;
$sql3 = "UPDATE user SET `points` = '".$pnt."' WHERE `username` = '".$win."';";
$res3=mysqli_query($con,$sql3);
$res=mysqli_query($con,$sql);
/*echo $sql;
echo $sql1;
echo $sql2;
echo $sql3;*/
?>
