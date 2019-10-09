
<?php  include('Pages/header.php'); ?>
<?php  include('Pages/Navheader.php'); ?>
<?php  include('Pages/sidebar.php'); ?>


<?php $id =   $_GET['vendor_id']; ?>

 <div class="content-wrapper" >

 	

 	<center><button style="top: 10px;" class="btn btn-info" id="addnewhall">Add New Hall</button></center>

 	<table class="table table-bordered">
 		<tr>
 			<th  style="text-align: center;">Name</th>
 			
 			<th style="text-align: center;">Action</th>
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
                <h4 class="modal-title">Hall Update</h4>
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


<div class="modal fade" id="modal-success">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Package Update</h4>
              </div>
              <div class="modal-body">
<form method="post" id="upload_multipleimage" enctype="multipart/form-data">

<input type="hidden" name="vendor_id" id="hallid" value="<?php echo $id; ?>">
              	<div class="col-md-12">

              		<div class="col-md-6">
					<label>Hall Name:</label>

                <div class="input-group date">
                 
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="hall_name"  class="form-control pull-right" id="addhallname">
                </div>


                <div class="col-md-6">
					<label>capacity:</label>

                <div class="input-group date">
                  
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="capacity"  class="form-control pull-right" id="hallcapacity">
                </div>

 		

 		




					</div>




              		



<div class="col-md-12">


              		
 		
<div class="col-md-6">
					<label>Select Image:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                  
                  </div>
                  <input type="file" id="image"  class="form-control pull-right" name="image[]" multiple="multiple" accept=".jpg, .png, .gif">
                  <span id="upload_imagenew"></span>
                </div>

 		




					</div>



					</div>



              		


	
</div>
<br><br><br><br><br><br><br><br><br><br>

<div class="col-md-6">



 		
 
                  <input type="submit"  class="btn btn-success"  value="Add New Hall">


</form>
</div>

<br><br><br><br><br><br><br><br>
</div>
      </div>


 	



</div>




