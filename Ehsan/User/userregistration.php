<?php  include('Pages/header.php') ?>

<?php include('Pages/Navheader.php') ?>
<?php  include('Pages/sidebar.php') ?>

 <div class="content-wrapper">
<form method="post" action="userdatabase.php" enctype="multipart/form-data" >
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">User Sign up</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <div class="col-lg-12">
              <div class="col-lg-6">
                  <div class="form-group">
                  <label for="exampleInputEmail1">First Name</label>
                  <input type="text" class="form-control" name="first_name" >
                  </div>
               

               
                

              </div>

              <div class="col-lg-6">
                 <div class="form-group">
                  <label for="exampleInputEmail1">Last Name</label>
                  <input type="text" class="form-control" name="last_name" >
                </div>
              </div>


            </div>




            <div class="col-lg-12">
              <div class="col-lg-6">
                  <div class="form-group">
                  <label for="exampleInputEmail1">Mobile NO</label>
                  <input type="text" class="form-control" name="mobileno" >
                </div>
               
               

               
                

              </div>


              <div class="col-lg-6">
                  <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" class="form-control" name="email">
                  </div>
               

               
                

              </div>

            


            </div>








            <div class="col-lg-12">
            

              


            </div>




            <div class="col-lg-12">
              <div class="col-lg-6">
                  <div class="form-group">
                  <label for="exampleInputEmail1">username</label>
                  <input type="text" class="form-control" name="username">
                  </div>
               

               
                

              </div>

              <div class="col-lg-6">
                 <div class="form-group">
                  <label for="exampleInputEmail1">password</label>
                  <input type="password" class="form-control" name="password">
                </div>
              </div>


            </div>
           
             

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </div>
    </div>
            </form>
</div>



<?php include('Pages/footer.php') ?>




