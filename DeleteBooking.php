<?php
include 'Connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM bookings WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: BookingDetails.php");
        exit;
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>
