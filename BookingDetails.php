<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking Details</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 20px; background-color: #f4f4f4;">
    <h1 style="color: #333; text-align: center;">Booking Details</h1>
    <table style="width: 100%; border-collapse: collapse;">
        <tr>
            <th style="padding: 8px; text-align: left; background-color: #f2f2f2; border: 1px solid #ddd;">Guide Name</th>
            <th style="padding: 8px; text-align: left; background-color: #f2f2f2; border: 1px solid #ddd;">Date</th>
            <th style="padding: 8px; text-align: left; background-color: #f2f2f2; border: 1px solid #ddd;">Time</th>
            <th style="padding: 8px; text-align: left; background-color: #f2f2f2; border: 1px solid #ddd;">Cost</th>
            <th style="padding: 8px; text-align: left; background-color: #f2f2f2; border: 1px solid #ddd;">Action</th>
        </tr>
        <?php
        include 'Connection.php';

        $sql = "SELECT * FROM bookings";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td style='padding: 8px; border: 1px solid #ddd;'>" . $row["name"] . "</td>";
                echo "<td style='padding: 8px; border: 1px solid #ddd;'>" . $row["date"] . "</td>";
                echo "<td style='padding: 8px; border: 1px solid #ddd;'>" . $row["time"] . "</td>";
                echo "<td style='padding: 8px; border: 1px solid #ddd;'>" . $row["cost"] . "</td>";
                echo "<td style='padding: 8px; border: 1px solid #ddd;'><a href='UpdateBooking.php?id=" . $row["id"] . "' style='color: #007BFF; text-decoration: none;'>Update</a> | <a href='DeleteBooking.php?id=" . $row["id"] . "' style='color: #FF0000; text-decoration: none;'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5' style='padding: 8px; text-align: center; border: 1px solid #ddd;'>No bookings found</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>
