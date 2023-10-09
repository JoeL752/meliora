<?php

session_start();
include 'database_connection.php';

$date = $_POST['date'];
$time = $_POST['time'];
$BookingId = $_GET['BookingId'];


$sql = "UPDATE Booking SET Date='$date', Time='$time' WHERE BookingId='$BookingId'";

$conn->query($sql);

header("Location:customer.php"); 

?>

