
<?php   include('Pages/header.php');
include('../Admin/Connection.php'); ?>




<style type="text/css">
  #wrapper {

  margin-right: auto; /* 1 */
  margin-left:  auto; /* 1 */

  max-width: 800px; /* 2 */

  padding-right: 40px; /* 3 */
  padding-left:  40px; /* 3 */
   box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
  border-radius: 10px;
  
  border: 6px solid #85335c;
 }
body {
   background-color: white;
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


</style> <div class="content-wrapper" id="wrapper" style="left: 0px">
 
<br><br><div <p class="subtitle fancy" style="color: black; text-align: center; font-weight: bold; font-size: 18px;"><span>Vendor Details</span></p> </div><br><br>

<?php 
if(isset($_GET['vendorid']))
{
	$id = $_GET['vendorid'];
}
$sql = "select * from vendor_signup where vendor_id='".$id."' limit 1";
$run = mysqli_query($link,$sql);
	if(mysqli_num_rows($run)> 0)
	{
		while($row = mysqli_fetch_assoc($run))
		{
			echo '<h2>Event Venue is available on desire date<br>
 		For Future Booking Details<br>
 		Please Contact At: '.$row['mobile_no'].'<br>
 		Email Address :'.$row['email'].'<br>
 		Address: '.$row['address'].' </h2>';
		}
	}

?>
 		


 </div>
