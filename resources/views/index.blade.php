<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        #main-content {
            flex: 1;
        }
        .navbar-item {
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        .navbar-item:hover {
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 0.375rem; /* Rounded corners */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .header-image {
            background-image: url('header-bg.jpg'); /* Replace with your image */
            background-size: cover;
            background-position: center;
            height: 400px;
        }
        .animate-fadeIn {
            animation: fadeIn 1s ease-in forwards;
        }
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
        /* Navbar Burger Styles */
        .burger-menu {
            display: none;
            position: fixed; /* Changed to fixed for better UX */
            top: 60px; /* Adjust based on navbar height */
            left: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.9); /* Darker background for contrast */
            color: white;
            transition: transform 0.3s ease-out, opacity 0.3s ease-out;
            transform: translateY(-100%);
            opacity: 0;
            z-index: 10; /* Ensure menu is above other content */
        }
        .burger-menu.show {
            display: block;
            transform: translateY(0);
            opacity: 1;
        }
        .burger-item {
            padding: 1rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.3); /* Lighter border */
            transition: background-color 0.3s ease;
            text-align: center;
        }
        .burger-item:last-child {
            border-bottom: none;
        }
        .burger-item:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }
        .burger-menu a {
            display: block;
            padding: 1rem;
            text-decoration: none;
            color: white;
            font-size: 1.25rem;
        }
        .burger-menu a:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Header -->
    <header class="bg-white shadow relative">
        <div class="container mx-auto p-5 flex justify-between items-center">
            <h1 class="text-3xl font-bold text-gray-800">Portfolio Dimas</h1>
            <button id="menu-button" class="block md:hidden text-gray-600 hover:text-gray-800 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
            <nav id="navbar-menu" class="hidden md:flex md:space-x-4">
                <a href="{{ url('/') }}" class="navbar-item px-3 py-2 text-gray-600 hover:text-gray-800">Home</a>
                <a href="{{ url('/experience') }}" class="navbar-item px-3 py-2 text-gray-600 hover:text-gray-800">School</a>
                <a href="{{ url('/projects') }}" class="navbar-item px-3 py-2 text-gray-600 hover:text-gray-800">Projects</a>
                <a href="{{ url('/contact') }}" class="navbar-item px-3 py-2 text-gray-600 hover:text-gray-800">Contact</a>
            </nav>
            <nav id="burger-menu" class="burger-menu">
                <a href="{{ url('/') }}" class="burger-item">Home</a>
                <a href="{{ url('/experience') }}" class="burger-item">School</a>
                <a href="{{ url('/projects') }}" class="burger-item">Projects</a>
                <a href="{{ url('/contact') }}" class="burger-item">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <div id="main-content">
        <!-- Hero Section -->
        <section class="bg-gray-800 text-white py-20">
            <div class="container mx-auto text-center">
                <h2 class="text-5xl font-bold mb-4">Hello, I'm Muhammad Dimas Susanto</h2>
                <p class="text-xl mb-6">Saya adalah programmer pemula</p>
                <a href="#about" class="bg-blue-500 text-white px-6 py-3 rounded hover:bg-blue-600">Pelajari tentang saya</a>
            </div>
        </section>

        <!-- About Me -->
        <section id="about" class="py-20 bg-white">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-4xl font-bold text-center mb-12">About Me</h2>
                <div class="flex flex-wrap items-center">
                    <div class="w-full md:w-1/2 mb-10 md:mb-0">
                        <img src="{{ asset('images/myphoto.jpg') }}" alt="About Me" class="w-64 h-auto rounded-lg shadow-lg mx-auto">
                    </div>
                    <div class="w-full md:w-1/2 md:pl-10">
                        <p class="text-lg mb-4">
                            Nama saya adalah Muhammad Dimas Susanto, saya adalah siswa dari sekolah SMKN 1 SUBANG yang berletak pada Subang Jawabarat. Saya merupakan programmer pemula.
                        </p>
                        <p class="text-lg">
                            Ketika saya tidak mengoding saya biasanya bermain game
                        </p>
                    </div>
                </div>
            </div>
        </section>
        

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 py-6 mt-auto">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Muhammad Dimas Susanto. All Rights Reserved.</p>
        </div>
    </footer>

    <script>
        document.getElementById('menu-button').addEventListener('click', function() {
            document.getElementById('burger-menu').classList.toggle('show');
        });
    </script>
</body>
</html>
