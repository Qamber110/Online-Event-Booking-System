<?php 
session_start();
?>

<?php   include('Pages/header.php') ?>
<?php // include('Pages/Navheader.php'); ?>
<?php // include('Pages/sidebar.php');


 ?>
 <style type="text/css">

  #wrapper {

  margin-right: auto; /* 1 */
  margin-left:  auto; /* 1 */

  max-width: 800px; /* 2 */

  padding-right: 40px; /* 3 */
  padding-left:  40px; /* 3 */
  
   box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
  border-radius: 10px;
  background-color: #ffff4c;
 border: 6px solid #85335c;  }
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

  max-width: 800px; /* 2 */

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

  max-width: 800px; /* 2 */

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

  max-width: 800px; /* 2 */

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

 <div class="content-wrapper" id="wrapper"style="left: 0px">

 <header class="header" class="content-wrapper">
    <!-- Logo -->
    <!-- Header Navbar: style can be found in header.less -->
  <br><div <p class="subtitle fancy" style="color: black; text-align: center; font-weight: bold; font-size: 18px;"><span>Select Venue</span></p> </div>

  </header>
<?php 

$selectcountry = "";


  if(isset($_POST['Submit']))
  {
    $selectcountry = $_POST['selectcountry'];
    $date = $_POST['date'];
    $area = $_POST['area'];
    $type= $_POST['type'];
   
    $noofperson = $_POST['noofperson'];
     $noofperson;
   

$_SESSION['date'] = $date;
$_SESSION['area'] = $area;
$_SESSION['type'] = $type;
$_SESSION['selectcountry'] = $selectcountry;
$_SESSION['no'] = $noofperson;






    //$_SESSION['noofperson'] = $noofperson;
   
include('../Admin/Connection.php');


     $query = "select * from vendor_signup where area='".$area."' and city='".$selectcountry."'";
      $runquery = mysqli_query($link,$query);
      $rowcount = mysqli_num_rows($runquery);
      if($rowcount > 0)
      {
        while ($row = mysqli_fetch_assoc($runquery)) {
          $id = $row['vendor_id'];

            $hallregistration = "SELECT count(*) as countvendorid,vendor_id FROM `hall_registration` WHERE vendor_id='".$id."' group by vendor_id";
          $runhallregistration = mysqli_query($link,$hallregistration);
          
                 $showquery = "select * from vendor_signup where vendor_id='".$id."'";
                $runshowquery = mysqli_query($link,$showquery);
                $rowscountss = mysqli_num_rows($runshowquery);
                if($rowscountss > 0 )
                {
                  while($rowssss =  mysqli_fetch_assoc($runshowquery))
                  {
                    ?>
            <div class="grid-item" style="margin-top: 10px;margin-left: -40px;margin-right: -40px;">
                    <a href="hallDetails.php?vendorid=<?php echo $rowssss['vendor_id']; ?>&?n=<?php echo $noofperson ?>&?v=true" data-overlay="<?php echo $rowssss['type'] ?>" id="vendorid">
          <div class=""style="text-align: center;position: relative;border-left: : 80px;top:30px;">
           

       
              
             <img  src="../Admin/<?php echo $rowssss['images']; ?>"  style="margin-left: 0px">
             <br>
               
                <div id="textchange" class="text-color"><?php echo $rowssss['vendor_name'] ?></div><br><br>
             
               
                        <!-- /.info-box-content -->
          </div>
      
    </a> 
    <!-- /.info-box -->
        </div>
        <br>

  
                    <?php
                  }
                }
                      
              }



            }

          }
        

      


?>

 </div>

 

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>


<script type="text/javascript">
  // $(document).ready(function()
  // {
  //  alert('ok');
  //  $(this).on('click','#vendorid',function(e){
  //    e.preventDefault();

  //    var id =  $("#vendorid").attr("href");
 //      var type = $('#vendor_id').attr("data-overlay");
 //      alert($(this).attr('data-overlay'));

  //    alert(id);
  //    alert(type);
  //      //alert($('this').attr('vendorid').val());
  //    // $.ajax({
  //    //    url:'load.php',
  //    //    type:'POST',
  //    //    data:{id:id},
  //    //    success:function(response)
  //    //    {
  //    //      alert(response);
  //    //    $(".result").html(response);
  //    //    }
  //    // });
  //    alert("done");
  //  });
  // });
  
</script>

<style type="text/css">
  #textchange
  {
    color: black;
    font-size: 26px;
    font-weight: bold;
  }

  @media only screen and (min-width: 300px) {


.info-box-content img
{
  width: 100px;
  height: 100px;
}

  #textchange
  {
    position: relative;
    left: 30px;
    color: white;
    font-size: 12px;
    text-align: center;
    
 
  }
}

@media only screen and (min-width: 100px) {


.info-box-content img
{
  width: 100px;
  height: 100px;
}

  #textchange
  {
    position: relative;
    left: 30px;
    color: white;
    font-size: 12px;
    text-align: center;
    
 
  }
}


@media only screen and (min-width: 200px) {
body
{
background-color: white;}

.info-box-content img
{
  width: 80px;
  height: 80px;
}

  .info-box-content #textchange
  {
    position: relative;
    left: 30px;
    color: white;
    font-size: 12px;
    text-align: center;
    
 
  }
}
</style>
            




  <?php  include('Pages/footer.php');
//session_close();
  ?>