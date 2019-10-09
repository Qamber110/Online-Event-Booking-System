

<?php  include('Pages/header.php'); ?>
<?php  include('Pages/Navheader.php'); ?>
<?php  include('Pages/sidebar.php'); ?>
<?php
 	include('Connection.php');

 	if(isset($_GET['id']))
 	{
 		$id = $_GET['id'];
 	}
 	if(isset($_GET['hall']))
 	{
 		$hallname = $_GET['hall'];
 	}
?>
 <div class="content-wrapper" >


<form method="post" id="upload_multipleimage" enctype="multipart/form-data">

	<input type="hidden" name="hallname" value="<?php echo $hallname; ?>">
	<input type="hidden" name="vendorid" value="<?php echo $id; ?>">
 		
<div class="col-md-6">
					<label>Select Image:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                  
                  </div>
                  <input type="file" id="image"  class="form-control pull-right" name="image[]" multiple="multiple" accept=".jpg, .png, .gif">
                  <span id="upload_imagenew"></span>
                </div>

 		




					</div>


				</form>

<div>
	<input type="hidden" id="id" value="<?php echo $id; ?>">
	<input type="hidden" id="hall" value="<?php echo $hallname; ?>">
</div>


<table class="table table-bordered">
	<tr>
		<td>S.No</td>
		<td>Images</td>
		<td>Edit / Delete</td>
	</tr>
	<tbody id="image_table"></tbody>
	
</table>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">
		$(document).ready(function(e)
		{
			fetchdata();
			function fetchdata()
			{
				var id = $('#id').val();
				var hall = $('#hall').val();
				$.ajax({
					url:"viewhallimageshow.php",
					data:{id:id,hall:hall},
					method:"post",
					success:function(data)
					{
						$('#image_table').html(data);
					}
				})
			}

			$(document).on('click',"#delete",function(e)
			{
				var hallimagesid = $(this).attr('data-id');
				//alert(hallimagesid);
				$.ajax({
					url:"viewhallimageshow.php",
					data:{hallimagesid:hallimagesid},
					method:"post",
					success:function(e)
					{
				//		alert(e);
						fetchdata();
					}
				})
			});

			$('#image').on('change',function(){
	$('#upload_multipleimage').submit();

});

$('#upload_multipleimage').on('submit',function(e)
{
	e.preventDefault();
	$.ajax({
			url:"addnewhallimages.php",
			method :"post",
			data: new FormData(this),
			contentType :false,
			cache:false,
			processData:false,
			success:function(e)
			{
				
				fetchdata();
				//$('#image').val();
			}
		});
});

		});


</script>