<?php

include('../Admin/Connection.php');


$id = $_POST["id"];

echo $sql="SELECT * FROM `vendor_signup` vs INNER join vendor_event ve on ve.vendor_id = vs.vendor_id where vs.vendor_id='".$id."'";

$result=mysqli_query($link,$sql);
  
  $resultcheck = mysqli_num_rows($result);
  // Fetch one and one row
  if($resultcheck > 0)
  {
  while ($row=mysqli_fetch_assoc($result))
    {

    echo	$row['eventdate'];
    }
}

    	?>