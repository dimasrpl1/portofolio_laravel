<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
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
            border-radius: 0.375rem;
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
            position: fixed;
            top: 60px;
            left: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.9);
            color: white;
            transition: transform 0.3s ease-out, opacity 0.3s ease-out;
            transform: translateY(-100%);
            opacity: 0;
            z-index: 10;
        }
        .burger-menu.show {
            display: block;
            transform: translateY(0);
            opacity: 1;
        }
        .burger-item {
            padding: 1rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
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
<body class="bg-gray-800 text-white">

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
        <!-- Contact Section -->
        <section class="py-20 bg-gray-800 text-white">
            <div class="container mx-auto">
                <h2 class="text-4xl font-bold text-center mb-12">Contact Me</h2>
                <div class="max-w-lg mx-auto bg-gray-700 p-8 rounded-lg shadow-lg">
                    <form id="contact-form">
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-bold mb-2">Name</label>
                            <input type="text" id="name" name="name" class="w-full p-3 rounded bg-gray-600 text-white" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-bold mb-2">Email</label>
                            <input type="email" id="email" name="email" class="w-full p-3 rounded bg-gray-600 text-white" required>
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-sm font-bold mb-2">Message</label>
                            <textarea id="message" name="message" rows="5" class="w-full p-3 rounded bg-gray-600 text-white" required></textarea>
                        </div>
                        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 rounded">Send Message</button>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-400 py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Muhammad Dimas Susanto. All Rights Reserved.</p>
        </div>
    </footer>

    <script>
        // Initialize EmailJS with your user ID
        emailjs.init('i4DqA9JcmEl0260ml'); // Ganti 'i4DqA9JcmEl0260ml' dengan user_id Anda

        // Toggle burger menu visibility
        document.getElementById('menu-button').addEventListener('click', function() {
            document.getElementById('burger-menu').classList.toggle('show');
        });

        // Handle contact form submission
        document.getElementById('contact-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah pengiriman formulir default

            emailjs.sendForm('service_vzm8fvt', 'template_ciozlxc', this)
                .then(function(response) {
                    console.log('Success:', response);
                    alert('Message sent successfully!');
                }, function(error) {
                    console.error('Failed:', error);
                    alert('Failed to send message. Please try again.');
                });
        });
    </script>
</body>
</html>
