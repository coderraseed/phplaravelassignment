<?php
session_start();

// Redirect to welcome page if user is already logged in
if(isset($_SESSION['email'])){
    header("location: welcome.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<h1>Login Form</h1>
	<form method="POST" action="login.php">
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br>

		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
		if(isset($_POST['submit'])){
			$email = $_POST['email'];
			$password = $_POST['password'];

			// Validation
			if(empty($email) || empty($password)){
				echo "<p>All fields are required and must not be empty.</p>";
			} else {
				// Check if email and password match with registered user
				// Assuming data is stored in an array
				$registered_users = array(
					array("fname"=>"John", "lname"=>"Doe", "email"=>"john@example.com", "password"=>"password"),
					array("fname"=>"Jane", "lname"=>"Doe", "email"=>"jane@example.com", "password"=>"password")
				);

				$is_valid_login = false;
				foreach ($registered_users as $user) {
					if ($user['email'] === $email && $user['password'] === $password) {
						$is_valid_login = true;
						$_SESSION['email'] = $email;
						$_SESSION['fname'] = $user['fname'];
						header("location: welcome.php");
						exit();
					}
				}

				if (!$is_valid_login) {
					echo "<p>Invalid login credentials.</p>";
				}
			}
		}
	?>
</body>
</html>
