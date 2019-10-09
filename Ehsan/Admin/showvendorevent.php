
<?php  include('Pages/header.php'); ?>
<?php  include('Pages/Navheader.php'); ?>
<?php  include('Pages/sidebar.php'); ?>

 <div class="content-wrapper" >
 	<table class="table table-bordered">
 		<tr>
 			<th  style="text-align: center;">Name</th>
 			<th stye="text-align:center;">Image</th>
 			
 			<th>Action</th>
 		</tr>
 		
<tbody id="showdata">
 		
</tbody>
<tbody id="response"></tbody>
 	</table>
 	

 	<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Vender Event Update</h4>
              </div>
              <div class="modal-body">


              	

            
            <!-- /.box-header -->
            <!-- form start -->









 				
              


              
                
 			

 				
                
 				
             
              
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
					url : "fetchdatavendorevent.php",
					method:"post",
					
					success:function(response)
					{
						//alert(response);
						$('#showdata').html(response);
						

					}
				})
			}

			$(document).on('click','#edit',function(e)
			{
				$('#modal-default').modal('show');
				var id = $(this).attr('data-vendorid');
				//alert(id);
				$.ajax({
					url:"fetchdatavendorevent.php",
					method:"post",
					data:{id:id},
					success:function(response)
					{
						//alert(response);
						$('.modal-body').html(response);
						//$('#showdata').html(response);
					}

				})


			});


			



$(this).on('click',"#update",function(e)
			{

				var vendoreventid = $(this).attr('data-id');
				//alert(vendoreventid);
				//alert("ok");
				var name = $('#name').val();
				var location = $('#selectcountry').val();
				
				var area = $('#area').val();
		
				var desc = $('#desc').val();
				//alert(name);alert(location);alert(area);alert(desc);
				//alert(mobile_no);
				//alert(land_line);
				$.ajax({
					url : "fetchdatavendorevent.php",
					method:"post",
					data:{vendoreventid:vendoreventid,name:name,location:location,area:area,desc:desc},
					success:function(response)
					{
						//alert(response);
						$('#modal-default').modal('hide');
						fetchdata();
						//$('#response').html(response);
						//$('#modal-default').hide();
						//fetchdata();
				//		alert(response);

					}
				});
			});


$(document).on('change',"#file",function(e){
				//alert("image changes");
				var property = document.getElementById("file").files[0];
				var imagename= property.name;
				var formdate = new FormData();
				var imageExtension = imagename.split('.').pop().toLowerCase();
				var packageid = $('#update').attr('data-id');
				//alert(packageid);
				if(jQuery.inArray(imageExtension,['gif','png','jpg','jpeg']) == -1)
				{
					alert("invalid image file");
				}
				var imagesize = property.size;
				if(imagesize > 2000000)
				{
					alert("image size is very big");
				}
				else
				{

				formdate.append("packageid",packageid);
				formdate.append("file",property);
				$.ajax({
					url : "fetchdatavendorevent.php",
					method:"POST",
					data:formdate,
					contentType:false,
					cache:false,
					processData:false,
					beforeSend:function()
					{
						$('#upload_image').html('<label class="text-success">Image Uploading...</label>');
					},
					success:function(data)
					{
						$('#modal-default').modal('hide');
						fetchdata();
						
						
					}

				});
			}
			})
		
	

$(this).on('click','#delete',function(e){

	var deleteid = $(this).attr('data-vendor_id');
	//alert(id);
	
	
	$.ajax({
		url:"fetchdatavendorevent.php",
		method:"post",
		data:{deleteid:deleteid},
		success:function(response)
		{
			$('#modal-default').modal('hide');
						fetchdata();
		}
	});

});
		






			

			});

</script>



<?php include('Pages/footer.php'); ?>