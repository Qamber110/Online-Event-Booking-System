<?php
 	include('Connection.php');

 $query = "SELECT vs.vendor_id,p.image,p.price,vs.first_name,vs.last_name,p.package,vs.vendor_name,p.packageid FROM `package` p inner join vendor_signup vs on vs.vendor_id = p.vendor_id";
$runquery = mysqli_query($link, $query);
$checkqueryrows = mysqli_num_rows($runquery);
if($checkqueryrows > 0)
{
	while($row = mysqli_fetch_assoc($runquery))
	{






 		 ?>

 		<tr>
 			<td align="center" style="position: relative;top:30px;"><?php echo $row['first_name'];  ?></td>
 			<td class="text-align"><img id="img" src="<?php echo $row['image']; ?>" width="100" height="100"></td>
 			<td align="center" style="position: relative;top:30px;"><?php echo $row['vendor_name']; ?></td>
 			<td style="text-align: center;position: relative;top: 30px;"><?php echo $row['package']; ?></td>
 			<td style="text-align: center;position: relative;top: 30px;"><?php echo $row['price']; ?></td>
 			<td style="text-align: center;position: relative;top: 30px;"><button data-image="<?php echo $row['image'] ?>" id="edit" type="edit" data-vendorid="<?php echo $row['vendor_id']?>" data-packageid="<?php echo $row['packageid'] ?>" class="btn btn-default btn-success" data-toggle="modal" data-target="#modal-default">
               Edit
              </button>  <a href="delpackage.php?delid=<?php echo $row['packageid']; ?>" class="btn btn-danger" >Delete</a></td>

 		</tr>
<?php 
		
	}
}

?>