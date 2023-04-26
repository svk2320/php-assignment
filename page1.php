<!DOCTYPE html>
<html>

<head>
	<title>Page 1 - Personal Information</title>
</head>

<body>
	<h2>Page 1 - Personal Information</h2>
	<form action="page2.php" method="post">
		<label for="name">Name:</label>
		<input type="text" name="name" required><br><br>
		<label for="phone">Phone Number:</label>
		<input type="tel" name="phone" required><br><br>
		<label for="email">Email:</label>
		<input type="email" name="email" required><br><br>
		<input type="submit" name="submit" value="Next">
	</form>
</body>

</html>