
<?php  include('Pages/header.php') ?>
<?php // include('Pages/Navheader.php'); ?>
<?php //  include('Pages/sidebar.php');
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
background-color: #ffff4c;}
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
 <form class="form-style-9" method="post">
 <div class="content-wrapper" id="wrapper" style="left: 0px">
  <?php 
 if(isset($_GET['organizerpackage']) && ($_GET['price']) && ($_GET['id']) && ($_GET['tos']) && (@$_GET['eventgetvendorid']) && ($_GET['eventprice']) && ($_GET['eventpackage']))
  {

$organizerpackage = $_GET['organizerpackage'];
$price = $_GET['price'];
$id = $_GET['id'];
$tos = $_GET['tos'];
$eventgetvendorid = $_GET['eventgetvendorid'];
$eventprice = $_GET['eventprice'];
$eventpackage = $_GET['eventpackage'];

 
 
  echo'<input type="hidden" id="eventpackage" name="eventpackage" value="'.$eventpackage.'">';
  echo'<input type="hidden" id="eventprice" name="eventprice" value="'.$eventprice.'">';
  echo'<input type="hidden" id="eventgetvendorid" name="eventgetvendorid" value="'.$eventgetvendorid.'">';
  echo'<input type="hidden" id="eventtos" name="tos" value="'.$tos.'">';
  echo'<input type="hidden" id="eventid" name="id" value="'.$id.'">';
  echo'<input type="hidden" id="eventorangnierprice" name="price" value="'.$price.'">';
  echo'<input type="hidden" id="organizerpackage" name="organizerpackage" value="'.$organizerpackage.'">';
}



 else if(isset($_GET['organizerpackage']) && ($_GET['price']) && $_GET['id'] && ($_GET['tos']))
{
  $organizerpackage = $_GET['organizerpackage'];
  $price = $_GET['price'];
  $id = $_GET['id'];

 $tos = $_GET['tos'];

  echo'<input type="hidden" id="orgpkg" name="organizerpackage" value="'.$organizerpackage.'">';
  echo'<input type="hidden" id="orgprice" name="price" value="'.$price.'">';
  echo'<input type="hidden" id="orgprid" name="id" value="'.$id.'">';
  echo'<input type="hidden" id="tos" name="tos" value="'.$tos.'">';

 

 
}

?>



 <div class="col-md-12">

  <div class="form-group" style=" position: relative; top:17px;">
    <div <p class="subtitle fancy" style="color: black; text-align: center; font-weight: bold; font-size: 18px;"><span>Enter Event Details</span></p> </div>



    <div class="col-md-6">
  

       <label style="color: black;">Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="date"  class="form-control pull-right" id="datepicker">
                </div>

    </div>
  </div>
  <br>
<div class="col-md-6" >
      <div class="form-group">
                <label style="color: black;">Function Type</label>
                <select type="text" id="function_type" class="form-control select2" name="function_type" style="width: 100%;">
                  <option selected="selected">Selected</option>
                  <option>Mehndi</option>
                  <option>Barat</option>
                  <option>Walima</option>
                  
                </select>
              </div>

 </div>




 <div class="col-md-6" >
      <div class="form-group">
                <label style="color: black;">Type</label>
                <select type="text"id="day" name="type" class="form-control select2" style="width: 100%;">
                  <option selected="selected">Selected</option>
                  <option value="Day">Day</option>
                  <option value="night">Night</option>
                  
                  
                </select>
              </div>

 </div>
  <div class="form-group">

    <div class="col-md-6" style=" position: relative; top:0px;">

       <label style="color: black;">Total Person:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    
                  </div>
                  <input name="noofperson" id="noofperson" type="text" class="form-control pull-right">
                </div>

    </div>
  </div>
</div>




<div class="col-md-12">
   <div class="form-group">

    <div class="col-md-6" style=" position: relative; top:0px;">

       <label style="color: black;">Total Price:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    
                  </div>
                  <input id="total" name="total" disabled="disabled" type="text" class="form-control pull-right">
                </div>

    </div>
  </div>




 

<div class="col-md-6">
  <div class="form-group">
    <center><button name="done" id="submit" type="submit">Submit</button></center><br><br><br>
    
  </div>

</div>


</div>

</div>
</form>


  <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Details</h4>
              </div>
 <div class="modal-body">
                <div id="rezult"></div>
               
                 


                
        




        
              


              
                
      

        
                
        
             
              
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->



</div>



 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function () {




     $('#datepicker').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });


    $(document).on('click','#submit',function(e)
    {
      e.preventDefault();
      $('#modal-default').modal('show');

      var date = $('#datepicker').val();
      var functiontype = $('#function_type').val();
      var day = $('#day').val();
      var noofperson = $('#noofperson').val();
      var totalprice = $('#total').val();
     // alert(date);alert(date);alert(date);alert(date);alert(date);


     //oragizerpackageshow
var  orgpkg = $('#orgpkg').val();
var orgprice = $('#orgprice').val();
var orgprid  = $('#orgprid').val();
var tos = $('#tos').val();

//alert(orgpkg);alert(orgprice);alert(orgprid);alert(tos);
      

      //event hall book

      var eventtpackage = $('#eventpackage').val();
      var  eventprice = $('#eventprice').val();
      var  eventgetvendorid = $('#eventgetvendorid').val();
var eventtos = $('#eventtos').val();
var decorationid = $('#eventid').val();
var eventorangnierprice = $('#eventorangnierprice').val();
var organizerpackage = $('#organizerpackage').val();
//alert(eventtpackage);alert(eventprice);alert(eventgetvendorid);alert(eventtos);alert(decorationid);alert(eventorangnierprice);alert(organizerpackage);


$.ajax({
  url:("invoicedetail.php"),
  method:"post",
  data:{orgpkg:orgpkg,orgprice:orgprice,orgprid:orgprid,tos:tos,eventtpackage:eventtpackage,eventprice:eventprice,eventgetvendorid:eventgetvendorid,eventtos:eventtos,decorationid:decorationid,eventorangnierprice:eventorangnierprice,organizerpackage:organizerpackage,date:date,functiontype:functiontype,noofperson:noofperson,totalprice:totalprice},
  success:function(data)
  {
    //  alert(data);
      $('#rezult').html(data);
  }

})
    });







   

$(this).on('keyup','#noofperson',function(e)
{

  //alert("ok");
  var price = $('#eventprice').val();
//  alert(price);
  var id = $('#saveid').val();
  //alert(price);alert(id);
  var noofperson = $('#noofperson').val();

  var total = price * noofperson

$('#total').val(total);
  


})

  });
</script>

 <?php include('Pages/footer.php')?>