<?php
session_start();



?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--Author      : @arboshiki-->
<div id="invoice">


	<?php 



		if(isset($_POST['done']))
		{

			         if(isset($_POST['getvendorid']))
                     {

                $getvendorid = $_POST['getvendorid'];
                echo "hall Oraginer";
                    }
                    else {
                         if(isset($_POST['geteventvendor']) && ($_POST['tos']) &&  ($_POST['getvendoridnew']))

                            echo "Event Oraginer and hall Oraginer";
                        
                       echo $package =    $_SESSION['newpackage'];
                     echo   $price  = $_SESSION['newprice'];
                      }  



		 


		}


	?>

	<form method="post" action="submitasguest.php">




<section class="content content_content" style="width: 70%; margin: auto;">
                    <section class="invoice">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-xs-12">
                                <h2 class="page-header">
                                    <i class="fa fa-globe"></i> Event Ahsan.
                                    <small name="total" class="pull-right">Date: <?php // echo $date; ?></small>
                                </h2>
                            </div><!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                From
                                <address>
                                    <strong>
                                                                            </strong>
                                </address>
                            </div><!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                To
                                <address>
                                    <strong>
                                        Shahid                                    </strong>
                                    <br>
                                    Address:
                                    Kollanpur                                    <br>
                                    Phone:
                                    123456789                                   <br>
                                    Email:ggggg@gmail.com                                </address>
                            </div><!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                <b>Invoice #007612</b><br>
                                <br>
                                <b>Order ID:</b> 4F3S8J<br>
                                <b>Payment Due:</b> 2/22/2014<br>
                                <b>Account:</b> 968-34567
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <!-- Table row -->
                        <div class="row">
                            <div class="col-xs-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Function</th>
                                            <th>Person</th>
                                             <th>location</th>
                                            <th>Sub Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        
                                                                                <tr>
                                            <td><?php // echo $type; ?></td>
                                            <td><?php // echo $area; ?></td>
                                            <td><?php // echo $selectcountry; ?></td>
                                            <td>25000</td>
                                        </tr>
                                                                            </tbody>
                                </table>
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-md-12">
                                <p class="lead">Amount Due 2/22/2014</p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            
                                            
                                            <tr>
                                                <th>Total:</th>
                                                <td> <?php // echo $total; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-xs-12">
                                <a href="" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                                <button name="guest" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment as Guest</button>
                                <button  class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Login</button>
                            </div>
                        </div>
                    </section>
                </section>
</div>
</form>
<style type="text/css">
	.invoice {
    position: relative;
    background: #fff;
    border: 1px solid #f4f4f4;
    padding: 20px;
    margin: 10px 25px;
}
.page-header {
    margin: 10px 0 20px 0;
    font-size: 22px;
}
</style>>