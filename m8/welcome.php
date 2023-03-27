<?php
session_start();

// Redirect to login page if user is not logged in
/* if(!isset($_SESSION['email'])){
    header("location: login.php");
    exit();
} */
?>



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
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
                <div class="login-form text-center">
                    <h1 class="text-center">Welcome <?php if(isset($_GET['name'])){echo $_GET['name']; }?></h1>                    
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