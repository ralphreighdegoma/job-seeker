<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VA & Dev</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        montserrat {
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
        }
        
        .bg-yellow {
            background-color: #ffee00 !important;
        }
        
        html {
            font-family: "Montserrat", sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class=" shadow-md text-black" style="background: #ffee00;">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="text-2xl font-bold text-gray-800">VA & Dev</div>
                <div class="hidden md:flex space-x-6">
                    <a href="#home" class="p-3 text-black font-bold hover:text-white">Home</a>
                    <a href="#about" class="p-3 text-black font-bold hover:text-white">About Us</a>
                    <a href="#pricing" class="p-3 text-black font-bold hover:text-white">Pricing</a>
                    <a href="#virtual-assistance" class="p-3 text-black font-bold hover:text-white">Virtual Assistants</a>
                    <!-- <a href="#software-developers" class="text-black font-bold hover:text-white">Software Developers</a> -->
                    <a href="#contact" class="text-black p-3  font-bold hover:text-white">Contact Us</a>
                    <a href="/account" class="font-bold hover:text-white bg-black text-white p-3">Your Account</a>

                </div>
                <div class="md:hidden">
                    <button class="text-gray-600 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div class="md:hidden hidden">
        <a href="#home" class="block px-4 py-2 text-gray-600 hover:bg-gray-200">Home</a>
        <a href="#about" class="block px-4 py-2 text-gray-600 hover:bg-gray-200">About Us</a>
        <a href="#pricing" class="block px-4 py-2 text-gray-600 hover:bg-gray-200">Pricing</a>
        <a href="#virtual-assistance" class="block px-4 py-2 text-gray-600 hover:bg-gray-200">Virtual Assistance</a>
        <a href="#software-developers" class="block px-4 py-2 text-gray-600 hover:bg-gray-200">Software Developers</a>
        <a href="#contact" class="block px-4 py-2 text-gray-600 hover:bg-gray-200">Contact Us</a>
    </div>

    <!-- Banner Section -->

    <section class="relative bg-white text-black h-screen flex items-center justify-center overflow-hidden">
        <!-- Background Video -->
        <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop>
            <source src="assets/video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Overlay -->
        <div class="absolute inset-0 bg-white opacity-20"></div>

        <div class="container mx-auto px-4 flex flex-col items-center justify-between relative z-10">
            <!-- Main Content -->
            <div class="flex flex-col items-center mb-8 md:mb-0 w-3/4">
                <!-- Circular Images -->
                <div class="flex justify-center mb-8 space-x-1">
                    <img src="assets/circle2.png" class="w-16 h-16 md:w-24 md:h-24 rounded-full">
                    <img src="assets/circle2.png" class="w-16 h-16 md:w-24 md:h-24 rounded-full">
                    <img src="assets/circle2.png" class="w-16 h-16 md:w-24 md:h-24 rounded-full">
                    <img src="assets/circle2.png" class="w-16 h-16 md:w-24 md:h-24 rounded-full">
                </div>

                <h1 class="text-5xl md:text-5xl text-white font-bold mb-csv4 text-center md:text-center">
                    Bringing Filipino Hospitality to Your Virtual World
                </h1>

                <!-- Paragraph -->
                <p class="mb-8 mt-8 text-lg text-white md:text-xl text-center md:text-justify w-3/4">
                    We bring the quintessential Aussie spirit of reliability, friendliness, and no-nonsense efficiency to every task. From business support to personal errands, think of us as your trusted digital companion, always ready to assist you with a smile.
                </p>

                <!-- Button -->
                <a href="#virtual-assistance" style="background: #ffee00;" class="border text-black-600 hover:bg-black-100 py-5 px-8 rounded-full font-bold">
                    Browse Virtual Assistants
                </a>
            </div>
        </div>
    </section>


    <section class="relative bg-gray-200 text-white min-h-screen py-12">
        <div class="absolute inset-0 bg-cover bg-center"></div>
        <div class="container mx-auto px-4 relative z-10">
            <!-- Big Heading -->
            <h1 class="text-4xl md:text-5xl font-bold mb-30 text-center text-black my-20">
                Browse Our Curated Selection of Virtual Assistants
            </h1>

            <!-- Grid of Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                <div class="relative bg-white text-black-600 p-4 rounded-lg shadow-lg flex flex-col items-center">
                    <div class="absolute top-0 right-0 bg-yellow-400 text-black text-sm font-semibold px-2 py-1 rounded-bl-lg">
                        Virtual Assistant
                    </div>
                    <img src="assets/circle2.png" alt="Jane P." class="w-24 h-24 rounded-full mb-4">
                    <h2 class="text-xl font-semibold mb-2 text-black">Jane P.</h2>
                    <h1 class="text-sm  mb-2 text-black">Accountant</h1>
                    </h4>

                    <div class="space-x-4">
                        <i class="fas fa-user text-1xl text-gray-300"></i>
                        <i class="fas fa-video text-1xl text-gray-300"></i>
                        <i class="fas fa-heart text-1xl text-gray-300"></i>
                    </div>

                    <p class="text-justify text-black mb-4 text-sm p-5">
                        Is a dedicated and detail-oriented virtual assistant with a strong background in accounting...
                    </p>
                    <div class="flex flex-wrap justify-center space-x-2">
                        <span class="bg-yellow-400 text-black text-xs font-semibold px-2 py-1 m-1 rounded-full">#Efficiency</span>
                        <span class="bg-yellow-400 text-black text-xs font-semibold px-2 py-1 m-1 rounded-full">#Multitasking</span>
                        <span class="bg-yellow-400 text-black text-xs font-semibold px-2 py-1 m-1 rounded-full">#Admin</span>
                    </div>
                </div>



                <div class="relative bg-white text-black-600 p-4 rounded-lg shadow-lg flex flex-col items-center">
                    <img src="assets/circle2.png" alt="Jane P." class="w-24 h-24 rounded-full mb-4">
                    <h2 class="text-xl font-semibold mb-2 text-black">Jane P.</h2>
                    <h1 class="text-lg font-semibold mb-2 text-black">Software Engineer</h1>
                    </h4>

                    <div class="space-x-4">
                        <i class="fas fa-user text-1xl text-gray-300"></i>
                        <i class="fas fa-video text-1xl text-gray-300"></i>
                        <i class="fas fa-heart text-1xl text-gray-300"></i>
                    </div>

                    <p class="text-justify text-black mb-4 text-sm p-5">
                        Is a dedicated and detail-oriented virtual assistant with a strong background in accounting...
                    </p>
                    <div class="flex flex-wrap justify-center space-x-2">
                        <span class="bg-yellow-400 text-black text-xs font-semibold px-2 py-1 m-1 rounded-full">#Efficiency</span>
                        <span class="bg-yellow-400 text-black text-xs font-semibold px-2 py-1 m-1 rounded-full">#Multitasking</span>
                        <span class="bg-yellow-400 text-black text-xs font-semibold px-2 py-1 m-1 rounded-full">#Admin</span>
                    </div>
                </div>


                <div class="relative bg-white text-black-600 p-4 rounded-lg shadow-lg flex flex-col items-center">
                    <img src="assets/circle2.png" alt="Jane P." class="w-24 h-24 rounded-full mb-4">
                    <h2 class="text-xl font-semibold mb-2 text-black">Jane P.</h2>
                    <h1 class="text-lg font-semibold mb-2 text-black">Software Engineer</h1>
                    </h4>

                    <div class="space-x-4">
                        <i class="fas fa-user text-1xl text-gray-300"></i>
                        <i class="fas fa-video text-1xl text-gray-300"></i>
                        <i class="fas fa-heart text-1xl text-gray-300"></i>
                    </div>

                    <p class="text-justify text-black mb-4 text-sm p-5">
                        Is a dedicated and detail-oriented virtual assistant with a strong background in accounting...
                    </p>
                    <div class="flex flex-wrap justify-center space-x-2">
                        <span class="bg-yellow-400 text-black text-xs font-semibold px-2 py-1 m-1 rounded-full">#Efficiency</span>
                        <span class="bg-yellow-400 text-black text-xs font-semibold px-2 py-1 m-1 rounded-full">#Multitasking</span>
                        <span class="bg-yellow-400 text-black text-xs font-semibold px-2 py-1 m-1 rounded-full">#Admin</span>
                    </div>
                </div>




            </div>
        </div>
    </section>







    <script>
        const menuButton = document.querySelector('nav button');
        const mobileMenu = document.querySelector('.md:hidden.hidden');

        menuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>