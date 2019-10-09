<?php
session_start();
 include('Pages/header.php') ?>
<?php  include('Pages/Navheader.php'); ?>
<?php  include('Pages/sidebar.php') ;


  $date =  $_SESSION['newdate'];
   $area =  $_SESSION['area'] ;
     $selectcountry =  $_SESSION['selectcountry'];
    $id =  $_SESSION['newid'];
    
    $functiontype = $_SESSION['newfunctiontype'] ;
 
    $type = $_SESSION['newtype'];
    
    $noofpersion = $_SESSION['newnoofperson'];

     $price =  $_SESSION['newprice'];

    $total = $price * $noofpersion;

    $newpackage = $_SESSION['newpackage'];
    



 ?>
 <div class="content-wrapper" >

<form method="post" action="">
 			<div class="col-md-12">

 				<div class="form-group">

 					<div class="col-md-6" style=" position: relative; top:17px;">

 				 		<label>First Name:</label>

                		<div class="input-group date">
                 		 
               	 		  <input name="first" type="text" class="form-control pull-right">
               			 </div>

 					</div>
  				</div>


  				<div class="form-group">

 					<div class="col-md-6" style=" position: relative; top:17px;">

 				 		<label>Last Name</label>

                		<div class="input-group date">
                 		 
               	 		  <input name="last" type="text" class="form-control pull-right">
               			 </div>

 					</div>
  				</div>



 			</div>


 			<div class="col-md-12">

 				<div class="form-group">

 					<div class="col-md-6" style=" position: relative; top:17px;">

 				 		<label>Email</label>

                		<div class="input-group date">
                 		
               	 		  <input name="email" type="text" class="form-control pull-right">
               			 </div>

 					</div>
  				</div>


  				<div class="form-group">

 					<div class="col-md-6" style=" position: relative; top:17px;">

 				 		<label>Mobile Number</label>

                		<div class="input-group date">
                 		
               	 		  <input name="mobile" type="text" class="form-control pull-right">
               			 </div>

 					</div>
  				</div>



 			</div>


 			<div class="col-md-12">

 				<div class="form-group">

 					<div class="col-md-6" style=" position: relative; top:17px;">

 				 		<label>Address</label>

                		<div class="input-group date">
                 		 
               	 		  <input name="address" type="text" class="form-control pull-right">
               			 </div>

 					</div>
  				</div>


  		
<br><br><br>
 					

 				 		<div class="form-group">
		<button class="Details" name="Submit" class="btn btn-primary">Submit</button>

 					</div>
   </form>

 			</div>


 			<?php 
 			include('../Admin/Connection.php');

 				if(isset($_POST['Submit']))
 				{
 					$first = $_POST['first'];
 					$last = $_POST['last'];
 					$email = $_POST['email'];
 					$mobile = $_POST['mobile'];
 					$address = $_POST['address'];


 					$query = "INSERT INTO `guest`( `package`, `date`, `function_type`, `no_of_person`, `time`, `vendor_id`, `first_name`, `last_name`, `email`, `mobile`, `address`, `total`, `type`) VALUES ('".$newpackage."','".$date."','".$functiontype."','".$noofpersion."',now(),'".$id."','".$first."','".$last."','".$email."','".$mobile."','".$address."','".$total."','".$type."')"; 
 					$result = mysqli_query($link, $query);

if (!$result) {
    $result = mysqli_error($link);
    
}
else
{
   header("Location:index.php");
}
 				}

 			?>



<?php include('pages/footer.php') ?>

