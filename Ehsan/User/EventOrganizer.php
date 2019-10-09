<?php

 include('Pages/header.php') ;
  //include('Pages/Navheader.php'); 
  include('Pages/sidebar.php') ;

if(isset($_GET['getvendorid']))
{
	$getvendorid = $_GET['getvendorid'];

}
if(isset($_GET['price']))
{
	$price = $_GET['price'];

}
if(isset($_GET['package']))
{
 $package = $_GET['package'];

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
 } body {
   background-color: white;
}
</style>
 <div class="content-wrapper" id="wrapper" style="left: 0px">
<br><br><br>
<center>
	<br><br><br>
	<div class="col-md-offset-4 col-md-4">
<div  role="alert">
  
  <a href="EventServices.php?Eventgetvendorid=<?php echo $getvendorid; ?>&eventprice=<?php echo $price ?>&eventpackage=<?php echo $package ?>">
     
           
    <img src="images/decoration.png" style="margin-left: 0px"><br>
 Do you Need an Event Organizer</a>
</div>
</div>

<br><br><br><br><br>
<div class="col-md-offset-3 col-md-3">

  <a href="comfirm_detail.php?onlyinvoice=<?php echo $getvendorid; ?>" class="btn btn-danger">Skip</a><br><br><br><br><br><br><br><br><br><br><br><br>
</div>

</center>

</div>