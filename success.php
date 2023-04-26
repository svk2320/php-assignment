<!DOCTYPE html>
<html>

<head>
    <title>Success</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $location = $_POST['location'];
        echo "<h2>Thank you for filling the form, $name!</h2>";
        echo "<p>Your information:</p>";
        echo "<ul>";
        echo "<li>Phone Number: " . $_POST['phone'] . "</li>";
        echo "<li>Email: " . $_POST['email'] . "</li>";
        echo "<li>Location: $location</li>";
        echo "<li>Age: " . $_POST['age'] . "</li>";
        echo "<li>University: " . $_POST['university'] . "</li>";
        echo "</ul>";
    }
    ?>
</body>

</html>