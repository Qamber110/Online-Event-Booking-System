<?php  include('Pages/header.php') ?>

<?php include('Pages/Navheader.php') ?>
<?php  include('Pages/sidebar.php') ?>

 <div class="content-wrapper">
<form method="post" enctype="multipart/form-data" >
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Vendor Sign up</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <div class="col-lg-12">
              <div class="col-lg-6">
                  <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" name="name" >
                  </div>
               

               
                

              </div>

              <div class="col-lg-6">
                  <div class="form-group">
                  <label for="exampleInputFile">Upload Image</label>
                  <input type="file" name="image">

                 
                </div>
               

               
                

              </div>


            </div>





            <div class="col-lg-12">

              <div class="col-md-6">
             
                 <div class="form-group">
                <label>Location</label>
                <select name="city" id="selectcountry" class="form-control select2" style="width: 100%;">
                  <option selected="selected">Selected</option>
                  <option value="Rawalpindi">Rawalpindi</option>
                  <option value="islamabad">Islamabad</option>
                 
                  
                </select>
              </div>
</div>
               
                

            

              <div class="col-lg-6">
                 <div class="form-group">
                  <label for="exampleInputEmail1">area</label>
                  <input type="text" class="form-control" name="area" >
                </div>
              </div>


            </div>




            <div class="col-lg-12">
             

           

         



            

              <div class="col-lg-6">
                 <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <textarea rows="10" cols="10" class="form-control" name="desc"></textarea>
                </div>
              </div>


            </div>

          </div>
           
             

              <div class="box-footer">
                <center><button type="submit" name="submit" class="btn btn-primary">Submit</button></center>
              </div>
    </div>
            </form>



<?php include('Pages/footer.php') ?>


<?php 

include('Connection.php');

if(isset($_POST['submit']))
{
  

$name = $_POST['name'];

$area = $_POST['area'];
$city = $_POST['city'];
$desc = $_POST['desc'];


    $image_name = $_FILES['image']['name'];
       $image_temp = $_FILES['image']['tmp_name'];
      $image_type = $_FILES['image']['type'];

      $imagewithname = "eventvendorimages/" . $_FILES['image']['name'];

$upload = move_uploaded_file($_FILES["image"]["tmp_name"],'eventvendorimages/' . $_FILES['image']['name']);
         if($upload) 
         {
          $query= "select * from eventvendor where name='".$name."' and city='".$city."' and area='".$area."' and image='".$imagewithname."'";
          $run = mysqli_query($link,$query);
          $rowcount = mysqli_num_rows($run);
          if($rowcount > 0)
          {

          }
          else
          {
            $sql = "INSERT INTO `eventvendor`(`name`, `city`, `area`, `description`, `image`) values ('".$name."','".$city."','".$area."','".$desc."','".$imagewithname."')";
  //echo($sql);
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
    
  //  header("location)
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
          }

  
}
 
// Close connection
mysqli_close($link);
}



?>




