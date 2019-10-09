<?php
include('Pages/header.php') ;
//  include('Pages/Navheader.php'); 
  //include('Pages/sidebar.php') ;

if(isset($_GET['vendor_id']))
{
	$getEventOragnizerid = $_GET['vendor_id'];
//	$_SESSION['newid'] = $getvendorid;
}

?>

<style type="text/css">
 img
{
  width: 100% !important;
  height: 140px !important;

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
 <div class="content-wrapper" id="wrapper" style="left: 0px">
<br><br><br>
<center>
  <br><br><br>
	<div class="col-md-offset-4 col-md-4">
<div  role="alert">
  <a href="EventServices.php?getEventOragnizerid=<?php echo $getEventOragnizerid; ?>"> <img src="images/decoration.png" style="margin-left: 0px"><br>
 Do you Need an Event Organizer</a>
</div>
</div>

<div class="col-md-6 col-md-offset-3">
<br><br><br><br><br>  <a href="Vendor_Details.php?vendorid=<?php echo $getEventOragnizerid; ?>"  class="btn btn-danger">Skip</a><br><br><br><br><br><br><br><br><br><br>
</div>



</center>
</div>