<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Available Guides</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 20px; background-color: #f4f4f4;">
    <h1 style="color: #333; text-align: center;">Available Guides</h1>
    <div class="guide-container" style="display: flex; flex-wrap: wrap; justify-content: center;">
        <?php
        include 'Connection.php';

        $sql = "SELECT * FROM guides";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="guide-card" style="background-color: white; border: 1px solid #ccc; border-radius: 5px; padding: 20px; margin: 10px; width: calc(33.333% - 40px); box-sizing: border-box; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">';
                echo '<h2 style="margin-top: 0;">' . $row["name"] . '</h2>';
                echo '<p style="margin: 10px 0;">Age: ' . $row["age"] . '</p>';
                echo '<p style="margin: 10px 0;">Rate per hour: $' . $row["rate"] . '</p>';
                echo '<button style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; margin-top: 10px;" onclick="window.location.href=\'BookGuide.php\'">Book Now</button>';
                echo '</div>';
            }
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
