
<?php
include('Connection.php');
function resizeimage($resourceType,$imagewith,$imageheight)
{
  $resizeWithh = 100;
  $resizeheight = 100;
  $imageLayer = imagecreatetruecolor($resizeWithh, $resizeheight);
  imagecopyresampled($imageLayer, $resourceType, 0, 0, 0, 0, $resizeWithh, $resizeheight, $imagewith, $imageheight);
  return $imageLayer;

}

if(isset($_POST['submit']))
{
  $tos = $_POST['tos'];
  $vendoreventname = $_POST['vendoreventname'];
  $Package = $_POST['Package'];
  $imageprocess = 0;
  $price = $_POST['price'];
  if(is_array($_FILES))
  {
    $filename = $_FILES['file']['tmp_name'];
     $soucreProperties = getimagesize($filename);
    $resizeFileName = time();
    $uploadPath = "vendoreventserviceimages/";
    $fileExtension = pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
    $uploadimagetype = $soucreProperties[2];
    $sourceImageWith = $soucreProperties[1];
    $sourceimageheight = $soucreProperties[0];
    switch ($uploadimagetype) {
      case IMAGETYPE_JPEG:
        $resourceType = imagecreatefromjpeg($filename);
        $imageLayer   = resizeimage($resourceType,$sourceImageWith,$sourceimageheight);
        imagejpeg($imageLayer,$uploadPath."vendoreventservices_".$resizeFileName.'.'.$fileExtension);
        break;
         case IMAGETYPE_GIF:
        $resourceType = imagecreatefromgif($filename);
        $imageLayer   = resizeimage($resourceType,$sourceImageWith,$sourceimageheight);
        imagegif($imageLayer,$uploadPath."vendoreventservices_".$resizeFileName.'.'.$fileExtension);
        break;
         case IMAGETYPE_PNG:
      echo  $resourceType = imagecreatefrompng($filename);
      echo  $imageLayer   = resizeimage($resourceType,$sourceImageWith,$sourceimageheight);
       echo imagepng($imageLayer,$uploadPath."vendoreventservices_".$resizeFileName.'.'.$fileExtension);
        break;
      
      default:
        $imageprocess = 0 ;
        break;
    }
   
    $imagewithname = $uploadPath.$resizeFileName.".".$fileExtension;
    $imageprocess = 1 ;
    if($imageprocess == 1)
    {
      ?>
      <div class="alert icon-alert with-arrow alert-success form-alter" role="alert">
        <i class="fa fa-fw fa-check-circle"></i>
        <strong>Success</strong>Image size successfully
      </div>

      <?php
    }
    else
    {
      $imageprocess = 0 ;
    }
  }
  $select = "select * from eventvendorservices where name='".$vendoreventname."' and tos='".$tos."' and packages='".$Package."'";
  $runselect = mysqli_query($link,$select);
  $rowcounts = mysqli_num_rows($runselect);
  if($rowcounts > 0 )
  {
echo "<script>alert('Already Record Exist')</script>";
  }
  else
  {
     move_uploaded_file($filename, $uploadPath.$resizeFileName.".".$fileExtension);
    $query = "insert into eventvendorservices (name,tos,packages,image,price) values('".$vendoreventname."','".$tos."','".$Package."','".$imagewithname."','".$price."')";
  $run = mysqli_query($link,$query);

  }
  
}



 ?>



