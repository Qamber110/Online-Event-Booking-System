<?php 

include('../Admin/Connection.php');


	
	 $output = "";
	$sql = "SELECT * FROM `user`";
	$run = mysqli_query($link,$sql);
	$rowcount = mysqli_num_rows($run);
	if($rowcount > 0)
	{
		while($row = mysqli_fetch_assoc($run))
		{
?>
 					<tr>
 			<td align="center" style="position: relative;top:30px;" id="first_name"><?php echo $row['first_name'] ?> <?php  echo $row['last_name'];?></td>
 			
 		
 			<td style="text-align: center;position: relative;top: 30px;"><button id="edit" type="edit" data-vendorid="<?php echo $row['userid']?>" class="btn btn-default btn-success" data-toggle="modal" data-target="#modal-default">
               Edit
              </button> <button id="delete" data-vendor_id="<?php echo $row['userid']?>" class="btn btn-danger">Delete</button></td>

 		</tr>'
 		<?php



		}
	}



?>