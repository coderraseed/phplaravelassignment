<nav class="bg-blue-600">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ url('/',) }}" class="text-white font-bold text-lg flex items-center">
                    <img src="" alt="Coder Bird">

                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-4 py-4">
                <a href="#" class="text-gray-200 hover:text-white hover:underline">Home</a>
                <a href="#" class="text-gray-200 hover:text-white hover:underline">About</a>
                <a href="#" class="text-gray-200 hover:text-white hover:underline">Blog</a>
                <a href="#" class="text-gray-200 hover:text-white hover:underline">Contact</a>
            </div>
            <!-- Mobile Menu Toggle -->
            <div class="md:hidden flex items-center">
                <button class="text-white focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu (Hidden by default) -->
        <div class="md:hidden mt-2">
            <div class="flex flex-col space-y-2">
                <a href="#" class="text-gray-200 hover:text-white hover:underline">Home</a>
                <a href="#" class="text-gray-200 hover:text-white hover:underline">About</a>
                <a href="#" class="text-gray-200 hover:text-white hover:underline">Blog</a>
                <a href="#" class="text-gray-200 hover:text-white hover:underline">Contact</a>
                <a href="#" class="text-gray-200 hover:text-white hover:underline">Login</a>
                <a href="#"
                    class="bg-white text-blue-500 hover:bg-blue-100 text-sm px-4 py-2 rounded-full transition duration-300">Sign
                    up</a>
            </div>
        </div>
    </div>
</nav>
