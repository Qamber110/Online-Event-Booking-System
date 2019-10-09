<?php

include('Connection.php');

	if($_FILES['file']["name"] !="")
{
	$packageid = $_POST['packageid'];
	echo $packageid;
		$test = explode(".",$_FILES["file"]["name"]);
		$extension = end($test);
		$name = rand(100,999) . '.' . $extension;
		 $imagewithname = "PackageImages/" . $name;
		 move_uploaded_file($_FILES["file"]["tmp_name"], $imagewithname);
		 $query = "update package set image='".$imagewithname."' where packageid='".$packageid."'";
		 $run = mysqli_query($link,$query);
		// exit();
	}


if(isset($_POST['packageid']))
{
	$packageid = "";
	$vendorid ="";
	$package="";
	$price = "";

	$packageid = $_POST['packageid'];
	$vendorid = $_POST['vendorid'];
	$package = $_POST['package'];
	$price = $_POST['price'];


	 // $image_name = $_FILES['filename']['name'];
  //      $image_temp = $_FILES['filename']['tmp_name'];
  //     $image_type = $_FILES['filename']['type'];

     


      $query = "update package set  price='".$price."',package='".$package."' where packageid='".$packageid."' and vendor_id='".$vendorid."'";
      $run = mysqli_query($link,$query);
}
 ?>
