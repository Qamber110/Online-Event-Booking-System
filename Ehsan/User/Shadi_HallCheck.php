<?php 

session_start();

$id = "";

$id = $_SESSION['id'];


include('../Admin/Connection.php');
// $today = "";
// $date = "";

  $today = $_POST['today'];
  $date = $_POST['date'];

 $query = "SELECT * FROM `vendor_event` where eventdate='".$date."' and vendor_id='".$id."' and type='".$today."'";
$result = mysqli_query($con,$query);


$result_check = mysqli_num_rows($result);
if($today != '' && $date != '')
{
	if($result_check > 0)
{
	while ($row = mysqli_fetch_assoc($result)) {
		echo("booked");
	}
}
else
{
	echo "Available";
	//header("Location:Invoice.php");
}

}
else
{
	echo "plese select date";
}






// if(isset($_POST['Submit']))
// {



// $package = "";
// $date = "";
// $type = "";
// $person = "";
// $selectcountry = "";

// $location = "";
// $location = $_POST['location'];
// $selectcountry = $_POST['selectcountry'];
// $person = $_POST['person'];
// $type = $_POST['type'];
// $date = $_POST['date'];
// $package = $_POST['package'];

// $sql = "select * from";
// }




?>