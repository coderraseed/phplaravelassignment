<?php require_once('functions.php');?>

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
    <meta property="og:title" content="home">
    <meta property="og:type" content="website">
    <meta property="og:url" content="homepage">
    <meta property="og:image" content="blog">
    <meta property="og:description" content="homepage that displays a header with a logo, navigation">

    <!-- NAME Meta Tags -->
    <meta name="description" content="blog website">
    <meta name="keywords" content="">
    <meta name="author" content="Rashed">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Coderraseed</title>

    <!-- CSS Files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css">

</head>

<body>

    <header class="bg-gray-600 text-gray-100 py-4 ">
        <div class="container mx-auto px-4 md:px-0 max-w-screen-lg flex items-center justify-between">
            <div class="flex items-center">
                <img class="h-10 mr-3"
                    src="https://scontent.fcgp28-1.fna.fbcdn.net/v/t39.30808-6/299977462_445840767565600_1813603974982912366_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=LXjv24doiuMAX9uZcPM&_nc_ht=scontent.fcgp28-1.fna&oh=00_AfDBINNbsrIXcCLBR5Yh4_V4B8SSZQ0wA-e6VSfjaBUljw&oe=642F3A3B"
                    alt="Logo">
                <!-- Replace the src with the path to your logo image -->
                <h1 class="text-xl">CODERBIRD</h1>
            </div>
            <nav class="hidden md:block">
                <ul class="flex">
                    <li><a class="px-3 hover:text-gray-900" href="index.php">Home</a></li>
                    <li><a class="px-3 hover:text-gray-900" href="#about">About</a></li>
                    <li><a class="px-3 hover:text-gray-900" href="#services">Services</a></li>
                    <li><a class="px-3 hover:text-gray-900" href="blog.php">Blog</a></li>
                    <li><a class="px-3 hover:text-gray-900 capitalize" href="#">contact</a></li>
                </ul>
            </nav>
            <button id="nav-toggle" class="md:hidden">
                <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current text-gray-100">
                    <path d="M3 12h18M3 6h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
        </div>
        <div id="nav-content" class="hidden md:hidden">
            <ul class="flex flex-col">
                <li><a class="px-3 py-2 hover:text-gray-900" href="#">Home</a></li>
                <li><a class="px-3 py-2 hover:text-gray-900" href="#about">About</a></li>
                <li><a class="px-3 py-2 hover:text-gray-900" href="#services">Services</a></li>
                <li><a class="px-3 py-2 hover:text-gray-900" href="blog.php">Blog</a></li>
                <li><a class="px-3 py-2 hover:text-gray-900" href="#">Contact</a></li>
            </ul>
        </div>
    </header>
        <!-- Hero section area -->
        <section class="bg-gray-900 text-gray-100">
        <div class="container mx-auto px-4 md:px-0 max-w-screen-lg py-16">
            <div class="md:flex md:items-center md:justify-between space-y-5 space-x-3">
                <div class="md:w-1/2 sm:w-full">
                    <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">Welcome to Coderbird</h1>
                    <p class="text-lg md:text-xl mb-8">We are a team of experienced developers who love to build amazing
                        web applications and software.</p>
                    <a href="contact.php"
                        class="bg-indigo-500 hover:bg-indigo-600 text-white py-3 px-6 rounded-md text-lg font-bold">Get
                        started</a>
                </div>
                <div class="md:w-1/2 sm:w-full">
                    <img src="https://via.placeholder.com/600x400" alt="Hero Image" class="w-full object-cover">
                </div>
            </div>
        </div>
    </section>
    <!-- contact form -->
    <div class="container mx-auto px-4 py-8 max-w-lg">
        <div class="container mx-auto px-4 py-8 max-w-lg">
            <div class="bg-white rounded-lg shadow-md p-8">
                <h2 class="text-3xl font-bold mb-4 text-center">Contact Us</h2>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="name">Name</label>
                        <input
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="name" type="text" placeholder="Enter your name" name="name">
                            <span><?php if(isset($name_err)){echo $name_err;}?></span>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="email">Email Address</label>
                        <input
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="email" type="email" placeholder="Enter your email address" name="email">
                            <span><?php if(isset($email_err)){echo $email_err;}?></span>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="subject">Subject</label>
                        <input
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="subject" type="text" placeholder="Enter the subject" name="subject">
                            <span><?php if(isset($subject_err)){echo $subject_err;}?></span>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="message">Message</label>
                        <textarea
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="message" type="text" placeholder="Enter your message" name="message">
                        </textarea>
                        <span><?php if(isset($message_err)){echo $message_err;}?></span>

                    </div>
                    <div class="flex items-center justify-center">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit" name="submit">
                            Submit
                        </button>
                    </div>
                    <div class="flex items-center justify-center text-center">
                        <span>
                            <?php  if(isset($success_msg)){ echo $success_msg; }?>
                        </span>
                    </div>
                </form>
            </div>
        </div>

    </div>


    <footer class="bg-gray-800 text-gray-300 py-6">
        <div class="container mx-auto px-4 md:px-0 max-w-screen-lg">
            <div class="flex flex-wrap justify-between">
                <div class="w-full md:w-1/4 mb-6 md:mb-0">
                    <img class="h-10 ml-4"
                        src="https://scontent.fcgp28-1.fna.fbcdn.net/v/t39.30808-6/299977462_445840767565600_1813603974982912366_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=LXjv24doiuMAX9uZcPM&_nc_ht=scontent.fcgp28-1.fna&oh=00_AfDBINNbsrIXcCLBR5Yh4_V4B8SSZQ0wA-e6VSfjaBUljw&oe=642F3A3B"
                        alt="Logo">

                    <ul class="list-none">
                        <li class="mb-2">
                            <i class="fab fa-facebook-f text-gray-400 mr-2"></i>
                            <a href="#" class="hover:text-white">Facebook</a>
                        </li>
                        <li class="mb-2">
                            <i class="fab fa-twitter text-gray-400 mr-2"></i>
                            <a href="#" class="hover:text-white">Twitter</a>
                        </li>
                        <li class="mb-2">
                            <i class="fab fa-instagram text-gray-400 mr-2"></i>
                            <a href="#" class="hover:text-white">Instagram</a>
                        </li>
                        <li class="mb-2">
                            <i class="fab fa-linkedin-in text-gray-400 mr-2"></i>
                            <a href="#" class="hover:text-white">LinkedIn</a>
                        </li>
                    </ul>
                </div>
                <div class="w-full md:w-1/4 mb-6 md:mb-0">
                    <h4 class="text-lg font-bold mb-4">Latest Posts</h4>
                    <ul class="list-none">
                        <li class="mb-2">
                            <a href="#" class="hover:text-white">Post 1</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="hover:text-white">Post 2</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="hover:text-white">Post 3</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="hover:text-white">Post 4</a>
                        </li>
                    </ul>
                </div>
                <div class="w-full md:w-1/4 mb-6 md:mb-0">
                    <h4 class="text-lg font-bold mb-4">Useful Links</h4>
                    <ul class="list-none">
                        <li class="mb-2">
                            <a href="#" class="hover:text-white">Link 1</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="hover:text-white">Link 2</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="hover:text-white">Link 3</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="hover:text-white">Link 4</a>
                        </li>
                    </ul>
                </div>
                <div class="w-full md:w-1/4">
                    <h4 class="text-lg font-bold mb-4">Contact Us</h4>
                    <ul class="list-none mb-4">
                        <li class="mb-2">
                            <i class="fas fa-map-marker-alt inline-block mr-2"></i>123 Street, City, Country
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-phone inline-block mr-2"></i>Phone: (123) 456-7890
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-envelope inline-block mr-2"></i>Email: info@example.com
                        </li>
                    </ul>
                    <div class="mt-4">
                        <a href="#" class="bg-gray-800 text-gray-100 px-3 py-2 rounded font-bold hover:bg-gray-700">Get
                            In Touch</a>
                    </div>
                    <div class="mt-4">
                        <a href="#">
                            <i class="fab fa-facebook fa-2x"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter fa-2x"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin fa-2x"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </footer>





</body>

</html>