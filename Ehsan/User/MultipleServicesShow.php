<?php
session_start();
include('../Admin/Connection.php');

 include('Pages/header.php') ;
  include('Pages/Navheader.php'); 
  //include('Pages/sidebar.php') ;
  
include('../Admin/Connection.php');
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style type="text/css">
	.container 
	{
		
		margin: 20px;
		height: auto;

		
	}
	.card {
		float: left;
		background-color: #f0a07c;
		margin: 10px;
	}

</style>

<div class="container">
<?php 
if(isset($_GET['id']))
{
	$id = $_GET['id'];
}
echo $sql = "SELECT DISTINCT(tos),name FROM `eventvendorservices` where name='".$id."'";
$run = mysqli_query($link,$sql);
$rowcount = mysqli_num_rows($run);
if($rowcount> 0)
{
	while($row = mysqli_fetch_assoc($run))
	{

		?>
		<div class="col-lg-6" style="position: relative;left: 200px;">
	<div class="card" style="width: 18rem;">
  <div class="card-body">
   
    <p class="card-text"><a href="vendoreventservicespackage.php?id=<?php echo $row[
    	'name'] ?>&tos=<?php echo $row['tos'] ?>"><h1 style="color: white"><?php echo $row['tos'] ?></a></h1></p>
  
  </div>
</div>
</div>
		<?php
	}
}


?>





</div>







</div>
