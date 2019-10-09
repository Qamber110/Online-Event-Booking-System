<?php 
include('../../Admin/Connection.php');




if(isset($_POST['id']))
{
	$id = $_POST['id'];
	$query  = "SELECT DISTINCT area FROM `vendor_signup` WHERE city='".$id."'";
	$run = mysqli_query($link,$query);
	$row = mysqli_num_rows($run);
	if($row > 0)
	{
		while($row = mysqli_fetch_assoc($run))
		{

			?>

			<option value="<?php echo $row['area'] ?>"><?php echo $row['area'] ?></option>
			<?php


		}
	}
}

?>