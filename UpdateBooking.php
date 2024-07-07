<?php
include 'Connection.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM bookings WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No record found";
        exit;
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $cost = $_POST['cost'];

    $sql = "UPDATE bookings SET name='$name', date='$date', time='$time', cost='$cost' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: BookingDetails.php");
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Booking</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Update Booking</h1>
    <form action="UpdateBooking.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="name">Guide Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required><br><br>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" value="<?php echo $row['date']; ?>" required><br><br>

        <label for="time">Time:</label>
        <input type="time" id="time" name="time" value="<?php echo $row['time']; ?>" required><br><br>

        <label for="cost">Cost:</label>
        <input type="number" id="cost" name="cost" value="<?php echo $row['cost']; ?>" required><br><br>

        <input type="submit" value="Update Booking">
    </form>
</body>
</html>
