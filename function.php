<?php

	   function showdetails($standerd,$rollno)
	{
		include('dbcon.php');

		$sql="SELECT * FROM 'student' WHERE rollno ='$rollno' AND standerd ='$standerd'";
		$run=mysqli_query($con,$sql);

		if (mysqli_num_rows($run)>0) 
		{
			$data =mysqli_fetch_assoc($run);

			?>

			<form>

			<table>
				
				<tr>
					<th colspan="3">student Details</th>

				</tr>

				<tr>
					<td rowspan="5"> <img src="dataimg/<?php $data['image'];?>/" style="max-height: 150px; max-width: 150px;"></td>

					<th>rollno</th>
					<td><?php echo $data['rollno'];?></td>

				</tr>

				<tr>
					<th>Name</th>
					<td><?php echo $data['name'];?></td>
				</tr>

				<tr>
					<th>standerd</th>
					<td><?php echo $data['standerd']; ?></td>

				</tr>

				<tr>
					<th>parents no.</th>
					<td><?php echo $data['pcont']; ?></td>


				</tr>

				<tr>
					<th>city</th>
					<td><?php echo $data['city']; ?></td>


				</tr>
			</table>
			</form>

			<?php
		
	}

		else
		{?>
			 echo "<script> alert('no student found.'); </script>"
		}
	}

?>
	}

		