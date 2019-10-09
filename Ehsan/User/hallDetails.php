<?php 
include('Pages/header.php');
//include('Pages/Navheader.php');
session_start();
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox-plus-jquery.min.js"></script>
<style type="text/css">
#wrapper {

  margin-right: auto; /* 1 */
  margin-left:  auto; /* 1 */

  max-width: 880px; /* 2 */

  padding-right: 40px; /* 3 */
  padding-left:  40px; /* 3 */
  
   box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
  border-radius: 10px;
  background-color: #ffff4c;
 border: 6px solid #85335c; }
body {
   background-color: white;

}
.text-color
{
  color: black;
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
  width:75px
;
}
.fancy span:before {
  right: 100%;
  margin-right: 15px;
}
.fancy span:after {
  left: 100%;
  margin-left: 15px;
}


  @media  screen and (max-width: 800px),screen and (min-width: 800px)
   {
.text-color
{
  color: black;
}

#wrapper {

  margin-right: auto; /* 1 */
  margin-left:  auto; /* 1 */

  max-width: 880px; /* 2 */

  padding-right: 40px; /* 3 */
  padding-left:  40px; /* 3 */
    box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
  border-radius: 10px;
  background-color: #ffff4c;
 border: 6px solid #85335c;  }
 img
{
  width: 100% !important;
  height: 140px !important;

}
#textchange {
  position: relative;
  left: 10px !important;
  font-size: 25px !important;
  color: black !important;
  font-weight: bold;
}
body {
background-color: white;

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
  width:75px;
}
.fancy span:before {
  right: 100%;
  margin-right: 15px;
}
.fancy span:after {
  left: 100%;
  margin-left: 15px;
}

    }

@media screen and (min-device-width:200px), screen and (min-width:300px) {

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
  width:75px;
}
.fancy span:before {
  right: 100%;
  margin-right: 15px;
}
.fancy span:after {
  left: 100%;
  margin-left: 15px;
}

  .text-color
{
  color: black;
}
  #textchange {
  position: relative;
  left: 20px !important;
  font-size: 16px !important;
  color: black !important;
  
  font-weight: bold;
}

}





     @media screen and (max-device-width:400px), screen and (max-width:500px) {

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
  width:100px;
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

  max-width: 880px; /* 2 */

  padding-right: 40px; /* 3 */
  padding-left:  40px; /* 3 */
    box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
  border-radius: 10px;background-color: #ffff4c;
 border: 6px solid #85335c; 
}
body {
background-color: white;
}
#textchange {
  position: relative;
  left: 10px !important;
}

    }



     @media only screen and (max-width: 900px) {

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
  width:75px;
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

  max-width: 880px; /* 2 */

  padding-right: 40px; /* 3 */
  padding-left:  40px; /* 3 */
    box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
  border-radius: 10px;background-color: #ffff4c;
 border: 6px solid #85335c; 
 }
body {
background-color: white;
}

    }


 </style>

 <div class="content-wrapper" id="wrapper" style="left: 0px">
<header class="header" class="content-wrapper">
   <br> <!-- Logo -->
    <!-- Header Navbar: style can be found in header.less -->
 <div <p class="subtitle fancy" style="color: black; text-align: center; font-weight: bold; font-size: 18px;"><span>Hall Details</span></p> </div>

    
  </header>
<?php 


 include('../Admin/Connection.php');
if(isset($_GET['vendorid']))
{
  $id = $_GET['vendorid'];
  
  if(isset($_GET['v']))
  {
    echo $_GET['v'];
  }
  //echo $id;
}
?>
<input type="hidden" id="getvendor_id" value="<?php echo $id; ?>">
<?php
$no = $_SESSION['no'];


$date = $_SESSION['date'];
$area = $_SESSION['area'];
$type = $_SESSION['type'];
$selectcountry = $_SESSION['selectcountry'];


   $sql = "SELECT * FROM `hall_registration` v INNER JOIN vendor_event h on h.vendor_id = v.vendor_id and v.hall_name = h.hall where h.vendor_id = '".$id."' and h.day1 = '0' and h.night1 ='1' and capacity >='".$no."'
and eventdate='".$date."'";

$run = mysqli_query($link,$sql);
$rowcount = mysqli_num_rows($run);
if($rowcount>0)
{
  
  //echo "Not Available";
}

