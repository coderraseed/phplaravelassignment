<?php
session_start();

// Redirect to login page if user is not logged in
if(!isset($_SESSION['email'])){
    header("location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
	<h1>Welcome <?php echo $_SESSION['fname']; ?></h1>

	<p>Your email address is <?php echo $_SESSION['email']; ?></p>

	<a href="logout.php">Logout</a>
</body>
</html>
