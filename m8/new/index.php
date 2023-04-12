<?php require_once("function.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- HTTP-EQUIV Meta Tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Pragma" content="no-cache">

    <!-- Open Graph (OG) Meta Tags -->
    <meta property="og:title" content="Registration Form">
    <meta property="og:type" content="website">
    <meta property="og:url" content="lr.coderbird.com">
    <meta property="og:image" content="">
    <meta property="og:description" content="">

    <!-- NAME Meta Tags -->
    <meta name="description" content="Registration Form">
    <meta name="keywords" content="form">
    <meta name="author" content="Md Rasedul Islam">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registration Form</title>

    <!-- CSS Files -->
    <!-- Tailwind CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.1.4/tailwind.min.css">
    <!-- Main CSS file -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container mx-auto px-4 py-8 max-w-md">
        <div class="bg-white rounded-lg shadow-md p-8">
            <h2 class="text-3xl font-bold mb-4 text-center">Register</h2>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="firstName">First Name</label>
                    <input
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="firstName" type="text" placeholder="Enter your first name" name="fname">
                    <span><?php if(isset($fname_err)){echo $fname_err;}?></span>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="lastName">Last Name</label>
                    <input
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="lastName" type="text" placeholder="Enter your last name" name="lname">
                    <span><?php if(isset($lname_err)){echo $lname_err;}?></span>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="email">Email Address</label>
                    <input
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="email" type="email" placeholder="Enter your email address" name="email">
                    <span><?php if(isset($email_err)){echo $email_err;}?></span>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="password">Password</label>
                    <input
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" type="password" placeholder="Enter your password" name="password">
                    <span><?php if(isset($password_err)){echo $password_err;}?></span>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="confirmPassword">Confirm Password</label>
                    <input
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="confirmPassword" type="password" placeholder="Confirm your password" name="confirmPassword">
                    <span><?php if(isset($confirm_password_err)){echo $confirm_password_err;}?></span>
                </div>
                <div class="flex items-center justify-center">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit" name="submit">
                        Register
                    </button>

                </div>
                <div class="flex items-center justify-center text-center">
                    <span>
                        <?php  if(isset($success_msg)){ echo $success_msg; }?>
                    </span>
                </div>
                <div class="flex items-center justify-center text-center">
                    <span>
                        <?php  //if(isset()){ echo ; }?>
                    </span>
                </div>


            </form>
        </div>
    </div>

</body>

</html>