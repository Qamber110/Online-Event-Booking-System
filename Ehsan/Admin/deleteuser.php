<?php 

include('Connection.php');

if(isset($_POST['id']))
{
	$id = $_POST['id'];
	$query = "delete from user where userid='".$id."'";
	$run = mysqli_query($link,$query);
}



?>