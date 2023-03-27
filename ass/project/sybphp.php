<?php
session_start();

/*  */
// Define variables and initialize with empty values
$email     = $password     = "";
$email_err = $password_err = "";

if ( isset( $_POST['login'] ) ) {

    // Validate the email field
    if ( isset( $_POST['email'] ) ) {
        $email = trim( $_POST['email'] );
        if ( empty( $email ) ) {
            $email_err = 'Email is required';
        } else if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
            $email_err = 'Invalid email format';
        } else if ( strlen( $email ) > 50 ) {
            $email_err = 'Email is too long (maximum 50 characters)';
        }
    } else {
        $email_err = 'Email is required';
        exit;
    }

    // Validate the password field
    if ( !empty( $_POST['password'] ) ) {
        $password = trim( $_POST['password'] );
        if ( strlen( $password ) < 5 ) {
            $password_err = 'Password must be at least 8 characters long';
        } elseif ( !preg_match( '/[A-Z]/', $password ) ) {
            $password_err = 'Password must contain at least one uppercase letter';
        } elseif ( !preg_match( '/[a-z]/', $password ) ) {
            $password_err = 'Password must contain at least one lowercase letter';
        } elseif ( !preg_match( '/[0-9]/', $password ) ) {
            $password_err = 'Password must contain at least one number';
        }
    } else {
        $password_err = 'Password is required';
        exit;
    }
    if ( !empty( $email_err ) && !empty( $password_err ) ) {
        echo "Please enter your username and password.";
    }else{
        // Replace these variables with your own logic to check if the login information is correct
        define( 'EMAIL', 'admin@gmail.com' );
        define( 'PASS', 'Password123' );
        $registered_first_name = 'John';
        if ( $email !== EMAIL && $password !== PASS ) {
            echo "Password or email dose not match";
        } else {
            echo "Login Successfully";
            // Set the session variable to the registered first name
            //$_SESSION['first_name'] = $registered_first_name;
            header( 'location: welcome.php' );
        }
    }

}
/* 
session_start();

if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
    // Check if the username and password are not empty
    if ( empty( $_POST["username"] ) && empty( $_POST["password"] ) ) {
        echo "Please enter your username and password.";
    } else {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Check if the username and password are valid
        if ( $username == "john" && $password == "doe" ) {
            $_SESSION["loggedin"] = true;
            header( "location: welcome.php" );
        } else {
            echo "Invalid username or password.";
        }
    }
} */
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<h2>Login Form</h2>
	<form method="post" action="">
		<label>Username:</label>
		<input type="text" name="email" ><br><br>
		<label>Password:</label>
		<input type="password" name="password" ><br><br>
		<input type="submit" value="Login" name="login">
	</form>
</body>
</html>

