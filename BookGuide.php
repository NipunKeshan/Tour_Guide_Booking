<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book a Guide</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 20px; background-color: #f4f4f4;">
    <h1 style="color: #333; text-align: center;">Book a Guide</h1>
    <form action="submitBooking.php" method="POST" style="max-width: 600px; margin: 0 auto; padding: 10px; border: 1px solid #ccc; border-radius: 5px; background-color: white;">
        <label for="name" style="display: block; margin-bottom: 8px;">Guide Name:</label>
        <input type="text" id="name" name="name" required style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;"><br>

        <label for="date" style="display: block; margin-bottom: 8px;">Date:</label>
        <input type="date" id="date" name="date" required style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;"><br>

        <label for="time" style="display: block; margin-bottom: 8px;">Time:</label>
        <input type="time" id="time" name="time" required style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;"><br>

        <label for="cost" style="display: block; margin-bottom: 8px;">Cost:</label>
        <input type="number" id="cost" name="cost" required style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;"><br>

        <input type="submit" value="Book Guide" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">
    </form>
</body>
</html>
