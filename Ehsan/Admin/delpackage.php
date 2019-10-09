<?php 
include('Connection.php');
$id = $_GET['delid'];
echo $id;


$query = "delete from package where packageid='".$id."'";
$run = mysqli_query($link,$query);
header("Location:show_shadipackage.php");
 ?>