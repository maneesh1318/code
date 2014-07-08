<table border="0" align="center">
<?php
include 'connect.php';
session_start();
if(isset($_SESSION['user'])){
	$uname=$_SESSION['user'];
}
else{
	$uname="Guest";
}
$q = $_POST['probid'];
$sql = "SELECT * FROM `problem` WHERE probid='".$q."'";
$sql1 = "SELECT * FROM solution WHERE probid='".$q."' and username='".$uname."'";
$result = mysqli_query($con,$sql);
$result1 = mysqli_query($con,$sql1);
$row = mysqli_fetch_array($result);
$row1 = mysqli_fetch_array($result1);
$pid=$row['probid'];
$un=$row['username'];
$st=$row['statement'];
if($row1){
	echo "<tr><td>Solution to problem with Problem ID ".$q." is submitted by you</td></tr>";
}
else{
echo "<tr><td>Problem By:".$un."</td></tr>";
echo "<tr><td>".$st."</td></tr>";
echo "<tr><td><textarea id=\"sol_text\"rows=\"4\" cols=\"135\"></textarea></td></tr>";
echo "<tr><td><button onclick=\"post_solution(".$pid.")\">Post Solution</button></td></tr>";
}
?>
</table>
<?php
echo "<h5><a href=\"#\" onclick=\"loadXMLDoc('model/browse_problem.php','main_content')\">Go Back</a></h5>";
?>
