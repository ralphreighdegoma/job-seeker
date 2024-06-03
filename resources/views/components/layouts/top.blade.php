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