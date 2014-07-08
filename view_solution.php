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
$sql1 = "SELECT * FROM solution WHERE probid='".$q."'";
$result = mysqli_query($con,$sql);
$result1 = mysqli_query($con,$sql1);
$row = mysqli_fetch_array($result);
$pid=$row['probid'];
$un=$row['username'];
$st=$row['statement'];
$sol_cnt=$result1->num_rows;
$count=0;
echo "<tr><td>Problem ID ".$pid."</td></tr>";
echo "<tr><td>".$st."</td></tr>";
echo "<tr><td><br/></td></tr>";
echo "<tr><td><h3>Solutions</h3></td></tr>";
while($row1 = mysqli_fetch_array($result1)){
	$count++;
	$sid=$row1['solution_id'];
	$sun=$row1['username'];
	$sst=$row1['statement'];
	echo "<tr><td><br/></td></tr>";
	echo "<tr><td>Solution ID: ".$sid.", By:".$sun.", Mark as Correct:<input id=\"chk_bx".$count."\" type=\"checkbox\" onchange=\"mark_correct(".$q.",".$sid.",".$count.",".$sol_cnt.")\"/></td></tr>";
	echo "<tr><td>".$sst."</td></tr>";
	echo "<tr><td><br /></td></tr>";
	//$count++;
}
?>
</table>
<?php
echo "<h5><a href=\"#\" onclick=\"loadXMLDoc('model/post_problem.php','main_content')\">Go Back</a></h5>";
?>
