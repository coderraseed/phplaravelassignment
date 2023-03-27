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
    public function __construct($fname, $lname, $email, $password, $confirm_password) {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->email = $email;
        $this->password = $password;
        $this->password = $confirm_password;
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
                $this->password_err = 'Password must be at least 8 characters long';
            } elseif (!preg_match('/[A-Z]/', $password)) {
                $this->password_err = 'Password must contain at least one uppercase letter';
            } elseif (!preg_match('/[a-z]/', $password)) {
                $this->password_err = 'Password must contain at least one lowercase letter';
            } elseif (!preg_match('/[0-9]/', $password)) {
                $this->password_err = 'Password must contain at least one number';
            } else {
                $this->password = md5($password);
            }
        } else {
            $this->password_err = 'Password is required';
        }
    }

    private function validateConfirmPassword() {
        if (!empty($this->confirm_password)) {
            $confirm_password = htmlspecialchars(trim($this->confirm_password));
            if ($this->password !== $confirm_password) {
                $this->confirm_password_err = 'Passwords do not match';
            }
        } else {
            $this->confirm_password_err = 'Please confirm your password';
        }
    }

    public function register() {
        $this->validateFirstName();
        $this->validateLastName();
        $this->validateEmail();
        $this->validatePassword();
        $this->validateConfirmPassword();

        if (empty($this->fname_err) && empty($this->lname_err) && empty($this->email_err) && empty($this->password_err) && empty($this->confirm_password_err)) {
            $pdo = new PDO('mysql:host=localhost;dbname=myDatabase;charset=utf8', 'username', 'password');
            $sql = 'INSERT INTO users (fname, lname, email, password) VALUES (:fname, :lname, :email, :password)';
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['fname' => $this->fname, 'lname' => $this->lname, 'email' => $this->email, 'password' => $this->password]);
            header('Location: success.php');
            exit();
        }
    }
}