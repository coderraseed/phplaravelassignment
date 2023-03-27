<?php
// define variables and initialize with empty values
$fname     = $lname     = $email     = $password     = $confirm_password     = "";
$fname_err = $lname_err = $email_err = $password_err = $confirm_password_err = "";
// check if form is submitted
if ( isset( $_POST['submit'] ) ) {

    // Validate the first name field
    if ( !empty( $_POST['fname'] ) ) {
        $name = htmlspecialchars( trim( $_POST['fname'] ) );
        // Check if the name contains only letters and whitespace
        if ( !preg_match( '/^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/', $name ) ) {
            $fname_err = 'Only letters, apostrophes, commas, periods, hyphens, and spaces allowed';
        }
        // Check if the length of the name is within a reasonable limit
        if ( strlen( $name ) > 50 ) {
            $fname_err = 'Name is too long';
        }
    } else {
        $fname_err = 'Name is required';
        exit;
    }

    // Validate the last name field
    if ( !empty( $_POST['lname'] ) ) {
        $name = htmlspecialchars( trim( $_POST['lname'] ) );
        // Check if the name contains only letters and whitespace
        if ( !preg_match( '/^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/', $name ) ) {
            $lname_err = 'Only letters, apostrophes, commas, periods, hyphens, and spaces allowed';
        }
        // Check if the length of the name is within a reasonable limit
        if ( strlen( $name ) > 50 ) {
            $lname_err = 'Name is too long';
        }
    } else {
        $lname_err = 'Name is required';
        exit;
    }

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
        if ( strlen( $password ) < 8 ) {
            $password_err = 'Password must be at least 8 characters long';
        } elseif ( !preg_match( '/[A-Z]/', $password ) ) {
            $password_err = 'Password must contain at least one uppercase letter';
        } elseif ( !preg_match( '/[a-z]/', $password ) ) {
            $password_err = 'Password must contain at least one lowercase letter';
        } elseif ( !preg_match( '/[0-9]/', $password ) ) {
            $password_err = 'Password must contain at least one number';
        } else {
            $pass_word = md5( $password );
        }
    } else {
        $password_err = 'Password is required';
        exit;
    }

    // Validate the confirm password field
    if ( !empty( $_POST['confirmPassword'] ) ) {
        $confirm_password = htmlspecialchars( trim( $_POST['confirmPassword'] ) );
        // Check if the passwords match
        if ( $password !== $confirm_password ) {
            $confirm_password_err = 'Passwords do not match';
        }
    } else {
        $confirm_password_err = 'Please confirm your password';
        exit;
    }

    if ( empty( $fname_err ) && empty( $lname_err ) && empty( $email_err ) && empty( $password_err ) && empty( $confirm_password_err ) ) {
        // TODO: Insert data into database

        // Show success message
        $success_msg = 'Registration successful! Redirecting to login page in 5 seconds...';
        // Redirect to login page after 5 seconds
        header( "refresh:5; url=login.php" );
    }

}

