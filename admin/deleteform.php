<?php
include('../dbcon.php');
		 
		$id=$_REQUEST['sid'];
		
		$qry="DELETE FROM student WHERE id='$id'";

		$run=mysqli_query($con,$qry);

		if($run == true)
		{
		 
		 ?>

			<script>

				alert('data deleted Successfully.');

				window.open('admindesh.php','_self');

			</script>
			<?php
		}
		

?>
