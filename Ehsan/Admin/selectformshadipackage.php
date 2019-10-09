<?php 

include('Connection.php');

if(isset($_POST['vendorid']))
{
	
	echo $output = "";
  $col3 = "";
  $col4 = "";
  $vendor_id = $_POST['vendorid'];
  $packageid = $_POST['packageid'];
  $image = $_POST['image'];
  $col3 = $_POST['col3'];
  $col4 = $_POST['col4'];
  
	 $sql = "SELECT * FROM `package` where packageid='".$packageid."' and vendor_id='".$vendor_id."'";
	$run = mysqli_query($link,$sql);
	$rowcount = mysqli_num_rows($run);
	if($rowcount > 0)
	{
		while($row = mysqli_fetch_assoc($run))
		{

 					$output .= 
 					'<div class="col-md-12"><div class="col-md-6">
<label>packageid:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" disabled="disabled" name="first_name" value='. $row['packageid'].' class="form-control pull-right" id="first">
                </div>

 		</div>


<div class="col-md-6">
			<div class="form-group">
                <label>Vendor id</label>
               <input type="text" disabled="disabled" name="last_name" id="last_name" value='.$row['vendor_id'].' class="form-control pull-right">
              </div>

 </div>



 <div class="form-group" style=" position: relative; top:17px;">

 	
 </div>
 </div>
	<div class="col-md-12">


 						<div class="form-group" style=" position: relative; top:17px;">

 		<div class="col-md-6">

 			 <label>Package Image:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    
                  </div>
                  <img type="text" name="mobile_no" src='.$row['image'].'  class="form-control pull-right" id="mobile_no">
                </div>

 		</div>
  </div>
<div class="col-md-6">
			<div class="form-group">
                <label>Price</label>
               <input type="text" name="LandLineno" value='.$row['price'].' id="price" class="form-control pull-right">
              </div>

 </div>








 				</div>
 				<div class="col-md-12">


 						<div class="form-group" style=" position: relative; top:17px;">

 		<div class="col-md-6">

 			 <label>Package:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                   
                  </div>
                  <input type="text" id="vendor_name" value="'.$row['package'].'" class="form-control pull-right">
                </div>

 		</div>
  </div>









 				</div>
 				</div>

        <div class="col-md-12">


            <div class="form-group" style=" position: relative; top:17px;">

    <div class="col-md-6">

       <label>Change Image:</label>

                
                  <input name="fileimage" id="file" type="file" >
                </div>
                <span id="upload_image"></span>

    </div>
  </div>









        </div>
        </div>
              <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
              <div class="modal-footer">
                
                <button data-packageid="'.$row['packageid'].'" data-vendorid="'.$row['vendor_id'].'" type="button" class="btn btn-primary" id="update">Update</button>
              </div>

 ';


 echo $output;
		}
	}
}


?>

