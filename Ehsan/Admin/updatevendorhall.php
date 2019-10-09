
<?php 

include('Connection.php');

	if($_FILES['file']["name"] !="")
{
	$packageid = $_POST['hallid'];
	echo $packageid;
		$test = explode(".",$_FILES["file"]["name"]);
		$extension = end($test);
		///$name = rand(100,999) . '.' . $extension;
		$name = $_FILES["file"]["name"];
		 $imagewithname = "../Vendor/hallpackageimages/" . $name;
		 move_uploaded_file($_FILES["file"]["tmp_name"], $imagewithname);
		 $query = "update hall_registration set image='".$imagewithname."' where hallid='".$packageid."'";
		 $run = mysqli_query($link,$query);
		// exit();
	}


	if(isset($_POST['id']))
	{
		$hallname = $_POST['hallname'];
		$capacity = $_POST['capacity'];
		$id = $_POST['id'];
		echo $update = "update hall_registration set hall_name='".$hallname."',capacity='".$capacity."' where hallid='".$id."'";
		$runupdate = mysqli_query($link,$update);
	}


?>