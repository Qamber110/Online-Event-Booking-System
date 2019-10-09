
<?php   include('Pages/header.php') ?>
<?php  include('Pages/Navheader.php'); ?>
<?php  include('Pages/sidebar.php') ?>


 <div class="content-wrapper">

 	<br>
<form method="post" action="" enctype="multipart/form-data">

 			<div class="col-lg-12">
 				
 		<div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>


                  <select name="vendorid">
                  	<option>Selected</option>
 	<?php 
 		include('Connection.php');

$query = "SELECT * FROM `vendor_signup`";
$runquery = mysqli_query($link, $query);
$checkqueryrows = mysqli_num_rows($runquery);
if($checkqueryrows > 0)
{
	while($row = mysqli_fetch_assoc($runquery))
	{



			
?>

		
			
			<option value="<?php echo $row['vendor_id'];?>"><?php echo $row['vendor_name'] ?></option>
		
<?php
}
}

 	?>
</select>

              </div>
              <label>Select Package</label>
              <select name="package">
              		<option value="package 1">Package 1</option>
              		<option value="package 2">Package 2</option>
              		<option value="package 3">Package 3</option>
              </select>


               <div class="form-group">
                  <label for="exampleInputFile">Upload Image</label>
                  <input type="file" name="image">

                 
                </div>



                <div class="form-group">
                  <label for="exampleInputFile">Price</label>
                  <input type="text" name="price">

                 
                </div>


                <div class="form-group">
                  
                  <input type="submit" name="submit" class="btn btn-success">

                 
                </div>

            </form>

          </div>



</div>
          </div>

<?php 
if(isset($_POST['submit']))
{
	$name = "";
	$package = "";
	$image_name = "";
$name = $_POST['vendorid'];
$package = $_POST['package'];
$price = $_POST['price'];

 	$image_name = $_FILES['image']['name'];
 	$foldername = "";
       $image_temp =  $_FILES['image']['tmp_name'];
      $image_type = $_FILES['image']['type'];
$upload = move_uploaded_file($_FILES["image"]["tmp_name"],'PackageImages/' . $_FILES['image']['name']);

$imgname = "PackageImages/" . $image_name;

$query1 = "insert into package(vendor_id,image,price,package) values('".$name."','".$imgname."','".$price."','".$package."')";
$run = mysqli_query($link,$query1);

  header("Location:show_shadipackage.php");

} 


?>






 <?php // include('Pages/footer.php'); ?>