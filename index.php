<!DOCTYPE html>
<html>
<head>
	<title>student management system</title>
</head>
<body bgcolor="99FF00">

<h3 align="right" style="margin-right: 20px; color: red;"><a href="login.php">admin login</a></h3>
<h1 align="center" style="font-size: 50px; color: blue;">Welcome To Student Management System</h1>

<form method="POST" action="index.php"></form>
		

<table style align="center" border="1">
	<tr>
		<td colspan="2" align="center">Student Information</td>
	</tr>
	<tr>
		<td align="life">choose standerd</td>
		<td>
			<select name="standerd" required>
				<option value="1">1st</option>
				<option value="2">2st</option>
				<option value="3">3st</option>
				<option value="4">4st</option>
				<option value="5">5st</option>
				<option value="6">6st</option>
			</select>
		</td>
	</tr>

	<tr>
		<td align="life">enter roll no</td>
		<td><input type="text" name="rollno" required></td>
	</tr>
	<tr>
		<td colspan="2" align="center"> <input type="submit" name="submit" value="show info"></td>
	</tr>


</table>

</body>
</html>

<?php
 if (isset($_POST['submit'])) 
 {
 	$standerd = $_POST['standerd'];
 	$rollno = $_POST['rollno'];

 	include('dbcon.php');
 	include('function.php');

 	 showdetails($standerd,$rollno);		
}
?>