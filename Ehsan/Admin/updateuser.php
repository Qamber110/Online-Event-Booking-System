<?php
include('Connection.php');


if(isset($_POST['id']))
{
	$id = $_POST['id'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	
	$mobile_no = $_POST['mobile_no'];
	$land_line = $_POST['land_line'];
	


	

 
 
 	echo $query = "update user set first_name='".$first_name."',last_name='".$last_name."',phone_no='".$mobile_no."',email_address='".$land_line."' where userid='".$id."'";
	$run = mysqli_query($link,$query);
	if($run)
	{
		echo "Update successfully";
	
 }

	

}

 ?>