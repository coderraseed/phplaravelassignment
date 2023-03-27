<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert data into the table
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

<?php

class SignupForm {
    // define properties
    private $fname;
    private $lname;
    private $email;
    private $password;
    private $confirm_password;

    // define errors
    private $fname_err = '';
    private $lname_err = '';
    private $email_err = '';
    private $password_err = '';
    private $confirm_password_err = '';

    // define constructor
    public function __construct($fname, $lname, $email, $password) {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->email = $email;
        $this->password = $password;
    }

    // define validation methods
    private function validateFirstName() {
        if (!empty($this->fname)) {
            $name = htmlspecialchars(trim($this->fname));
            // Check if the name contains only letters and whitespace
            if (!preg_match('/^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/', $name)) {
                $this->fname_err = 'Only letters, apostrophes, commas, periods, hyphens, and spaces allowed';
            }
            // Check if the length of the name is within a reasonable limit
            if (strlen($name) > 50) {
                $this->fname_err = 'Name is too long';
            }
        } else {
            $this->fname_err = 'Name is required';
        }
    }

    private function validateLastName() {
        if (!empty($this->lname)) {
            $name = htmlspecialchars(trim($this->lname));
            // Check if the name contains only letters and whitespace
            if (!preg_match('/^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/', $name)) {
                $this->lname_err = 'Only letters, apostrophes, commas, periods, hyphens, and spaces allowed';
            }
            // Check if the length of the name is within a reasonable limit
            if (strlen($name) > 50) {
                $this->lname_err = 'Name is too long';
            }
        } else {
            $this->lname_err = 'Name is required';
        }
    }

    private function validateEmail(PDO $pdo) {
        if (isset($this->email)) {
            $email = trim($this->email);
            if (empty($email)) {
                $this->email_err = 'Email is required';
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->email_err = 'Invalid email format';
            } else if (strlen($email) > 50) {
                $this->email_err = 'Email is too long (maximum 50 characters)';
            } else {
                // Check if the email is already registered
                $sql  = 'SELECT * FROM users WHERE email = :email';
                $stmt = $pdo->prepare($sql);
                $stmt->execute(['email' => $email]);
                $user = $stmt->fetch();
                if ($user) {
                    $this->email_err = 'This email is already registered';
                }
            }
        } else {
            $this->email_err = 'Email is required';
        }
    }

    private function validatePassword() {
        if (!empty($this->password)) {
            $password = trim($this->password);
            if (strlen($password) < 8) {
                $this->errors['password'] = 'Password must be at least 8 characters long.';
            }
        } else {
            $this->errors['password'] = 'Password is required.';
        }
    }
    
    private function validateConfirmPassword() {
        if (!empty($this->confirm_password)) {
            $confirm_password = trim($this->confirm_password);
            if ($confirm_password !== $this->password) {
                $this->errors['confirm_password'] = 'Passwords do not match.';
            }
        } else {
            $this->errors['confirm_password'] = 'Confirm password is required.';
        }
    }
    
    public function validate() {
        $this->validateUsername();
        $this->validatePassword();
        $this->validateConfirmPassword();
        $this->validateEmail();
        
        if (empty($this->errors)) {
            return true;
        } else {
            return false;
        }
    }
}

