<?php
session_start();
if(isset($_SESSION['register_success']) && $_SESSION['register_success']){
    header("refresh:5;url=login.php"); // Redirect to login page after 5 seconds
    echo "Registration successful. You will be redirected to the login page in 5 seconds.";
    unset($_SESSION['register_success']); // Unset session variable
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<h1>Registration Form</h1>
	<form method="POST" action="register.php">
		<label for="fname">First Name:</label>
		<input type="text" id="fname" name="fname" required><br>

		<label for="lname">Last Name:</label>
		<input type="text" id="lname" name="lname" required><br>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br>

		<label for="cpassword">Confirm Password:</label>
		<input type="password" id="cpassword" name="cpassword" required><br>

		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
		if(isset($_POST['submit'])){
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$cpassword = $_POST['cpassword'];

			// Validation
			if(empty($fname) || empty($lname) || empty($email) || empty($password) || empty($cpassword)){
				echo "<p>All fields are required and must not be empty.</p>";
			} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo "<p>Email address is not valid.</p>";
			} else if ($password !== $cpassword){
				echo "<p>Passwords do not match.</p>";
			} else {
				$_SESSION['register_success'] = true; // Set session variable
				// Store data to browse or database
				echo "<p>Registration successful.</p>";
			}
		}
	?>
</body>
</html>
