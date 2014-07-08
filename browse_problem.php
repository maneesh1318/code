<table align="center" border="2">
<tr>
<td width="20%">
Problem ID:
</td>
<td width="40%">
Problem 
</td>
<td width="15%">
Submitted By:
</td>
<td width="15%">
Number of Solution:
</td>
<td width="10%">Solve</td>
</tr>
<?php
session_start();
include 'connect.php';

if(isset($_SESSION['user'])){
		$uname=$_SESSION['user'];
	//echo "You Are Already Logged In";
}
else{
	$uname="Guest";
}
$sql = "select * from problem where username!='".$uname."' order by probid";
$result = mysqli_query($con,$sql);
$bt="<button >Solve</button>";
while($row = mysqli_fetch_array($result)) {
$pid=$row['probid'];
$un=$row['username'];
$st=$row['statement'];
$sql1 = "SELECT * FROM solution WHERE probid='".$pid."'";
$sql2 = "SELECT * FROM problem_solution WHERE probid='".$pid."'";
$result1 = mysqli_query($con,$sql1);
$result2 = mysqli_query($con,$sql2);
if($result2->num_rows==0){
	$str="";
}
else{
	$str="disabled";
}
//$row1 = mysqli_fetch_array($result1);
$bt="<button onclick=\"solve(".$pid.")\"".$str." >Solve</button>";
$x=$result1->num_rows;
echo "<tr><td>".$pid."</td><td>".$st."</td><td>".$un."</td><td>".$x."</td><td>".$bt."</td></tr>";

}
//echo "<tr><td><a>Go Back</a></td></tr>";
?>
</table>
<?php
echo "<h5><a href=\"#\" onclick=\"loadXMLDoc('model/login.php','main_content')\">Go Back</a></h5>";
?>
