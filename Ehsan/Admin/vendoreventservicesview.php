<?php  include('Pages/header.php'); ?>
<?php  include('Pages/Navheader.php'); ?>
<?php  include('Pages/sidebar.php'); ?>

 <div class="content-wrapper" >
 	<?php $id = $_GET['id']; ?>
 	<input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
 	<table class="table table-bordered" id="tablehide">
 		<tr>
 			<th  style="text-align: center;">Name</th>
 			<th stye="text-align:center;">Package</th>
 			<th stye="text-align:center;">Services</th>
 			<th>Action</th>
 		</tr>
 		
<tbody id="showdata">
 		
</tbody>
<tbody id="response"></tbody>
 	</table>



 </div>

 <?php include('Pages/footer.php'); ?>


 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
		$(document).ready(function(){
			fetchdata();

			function fetchdata(e)
			{
				var id = $('#id').val();
				//alert(id);
				//e.preventDefault();
				//event.preventDefault();
					$.ajax({
					url : "fetchdatavendoreventservices.php",
					method:"post",
					data:{id:id},
					success:function(response)
					{
				//		alert(response);
						//alert(response);
						$('#showdata').html(response);
						

					}
				});
			}

			$(document).on('click',"#edit",function(e){
				var eventvendorid = $(this).attr('data-vendorid');
				alert(eventvendorid);
				
				var tos = $("#tos").val();
				//alert(tos);
				var package = $('#Package').val();
				//alert(package);
				$.ajax({
					url:"fetchdatavendoreventservices.php",
					method:"post",
					data:{eventvendorid:eventvendorid,tos:tos,package:package},
					success:function(data)
					{
						alert(data);
						if(data == "Success")
						{
								$('#tablehide').hide();
						}
				//		alert(data);
					fetchdata();

					}
				});
			});

			$(document).on('click',"#delete",function(e)
			{
				var deleteid = $(this).attr('data-vendor_id');
				alert(deleteid);
				$.ajax({
					url:"fetchdatavendoreventservices.php",
					method:"post",
					data:{deleteid:deleteid},
					success:function(data)
					{
						
				
					fetchdata();

					}
				});
			});

			});


		</script>