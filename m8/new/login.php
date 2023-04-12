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
    } else {
        // Replace these variables with your own logic to check if the login information is correct
        define( 'EMAIL', 'admin@gmail.com' );
        define( 'PASS', 'Password123' );
        $firstName = 'John';
        if ( $email !== EMAIL && $password !== PASS ) {
            echo "Password or email dose not match";
        } else {
            header( 'location: welcome.php?name=' . $firstName );
        }
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Custom CSS -->
    <style>

    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="login-form">
                    <h2>Login</h2>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                            <span><?php if ( isset( $email_err ) ) {echo $email_err;}?></span>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                            <span><?php if ( isset( $password_err ) ) {echo $password_err;}?></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="login" class="btn btn-block">Login</button>
                        </div>
                    </form>
                    <span><?php if ( isset( $success ) ) {echo $success;}?></span>
                    <span><?php if ( isset( $login_err ) ) {echo $login_err;}?></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>