<?php
session_start();
include 'connect.php';
if(isset($_SESSION['user'])){
		$uname=$_SESSION['user'];
	//echo "You Are Already Logged In";
}
$sql = "select * from problem where username='".$uname."' order by probid desc";
$result = mysqli_query($con,$sql);
?>
<table border='0' align="center">
<tr>
<td>Post Here:</td>
</tr>
<tr>
<td>
<textarea id="textbox" name="myTextBox" cols="75" rows="5"></textarea>
</td>
</tr>
<tr>
<td>
<button id="commentBtn" onclick="post_comment()">Post</button></td>
</tr>

<?php

echo "<tr><td><h3>Your Previous Posts</h3></td></tr>";
while($row = mysqli_fetch_array($result)) {
	$p=$row['probid'];
	$un=$uname;
	$com=$row['statement'];
	echo "<tr><td><br/></td><tr>";
	echo "<tr><td><a href=\"#\" onclick=\"view_solution(".$p.")\">Problem ID:".$p."</a></td></tr>";
	echo "<tr><td>".$com."</td></tr>";
	echo "<tr><td><br/></td><tr>";
}
?>
</table>
<?php
echo "<h5><a href=\"#\" onclick=\"loadXMLDoc('model/login.php','main_content')\">Go Back</a></h5>";
?>
