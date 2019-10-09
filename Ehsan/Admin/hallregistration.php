<?php  include('Pages/header.php') ?>

<?php include('Pages/Navheader.php') ?>
<?php  include('Pages/sidebar.php') ?>

 <div class="content-wrapper">
<form method="post" action="vendorhallregistration.php" enctype="multipart/form-data" >
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Hall Registration</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <div class="col-lg-12">
              <div class="col-lg-6">
                  <div class="form-group">
                  <label for="exampleInputEmail1">Hall Name</label>
                  <input type="text" class="form-control" name="noofhall" >
                  </div>
               

               
                

              </div>

             


            </div>




            <div class="col-lg-12">
              <div class="col-lg-6">
                  <div class="form-group">
                  <label for="exampleInputEmail1">Hall Capacity</label>
                  <input type="text" class="form-control" name="Hall1Capacity" >
                </div>
               
               

               
                

              </div>

             


            </div>

             <div class="col-lg-12">
              <div class="col-lg-6">
                  <div class="form-group">
                  <label for="exampleInputEmail1">Upload  Image</label>
                  <input type="file" name="image" class="form-control" name="Hall1Capacity" >
                </div>
               
               

               
                

              </div>

             


            </div>




              <div class="col-lg-6">
                 <div class="form-group">
                  
                  <input type="submit" class="btn btn-success" name="submit" >
                </div>
              </div>



          </div>



        </form>


      </div>



      <?php include('../Pages/footer.php') ?>