
<?php  include('Pages/header.php'); ?>
<?php  include('Pages/Navheader.php'); ?>
<?php  include('Pages/sidebar.php'); ?>

 <div class="content-wrapper" >
 	<table class="table table-bordered">
 		<tr>
 			<th  style="text-align: center;">Name</th>
 			<th stye="text-align:center;">Image</th>
 			<th style="text-align: center;">Hall Name</th>
 			<th style="text-align: center;">Package</th>
 			<th style="text-align: center;">Price</th>
 			<th>Action</th>
 		</tr>
 		<tbody id="vendorpackage">
 			
 		</tbody>
 		

 	</table>



 	<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Package Update</h4>
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
 	



</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function()
	{
		fetchdata();
		function fetchdata()
		{
			$.ajax(
			{
				url:"VendorPackageFetch.php",
				method:"post",
				success:function(data)
				{
					$('#vendorpackage').html(data);

					
				}
			});
		}


			$(this).on('click','#edit',function(e){
			var vendorid = $(this).attr('data-vendorid');
			// alert(vendorid);
			var packageid = $(this).attr('data-packageid');
			// alert(packageid);
			var image = $(this).attr('data-image');
			// alert(image);
			var currow = $(this).closest('tr');
			// alert(currow);
			var col1 = currow.find('td:eq(0)').text();
			var col2 = currow.find('td:eq(1)').text();
			var col3 = currow.find('td:eq(2)').text();
			var col4 = currow.find('td:eq(3)').text();
			var col5 = currow.find('td:eq(4)').text();

			// alert(col1);
			// alert(col2);
			// alert(col3);
			// alert(col4);
			$.ajax({
				url : "selectformshadipackage.php",
				method: "post",
				data:{vendorid:vendorid,packageid:packageid,image:image,col3:col3,col4:col4},
				success:function(data)
				{
					//alert(data);
					$('#rezult').html(data);
				}
			})

			});



			$(this).on('click','#update',function(e){
					var packageid = $(this).attr('data-packageid');
					var vendorid = $(this).attr('data-vendorid');
					var package = $('#vendor_name').val();
					var price  = $('#price').val();
					var filename = $('input[type=file]').val().replace(/C:\\fakepath\\/i, '')
					// alert(packageid);
					// alert(vendorid);
					// alert(package);
					// alert(price);
					// alert(filename);

					$.ajax({
						url:"updatepackage.php",
						method:"post",
						data:{packageid:packageid,vendorid:vendorid,package:package,price:price,filename:filename},
						success:function(success)
						{
							alert(success);
								fetchdata();
						}
					})
					


			});

			$(document).on('change',"#file",function(e){
				//alert("image changes");
				var property = document.getElementById("file").files[0];
				var imagename= property.name;
				var formdate = new FormData();
				var imageExtension = imagename.split('.').pop().toLowerCase();
				var packageid = $('#update').attr('data-packageid');
				alert(packageid);
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
					url : "updatepackage.php",
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
						//alert(data);
						('#upload_image').html(data);
					}

				})
			}
			})
		
	})
</script>





<?php include('Pages/footer.php'); ?>