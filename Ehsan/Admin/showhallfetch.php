<?php 

include('Connection.php');

if(isset($_POST['id']))
{
	$id = $_POST['id'];
	echo $output = "";
	$sql = "SELECT * FROM `hall_registration` where hallid='".$id."'";
	$run = mysqli_query($link,$sql);
	$rowcount = mysqli_num_rows($run);
	if($rowcount > 0)
	{
		while($row = mysqli_fetch_assoc($run))
		{

 					$output .= 
 					'<div class="col-md-12"><div class="col-md-6">
<label>Hall Name:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="first_name" value='. $row['hall_name'].' class="form-control pull-right" id="first">
                </div>

 		</div>


<div class="col-md-6">
			<div class="form-group">
                <label>capacity</label>
               <input type="text" name="last_name" id="last_name" value='.$row['capacity'].' class="form-control pull-right">
              </div>

 </div>



 <div class="form-group" style=" position: relative; top:17px;">

 	
 </div>
 </div>


















 				</div>
 				</div>
              <br><br><br><br><br><br><br><br><br><br><br>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button data-id="'.$row['hallid'].'" type="button" class="btn btn-primary" id="update">Update</button>
              </div>

 ';


 echo $output;
		}
	}
}


?>

