<?php

session_start();
if (isset($_SESSION['uid'])) 
{
	header('location:admin/admindesh.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>admin login</title>
	<style>
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 10%;
  border-radius: 70%;
}
</style>
</head>
<body bgcolor="	#00FA9A">
	
	<div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>
	<form action="login.php" method="post">
		<table align="center">
			<h1 align="center">Admin Loin</h1>
			<tr>
				<td>Username</td>
				<td><input type="text" name="uname" placeholder="enter the admin name" required></td> 

			</tr>

			<tr>
				<td>Password</td>
				<td><input type="password" name="pass" placeholder="enter the password" required></td>
			</tr>

			<tr>
				<td colspan="2" align="center"><input type="submit" name="login" value="login"></td>
			</tr>

		</table>

	</form>

  

</body>
</html>


<?php
include('dbcon.php');

if(isset($_POST["login"]))
{
	$username = $_POST['uname'];
	$password = $_POST['pass'];

	$qry ="SELECT * FROM admin WHERE username ='$username' AND password='$password'";
	$run = mysqli_query($con,$qry);
	$row = mysqli_num_rows($run);

	if ($row<1) {
		?>
		<script>
		alert('username or password not match');
		window.open('login.php','_self');
		</script>

		<?php
	}
	else
	{
		$data=mysqli_fetch_assoc($run);
		$id=$data['id'];
		echo "id=".$id;
		
		$_SESSION['uid']=$id;
		header('location:admin/admindesh.php');
	}
}
?>
