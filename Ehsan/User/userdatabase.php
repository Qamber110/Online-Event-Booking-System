<?php 

include('../Admin/Connection.php');

if(isset($_POST['submit']))
{
  

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$mobileno = $_POST['mobileno'];

$username = $_POST['username'];
$password = $_POST['password'];

    // $image_name = $_FILES['image']['name'];
    //    $image_temp = $_FILES['image']['tmp_name'];
    //   $image_type = $_FILES['image']['type'];

    //   $imagewithname = "user_image/" . $_FILES['image']['name'];

// $upload = move_uploaded_file($_FILES["image"]["tmp_name"],'user_image/' . $_FILES['image']['name']);
//          if($upload) 
//          {
  $sql = "INSERT INTO `user`(`first_name`, `last_name`, `email_address`, `phone_no`, `username`, `password`) values ('".$first_name."','".$last_name."','".$email."','".$mobileno."','".$username."','".$password."')";
  //echo($sql);
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";

    header("Location:index.php");
  //  header("location)
}else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 
// Close connection
mysqli_close($link);
}



?>