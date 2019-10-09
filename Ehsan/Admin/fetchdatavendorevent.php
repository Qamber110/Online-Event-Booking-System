<?php 

include('../Admin/Connection.php');



if(isset($_POST['deleteid']))
{
	$id = $_POST['deleteid'];
	
	echo $query = "delete from eventvendor  where id='".$id."'";
	$run = mysqli_query($link,$query);
	if(!$run)
	{
echo("Error description: " . mysqli_error($link));
	}
}


if(isset($_POST['vendoreventid']))
{
	$id = $_POST['vendoreventid'];
	$name = $_POST['name'];
	$location = $_POST['location'];
	$area = $_POST['area'];
	$desc = $_POST['desc'];
	echo $query = "UPDATE eventvendor SET description='".$desc."',name='".$name."',city='".$location."',area='".$area."' where id='".$id."'";
	$run = mysqli_query($link,$query);
	if(!$run)
	{
echo("Error description: " . mysqli_error($link));
	}
}


if(isset($_POST['id']))
{
	$id = $_POST['id'];

	$query = "SELECT * FROM `eventvendor` where id='".$id."'";
	$runquery = mysqli_query($link,$query);
	$row = mysqli_num_rows($runquery);
	if($row > 0)
	{
		while($row=mysqli_fetch_assoc($runquery))
		{
			echo '
            <div class="col-lg-12">
              <div class="col-lg-6">
                  <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input id="name" type="text" value="'.$row['name'].'" class="form-control" name="name" >
                  </div>
               

               
                

              </div>

              <div class="col-lg-6">
                  <div class="form-group">
                  <label for="exampleInputFile">Upload Image</label>
                  <img src="'.$row['image'].'" width="100" height="100">

                 
                </div>
               

               
                

              </div>


            </div>





            <div class="col-lg-12">

              <div class="col-md-6">
             
                 <div class="form-group">
                <label>Location</label>
                <select name="city" id="selectcountry" class="form-control select2" style="width: 100%;">
                  <option selected="selected">'.$row['city'] .'</option>
               	<option value="Rawalpindi">Rawalpindi</option>
                  <option value="islamabad">Islamabad</option>
                 
                  
                </select>
              </div>
</div>
               
                

            

              <div class="col-lg-6">
                 <div class="form-group">
                  <label for="exampleInputEmail1">area</label>
                  <input type="text" id="area" class="form-control" name="area"  value='.$row['area'].'>
                </div>
              </div>


            </div>




            <div class="col-lg-12">
             

           

         



            

              <div class="col-lg-6">
                 <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <textarea id="desc" rows="10" cols="10" class="form-control" name="desc">'.$row['description'].'</textarea>
                </div>
              </div>


            </div>

            <div class="col-lg-6">
                 <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <input type="file" id="file"  class="form-control" >
                  <span id="upload_image"></span>
                </div>
              </div>


            </div>

          
           
             

              <div class="box-footer">
                <center><button id="update" type="submit" data-id="'.$row['id'].'" name="submit" class="btn btn-primary">Update</button></center>
              </div>
    </div>';
           
              	
                
 				
		}
	}

}


	else
	{




	
	$sql = "SELECT * FROM `eventvendor`";
	$run = mysqli_query($link,$sql);
	$rowcount = mysqli_num_rows($run);
	if($rowcount > 0)
	{
		while($row = mysqli_fetch_assoc($run))
		{
?>
 					<tr>
 			<td align="center" style="position: relative;top:30px;" id="first_name"><?php echo $row['name']; ?> </td>
 			<td class="text-align"><img src="<?php echo $row['image']?>" width="100" height="100"></td>
 			
 			<td style="text-align: center;position: relative;top: 30px;"><button id="edit" type="edit" data-vendorid="<?php echo $row['id']?>" class="btn btn-default btn-success" data-toggle="modal" data-target="#modal-default">
               Edit
              </button> <button id="delete" data-vendor_id="<?php echo $row['id']?>" class="btn btn-danger">Delete</button>
<a href="vendoreventservicesview.php?id=<?php echo $row['name']; ?>" class="btn btn-info">View Services</a> 
               </td>

 		</tr>'
 		<?php



		}
	}

}



	if(isset($_POST['packageid']))
{
	$packageid = $_POST['packageid'];
	//echo $packageid;
		$test = explode(".",$_FILES["file"]["name"]);
		$extension = end($test);
		$name = rand(100,999) . '.' . $extension;
		 $imagewithname = "eventvendorimages/" . $name;
		 move_uploaded_file($_FILES["file"]["tmp_name"], $imagewithname);
		 $query = "update eventvendor set image='".$imagewithname."' where id='".$packageid."'";
		 $run = mysqli_query($link,$query);
		// exit();
	}


?>

