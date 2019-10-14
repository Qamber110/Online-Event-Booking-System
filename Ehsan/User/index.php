
<?php   include('Pages/header.php') ?>
<?php  //include('Pages/Navheader.php'); ?>
<?php   include('Pages/sidebar.php');
?>


<?php

include('../Admin/Connection.php');




session_start();

 ?>

<style type="text/css">
  #wrapper {

  margin-right: auto; /* 1 */
  margin-left:  auto; /* 1 */

  max-width: 800px;
  height: 700px; /* 2 */

  padding-right: 40px; /* 3 */
  padding-left:  40px; /* 3 */
background-color: orange;}
.form-style-9{
  max-width: 800px;

  background: #FAFAFA;
  margin: 50px auto;
  box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
  border-radius: 10px;
  border: 6px solid #85335c;
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

</style>
<form class="form-style-9"method="post" action="Shadi_Hall.php">

 <div class="content-wrapper" id="wrapper" style="left: 0px">
    <!-- Logo -->
    <!-- Header Navbar: style can be found in header.less -->
   
   
 <div class="col-md-12">
<div class="form-group" style=" position: relative; top:17px;">
<div <p class="subtitle fancy" style="color: black; text-align: center; font-weight: bold; font-size: 18px;"><span>Enter Event Details</span></p> </div>

    <div class="col-md-6">

       <h4><label style="color: black;">Date:</label></h4>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="date" class="form-control pull-right" id="datepicker">
                </div>

    </div>
  </div>

<div class="col-md-6" >
      <div class="form-group">
        <br><br>
        <h4><label style="color:  black;">Function Type:</label></h4>
                <select type="text" class="form-control select2" style="width: 100%;">
                  <option selected="selected">Selected</option>
                  <option>Mehndi</option>
                  <option>Barat</option>
                  <option>Walima</option>

                </select>
              </div>

 </div>


 <div class="form-group">


    <div class="col-md-6" style=" position: relative; top:17px;">

       <h4><label style="color:  black;">Total Person:</label></h4>

                <div class="input-group date">
                  <div class="input-group-addon">
                    
                  </div>
                  <input name="noofperson" type="text" class="form-control pull-right">
                </div>

    </div>
  </div>



 <div class="col-md-6" >
      <div class="form-group">
                
                <br>
               <h4> <label style="color:  black;">Timings:</label></h4>
                <select type="text" name="type" class="form-control select2" style="width: 100%;">
                  <option selected="selected">Selected</option>
                  <option value="Day">Day</option>
                  <option value="night">Night</option>
                  
                  
                </select>
              </div>

 </div>
</div>




<div class="col-md-12">
<div class="col-md-6">
      <div class="form-group">
        
                <h4><label style="color:  black;">Location:</label></h4>
                <select type="text" name="selectcountry" id="selectcountry" class="form-control select2" style="width: 100%;">
                 <option value="Rawalpindi">Selected</option>
                  <option value="Rawalpindi">Rawalpindi</option>
                  <option value="islamabad">Islamabad</option>
                 
                  
                </select>
              </div>

 </div>


 <div class="col-md-6" >
      <div class="form-group" id="newarea" style="position: relative;top: -20px;">
        <br>
                <h4><label style="color:  black;">Area:</label></h4>
                <select type="text" name="area" class="form-control select2" id="area" style="width: 100%;">

                 
                  
                  
                </select>
              </div>

 </div>


</div>
<div class="col-md-12">
<center>
<div class="col-md-offset-3 col-md-6">
  <div class="form-group">
    

    <div>


     <h4> <button name="Submit" class="btn btn-primary btn-block">Submit</button></h4><br><br>
</div>
</div>
  
</div>
</center>
<!--
<div class="col-md-6">
  <div class="form-group">
    <a href="../Vendor/index.php" class="btn btn-primary btn-block">Vendor Login</a></center>
  </div>
  -->
</div>
</div>
</form>
</div>



 <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/themes/base/jquery-ui.css" type="text/css" media="all"> 
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/js/gijgo.min.js "></script> 
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/css/gijgo.min.css"> 


 <script>
    var today, datepicker;
    today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
    datepicker = $('#datepicker').datepicker({
        minDate: today,
        format: 'yyyy-mm-dd',
    });
 </script>

<script type="text/javascript">
  $(document).ready(function () {
    $('#area').hide();
    $('#newarea').hide();
    // var minDate = new Date();
    // alert(minDate);
    // $('#datepicker').datepicker({
    //  dateFormat: 'mm/dd/yy',
    //  minDate : minDate
    // });
// $("#datepicker").datepicker({ beforeShowDay: DisableMonday});


    // $('#datepicker').datepicker({
    //   setStartDate, new Date()
    // });


// function getCurrentTime(date) {
// var hours = date.getHours(),
// minutes = date.getMinutes(),
// ampm = hours >= 12 ? 'pm' : 'am';

// hours = hours % 12;
// hours = hours ? hours : 12; // the hour '0' should be '12'
// minutes = minutes < 10 ? '0'+minutes : minutes;

// return hours + ':' + minutes + ' ' + ampm;
// }

// var time = new Date().getTime();
// var currentdate = new Date(time); 
// var datetime = currentdate.getDate() + "/"
// + (currentdate.getMonth()+1) + "/" 
// + currentdate.getFullYear() + " " 
// + currentdate.getHours() + ":" 
// + currentdate.getMinutes() ;
//var time = currentdate.getHours() + ":" + currentdate.getMinutes();


$("#datepicker").datepicker({
//dayOfWeekStart: 1,
  minDate: new Date()

// minTime: getCurrentTime(new Date()),
// setDate:currentdate,
// format: 'd/m/Y H:i',
// formatTime: 'H:i',
// formatDate: 'd/m/Y',
//ampm: true,
// step: workingHrSlot
//onChangeDateTime: logic,
//onShow: logic
});
     $(document).on('change','#selectcountry',function(e)
     {
      var id = $(this).val();
      //alert(id);
      $('#area').show();
      $('#newarea').show();
      $.ajax({
        url:"GetCities/getcities.php",
        method:"post",
        data:{id:id},
        success:function(data)
        {
          $('#area').html(data);
      //    alert(data);
        }
      })
     })

  });
</script>

 <?php include('Pages/footer.php')?>