<?php
if ( isset( $_POST['submit'] ) ) {
    // define variables and initialize with empty values
    $name         = $subject         = $email         = $message         = "";
    $name_err     = $subject_err     = $email_err     = $message_err     = "";

    // Name validation
    if ( !empty( $_POST['name'] ) ) {
        $name = htmlspecialchars( trim( $_POST['name'] ) );
        // Check if the name contains only letters and whitespace
        if ( !preg_match( '/^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/', $name ) ) {
            $name_err = 'Name can only contain letters, apostrophes, commas, periods, hyphens, and spaces.';
        }
        // Check if the length of the name is within a reasonable limit
        if ( strlen( $name ) > 50 || strlen( $name ) < 5 ) {
            $name_err = 'Name should be between 5 and 50 characters.';
        }
    } else {
        $name_err = 'Name is required.';
    }

    // Email validation
    if ( !empty( $_POST['email'] ) ) {
        $email = $_POST['email'];
        if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
            $email_err = 'Invalid email format.';
        } else if ( strlen( $email ) > 100 ) {
            $email_err = 'Email is too long (maximum 100 characters).';
        } else if ( strlen( $email ) < 5 ) {
            $email_err = 'Email is too short (minimum 5 characters).';
        } else {
            $valid_domains = [ "example.com", "example.org", "example.net" ];
            $email_domain  = substr( strrchr( $email, "@" ), 1 );
            if ( !in_array( $email_domain, $valid_domains ) ) {
                $email_err = 'Invalid email domain.';
            }
        }
    } else {
        $email_err = 'Email is required.';
    }

    // Subject validation
    if ( !empty( $_POST['subject'] ) ) {
        $subject = $_POST['subject'];
        if ( strlen( $subject ) > 100 ) {
            $subject_err = 'Subject is too long (maximum 100 characters).';
        } else if ( strlen( $subject ) < 5 ) {
            $subject_err = 'Subject is too short (minimum 5 characters).';
        }
    } else {
        $subject_err = 'Subject is required.';
    }

    // Message validation
    if ( !empty( $_POST['message'] ) ) {
        $message = trim( $_POST['message'] );
        if ( strlen( $message ) < 10 || strlen( $message ) > 1000 ) {
            $message_err = 'Message should be between 10 and 1000 characters.';
        } else {
            $message = htmlspecialchars( $message, ENT_QUOTES, 'UTF-8' );
        }
    } else {
        $message_err = 'Message is required.';
    }

    // Check if there are any errors
    if ( empty( $name_err ) || empty( $email_err ) || empty( $subject_err ) || empty( $message_err ) ) {
        
            $success_msg = "Thank you for your message, $name!";
            
        }
    
}