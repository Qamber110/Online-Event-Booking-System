<?php



 include('Pages/header.php') ;
 // include('Pages/Navheader.php'); 
  //include('Pages/sidebar.php') ;
  

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style type="text/css">

	.container 
	{
		
		margin: 150px;
		height: auto;

		
	}
	.card {
		float: left;
		background-color: black;
		margin: 20px;
	}
	img{
    width: 80%;
    height: 110px;
  }
  #wrapper {

  margin-right: auto; /* 1 */
  margin-left:  auto; /* 1 */

  max-width: 800px;
  height: auto; /* 2 */
  border-radius: 10px;
  background-color: #ffff4c;
  border: 6px solid #85335c;
 
  padding-right: 40px; /* 3 */
  padding-left:  40px; /* 3 */
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

</style>
<?php
$x = "";
 if(isset($_GET['getEventOragnizerid']))
{
 $getEventOragnizerid = $_GET['getEventOragnizerid'];
// echo "the hall oragnizerid and customized = ".$getEventOragnizerid." ";
$x = "geteventoragnizeid=$getEventOragnizerid";

//echo $x;
} 
else if(isset($_GET['Eventgetvendorid']))
{
 $getvendorid =  $_GET['Eventgetvendorid'];
$eventprice = $_GET['eventprice'];
$eventpackage = $_GET['eventpackage'];

$x = "Eventgetvendorid=$getvendorid&eventprice=$eventprice&eventpackage=$eventpackage";

 //echo "the vendorand package id vendor hall id = '".$getvendorid."'";/
//echo $x;

}





?>

<div class="content-wrapper" id="wrapper" style="left: 50px">
	
<br>
<br><div <p class="subtitle fancy" style="color: black; text-align: center; font-weight: bold; font-size: 18px;"><span>Select Service</span></p> </div>
 <div class="grid-item" style="margin-top: 10px;margin-left: 0px;margin-right: 0px;">  
      
          
          <div class=""style="text-align: center;position: relative;border-left: : 80px;top:30px;">
   <img src="images/decoration11.png">
    <p class="card-text"><a href="showvendorevent.php?id=Decoration&<?php echo $x ?> "><h1 style="color: white">Decoration</a></h1></p>
  
 
</div>
</div>
<br>
<div class="grid-item" style="margin-top: 10px;margin-left: 0px;margin-right: 0px;">  
      
          
          <div class=""style="text-align: center;position: relative;border-left: : 80px;top:30px;">
    <img src="images/music11.png" >
    <p class="card-text"><a href="showvendorevent.php?id=Music&<?php echo $x?>"><h1 style="color: white">Music</a></h1></p>
  
  </div>

</div>

<br>
<div class="grid-item" style="margin-top: 10px;margin-left: 0px;margin-right: 0px;">  
      
          
          <div class=""style="text-align: center;position: relative;border-left: : 80px;top:30px;">
   <img src="images/lighting.png" >
    <p class="card-text"><a href="showvendorevent.php?id=Lighting&<?php echo $x?>"><h1 style="color: white">Lighting</a></h1></p>
  
  </div>

</div>
<br>
<div class="grid-item" style="margin-top: 10px;margin-left: 0px;margin-right: 0px;">  
      
          
          <div class=""style="text-align: center;position: relative;border-left: : 80px;top:30px;">
    <img src="images/catering.png" >
    <p class="card-text"><a href="showvendorevent.php?id=Catering&<?php echo $x?>"><h1 style="color: black">Catering</a></h1></p>
  
  </div>

</div>
<br>
<div class="grid-item" style="margin-top: 10px;margin-left: 0px;margin-right: 0px;">  
      
          
          <div class=""style="text-align: center;position: relative;border-left: : 80px;top:30px;">
  <img src="images/services.png" >
 <p class="card-text">
  <a href="showvendorevent.php?newid=today"><h1 style="color: black">All Services</a></h1></p>
</div>

</div>
<br>
<br>






</div>

<?php include('Pages/footer.php'); ?>
