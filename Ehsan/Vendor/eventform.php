<?php 

//session_start();
//$id = "";
 //$id =  $_SESSION['vendor_id'];
?>

<form name="eventform" method="post" action="<?php $_SERVER['PHP_SELF'];?>?month=<?php echo $month ?>&day=<?php echo $day?>&year=<?php echo  $year ?>&v=true&add=true">



<TABLE>
	<tr>
		<td width="150px">title</td>
		<td width="250px"><input type="text" name="texttitle"></td>
	</tr>
	
	<tr>
		<td width="150px">Type</td>
		<td width="150px">
			<select name="hall">
			<?php 
											include('../Admin/Connection.php');

				$query = "SELECT * FROM `hall_registration` where vendor_id='".$id."'";
				$run = mysqli_query($link,$query);
				$runcount = mysqli_num_rows($run);
				if($runcount > 0)
				{
					while($row = mysqli_fetch_assoc($run))
					{
						?>
							
								<option name="<?php echo $row['hallid']?>"><?php echo $row['hall_name']; ?></option>
							
						<?php
					}

					echo "</select>";
				}

			?>
		<td><input type="checkbox" name="day" value="0">Day</td>
		<td><input type="checkbox" name="night" value="1">Night</td>
	</tr>

	<tr>
		<td colspan="2"><input type="submit" name="btnadd" value="add event"></td>
		
	</tr>
</TABLE>


</form>
