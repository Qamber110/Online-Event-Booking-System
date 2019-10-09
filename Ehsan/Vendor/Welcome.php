<?php
session_start();
$id = "";
 $id =  $_SESSION['vendor_id'];
?>
<?php   include('Pages/header.php') ?>
<?php  include('Pages/Navheader.php'); ?>
<?php  include('Pages/sidebar.php') ?>

<?php 
	if(isset($_GET['day']))
	{
		$day = $_GET['day'];
	}
	else
	{
		$day = date("j");
	}
//	$day = date('j');
	if(isset($_GET['month']))
	{
$month = $_GET['month'];
	}
	else{
	$month = date('n');
}
if(isset($_GET['year']))
{
$year = $_GET["year"];
}
else
{
	$year = date('Y');
}



	//echo $day;

	$currentTimeStamp = strtotime("$year-$month-$day");
		//current month name
	$monthName = date("F",$currentTimeStamp);
		//get how many days are current month
	$numDays = date("t",$currentTimeStamp);

	$counter = 0;
	echo $currentTimeStamp; 
?>

<style type="text/css">
	.today 
	{
		background-color:  blue;

	}
	.event
	{
		
		background-image: url('cancel.png');
		background-repeat: no-repeat;
	}
</style>>
 <div class="content-wrapper">
 			<table class="table table-bordered" style="position: relative;top: 50px;">
 				<tr>
 					<th><input type='button' value = '<' name="previousbutton" onClick="goLastmonth(<?php echo $month .",".$year?>)"></th>
 					<th colspan="5"><?php echo $monthName. " , " . $year  ?><img src="../img.png" width="40" height="40"> <span style="color: gray">Book Your Event</span></th>
 					<th> <input type='button' value = '>' name="nextbutton" onClick="goNextMonth(<?php echo $month .",". $year?>)"></th>

 				</tr>
 				<tr>
 					<th style="text-align: center;">S</th>
 					<th style="text-align: center;">M</th>
 					<th style="text-align: center;">T</th>
 					<th style="text-align: center;">W</th>
 					<th style="text-align: center;">T</th>
 					<th style="text-align: center;">F</th>
 					<th style="text-align: center;">S</th>
 					
 				</tr>
 				<?php 
 					echo "<tr>";
 					for($i =1 ;$i<$numDays+1;$i++,$counter++)
 					{
 						$timeStamp = strtotime("$year-$month-$i");
 						//echo $timeStamp;
 						if($i==1)
 						{
 							$firstDay = date("w",$timeStamp);
 							//echo $firstDay;
 							for($j=0;$j<$firstDay;$j++,$counter++)
 							{
 									//blank space
 								echo "<td>&nbsp;</td>";
 							}

 						}
 						if($counter % 7 == 0)
 						{
 							echo "<tr></tr>";
 						}
 						$monthstring = $month;
 						//echo $monthstring;
 						$monthlength = strlen($monthstring);
 						$daystring = $i;
 						$daylenth = strlen($daystring);
 						if($monthlength <=1)
 						{
 							$monthstring = "0" . $monthstring;
 						}
 						if($daylenth <=1)
 						{
 							$daystring = "0" . $daystring;
 						}
 						$todayDate = date("m/d/Y");
 						$datetoCompare = $year . '/' . $monthstring . '/' . $daystring;
 						echo "<td align='center'";
 							if($todayDate == $datetoCompare)
 							{
 								echo "class='today'";
 							}
 							else
 							{
 								include('../Admin/Connection.php');
 								$query = "SELECT * FROM vendor_event where eventdate='".$datetoCompare."'";
 								$result = mysqli_query($link, $query);
 								$rowcount=mysqli_num_rows($result);
 								if($rowcount >=1)
 								{

 								echo "class='event'";
 								
 								}

 							}
 						echo "><a href='".$_SERVER['PHP_SELF']."?month=".$monthstring."&day=".$daystring."&year=".$year."&v=true' data-target='#myModel'  data-toggle='modal' >".$i."</a></td>";
 					}
 					echo "</tr>";
 				?>
 			</table>



 			
 			<?php
 				if(isset($_GET['v']))
 				{
 					echo "<br><br><br><br><a href='".$_SERVER['PHP_SELF']."?month=".$month."&day=".$day."&year=".$year."&v=true'></a>";
 					
 						include("eventform.php");
 					
 				}
 			 ?>


 			 <?php 

include('../Admin/Connection.php');

 			 		if(isset($_GET['add']))
 			 		{
 			 			$title = $_POST['texttitle'];
 			 			//$detail = $_POST['textdetail'];
 			 			$hall = $_POST['hall'];
 			 			$day1 = $_POST['day'];
 			 			@$night1 = $_POST['night'];
 			 			//$type = implode("," , $types);
 			 			

 			 				if($day1 == "")
 			 				{
 			 					$day1 = 2;
 			 				}
 			 				if($night1 == "")
 			 				{
 			 					$night1 = 2;
 			 				}
 			 			$eventdate = $year."-".$month."-".$day;

 			 			$checkdatabasequery = "select * from vendor_event where eventdate='".$eventdate."' and vendor_id='".$id."' and hall='".$hall."' ";
 			 			$run = mysqli_query($link,$checkdatabasequery);
 			 			$runcheck = mysqli_num_rows($run);
 			 			if($runcheck > 0)
 			 			{
 			 				$sqlupdate = "update vendor_event set title='".$title."',eventdate='".$eventdate."',dateadded=now(),day1='".$day1."',night1='".$night1."',hall='".$hall."' where vendor_id='".$id."' and hall='".$hall."'";
 			 				$runupdate = mysqli_query($link,$sqlupdate);
 			 			}
 			 			else
 			 			{

 			 				$sqlInsert = "INSERT INTO vendor_event (title,eventdate,dateadded,vendor_id,day1,night1,hall) VALUES ('".$title."','".$eventdate ."',now(),'".$id."','".$day1."','".$night1."','".$hall."')";

$result = mysqli_query($link, $sqlInsert);
if($result)
{
	//echo "add";
	//header("Location:Welcome.php");
}
else
{
	echo $sqlInsert;
}

if (! $result) {
    $result = mysqli_error($link);
}

 			 			}



 
 			 		}

 			 ?>

       <!-- Modal -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Modal header</h3>
  </div>
  <div class="modal-body">
    <p>One fine body…</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
</div>
        <!-- /.modal -->
</div>

<script type="text/javascript">
		function goLastmonth(month,year)
		{
				if(month  == 1)
				{
					--year;
					month = 13;
				}
				--month;
				var monthstring = ""+ month+"";
				var monthlength = monthstring.length;
				if(monthlength <=1)
				{
					monthstring = "0"+monthstring;
				}
				document.location.href= "<?php $_SERVER["PHP_SELF"];?>?month="+monthstring+"&year="+year ;
		}

		function goNextMonth(month,year)
		{
		if(month  == 12)
				{
					++year;
					month = 0;
				}
			++month;
				var monthstring = ""+ month+"";
				var monthlength = monthstring.length;
				if(monthlength <=1)
				{
					monthstring = "0"+monthstring;
				}
				document.location.href= "<?php $_SERVER["PHP_SELF"];?>?month="+monthstring+"&year="+year ;
		}

</script>

<?php // include('../pages/footer.php'); ?>

