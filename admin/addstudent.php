<?php
session_start();
	if (isset($_SESSION['uid']))
	 {

		echo "";
	}
		else
		{
			header('location: ../login.php');
		}
	
?>
<?php
	include('header.php');
	include('titlehead.php');
?>

<form method="post" action="addstudent.php" enctype="multipart/form-data">
	<table align="center" border="1" style="width: 70%; margin-top:40px;">
		<tr>
			<th>Roll no.</th>
			<td><input type="text" name="rollno" placeholder="enter rollno" required></td>
		</tr>

		<tr>
			<th>Full Name</th>
			<td><input type="text" name="name" placeholder="enter name" required></td>
		</tr>

		<tr>
			<th>City</th>
			<td><input type="text" name="city" placeholder="enter City" required></td>
		</tr>

		<tr>
			<th>parents contact no.</th>
			<td><input type="text" name="pcon" placeholder="enter the contact no of parents" required></td>
		</tr>

		<tr>
			<th>standerd</th>
			<td><input type="number" name="sid" placeholder="enter standerd" required></td>
		</tr>

		<tr>
			<th>Image</th>
			<td><input type="file" name="simg" required></td>
		</tr>

		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
		</tr>
		
	</table>
	
</form>
</body>
</html>

<?php
	if(isset($_POST['submit'])) 
	{

		include('../dbcon.php');

		$rollno=$_POST['rollno'];
		$name=$_POST['name'];
		$city=$_POST['city'];
		$pcon=$_POST['pcon'];
		$std=$_POST['sid'];
		$imagename=$_FILES['simg']['name'];
		$tempname=$_FILES['simg']['tmp_name'];

		move_uploaded_file($tempname,"../dataimg/$imagename");

		$qry="INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `standerd`, `image`) VALUES ('$rollno','$name','$city','$pcon','$std','$imagename')";
		

		$run=mysqli_query($con,$qry);

		if($run == true)
		{
		 
		 ?>

			<script>

				alert('Data Inserted Successfully.');

			</script>
			<?php
		}
		
	}