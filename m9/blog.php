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
        <div class="container mx-auto px-4 md:px-0 flex items-center justify-between">
            <div class="flex items-center">
                <img class="h-10 mr-3"
                    src="https://scontent.fcgp28-1.fna.fbcdn.net/v/t39.30808-6/299977462_445840767565600_1813603974982912366_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=LXjv24doiuMAX9uZcPM&_nc_ht=scontent.fcgp28-1.fna&oh=00_AfDBINNbsrIXcCLBR5Yh4_V4B8SSZQ0wA-e6VSfjaBUljw&oe=642F3A3B"
                    lt="Logo">
                <!-- Replace the src with the path to your logo image -->
                <h1 class="text-xl">CODERBIRD</h1>
            </div>
            <nav class="hidden md:block">
                <ul class="flex">
                    <li><a class="px-3 hover:text-gray-900" href="index.php">Home</a></li>
                    <li><a class="px-3 hover:text-gray-900" href="#about">About</a></li>
                    <li><a class="px-3 hover:text-gray-900" href="#services">Services</a></li>
                    <li><a class="px-3 hover:text-gray-900" href="#">Blog</a></li>
                    <li><a class="px-3 hover:text-gray-900 capitalize" href="contact.php">contact</a></li>
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
                <li><a class="px-3 py-2 hover:text-gray-900" href="index.php">Home</a></li>
                <li><a class="px-3 py-2 hover:text-gray-900" href="#about">About</a></li>
                <li><a class="px-3 py-2 hover:text-gray-900" href="#services">Services</a></li>
                <li><a class="px-3 py-2 hover:text-gray-900" href="#">Blog</a></li>
                <li><a class="px-3 py-2 hover:text-gray-900" href="contact.php">Contact</a></li>
            </ul>
        </div>
    </header>
    <!-- post image slider -->

    <!-- Blog post image slide section -->
    <section class="py-8 px-4 md:px-0">
        <div class="container mx-auto py-6 px-0 md:px-0">
            <h2 class="text-2xl font-bold mb-4">Featured Posts Slider</h2>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#">
                            <img src="https://via.placeholder.com/800x500" alt="Post image"
                                class="w-full h-screen object-cover">
                        </a>
                    </div>
                </div>

                <!-- Add pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- Blog section -->
    <section class="container mx-auto py-8 px-2 md:px-0">
        <div class="flex flex-col md:flex-row justify-between">
            <!-- Blog Posts Section -->
            <div class="w-full md:w-4/5 pr-0 md:pr-8 mb-8">
                <!-- Blog Post 1 -->
                <div class="mb-8">
                    <a href="#" class="block">
                        <img src="https://via.placeholder.com/800x400" alt="Blog Post Image"
                            class="w-full h-64 object-cover object-center mb-4">
                        <h2 class="text-2xl font-bold text-gray-900 hover:text-gray-700 transition-colors duration-300">
                            Blog Post Title 1
                        </h2>
                    </a>
                    <p class="text-gray-700 mb-4">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis exercitationem neque possimus modi eligendi id ex recusandae suscipit molestias, corrupti omnis placeat voluptatibus ullam asperiores tempore, est nobis dolorum, velit a quia explicabo! Dolore temporibus omnis dolorem labore adipisci dolorum quisquam mollitia natus, commodi cumque assumenda reiciendis molestiae odio, quos, repudiandae quibusdam consectetur suscipit iusto ratione saepe a quam ad! Totam expedita ab rem veniam? Eius maxime, laudantium voluptate quis quibusdam, molestias laboriosam cum ducimus, quasi nihil totam? Amet qui temporibus tempora quibusdam voluptatem error iste inventore, labore aperiam non alias dicta aut reiciendis ea aliquam ducimus, commodi facilis nemo.
                    </p>
                    <a href="single.php" target="_blank"
                        class="text-blue-500 hover:text-blue-700 transition-colors duration-300">Read More</a>
                </div>
                <!-- Blog Post 2 -->
                <div class="mb-8">
                    <a href="#" class="block">
                        <img src="https://via.placeholder.com/800x400" alt="Blog Post Image"
                            class="w-full h-64 object-cover object-center mb-4">
                        <h2 class="text-2xl font-bold text-gray-900 hover:text-gray-700 transition-colors duration-300">
                            Blog Post Title 2
                        </h2>
                    </a>
                    <p class="text-gray-700 mb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, corrupti nesciunt illum ipsam fuga quam, dolorem illo pariatur quae, a iste saepe itaque rem quaerat quas voluptas. Facere, deleniti velit, illo laborum voluptates ipsum commodi, itaque recusandae dolore impedit perspiciatis assumenda voluptas quo modi maiores ratione ex eaque exercitationem consequatur tenetur unde sit eveniet mollitia. Aspernatur, itaque tenetur, voluptatem deserunt, fugit exercitationem dolor error modi suscipit similique aliquid officia dolore? Libero quibusdam quod labore velit itaque, aut culpa harum, inventore natus dolore, non error aspernatur officiis commodi delectus architecto voluptas adipisci quia quam explicabo at dicta vitae odio. Similique, voluptates.
                    </p>
                    <a href="single.php" target="_blank"
                        class="text-blue-500 hover:text-blue-700 transition-colors duration-300">Read More</a>
                </div>

            </div>

            <!-- Sidebar Section -->
            <div class="md:w-1/3 sm:w-full mb-8 md:mb-0 px-2">
                <div class="bg-white p-4 rounded-lg shadow">
                    <!-- search area -->
                    <div class="mb-4 border rounded-lg border-gray-100 p-3 text-center uppercase">
                        <form>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="search">
                                Search
                            </label>
                            <div class="flex flex-col items-center py-2 h-full">
                                <input
                                    class="w-full flex-grow px-2 text-gray-700 border rounded-lg border-gray-500 bg-transparent appearance-none bg-transparent w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none "
                                    type="text" placeholder="Search...">
                                <button
                                    class="flex-shrink-0 bg-gray-500 hover:bg-gray-700 border-gray-500 hover:border-gray-700 text-sm border-4 text-white py-1 mt-3 px-2 rounded w-full"
                                    type="button">
                                    Search
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="text-sm text-gray-700">
                        <h2 class="text-lg font-bold mb-2 text-center uppercase">Categories</h2>
                        <ul class="list-none space-y-2">
                            <li><a href="#" class="text-gray-600 hover:text-gray-900 capitalize">Art</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-gray-900">Food</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-gray-900">Lifestyle</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-gray-900">Movies</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-gray-900">Music</a>
                            <li><a href="#" class="text-gray-600 hover:text-gray-900">Travel</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-gray-900">Fishing</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- footer section -->
    <footer class="bg-gray-900 text-white">
        <div class="container mx-auto py-6 px-0 md:px-0">
            <div class="flex flex-wrap justify-between">
                <div class="w-full md:w-1/4 mb-4 md:mb-0 px-4">
                    <img class="h-28 mr-3"
                        src="https://scontent.fcgp28-1.fna.fbcdn.net/v/t39.30808-6/299977462_445840767565600_1813603974982912366_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=LXjv24doiuMAX9uZcPM&_nc_ht=scontent.fcgp28-1.fna&oh=00_AfDBINNbsrIXcCLBR5Yh4_V4B8SSZQ0wA-e6VSfjaBUljw&oe=642F3A3B"
                        lt="Logo">
                </div>
                <div class="w-full md:w-1/4 mb-4 md:mb-0 px-4 text-center">
                    <h4 class="text-lg font-bold mb-4 uppercase">Subscription</h4>
                    <!-- Subscription form here -->
                    <form class="mb-4 mt-4">
                        <input type="email" placeholder="Email Address"
                            class="w-full px-4 py-2 mb-2 border border-gray-600 rounded-md focus:outline-none focus:border-blue-500">
                        <button type="submit"
                            class="bg-blue-500  w-full text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-colors duration-300">Subscribe</button>
                    </form>
                </div>
                <div class="w-full md:w-1/4 mb-4 md:mb-0 px-4 text-center">
                    <h4 class="text-lg font-bold mb-4">Recent Posts</h4>
                    <ul class="list-none">
                        <li class="mb-2">
                            <a href="#" class="text-gray-400 hover:text-white">Post Title 1</a>
                            <p class="text-xs text-gray-600">Jan 1, 2022</p>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-gray-400 hover:text-white">Post Title 2</a>
                            <p class="text-xs text-gray-600">Feb 1, 2022</p>
                        </li>
                        <li>
                            <a href="#" class="text-gray-400 hover:text-white">Post Title 3</a>
                            <p class="text-xs text-gray-600">Mar 1, 2022</p>
                        </li>
                    </ul>
                </div>
                <div class="w-full md:w-1/4 mb-4 md:mb-0 px-4 text-center">
                    <h4 class="text-lg font-bold mb-4">Popular Posts</h4>
                    <ul class="list-none">
                        <li class="mb-2">
                            <a href="#" class="text-gray-400 hover:text-white">Post Title 1</a>
                            <p class="text-xs text-gray-600">Jan 1, 2022</p>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-gray-400 hover:text-white">Post Title 2</a>
                            <p class="text-xs text-gray-600">Feb 1, 2022</p>
                        </li>
                        <li>
                            <a href="#" class="text-gray-400 hover:text-white">Post Title 3</a>
                            <p class="text-xs text-gray-600">Mar 1, 2022</p>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="border-gray-800 my-8">
            <div class="flex flex-wrap items-center">
                <div class="w-full md:w-1/2 text-sm">
                    <p>&copy; 2023 CoderBird. All Rights Reserved.</p>
                </div>
                <div class="w-full md:w-1/2 text-right">
                    <ul class="list-none">
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Terms &amp; Conditions</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>