$sql1 = "SELECT * FROM `hall_registration` v INNER JOIN vendor_event h on h.vendor_id = v.vendor_id and v.hall_name = h.hall where h.vendor_id = '".$id."' and h.day1 != '0' and h.night1 !='1' and capacity >='".$no."' and eventdate='".$date."'";
  $run1 = mysqli_query($link,$sql1);
  $rowcount1 = mysqli_num_rows($run1);
  if($rowcount1>0)
  {
   // echo "calling 1";
    while($row1 = mysqli_fetch_assoc($run1))
    {
      ?>
    
      <div class="grid-item" style="margin-top: 10px;margin-left: -40px;margin-right: -40px;">  
                    <a id="showhall" data-hallname="<?php echo $row1['hall_name'] ?>" data-id="<?php echo $row1['vendor_id'] ?>" data-a="package.php?getvendorid=<?php  echo $id?>"   data-overlay="<?php echo $row1['type'] ?>" id="vendorid">
          <div class=""style="text-align: center;position: relative;border-left: : 80px;top:30px;">
           

            
              
             <img src="../Vendor/<?php echo $row1['image'] ?>"  style="margin-left: 0px">
               
                <div id="textchange" ><?php  echo $row1['hall_name'] ?></div><br><br>
             
               
      
            <!-- /.info-box-content -->
          </div>
      
    </a> 
    <!-- /.info-box -->
        </div>
        <br>
<hr>

<?php
}
}


  $sql2 = "SELECT * FROM `hall_registration` v INNER JOIN vendor_event h on h.vendor_id = v.vendor_id and v.hall_name = h.hall where h.vendor_id = '".$id."' and h.day1 = '0' and h.night1 !='1' and capacity >='".$no."' and eventdate='".$date."'";
  $run2 = mysqli_query($link,$sql2);
  $rowcount2 = mysqli_num_rows($run2);
  if($rowcount2>0)
  {
  //  echo "calling 2";
    while($row2 = mysqli_fetch_assoc($run2))
    {
      ?>
    
         <div class="grid-item" style="margin-top: 10px;margin-left: -40px;margin-right: -40px;">  
      
                    <a id="showhall" data-hallname="<?php echo $row2['hall_name'] ?>" data-id="<?php echo $row2['vendor_id'] ?>" data-a="package.php?getvendorid=<?php  echo $id?>"   data-overlay="<?php echo $row2['type'] ?>" id="vendorid">
          <div class=""style="text-align: center;position: relative;border-left: : 80px;top:30px;">
           

              
             <img src="../Vendor/<?php echo $row2['image'] ?>"  style="margin-left: 0px">
               
                <div id="textchange" ><?php  echo $row2['hall_name'] ?></div>
             
             
            <!-- /.info-box-content -->
          </div>
      
    </a> 
    <!-- /.info-box -->
        </div>
        <br>
<hr>

<?php
}

  }

  else
  {
    
  }








 $sql3 = "SELECT * FROM `hall_registration` v INNER JOIN vendor_event h on h.vendor_id = v.vendor_id and v.hall_name = h.hall where h.vendor_id = '".$id."' and h.day1 != '0' and h.night1 ='1' and capacity >='".$no."' and eventdate='".$date."'";
  $run3 = mysqli_query($link,$sql3);
  $rowcount3 = mysqli_num_rows($run3);
  if($rowcount3>0)
  {
   // echo "calling 3";
    while($row3 = mysqli_fetch_assoc($run3))
    {
      ?>
    
         <div class="grid-item" style="margin-top: 10px;margin-left: -40px;margin-right: -40px;">  
      
                 <a id="showhall" data-hallname="<?php echo $row3['hall_name'] ?>" data-id="<?php echo $row3['vendor_id'] ?>" data-a="package.php?getvendorid=<?php  echo $id?>"   data-overlay="<?php echo $row3['type'] ?>" id="vendorid">
          <div class=""style="text-align: center;position: relative;border-left: : 80px;top:30px;">
           
              
             <img src="../Vendor/<?php echo $row3['image'] ?>"  style="margin-left: 0px">
               
                <div id="textchange" ><?php  echo $row3['hall_name'] ?></div>
             
            <!-- /.info-box-content -->
          </div>
      
    </a> 
    <!-- /.info-box -->
        </div>
        <br>
<hr>

<?php
}

  }




  $sqlnewmind = "SELECT * FROM hall_registration WHERE vendor_id='".$id."' and hall_name NOT IN ( SELECT hall FROM vendor_event where eventdate ='".$date."')
";
$runsqlnewmind = mysqli_query($link,$sqlnewmind);
$rowmind = mysqli_num_rows($runsqlnewmind);
if($rowmind > 0)
{
  while($rowsmind = mysqli_fetch_assoc($runsqlnewmind))
  {
    $hallname = $rowsmind['hall_name'];
    //echo $hallname;
   ?>
     



     <div class="grid-item" style="margin-top: 10px;margin-left: -40px;margin-right: -40px;">  
      
                     <a id="showhall" data-hallname="<?php echo $rowsmind['hall_name'] ?>" data-id="<?php echo $rowsmind['vendor_id'] ?>" data-a="package.php?getvendorid=<?php  echo $id?>"   data-overlay="<?php echo $rowsmind['type'] ?>" id="vendorid">
          <div class=""style="text-align: center;position: relative;border-left: : 80px;top:30px;">
           

              
             <img src="../Vendor/<?php echo $rowsmind['image'] ?>"  style="margin-left: 0px">
               
                <div id="textchange" ><?php  echo $rowsmind['hall_name'] ?></div>
             
               
            <!-- /.info-box-content -->
          </div>
      
    </a> 
    <!-- /.info-box -->
        </div>
        <br>




    <?php 
    }
  }





?>



  

  
  		
  
  	
<div id="showdata"></div>



 </div>

<style type="text/css">
 .lightbox .lb-image {
  height : 300px !important;
  width : 300px !important;
  display: block;
  height: auto;
  border-radius: 3px;

  /* Image border */
  border: 4px solid white;
}
</style>

<?php include('Pages/footer.php'); ?>




 <script type="text/javascript">
   $(document).ready(function(e){
      
        $(document).on('click','#showhall',function(e)
        {
        
        var hallname =  $(this).attr('data-hallname');
       var vendor_id =  $('#getvendor_id').val();
       // alert(vendor_id);
       var adata = $(this).attr('data-a');
       
      // alert(hallname);alert(vendor_id);
       $.ajax({
        url:"showhallimages.php",
        data:{hallname:hallname,vendor_id:vendor_id,adata:adata},
        method:"post",
        success:function(data)
        {
         // alert(data);
        //alert(data.response);
          $('#showdata').html(data);
          //$('#clicklink').append("<a href='"+adata+"' class='btn btn-success'>Click More</a>");
        }
       })
        });
         
   });  
 </script>