</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function()
	{
		fetchdata();
		function fetchdata()
		{
		var id = 	$('#hallid').val();
		//alert(id);
			$.ajax(
			{
				url:"hallfetchdata.php",
				method:"post",
				data:{id:id},
				success:function(data)
				{
					//alert(data);
					$('#vendorpackage').html(data);

					
				}
			});
		}


$(document).on('click','#addnewhall',function(e)
{
	//alert("ok");
$('#modal-success').modal('show');

});

//delete record

$(document).on('click','#delete',function(e){
	var id = $(this).attr('data-vendorid');
	alert(id);
	$.ajax({
		url:"deletehall.php",
		method:"post",
		data:{id:id},
		success:function(data)
		{
			fetchdata();
		}
	})
})

//add new hall


$('#image').on('change',function(){
	$('#upload_multipleimage').submit();

});

$('#upload_multipleimage').on('submit',function(e)
{
	e.preventDefault();
	$.ajax({
			url:"addnewhall.php",
			method :"post",
			data: new FormData(this),
			contentType :false,
			cache:false,
			processData:false,
			success:function(e)
			{
				alert(e);
				//$('#image').val();
			}
		});
});



// $(document).on('submit','#upload_multipleimage',function(e){
// 	e.preventDefault();
// 	alert("0");
// 	var imagename = $('#image').val();
// 	if(imagename == "")
// 	{
// 		alert ("please Select the image");
// 		return false;

// 	}
// 	else
// 	{
// 		$.ajax({
// 			url:"addnewhall.php",
// 			method :"post",
// 			data: new FormData(this),
// 			contentType :false,
// 			cache:false,
// 			processData:false,
// 			success:function(e)
// 			{
// 				alert(e);
// 				$('#image').val();
// 			}
// 		})
// 	}
// });


// $(document).on('change',"#imageselectdatabase",function(e){
// 				//alert("image changes");
// 				// var property = document.getElementById("imageselectdatabase").files[0];
// 				// var imagename= property.name;

// 				var files = $('#imageselectdatabase')[0].files;
// 				var formdate = new FormData();
// 				// var imageExtension = imagename.split('.').pop().toLowerCase();
// 				var hallname = $('#addhallname').val();
// 				alert(hallname);
// 				var hallcapacity = $('#hallcapacity').val();
// 				alert(hallcapacity);
				
// 				var hallid = $('#hallid').val();
// 				alert(hallid);

// 					for(var i = 0;i<files.length;i++)
// 					{
// 						var name = document.getElementById("imageselectdatabase").files[i].name;
						
// 					var imageExtension = name.split('.').pop().toLowerCase();
// 					if(jQuery.inArray(imageExtension,['gif','png','jpg','jpeg']) == -1)
// 				{
// 					alert("invalid image file");
// 				}


// 				var imagesize = name.size;
// 				if(imagesize > 2000000)
// 				{
// 					alert("image size is very big");
// 				}
// 				formdate.append("hallid",hallid);
// 				formdate.append("hallname",hallname);
// 				formdate.append("hallcapacity",hallcapacity);
				
// 				formdate.append("file[]",document.getElementById("imageselectdatabase").files[i]);
// 				$.ajax({
// 					url:"addnewhall.php",
// 					method:"POST",
// 					data:formdate,
// 					contentType:false,
// 					cache:false,
// 					processData:false,
// 					beforeSend:function()
// 					{
// 						$('#upload_imagenew').html('<label class="text-success">Image Uploading...</label>');
// 					},
// 					success:function(data)
// 					{
// 						alert(data);
// 						//alert(data);
// 						fetchdata();
// 						//alert(data);
// 						//('#upload_image').html(data);
// 					}

// 				});
// 			}
			
// 			});









			$(this).on('click','#edit',function(e){

				var id = $(this).attr('data-vendorid');
				//alert(id);
				//alert(id);
				$.ajax({
					url : "showhallfetch.php",
					method:"post",
					data:{id:id},
					success:function(response)
					{

						$('#rezult').html(response);
						

					}
				});

				//alert(id);
			});



$(document).on('click','#update',function(e){
	alert("ok");
	var id = $(this).attr('data-id');
	alert(id);
	var hallname = $('#first').val();
	alert(hallname);
	var capacity = $('#last_name').val();
	$.ajax({
		url : "updatevendorhall.php",
		method:"POST",
		data:{id:id,hallname:hallname,capacity:capacity},
		success:function(data)
		{
			//alert(data);
			fetchdata();
		}
	})
});

			


			
			// $(document).on('change',"#file",function(e){
			// 	//alert("image changes");
			// 	var property = document.getElementById("file").files[0];
			// 	var imagename= property.name;
			// 	var formdate = new FormData();
			// 	var imageExtension = imagename.split('.').pop().toLowerCase();
			// 	var hallid = $('#update').attr('data-id');
			// 	alert(hallid);
			// 	if(jQuery.inArray(imageExtension,['gif','png','jpg','jpeg']) == -1)
			// 	{
			// 		alert("invalid image file");
			// 	}
			// 	var imagesize = property.size;
			// 	if(imagesize > 2000000)
			// 	{
			// 		alert("image size is very big");
			// 	}
			// 	else
			// 	{

			// 	formdate.append("hallid",hallid);
			// 	formdate.append("file",property);
			// 	$.ajax({
			// 		url : "updatevendorhall.php",
			// 		method:"POST",
			// 		data:formdate,
			// 		contentType:false,
			// 		cache:false,
			// 		processData:false,
			// 		beforeSend:function()
			// 		{
			// 			$('#upload_image').html('<label class="text-success">Image Uploading...</label>');
			// 		},
			// 		success:function(data)
			// 		{
			// 			//alert(data);
			// 			('#upload_image').html(data);
			// 		}

			// 	});
			// }
			// });
		
	});
</script>





<?php include('Pages/footer.php'); ?>