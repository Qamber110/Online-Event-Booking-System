<?php  include('Pages/header.php') ?>

<?php  include('Pages/Navheader.php') ?>
<?php   include('Pages/sidebar.php') ;?>
<?php include('Connection.php')?>


 <div class="content-wrapper">
<form method="post" action="vendorimageresize.php" enctype="multipart/form-data" >
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Vendor Sign up</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

           




          







            <div class="col-lg-12">
              <div class="col-lg-6">
                  <div class="form-group">
                  <label for="exampleInputFile">Service</label>
                  <select name="tos" class="form-control select2">
                    <option value="Decoration">Decoration</option>
                      <option value="Music">Music</option>
                        <option value="Lighting">Lighting</option>
                          <option value="Catering">Catering</option>
                  </select>

                 
                </div>
               

               
                

              </div>

              <div class="col-md-6">
      <div class="form-group">
         <label>Name</label>
 <select name="vendoreventname" id="selectcountry" class="form-control select2" style="width: 100%;">
  <option selected="selected">Selected</option>
               
                <?php 
                echo  $query = "SELECT * FROM `eventvendor`";
                  $run = mysqli_query($link,$query);
                  $rowcount = mysqli_num_rows($run);
                  if($rowcount > 0)
                  {
                    while($row = mysqli_fetch_assoc($run))
                    {

?>
  <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></option>

<?php 
                    }
                  }
                ?>
               
                  
                  
                  
                 
                  
                </select>
              </div>

 </div>

             </div>



            <div class="col-lg-12">
              <div class="col-lg-6">
                  <div class="form-group">
                  <label for="exampleInputFile">Packages</label>
                  <select name="Package" class="form-control select2">
                    <option value="Package1">Package 1</option>
                      <option value="Package2">Package 2</option>
                        <option value="Package3">Package 3</option>
                          
                  </select>

                 
                </div>
               

               
                

              </div>


              <div class="col-lg-6">
                  <div class="form-group">
                  <label for="exampleInputFile">Image</label>
                  <input type="file" name="file" class="form-control select2">
                    

                 
                </div>
               

               
                

              </div>

              


            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label for="exampleInputFile">Price</label>
                <input type="text" name="price" class="form-control">
              </div>
            </div>
           
             

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </div>
    </div>
            </form>
</div>



<?php include('Pages/footer.php') ?>

