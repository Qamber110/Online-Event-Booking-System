
<style type="text/css">

  #wrapper {

  margin-right: auto; /* 1 */
  margin-left:  auto; /* 1 */

  max-width: 800px; /* 2 */

  padding-right: 40px; /* 3 */
  padding-left:  40px; /* 3 */
   box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
  border-radius: 10px;
  background-color: #e0ffe0;
  border: 6px solid #305A72;
 }
body {
   background-color: white;

}
</style>



</style>
<?php include('Connection.php'); ?>



<?php
 	
 	if(isset($_POST['hallimagesid']))
 	{
 		$id = $_POST['hallimagesid'];
 		echo $sql = "delete  from hallimages where id='".$id."'";
 		$run = mysqli_query($link,$sql);
 	}


if(isset($_POST['id']))
{
$id = $_POST['id'];
$hallname = $_POST['hall'];


 	$sql = "select * from hallimages where vendorid='".$id."' and hallname='".$hallname."'";
 	$run = mysqli_query($link,$sql);
 	$rowcount = mysqli_num_rows($run);
 	if($rowcount > 0)
 	{
 		$i = 1;
 		while($row = mysqli_fetch_assoc($run))
 		{



 			?>
 			<tr>
 				<td><?php echo  $i++ ?></td>
 				<td><img src="<?php echo $row['images']?>" width="100" height="100"></td>
 				<td><button id="delete" data-id="<?php echo $row['id']; ?>">delete</button> </td>
 			</tr>	
	<?php
 		}
 	}
}

 	?>

