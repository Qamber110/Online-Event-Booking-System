
<?php 
include('../Admin/Connection.php');

   @$orgpkg = $_POST['orgpkg'];
    @$orgprice = $_POST['orgprice'];
    @$orgprid = $_POST['orgprid'];
    @$tos = $_POST['tos'];
    @$eventtpackage = $_POST['eventtpackage'];
    @$eventprice = $_POST['eventprice'];
    @$eventgetvendorid = $_POST['eventgetvendorid'];
    @$eventtos = $_POST['eventtos'];
    @$decorationid = $_POST['decorationid'];
    @$eventorangnierprice = $_POST['eventorangnierprice'];
    @$organizerpackage = $_POST['organizerpackage'];
    $date = $_POST['date'];
    @$functiontype= $_POST['functiontype'];
    $noofperson= $_POST['noofperson'];
    @$totalprice= $_POST['totalprice'];

   
   if($eventtpackage != "" &&  $eventprice != "" && $eventgetvendorid  != "" && $eventtos != "" && $decorationid != "" && $eventorangnierprice != "" && $organizerpackage)
   {
    //working
    $sql = "select * from vendor_signup where vendor_id='".$eventgetvendorid."' limit 1";
$run = mysqli_query($link,$sql);
  if(mysqli_num_rows($run)> 0)
  {
    while($row = mysqli_fetch_assoc($run))
    {
      echo '<h2>Event Venue is available on desire date<br>
    For Future Booking Details<br>
    Please Contact At: '.$row['mobile_no'].'<br>
    Email Address :'.$row['email'].'<br>
    Address: '.$row['address'].' </h2>';
    }
  }
    echo "<h1>Event Hall</h1>";
    echo '<table  class="table table-bordered">
                                        <tr>
                                            
                                            <th>price</th>
                                             <th>package</th>
                                            
                                            <th>Date</th>
                                            <th>functiontype</th>
                                            <th>noofperson</th>
                                            <th>Total</th>
                                        </tr>';


       $sql = "select * from eventvendor where name='".$decorationid."' limit 1";
$run = mysqli_query($link,$sql);
  if(mysqli_num_rows($run)> 0)
  {
    while($row = mysqli_fetch_assoc($run))
    {
      echo '<h2>Event Venue is available on desire date<br>
    For Future Booking Details<br>
    Please Contact At: '.$row['contact_no'].'<br>
    Email Address :'.$row['email'].'<br>'
   ;
    }
  }
   echo'                                
                           
                                        
                                        
                                           <tr>
                                            
                                        
                                            <td>'.$eventorangnierprice.'</td>
                                            <td>'.$organizerpackage.'</td>
                                              <td>'.$date.'</td>
                                            <td>'.$functiontype.'</td>
                                            <td>'.$noofperson.'</td>
                                            <td>'.$totalprice.'</td>
                                        </tr>


                                                                            
                           </table> ';


                            echo "<h1>Event Oragnizer</h1>";
    echo '<table  class="table table-bordered">
                                        <tr>
                                            <th>Package</th>
                                            <th>Price</th>
                                             <th>id</th>
                                            <th>services</th>
                                            
                                        </tr>
                                   
                           
                                        
                                        
                                           <tr>
                                            <td>'.$eventtpackage.'</td>
                                            <td>'.$eventprice.'</td>
                                            <td>'.$eventgetvendorid.'</td>
                                            <td>'.$eventtos.'</td>
                                           

                                            
                                        </tr>

                                        
                                                                            
                           </table> ';
   

   }

   if($orgpkg != "" && $orgprice !="" && $orgprid != "" && $tos != "")
   {
     echo "<script>alert('oragnizer')</script>";

 $sql = "select * from eventvendor where name='".$orgprid."' limit 1";
$run = mysqli_query($link,$sql);
  if(mysqli_num_rows($run)> 0)
  {
    while($row = mysqli_fetch_assoc($run))
    {
      echo '<h2>Event Venue is available on desire date<br>
    For Future Booking Details<br>
    Please Contact At: '.$row['contact_no'].'<br>
    Email Address :'.$row['email'].'<br>'
   ;
    }
  }

      echo'
      <h1>Event oragnizer</h1>
       <table  class="table table-bordered">
                                        <tr>
                                            <th>Package</th>
                                            <th>Price</th>
                                             <th>id</th>
                                            <th>services</th>
                                             <th>Date</th>
                                            <th>functiontype</th>
                                            <th>noofperson</th>
                                        </tr>
                                   
                           
                                        
                                        
                                           <tr>
                                            <td>'.$orgpkg.'</td>
                                            <td>'.$orgprice.'</td>
                                            <td>'.$orgprid.'</td>
                                            <td>'.$tos.'</td>
                                              <td>'.$date.'</td>
                                            <td>'.$functiontype.'</td>
                                            <td>'.$noofperson.'</td>
                                        </tr>
                                                                            
                           </table> ';
   }

?>
