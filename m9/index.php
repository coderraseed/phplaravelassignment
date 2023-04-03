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

    <title>CoderBird</title>

    <!-- CSS Files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css">

</head>

<body>
    <!-- Navigation area -->
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
                    <li><a class="px-3 hover:text-gray-900" href="#">Home</a></li>
                    <li><a class="px-3 hover:text-gray-900" href="#about">About</a></li>
                    <li><a class="px-3 hover:text-gray-900" href="#services">Services</a></li>
                    <li><a class="px-3 hover:text-gray-900" href="blog.php" target="_blank">Blog</a></li>
                    <li><a class="px-3 hover:text-gray-900 capitalize" href="contact.php" target="_blank">contact</a>
                    </li>
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
                <li><a class="px-3 py-2 hover:text-gray-900" href="contact.php">Contact</a></li>
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

    <!-- featured post area -->
    <section class="bg-gray-100">
        <div class="container mx-auto px-4 md:px-0 max-w-screen-lg py-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-8">Featured Post</h2>
            <div class="md:flex md:items-center">
                <div class="md:w-1/2">
                    <img src="https://via.placeholder.com/600x400" alt="Featured Post Image" class="w-full">
                </div>
                <div class="md:w-1/2 md:pl-8">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4">Title of the Post Goes Here</h3>
                    <p class="text-lg md:text-xl mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut
                        gravida justo. Praesent pharetra vestibulum nunc vel sagittis.</p>
                    <a href="single.php " target="_blank"
                        class="bg-indigo-500 hover:bg-indigo-600 text-white py-3 px-6 rounded-md text-lg font-bold">Read
                        More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services area -->
    <section class="bg-gray-900 py-12" id="services">
        <div class="container mx-auto px-4 md:px-0 max-w-screen-lg">
            <h2 class="text-5xl font-bold mb-8 text-center text-gray-300">Our Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg p-6 shadow-md">
                    <div>
                        <h3 class="text-2xl font-bold mb-2 text-center pb-6">Landing Page Design</h3>
                    </div>
                    <div>
                        <img src="https://via.placeholder.com/500x300" alt="Landing Page Design" class="mb-4">
                        <p class="text-gray-700">We design and develop landing pages that convert visitors into
                            customers.
                            Our landing pages are optimized for maximum conversion rates.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg p-6 shadow-md">
                    <div>
                        <h3 class="text-2xl font-bold mb-2 text-center pb-6">Speed Optimization</h3>
                    </div>
                    <div>
                        <img src="https://via.placeholder.com/500x300" alt="Landing Page Design" class="mb-4">
                        <p class="text-gray-700">We optimize your website for speed and performance, ensuring that your
                            visitors have a fast and seamless browsing experience</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg p-6 shadow-md">
                    <div>
                        <h3 class="text-2xl font-bold mb-2 text-center pb-6">Theme Customization</h3>
                    </div>
                    <div>
                        <img src="https://via.placeholder.com/500x300" alt="Landing Page Design" class="mb-4">
                        <p class="text-gray-700">We customize your website theme to meet your unique branding and design
                            requirements, making your website stand out from the competition.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg p-6 shadow-md">
                    <div>
                        <h3 class="text-2xl font-bold mb-2 text-center pb-6">Plugin Development</h3>
                    </div>
                    <div>
                        <img src="https://via.placeholder.com/500x300" alt="Landing Page Design" class="mb-4">
                        <p class="text-gray-700">We develop custom WordPress plugins to extend the functionality of your
                            website and add new features.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg p-6 shadow-md">
                    <div>
                        <h3 class="text-2xl font-bold mb-2 text-center pb-6">ERP Development</h3>
                    </div>
                    <div>
                        <img src="https://via.placeholder.com/500x300" alt="Landing Page Design" class="mb-4">
                        <p class="text-gray-700">We develop enterprise resource planning (ERP) solutions to help
                            businesses
                            streamline their operations and improve efficiency.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg p-6 shadow-md">
                    <div>
                        <h3 class="text-2xl font-bold mb-2 text-center pb-6">Web Apps Dev</h3>
                    </div>
                    <div>
                        <img src="https://via.placeholder.com/500x300" alt="Landing Page Design" class="mb-4">
                        <p class="text-gray-700">We develop custom web applications that meet your specific business
                            needs
                            and requirements, helping you to improve productivity and efficiency.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->


    <section class="bg-gray-100 py-8" id="about">
        <div class="container mx-auto px-4 md:px-0 max-w-screen-lg">
            <div class="flex flex-col md:flex-row md:justify-between items-center">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <h2 class="text-3xl font-bold mb-4">About Us</h2>
                    <p class="text-lg leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                        ultricies, libero quis fringilla laoreet, ante ante lobortis est, in suscipit magna dolor vitae
                        enim. Sed id massa at odio gravida feugiat id ac sapien. Donec vitae dapibus elit. Nulla vel
                        elit eget ipsum venenatis pretium.</p>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <img src="https://via.placeholder.com/500x300" alt="About Us Image"
                        class="rounded-full shadow-lg mt-20">
                </div>
            </div>
        </div>
    </section>

    <!-- Call to action section -->

    <section class="bg-gray-900 py-16 md:py-20 lg:py-24">
        <div class="container mx-auto px-4 md:px-0 max-w-screen-lg">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-gray-100 mb-4">Ready to get started?</h2>
                <p class="text-lg text-gray-100 mb-8">Contact us today to learn more about our services and how we can
                    help your business grow.</p>
                <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white py-3 px-8 rounded-full inline-block">Get in
                    touch</a>
            </div>
        </div>
    </section>

    <!-- Team area section -->
    <section class="bg-white py-16 md:py-20 lg:py-24">
        <div class="container mx-auto px-4 md:px-0 max-w-screen-lg">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-8">Meet Our Team</h2>
            <div class="flex flex-wrap -mx-4">
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <div class="relative overflow-hidden rounded-lg">
                        <img src="https://via.placeholder.com/500x500" alt="Team Member" class="w-full">
                        <div
                            class="absolute inset-0 bg-gray-900 bg-opacity-75 transition duration-300 opacity-0 hover:opacity-100">
                            <div class="flex justify-center items-center h-full">
                                <div class="text-center">
                                    <h3 class="text-lg font-bold text-white mb-2">John Doe</h3>
                                    <p class="text-gray-200">Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <div class="relative overflow-hidden rounded-lg">
                        <img src="https://via.placeholder.com/500x500" alt="Team Member" class="w-full">
                        <div
                            class="absolute inset-0 bg-gray-900 bg-opacity-75 transition duration-300 opacity-0 hover:opacity-100">
                            <div class="flex justify-center items-center h-full">
                                <div class="text-center">
                                    <h3 class="text-lg font-bold text-white mb-2">Jane Doe</h3>
                                    <p class="text-gray-200">Designer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <div class="relative overflow-hidden rounded-lg">
                        <img src="https://via.placeholder.com/500x500" alt="Team Member" class="w-full">
                        <div
                            class="absolute inset-0 bg-gray-900 bg-opacity-75 transition duration-300 opacity-0 hover:opacity-100">
                            <div class="flex justify-center items-center h-full">
                                <div class="text-center">
                                    <h3 class="text-lg font-bold text-white mb-2">John Smith</h3>
                                    <p class="text-gray-200">Marketing Specialist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer area -->
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