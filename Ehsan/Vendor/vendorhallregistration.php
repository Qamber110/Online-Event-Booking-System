<?php 





session_start();

include('../Admin/Connection.php');

if(isset($_POST['submit']))
{

	$noofhall = $_POST['noofhall'];


	$hall1capacity = $_POST['Hall1Capacity'];
	


	$id = $_SESSION['vendor_id'];
	 $image_name = $_FILES['image']['name'];
       $image_temp = $_FILES['image']['tmp_name'];
      $image_type = $_FILES['image']['type'];

      $imagewithname = "hallpackageimages/" . $_FILES['image']['name'];

$upload = move_uploaded_file($_FILES["image"]["tmp_name"],$imagewithname);

echo $query = "INSERT INTO `hall_registration`(`hall_name`, `capacity`  , `vendor_id`,`image`) VALUES ('".$noofhall."','".$hall1capacity."','".$id."','".$imagewithname."')";

$runquery = mysqli_query($link,$query);
if($runquery)
{
	header("Location:hall_registration.php");

}

else  {
	echo "error";
}




}