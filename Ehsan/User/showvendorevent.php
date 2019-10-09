<?php 
session_start();
?>
<header class="header">
    


<?php  include('Pages/header.php') ?>
<?php // include('Pages/Navheader.php'); ?>
<?php //  include('Pages/sidebar.php');?>

<?php

include('../Admin/Connection.php');

?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style type="text/css">
img
{
  width: 100% !important;
  height: 140px !important;

}
	.container 
	{
		
		margin: 20px;
		height: auto;
width: 100%;
		
	}
	.card {
		float: left;
		
		margin: 10px;
	}

	body {
  background-color: white
}


  #wrapper {

  margin-right: auto; /* 1 */
  margin-left:  auto; /* 1 */

  max-width: 800px; /* 2 */
  padding-right: 0px; /* 3 */
  box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
  border-radius: 10px;
 background-color: #ffff4c;
  border: 6px solid #85335c;
 }
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
  width:50px;
}
.fancy span:before {
  right: 100%;
  margin-right: 15px;
}
.fancy span:after {
  left: 100%;
  margin-left: 15px;
}


</style>


<div class="content-wrapper" id="wrapper" style="left: 0px">
	
<br><br><div <p class="subtitle fancy" style="color: black; text-align: center; font-weight: bold; font-size: 18px;"><span>Event Services</span></p> </div>
<?php
if(isset($_GET['geteventoragnizeid']))
{
$getvendorid = 	$_GET['geteventoragnizeid'];
$decoration = $_GET['id'];
$x = "getvendorid=$getvendorid";
//echo $x;
}
if(isset($_GET['Eventgetvendorid']) && ($_GET['eventprice']) && ($_GET['eventpackage']))
{
	$getvendorid = $_GET['Eventgetvendorid'];
	$price = $_GET['eventprice'];
	$eventpackage = $_GET['eventpackage'];
	$decoration = $_GET['id'];
$x = "eventgetvendorid=$getvendorid&eventprice=$price&eventpackage=$eventpackage";
//echo $x;

}
  $sql = "SELECT distinct(v.name),tos,e.image FROM `eventvendor` e INNER JOIN eventvendorservices v on e.name = v.name where tos='".$decoration."'";

$run = mysqli_query($link,$sql);
$rowcount = mysqli_num_rows($run);
	if($rowcount > 0 )
	{
		while($row = mysqli_fetch_assoc($run))
		{
			?>
			<div class="col-lg-6">

<div class="grid-item" style="margin-top: 10px;margin-left: 0px;margin-right: 0px;">  
      
          
          <div class=""style="text-align: center;position: relative;border-left: : 80px;top:30px;">
            <img src="../Admin/<?php echo $row['image'] ?>" style="width:80%">  
    <p class="card-text"><a href="vendoreventservicespackage.php?id=<?php echo $row[
    	'name'] ?>&tos=<?php echo $row['tos'] ?>&<?php echo $x ?>"><h3 style="color: white"><?php echo $row[
    	'name'] ?>  </a></h3></p>
    	<br><br><br><br>
  </div>
</div>
</div>
<?php
		}
	}

	else
	{
	
 $sql = "SELECT count(*) as counting,v.name,e.image FROM `eventvendor` e
INNER JOIN eventvendorservices v
on e.name = v.name
GROUP BY v.name";
$run = mysqli_query($link,$sql);
$rowcount = mysqli_num_rows($run);
	if($rowcount > 0 )
	{
		while($row = mysqli_fetch_assoc($run))
		{
			if($row['counting'] >1)
			{


			?>
			<div class="col-lg-6"style="position: relative;left: 20px;">
<div class="card" style="width: auto;">
  <div class="card-body">
    <p class="card-text"><a href="MultipleServicesShow.php?id=<?php echo $row[
'name']; ?>"><h1 style="color: white"><?php echo $row[
    	'name'] ?> </a></h1></p>
  <img src="../Admin/<?php echo $row['image'] ?>" alt="Avatar"  style="width:200px">
  <br>
  </div>
</div>
</div>
<?php
}
		}
	}	
	}
 ?>

</a>


</p>


</div>