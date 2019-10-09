<?php 

include('Connection.php');

if(isset($_POST['submit']))
{
  

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$mobileno = $_POST['mobileno'];
$land_line = $_POST['land_line'];
$vendor_name = $_POST['vendor_name'];
$area = $_POST['area'];
$city = $_POST['city'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$password = $_POST['password'];

    $image_name = $_FILES['image']['name'];
       $image_temp = $_FILES['image']['tmp_name'];
      $image_type = $_FILES['image']['type'];

      $imagewithname = "vendor_image/" . $_FILES['image']['name'];

$upload = move_uploaded_file($_FILES["image"]["tmp_name"],'vendor_image/' . $_FILES['image']['name']);
         if($upload) 
         {
  echo $sql = "INSERT INTO `vendor_signup`(`first_name`, `last_name`, `mobile_no`, `land_line`, `vendor_name`, `area`, `city`, `images`, `username`, `password`, `email`, `address`) values ('".$first_name."','".$last_name."','".$mobileno."','".$land_line."','".$vendor_name."','".$area."','".$city."','".$imagewithname."','".$username."','".$password."','".$email."','".$password."')";
  //echo($sql);
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
    header("Location:ShowVendor.php");
  //  header("location)
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
 
// Close connection
mysqli_close($link);
}



?>