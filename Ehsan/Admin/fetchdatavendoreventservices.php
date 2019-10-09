<?php
include('Connection.php');


if(isset($_POST['eventvendorid']))
{
 $id = $_POST['eventvendorid'];
 $tos = $_POST['tos'];
 $package = $_POST['package'];
 echo $query = "update eventvendorservices set tos='".$tos."',packages='".$package."' where id='".$id."'";
 $run = mysqli_query($link,$query); 
}


if(isset($_POST['deleteid']))
{
 $id = $_POST['deleteid'];

 echo $query = "delete from eventvendorservices where id='".$id."'";
 $run = mysqli_query($link,$query); 
}
if(isset($_POST['id']))
{


	$id = $_POST['id'];
	$sql = "SELECT * FROM `eventvendorservices` where name='".$id."'";
	$run = mysqli_query($link,$sql);
	$rowcount = mysqli_num_rows($run);
	if($rowcount > 0)
	{
		while($row = mysqli_fetch_assoc($run))
		{
?>
 					<tr>
 			<td align="center" style="position: relative;top:30px;" id="first_name"><?php echo $row['name']; ?> </td>
 			<td class="text-align" style="position: relative;top: 30px;">

 					 <select id="Package" name="Package" class="form-control select2">
                    <option value="Package1" <?php if($row['packages'] == "Package1") { echo "selected";}  ?>>Package 1</option>
                      <option value="Package2" <?php if($row['packages'] == "Package2") { echo "selected";}  ?>>Package 2</option>
                        <option value="Package3" <?php if($row['packages'] == "Package3") { echo "selected";}  ?>>Package 3</option>
                          
                  </select>

 				</td>
 				<td>
 				<div class="col-lg-6">
                  <div class="form-group">
                  <select id="tos" name="tos" class="form-control select2" style="position: relative;top: 30px;">
                    <option value="Decoration" <?php if($row['tos'] == "Decoration")
                        	{
                        		echo "selected";
                        	} ?> 
                        	>Decoration

                    </option>
                      <option value="Music" <?php if($row['tos'] == "Music")
                        	{
                        		echo "selected";
                        	} ?>>Music</option>
                        <option value="Lighting" 
                        	<?php if($row['tos'] == "Lighting")
                        	{
                        		echo "selected";
                        	} ?>
                        >Lighting</option>
                          <option value="Catering" 
                          <?php if($row['tos'] == "Catering")
                        	{
                        		echo "selected";
                        	} ?>
                          >Catering</option>
                  </select>

                 
                </div>
               

 			</td>
 			
 			<td style="text-align: center;position: relative;top: 30px;"><button id="edit" type="edit" data-vendorid="<?php echo $row['id']?>" class="btn btn-default btn-success" data-toggle="modal" data-target="#modal-default">
               update
              </button> <button id="delete" data-vendor_id="<?php echo $row['id']?>" class="btn btn-danger">Delete</button>

               </td>

 		</tr>'
 		<?php



		}
	}
  else
  {
    $Success = "Success";
      if($Success)
      { echo '<div class="alert alert-success">
  <strong>Success!</strong> no record
</div>';
        
      }


   
  }

}

?>