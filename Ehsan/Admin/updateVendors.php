<?php
include('Connection.php');


if(isset($_POST['id']))
{
	$id = $_POST['id'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$vendor_name = $_POST['vendor_name'];
	$mobile_no = $_POST['mobile_no'];
	$land_line = $_POST['land_line'];

	echo $query = "update vendor_signup set first_name='".$first_name."',last_name='".$last_name."',mobile_no='".$mobile_no."',land_line='".$land_line."',vendor_name='".$vendor_name."' where vendor_id='".$id."'";
	$run = mysqli_query($link,$query);
	if($run)
	{
		echo "Update successfully";
	}

}

 ?>