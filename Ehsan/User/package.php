

<?php 
session_start();
?>
<style type="text/css">

img
{
  width: 100% !important;
  height: 140px !important;

}
  .subtitle {
  margin: 0 0 2em 0;
}
.fancy {
  line-height: 0.5;
  text-align: center;
}
.fancy span {
  display: inline-block;
  position: relative;  
}
.fancy span:before,
.fancy span:after {
  content: "";
  position: absolute;
  height: 5px;
  border-bottom: 2px solid #85335c;
  border-top: 2px solid #85335c;
  top: 0;
  width:50px;
}
.fancy span:before {
  right: 100%;
  margin-right: 15px;
}
.fancy span:after {
  left: 100%;
  margin-left: 15px;
}

#wrapper {

  margin-right: auto; /* 1 */
  margin-left:  auto; /* 1 */


  padding-right: 40px; /* 3 */
  padding-left:  40px; /* 3 */
    box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
  border-radius: 10px;background-color: #ffff4c;
 border: 6px solid #85335c; 
}
body {
background-color: white;
}
</style>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-bootstrap/0.5pre/assets/css/bootstrap.min.css">
<div class="content-wrapper" id="wrapper">
<header class="header" class="content-wrapper">
    <!-- Logo -->
    <!-- Header Navbar: style can be found in header.less -->
  <br><br> <div <p class="subtitle fancy" style="color: black; text-align: center; font-weight: bold; font-size: 18px;"><span>Package</span></p> </div>

    
  </header>
<?php 

include('../Admin/Connection.php');

$date =  $_SESSION['date'];

$area = $_SESSION['area'];
$type = $_SESSION['type'];
$selectcountry = $_SESSION['selectcountry'];
$no = $_SESSION['no'];
// echo $_SESSION['area'] = $area;
// echo $_SESSION['type'] = $type;
// echo $_SESSION['selectcountry'] = $selectcountry;
// echo $_SESSION['no'] = $noofperson;

$id = $_GET['getvendorid'];

 $sql = "select * from package WHERE vendor_id = '".$id."'";

$run = mysqli_query($link,$sql);
$rowcount = mysqli_num_rows($run);
if($rowcount>0)
{
  while($row1 = mysqli_fetch_assoc($run))
  {




?>



        <a href="EventOrganizer.php?getvendorid=<?php  echo $row1['vendor_id']; ?>&price=<?php echo $row1['price']; ?>&package=<?php echo $row1['packageid']; ?>" data-overlay="<?php echo $row1['type'] ?>" id="vendorid">

         <div class="grid-item" style="margin-top: 10px;margin-left: -40px;margin-right: -40px;">  
      
          
          <div class=""style="text-align: center;position: relative;border-left: : 80px;top:30px;">
          
              <br><br>
             <img src="../Admin/<?php echo $row1['image'] ?>" style="margin-left: 0px"><br><br><br><br>
            
            <!-- /.info-box-content -->
         
          <!-- /.info-box -->
      </div>
        </div>
    </a> 



<?php

}

}
?>
<br>
        <button class="btn btn-success"><a href="EventsOrganizer.php?vendor_id=<?php echo $id; ?>" class="btn btn-success">Customise Package</a></button>

<?php
include('Pages/footer.php')




 ?>