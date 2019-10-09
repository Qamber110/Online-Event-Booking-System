<?php  include('Pages/header.php') ?>

<?php include('Pages/Navheader.php') ?>
<?php  include('Pages/sidebar.php') ?>

 <div class="content-wrapper">
<form method="post" action="vendor_signupdatabase.php" enctype="multipart/form-data" >
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Vendor Sign up</h3>
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
                  <label for="exampleInputEmail1">land Line</label>
                  <input type="text" class="form-control" name="land_line" >
                </div>
              </div>


            </div>




            <div class="col-lg-12">
              <div class="col-lg-6">
                  <div class="form-group">
                  <label for="exampleInputEmail1">Vendor Name</label>
                  <input type="text" class="form-control" name="vendor_name" >
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
                  <label for="exampleInputFile">Upload Image</label>
                  <input type="file" name="image">

                 
                </div>
               

               
                

              </div>

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

            <div class="col-lg-12">
              <div class="col-lg-6">
                  <div class="form-group">
                  <label for="exampleInputEmail1">email</label>
                  <input type="text" class="form-control" name="email">
                  </div>
               

               
                

              </div>

              <div class="col-lg-6">
                 <div class="form-group">
                  <label for="exampleInputEmail1">address</label>
                  <input type="password" class="form-control" name="address">
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




