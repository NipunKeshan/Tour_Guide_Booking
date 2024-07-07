<?php
include 'Connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $cost = $_POST['cost'];

    $sql = "INSERT INTO bookings (name, date, time, cost) VALUES ('$name', '$date', '$time', '$cost')";

    if ($conn->query($sql) === TRUE) {
        header("Location: BookingDetails.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
