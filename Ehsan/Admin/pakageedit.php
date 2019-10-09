
<?php   include('Pages/header.php'); ?>
<?php  include('Pages/Navheader.php'); ?>
<?php  include('Pages/sidebar.php'); ?>

 <div class="content-wrapper" >
 	
 		
 		<?php
 	include('Connection.php');

 	if(isset($_GET['id']))
 	{



 	$id = $_GET['id'];

 }

 $query = "SELECT p.image,p.price,vs.name,p.package,vs.hall_name,p.packageid FROM `package` p inner join vendor_signup vs on vs.vendor_id = p.vendor_id where p.packageid='".$id."'";
$runquery = mysqli_query($link, $query);
$checkqueryrows = mysqli_num_rows($runquery);
if($checkqueryrows > 0)
{
	while($row = mysqli_fetch_assoc($runquery))
	{






 		 ?>
 		 <form method="post">
 		<div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
 			<input type="text"  name="name" value="<?php echo $row['name'];  ?>">
 			</div>
 		
 				<div class="form-group">
                  <label for="exampleInputEmail1">Package</label>
<input type="text" name="package" value="<?php echo $row['package']; ?>"></div>
 				<div class="form-group">
                  <label for="exampleInputEmail1">price</label>
	<input type="text" name="price" value="<?php echo $row['price']; ?>"><div class="form-group">
                  <label for="exampleInputEmail1"></label>
                  	<div class="form-group">
                  

                  <input type="submit" class="btn btn-success" name="pakeageupdate">


                  </div>

              </div>
<?php 
		
	}
}

?>
 
 	
<?php
	if(isset($_POST['pakeageupdate']))
	{
		echo "ok";
			$price = $_POST['price'];
			$package = $_POST['package'];

		echo	$query = "update package set price ='".$price."',package='".$package."' where packageid='".$id."'";
			$run = mysqli_query($link,$query);

	}
	
 ?>


</div>



<?php //include('../pages/footer.php'); ?>