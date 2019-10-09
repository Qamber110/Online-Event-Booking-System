<?php

include('Connection.php');
if(isset($_POST['id']))
{
	$id = $_POST['id'];
	$query = "delete from hall_registration where hallid='".$id."'";
	$run = mysqli_query($link,$query);
}
 ?>
