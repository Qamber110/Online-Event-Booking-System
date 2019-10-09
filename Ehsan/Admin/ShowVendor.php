
<?php  include('Pages/header.php'); ?>
<?php  include('Pages/Navheader.php'); ?>
<?php  include('Pages/sidebar.php'); ?>

 <div class="content-wrapper" >
 	<table class="table table-bordered">
 		<tr>
 			<th  style="text-align: center;">Name</th>
 			<th stye="text-align:center;">Image</th>
 			<th style="text-align: center;">Hall Name</th>
 			<th>Action</th>
 		</tr>
 		
<tbody id="showdata">
 		
</tbody>
 	</table>
 	

 	<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Vender Update</h4>
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
		$(document).ready(function(){
			fetchdata();

			function fetchdata(e)
			{
				//e.preventDefault();
				//event.preventDefault();
					$.ajax({
					url : "fetchdata.php",
					method:"post",
					
					success:function(response)
					{
						//alert(response);
						$('#showdata').html(response);
						

					}
				})
			}


			$(this).on('click','#edit',function(e){

				var id = $(this).attr('data-vendorid');
				//alert(id);
				$.ajax({
					url : "showvenderselect.php",
					method:"post",
					data:{id:id},
					success:function(response)
					{

						$('#rezult').html(response);
						

					}
				});

				//alert(id);
			});



$(this).on('click',"#update",function(e)
			{
				var id = $(this).attr('data-id');
				//alert(id);
				//alert("ok");
				var vendor_name = $('#vendor_name').val();
				var first_name = $('#first').val();
				//alert(first_name);
				//alert(vendor_name);
				var last_name = $('#last_name').val();
				//alert(last_name);
				var mobile_no = $('#mobile_no').val();
				var land_line = $('#LandLineno').val();
				//alert(mobile_no);
				//alert(land_line);
				$.ajax({
					url : "updateVendors.php",
					method:"post",
					data:{id:id,first_name:first_name,last_name:last_name,mobile_no:mobile_no,land_line:land_line,vendor_name:vendor_name},
					success:function(response)
					{
						//$('#modal-default').hide();
						fetchdata();
				//		alert(response);

					}
				});
			});


$(this).on('click','#delete',function(e){

	var id = $(this).attr('data-vendor_id');
	alert(id);
	//var ids = $(this ~ tr).attr("id");
	//alert(ids);

	// var i = $(this ~ tr).attr("data-vendorid");
	// alert(i);
	
	$.ajax({
		url:"deletevendor.php",
		method:"post",
		data:{id:id},
		success:function(response)
		{
			fetchdata();
		}
	});

});
		






			

			});

</script>



<?php include('Pages/footer.php'); ?>