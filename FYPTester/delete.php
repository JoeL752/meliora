<?php

include 'database_connection.php';

$BookingId = $_GET['BookingId'];

// Delete genre row from table based on given genreid
$sql = ("DELETE FROM Booking WHERE BookingId='$BookingId'");
$conn->query($sql);

$prev_page = $_SERVER['HTTP_REFERER'];

 if ($conn->query($sql) === TRUE) {   
    header("Location: $prev_page");
} 
$conn->close();

?>