<?php 

include('Connection.php');

if(isset($_POST['id']))
{
	$id = $_POST['id'];
	$query = "delete from vendor_signup where vendor_id='".$id."'";
	$run = mysqli_query($link,$query);
}



?>