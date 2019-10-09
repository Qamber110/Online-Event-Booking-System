<?php
session_start();

 $id =  $_SESSION['vendor_id']; 

include('../Admin/Connection.php');

$title = isset($_POST['title']) ? $_POST['title'] : "";
$start = isset($_POST['start']) ? $_POST['start'] : "";
$end = isset($_POST['end']) ? $_POST['end'] : "";

$time = isset($_POST['time']) ? $_POST['end'] : "";

echo $sqlInsert = "INSERT INTO vendor_schedule (title,start_date,end_date,type) VALUES ('".$title."','".$start."','".$end ."','".$time."')";

$result = mysqli_query($link, $sqlInsert);

if (! $result) {
    $result = mysqli_error($link);
}
?>
?>