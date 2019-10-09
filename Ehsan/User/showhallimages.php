<?php 

	include('../Admin/Connection.php');


	if(isset($_POST['vendor_id']))
	{


$adata = $_POST['adata'];
	
$hallname = $_POST['hallname'];
$vendor_id = $_POST['vendor_id'];
	$sql  = "select * from hallimages where vendorid='".$vendor_id."' and hallname='".$hallname."'";
	$run = mysqli_query($link,$sql);
	$rowcount = mysqli_num_rows($run);
	if($rowcount > 0)
	{
		while ($row = mysqli_fetch_assoc($run)) {



			echo '<div class="grid-item" id="hallimagesshow">';
                   
          echo"<div ><a href='".$row['images']."'' data-lightbox='mygallery' data-title='".$hallname."'><img  src='".$row['images']."'  style='margin:0px;'></a>";
           

          
             
               
            echo"</div>";
          
          echo"</div>";
      
    echo"</a>"; 
  
        echo"</div>";
  

			
			
			
			


			
		}
		echo "<div class='col-lg-off-3 col-lg-3>'>";
		echo "<div style='clear:both;'></div>";
		echo "<a href='".$adata."' class='btn btn-success' style='clear:both'>submit</a> <br><br>";
		echo "</div>";
		

	}
	else
	{
		$s = "success";
		if($s == "success")
		{
			echo'<div class="alert alert-success">
  <strong>!</strong> No images
</div>';
		}
		
	}
}

?>


<style type="text/css">
	@media  screen and (max-width: 800px),screen and (min-width: 800px) {

#hallimagesshow
{
	border: 1px solid black;
	float: left;
	margin: 10px;
	display: inline-block;
}

 #hallimagesshow img
{
  width: 80px !important;
  height: 80px !important;
  filter: grayscale(100%);
  transition: 1s;
}

 #hallimagesshow img:hover
{
filter: grayscale(0%);

}
#textchange {
  position: relative;
  left: 10px !important;
  font-size: 25px !important;
  color: black !important;

}


    }

@media screen and (min-device-width:200px), screen and (min-width:300px) {
  #textchange {
  position: relative;
  left: 20px !important;
  font-size: 16px !important;
  color: black !important;
  
}

}





     @media screen and (max-device-width:400px), screen and (max-width:500px) {

#wrapper {

  margin-right: auto; /* 1 */
  margin-left:  auto; /* 1 */

  max-width: 800px; /* 2 */

  padding-right: 40px; /* 3 */
  padding-left:  40px; /* 3 */
  background: #ffff4c;);
}
body {
  

}
#textchange {
  position: relative;
  left: 10px !important;
}

    }



   

 </style>







