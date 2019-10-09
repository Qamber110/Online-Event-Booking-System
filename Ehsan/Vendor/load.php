<?php 


$link = mysqli_connect("localhost", "root", "", "AlEhsan_Project");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


    require_once "../Admin/Connection.php";

    $json = array();
    $sqlQuery = "SELECT * FROM vendor_schedule";

    $result = mysqli_query($link, $sqlQuery);
    $eventArray = array();
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($eventArray, $row);
    }
    mysqli_free_result($result);

    mysqli_close($link);
    echo json_encode($eventArray);
?>


?>