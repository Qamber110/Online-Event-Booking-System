<?php 
session_start();
?>
<header class="header">
    





<?php  include('Pages/header.php') ?>
<?php  // include('Pages/Navheader.php'); ?>
<?php //  include('Pages/sidebar.php');?>

<?php 

	



include('../Admin/Connection.php');


?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style type="text/css">
.subtitle {
  margin: 0 0 2em 0;
}
.fancy {
  line-height: 0.5;
  text-align: center;
}
.fancy span {
  display: inline-block;
  position: relative;  
}
.fancy span:before,
.fancy span:after {
  content: "";
  position: absolute;
  height: 5px;
  border-bottom: 2px solid #85335c;
  border-top: 2px solid #85335c;
  top: 0;
  width:75px;
}
.fancy span:before {
  right: 100%;
  margin-right: 15px;
}
.fancy span:after {
  left: 100%;
  margin-left: 15px;
}


#wrapper {

  margin-right: auto; /* 1 */
  margin-left:  auto; /* 1 */

  max-width: 800px; /* 2 */

  padding-right: 40px; /* 3 */
  padding-left:  40px; /* 3 */
    box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
  border-radius: 10px;
   background-color: #ffff4c;
  border: 6px solid #85335c;
 }
 body {
   background-color: white;
}
</style>

 <div class="content-wrapper" id="wrapper">
 <br><br>

<div <p class="subtitle fancy" style="color: black; text-align: center; font-weight: bold; font-size: 18px;"><span>Select Your Package</span></p> </div>

<?php

if(isset($_GET['id']) && ($_GET['tos']) && (@$_GET['getvendorid']))
{
	//echo "organizer enter";
	$id = $_GET['id'];
	$tos = $_GET['tos'];
	$x = "id=$id&tos=$tos";
}
if(isset($_GET['id']) && ($_GET['tos']) && (@$_GET['eventgetvendorid']) && ($_GET['eventprice'])  && ($_GET['eventpackage']))
{
	//echo "enter";
	$id = $_GET['id'];
	$tos = $_GET['tos'];
	$eventgetvendorid = $_GET['eventgetvendorid'];
	$eventprice = $_GET['eventprice'];
	$eventpackage = $_GET['eventpackage'];

	$x = "id=$id&tos=$tos&eventgetvendorid=$eventgetvendorid&eventprice=$eventprice&eventpackage=$eventpackage";
	

}  



  $sql = "select * from eventvendorservices where name='".$id."' and tos = '".$tos."'";
$run = mysqli_query($link,$sql);
$rowcount = mysqli_num_rows($run);
if($rowcount > 0)
{
	while ($row = mysqli_fetch_assoc($run)) {
		$package = $row['packages'];
		?>

<div class="grid-item" style="margin-top: 10px;margin-left: -40px;margin-right: -40px;">  
      
          
          <div class=""style="text-align: center;position: relative;border-left: : 80px;top:30px;">
          		
  	<img src="images/dp3.jpg" style="width: 100%; height:140px">
    <p class="card-text"><a href="comfirm_detail.php?organizerpackage=<?php echo $package ?>&price=<?php echo $row['price']?>&<?php echo $x?>"><h3 style="color: white"><?php echo $row[
    	'packages'] ?> <br><br><br><br></a></h3></p> <br>
  
  </div>
</div>


		<?php
	}
}
?>



</div>