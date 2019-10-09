<?php 
echo "ok";
session_start();

include('Connection.php');

if(isset($_POST['submit']))
{
  
  $email = $_POST['email'];
  $contact = $_POST['contact'];
 
echo $query = "select * from user where username='$email' and password='$contact' ";
 $result = mysqli_query($link,$query);
 if(mysqli_num_rows($result) > 0)
 {
    while ($row = mysqli_fetch_assoc($result)) {
    
    echo $id = $row['vendor_id'];

echo    $_SESSION['vendor_id'] = $id;
    }
    header("Location:ShowVendor.php");
   // header('Location:login.php');
 }

 else
 {
 	header("Location:usersignin.php");
  echo "Wrong Password";
 }

  
 
// Close connection
mysqli_close($link);
}



?>