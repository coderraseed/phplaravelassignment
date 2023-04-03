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
                <li><a class="px-3 py-2 hover:text-gray-900" href="blog.php">Blog</a></li>
                <li><a class="px-3 py-2 hover:text-gray-900" href="contact.php">Contact</a></li>
            </ul>
        </div>
    </header>
    <!-- Single post page section -->
<section class="px-4 py-8 md:px-8 lg:px-16 xl:px-32">
  <!-- Post title -->
  <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">Post Title Goes Here</h1>
  <!-- Post image -->
  <img src="https://via.placeholder.com/800x400" alt="Post Image" class="w-full h-auto mb-4">
  <!-- Post content -->
  <div class="prose max-w-none mb-8">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at odio euismod, consectetur velit id, molestie velit. Sed iaculis felis sapien, a pretium nisl volutpat at. Nullam bibendum, ante a rhoncus vestibulum, libero nibh imperdiet nibh, ut suscipit lorem lectus in dolor. Fusce ullamcorper, velit non pulvinar auctor, lectus massa vestibulum tellus, vel laoreet tellus nulla ac arcu. Sed nec diam commodo, gravida augue sit amet, posuere urna.</p>
    <p>Aliquam finibus, nunc non dictum malesuada, tortor augue mattis sapien, et scelerisque quam magna sit amet mi. Sed in erat vitae elit eleifend venenatis. Duis faucibus ante eu aliquam tincidunt. Vivamus quis ipsum tristique, feugiat enim vel, imperdiet ex. Nunc a velit quis magna pulvinar finibus. Nullam eget lacus vel odio dignissim suscipit a in magna. Praesent euismod ipsum libero, at pulvinar sapien blandit et.</p>
  </div>
  <!-- Post author -->
  <div class="flex items-center mb-8">
    <img src="https://via.placeholder.com/64x64" alt="Author Image" class="w-12 h-12 rounded-full mr-4">
    <div>
      <h3 class="text-xl font-bold">Author Name Goes Here</h3>
      <p class="text-gray-600">Author Bio Goes Here</p>
    </div>
  </div>
  <!-- Social sharing buttons -->
  <div class="flex items-center space-x-4">
    <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">Facebook</a>
    <a href="#" class="bg-blue-400 hover:bg-blue-500 text-white px-4 py-2 rounded-lg">Twitter</a>
    <a href="#" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg">Pinterest</a>
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
    </footer


</body>

</html>