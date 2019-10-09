<?php 

include('../Admin/Connection.php');


	
	 $output = "";
	$sql = "SELECT * FROM `vendor_signup`";
	$run = mysqli_query($link,$sql);
	$rowcount = mysqli_num_rows($run);
	if($rowcount > 0)
	{
		while($row = mysqli_fetch_assoc($run))
		{
?>
 					<tr>
 			<td align="center" style="position: relative;top:30px;" id="first_name"><?php echo $row['first_name'] ?> <?php  echo $row['last_name'];?></td>
 			<td class="text-align"><img src="<?php echo $row['images']?>" width="100" height="100"></td>
 			<td align="center" style="position: relative;top:30px;">"<?php echo $row['vendor_name']?>"</td>
 			<td style="text-align: center;position: relative;top: 30px;"><button id="edit" type="edit" data-vendorid="<?php echo $row['vendor_id']?>" class="btn btn-default btn-success" data-toggle="modal" data-target="#modal-default">
               Edit
              </button> <button id="delete" data-vendor_id="<?php echo $row['vendor_id']?>" class="btn btn-danger">Delete</button> <a  href="Viewhall.php?vendor_id=<?php echo $row['vendor_id']?>" class="btn btn-info">View Hall</button></td>

 		</tr>'
 		<?php



		}
	}



?>

<script type="text/javascript">
	// $(document).ready(function(){
			
	// 		$(this).on('click',"#update",function(e)
	// 		{
	// 			var id = $(this).attr('data-id');
	// 			//alert(id);
	// 			//alert("ok");
	// 			var vendor_name = $('#vendor_name').val();
	// 			var first_name = $('#first').val();
	// 			//alert(first_name);
	// 			//alert(vendor_name);
	// 			var last_name = $('#last_name').val();
	// 			//alert(last_name);
	// 			var mobile_no = $('#mobile_no').val();
	// 			var land_line = $('#LandLineno').val();
	// 			//alert(mobile_no);
	// 			alert(land_line);
	// 			$.ajax({
	// 				url : "updateVendors.php",
	// 				method:"post",
	// 				data:{id:id,first_name:first_name,last_name:last_name,mobile_no:mobile_no,land_line:land_line,vendor_name:vendor_name},
	// 				success:function(response)
	// 				{
	// 			//		alert(response);

	// 				}
	// 			})
	// 		});
	// 	});
</script>