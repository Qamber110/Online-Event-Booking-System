<?php
 	include('Connection.php');

if(isset($_POST['id']))
{
	$id = $_POST['id'];

 echo $query = "SELECT * FROM `hall_registration` where vendor_id='".$id."'";
$runquery = mysqli_query($link, $query);
$checkqueryrows = mysqli_num_rows($runquery);
if($checkqueryrows > 0)
{
	while($row = mysqli_fetch_assoc($runquery))
	{






 		 ?>

 		<tr>
 			<td align="center" style="position: relative;top:30px;"><a href="hallimages.php?id=<?php echo $row['vendor_id'] ?>&hall=<?php echo $row['hall_name'] ?>"><?php echo $row['hall_name'];  ?></a></td>
 			<td style="text-align: center;position: relative;top: 30px;"><button  id="edit" type="edit" data-vendorid="<?php echo $row['hallid']?>"  class="btn btn-default btn-success" data-toggle="modal" data-target="#modal-default">
               Edit
              <button id="delete" class="btn btn-danger" data-vendorid="<?php echo $row['hallid']; ?>"> Delete </button></td>
 			

 		</tr>
<?php 
		
	}
}
}

?>