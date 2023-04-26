<!DOCTYPE html>
<html>

<head>
    <title>Page 2 - Additional Information</title>
</head>

<body>
    <h2>Page 2 - Additional Information</h2>
    <form action="success.php" method="post">
        <label for="location">Location:</label>
        <input type="text" name="location" required><br><br>
        <label for="age">Age:</label>
        <input type="number" name="age" required><br><br>
        <label for="university">University:</label>
        <input type="text" name="university" required><br><br>
        <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
        <input type="hidden" name="phone" value="<?php echo $_POST['phone']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>