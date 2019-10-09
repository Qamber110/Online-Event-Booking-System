<?php  include('Pages/header.php') ?>

<?php include('Pages/Navheader.php') ?>
<?php // include('Pages/sidebar.php') ?>

<style type="text/css">
  .wrapper {
  margin-right: auto; /* 1 */
  margin-left:  auto; /* 1 */

  max-width: 960px; /* 2 */

  padding-right: 10px; /* 3 */
  padding-left:  10px; /* 3 */
}
</style>

 <div class="content-wrapper" id="wrapper">
<form method="post" action="loginvendor.php" enctype="multipart/form-data" >
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Login</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control" name="email" placeholder="Username">
                </div>
               

                <div class="form-group">
                  <label for="exampleInputEmail1">Password</label>
                  <input type="password" class="form-control" name="contact" placeholder="password">
                </div>
               

             
              
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </div>
    </div>
            </form>
</div>



<?php include('Pages/footer.php') ?>




