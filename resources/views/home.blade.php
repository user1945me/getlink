<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="{{ asset('/image/das.png') }}">
    <title>getlink - High Speed WiFi Provider</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-pulse {
            animation: pulse 2s ease-in-out infinite;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
        }

        .wifi-icon {
            position: relative;
        }

        .wifi-icon::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            animation: ripple 2s linear infinite;
        }

        @keyframes ripple {
            0% {
                transform: scale(0.8);
                opacity: 1;
            }

            100% {
                transform: scale(1.5);
                opacity: 0;
            }
        }

        .nav-link::after {
            content: '';
            display: block;
            width: 0;
            height: 2px;
            background: white;
            transition: width 0.3s;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .transition-all {
            transition: all 0.3s ease;
        }

        .hero-section {
            position: relative;
            min-height: 100vh;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .wifi-slider {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .wifi-slider img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .wifi-slider img.active {
            opacity: 1;
        }

        .text-container {
            background: rgba(53, 53, 53, 0.6);
            padding: 20px;
            border-radius: 10px;
        }

        .hero-section h1 {
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7);
        }

        .hero-section p {
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.7);
        }

        /* Mobile Menu Styles */
        .mobile-menu {
            position: fixed;
            top: 0;
            right: -100%;
            width: 75%;
            height: 100%;
            background: #1e40af;
            transition: right 0.3s ease-in-out;
            z-index: 1000;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        .mobile-menu.active {
            right: 0;
        }

        .mobile-menu .close-btn {
            align-self: flex-end;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }

        .mobile-menu nav {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .mobile-menu a {
            color: white;
            font-size: 1.2rem;
            font-weight: 500;
            text-decoration: none;
        }

        .mobile-menu a:hover {
            color: #facc15;
        }

        .mobile-menu .login-btn {
            margin-top: 1rem;
            background: white;
            color: #1e40af;
            padding: 0.75rem;
            text-align: center;
            border-radius: 9999px;
            font-weight: 500;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.5s ease-in-out;
            z-index: 999;
        }

        .overlay.active {
            opacity: 1;
            visibility: visible;
        }

        @media (max-width: 768px) {
            .hero-section {
                min-height: 80vh;
            }

            .wifi-slider img {
                object-fit: cover;
                object-position: center;
            }
        }

        @media (max-width: 640px) {
            .hero-section {
                min-height: 60vh;
            }

            .text-container {
                padding: 15px;
            }

            .hero-section h1 {
                font-size: 2.5rem;
            }

            .hero-section p {
                font-size: 1.125rem;
            }
        }
                .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-pulse {
            animation: pulse 2s ease-in-out infinite;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
        }

        .wifi-icon {
            position: relative;
        }

        .wifi-icon::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            animation: ripple 2s linear infinite;
        }

        @keyframes ripple {
            0% {
                transform: scale(0.8);
                opacity: 1;
            }

            100% {
                transform: scale(1.5);
                opacity: 0;
            }
        }

        .nav-link::after {
            content: '';
            display: block;
            width: 0;
            height: 2px;
            background: white;
            transition: width 0.3s;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .transition-all {
            transition: all 0.3s ease;
        }

        .hero-section {
            position: relative;
            min-height: 100vh;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .wifi-slider {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .wifi-slider img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .wifi-slider img.active {
            opacity: 1;
        }

        .text-container {
            background: rgba(53, 53, 53, 0.6);
            padding: 20px;
            border-radius: 10px;
        }

        .hero-section h1 {
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7);
        }

        .hero-section p {
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.7);
        }

        /* Mobile Menu Styles */
        .mobile-menu {
            position: fixed;
            top: 0;
            right: -100%;
            width: 75%;
            height: 100%;
            background: #1e40af;
            transition: right 0.3s ease-in-out;
            z-index: 1000;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        .mobile-menu.active {
            right: 0;
        }

        .mobile-menu .close-btn {
            align-self: flex-end;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }

        .mobile-menu nav {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .mobile-menu a {
            color: white;
            font-size: 1.2rem;
            font-weight: 500;
            text-decoration: none;
        }

        .mobile-menu a:hover {
            color: #facc15;
        }

        .mobile-menu .login-btn {
            margin-top: 1rem;
            background: white;
            color: #1e40af;
            padding: 0.75rem;
            text-align: center;
            border-radius: 9999px;
            font-weight: 500;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.5s ease-in-out;
            z-index: 999;
        }

        .overlay.active {
            opacity: 1;
            visibility: visible;
        }

        @media (max-width: 768px) {
            .hero-section {
                min-height: 80vh;
            }

            .wifi-slider img {
                object-fit: cover;
                object-position: center;
            }
        }

        @media (max-width: 640px) {
            .hero-section {
                min-height: 60vh;
            }

            .text-container {
                padding: 15px;
            }

            .hero-section h1 {
                font-size: 2.5rem;
            }

            .hero-section p {
                font-size: 1.125rem;
            }
        }
    </style>
</head>

<body class="font-sans bg-gray-50">
    <!-- Header/Navigation -->
    <header class="gradient-bg text-white sticky top-0 z-50 shadow-lg">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-2">
                    <div class="rounded-full p-2 text-indigo-600">
                        <img src="{{ asset('image/das.png') }}" alt="pict-slide-3" width="120px">
                    </div>
                </div>
                <!-- <div class="flex items-center space-x-2">
                    <div class="wifi-icon bg-white rounded-full p-2 text-indigo-600">
                        <i class="fas fa-wifi text-xl"></i>
                    </div>
                    <h1 class="text-2xl font-bold">Harmonika <span class="text-blue-200">ID</span></h1>
                </div> -->

                <nav class="hidden md:flex space-x-8">
                    <a href="{{ url('/') }}" class="nav-link font-medium">Home</a>
                    <a href="{{ url('/plans') }}" class="nav-link font-medium">Plans</a>
                    <a href="{{ url('/features') }}" class="nav-link font-medium">Features</a>
                    <a href="{{ url('/coverage') }}" class="nav-link font-medium">Coverage</a>
                    <a href="{{ url('/contact') }}" class="nav-link font-medium">Contact</a>
                </nav>

                <div class="flex items-center space-x-4">
                    <button
                        class="hidden md:block px-4 py-2 rounded-full bg-white text-indigo-600 font-medium hover:bg-indigo-50 transition-all">
                        Login
                    </button>
                    <button class="md:hidden text-white hamburger-btn">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div class="mobile-menu">
        <button class="close-btn"><i class="fas fa-times"></i></button>
        <nav>
            <a href="{{ url('/') }}" class="mobile-nav-link">Home</a>
            <a href="{{ url('/plans') }}" class="mobile-nav-link">Plans</a>
            <a href="{{ url('/features') }}" class="mobile-nav-link">Features</a>
            <a href="{{ url('/coverage') }}" class="mobile-nav-link">Coverage</a>
            <a href="{{ url('/contact') }}" class="mobile-nav-link">Contact</a>
            <!-- <a href="#" class="login-btn">Login</a> -->
        </nav>
    </div>
    <div class="overlay"></div>

    <!-- Hero Section -->
    <section id="home" class="hero-section text-white py-16 md:py-24 reveal">
        <div class="wifi-slider">
            <img src="{{ asset('image/pict1.jpg ') }}" alt="pict-slide-3">
            <img src="{{ asset('image/pict2.jpg') }}" alt="pict-slide-3">
            <img src="{{ asset('image/pict3.png') }}" alt="pict-slide-3">
        </div>
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0 animate-pulse text-container">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">No #1 Best Internet Service Provider</h1>
                <p class="text-xl mb-8 text-blue-100">Experience seamless connectivity with our lightning-fast internet
                    service. Stream, game, and work without interruptions.</p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <button
                        class="px-8 py-3 bg-yellow-400 text-indigo-900 font-bold rounded-full hover:bg-yellow-300 transition-all shadow-lg">
                        Get Started
                    </button>
                    <button
                        class="px-8 py-3 border-2 border-white text-white font-bold rounded-full hover:bg-white hover:text-indigo-900 transition-all">
                        Learn More
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="bg-white py-12 shadow-sm reveal">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="p-4">
                    <div class="text-4xl font-bold text-indigo-600 mb-2">560</div>
                    <div class="text-gray-600">Total Service</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl font-bold text-indigo-600 mb-2">100</div>
                    <div class="text-gray-600">Client Satisfiction</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl font-bold text-indigo-600 mb-2">3</div>
                    <div class="text-gray-600">Total Service</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl font-bold text-indigo-600 mb-2">30</div>
                    <div class="text-gray-600">Years Experience</div>
                </div>
            </div>
        </div>
          <!-- Plans Section -->
    <section id="plans" class="py-16 bg-gray-50 reveal">
        <div class="container mx-auto px-4"> 
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Choose Your Perfect Plan</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">We offer flexible plans to suit your internet needs
                    and budget.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <!-- Starter Plan -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-all card-hover">
                    <div class="bg-indigo-100 p-6">
                        <h3 class="text-2xl font-bold text-indigo-800">Starter</h3>
                        <div class="mt-4">
                            <span class="text-4xl font-bold text-gray-800">IDR 166.500</span>
                            <span class="text-gray-600">/month</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Up to 50 Mbps</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Unlimited Data</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>4 Device</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Gratis Biaya Instalasi</span>
                            </li>
                            <!-- <li class="flex items-center text-gray-400">
                                <i class="fas fa-times text-red-400 mr-2"></i>
                                <span></span>
                            </li> -->
                        </ul>
                        <button
                            class="w-full py-3 bg-indigo-600 text-white rounded-lg font-medium hover:bg-indigo-700 transition-all">
                            Select Plan
                        </button>
                    </div>
                </div>

                <!-- Basic Plan -->
                <div
                    class="bg-white rounded-xl shadow-xl overflow-hidden transform scale-105 transition-all card-hover relative">
                    <div
                        class="absolute top-0 right-0 bg-yellow-400 text-yellow-900 px-4 py-1 text-sm font-bold rounded-bl-lg">
                        POPULAR
                    </div>
                    <div class="bg-indigo-600 p-6">
                        <h3 class="text-2xl font-bold text-white">Basic</h3>
                        <div class="mt-4">
                            <span class="text-4xl font-bold text-white">IDR 222.000</span>
                            <span class="text-indigo-200">/month</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Up to 75 Mbps</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Unlimited Data</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>6 Devices</span>
                            </li>
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Gratis Biaya Instalasi</span>
                            </li>
                        </ul>
                        <button
                            class="w-full py-3 bg-yellow-400 text-indigo-900 rounded-lg font-bold hover:bg-yellow-500 transition-all">
                            Select Plan
                        </button>
                    </div>
                </div>

                <!-- Special Basic Plan -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-all card-hover">
                    <div class="bg-indigo-100 p-6">
                        <h3 class="text-2xl font-bold text-indigo-800">Special Basic</h3>
                        <div class="mt-4">
                            <span class="text-4xl font-bold text-gray-800">IDR 272.000</span>
                            <span class="text-gray-600">/month</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Up to 75 Mbps</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Unlimited Data</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>6 Devices</span>
                            </li>
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Gratis Biaya Instalasi</span>
                            </li>
                        </ul>
                        <button
                            class="w-full py-3 bg-indigo-600 text-white rounded-lg font-medium hover:bg-indigo-700 transition-all">
                            Select Plan
                        </button>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">

                <!-- Premium Plan -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-all card-hover">
                    <div class="bg-indigo-100 p-6">
                        <h3 class="text-2xl font-bold text-indigo-800">Premium</h3>
                        <div class="mt-4">
                            <span class="text-4xl font-bold text-gray-800">IDR 333.000</span>
                            <span class="text-gray-600">/month</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Up to 100 Mbps</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Unlimited Data</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>9 Device</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Gratis Biaya Instalasi</span>
                            </li>
                            <!-- <li class="flex items-center text-gray-400">
                                <i class="fas fa-times text-red-400 mr-2"></i>
                                <span></span>
                            </li> -->
                        </ul>
                        <button
                            class="w-full py-3 bg-indigo-600 text-white rounded-lg font-medium hover:bg-indigo-700 transition-all">
                            Select Plan
                        </button>
                    </div>
                </div>

                <!-- Gold Plan -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-all card-hover">
                    <div class="bg-indigo-100 p-6">
                        <h3 class="text-2xl font-bold text-indigo-800">Gold</h3>
                        <div class="mt-4">
                            <span class="text-4xl font-bold text-gray-800">IDR 444.000</span>
                            <span class="text-gray-600">/month</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Up to 125 Mbps</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Unlimited Data</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>10 Device</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Gratis Biaya Instalasi</span>
                            </li>
                            <!-- <li class="flex items-center text-gray-400">
                                <i class="fas fa-times text-red-400 mr-2"></i>
                                <span></span>
                            </li> -->
                        </ul>
                        <button
                            class="w-full py-3 bg-indigo-600 text-white rounded-lg font-medium hover:bg-indigo-700 transition-all">
                            Select Plan
                        </button>
                    </div>
                </div>

                <!--Platinum Plan -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-all card-hover">
                    <div class="bg-indigo-100 p-6">
                        <h3 class="text-2xl font-bold text-indigo-800">Platinum</h3>
                        <div class="mt-4">
                            <span class="text-4xl font-bold text-gray-800">IDR 555.000</span>
                            <span class="text-gray-600">/month</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Up to 250 Mbps</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Unlimited Data</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>20 Devices</span>
                            </li>
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Gratis Biaya Instalasi</span>
                            </li>
                        </ul>
                        <button
                            class="w-full py-3 bg-indigo-600 text-white rounded-lg font-medium hover:bg-indigo-700 transition-all">
                            Select Plan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </section>


    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="flex items-center space-x-2">
                            <div class="rounded-full p-2 text-indigo-600">
                                <img src="{{ asset('image/das.png') }}" alt="pict-slide-3" width="120px">
                            </div>
                        </div>
                        <!-- <div class="wifi-icon bg-white rounded-full p-2 text-indigo-600">
                            <i class="fas fa-wifi"></i>
                        </div>
                        <h3 class="text-xl font-bold">getlink <span class="text-blue-300">ID</span></h3> -->
                    </div>
                    <p class="text-gray-400 mb-4">Providing high-speed internet connectivity for homes and businesses
                        across Indonesia.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-all">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-all">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-all">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-all">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="index.blade.php" class="text-gray-400 hover:text-white transition-all">Home</a></li>
                        <li><a href="plans.blade.php" class="text-gray-400 hover:text-white transition-all">Plans</a></li>
                        <li><a href="features.blade.php" class="text-gray-400 hover:text-white transition-all">Features</a></li>
                        <li><a href="coverage.blade.php" class="text-gray-400 hover:text-white transition-all">Coverage</a></li>
                        <li><a href="contact.blade.php" class="text-gray-400 hover:text-white transition-all">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-4">Support ayee</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-all">Help Center</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-all">FAQ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-all">Terms of Service</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-all">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-all">Speed Test</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-4">Newsletter</h4>
                    <p class="text-gray-400 mb-4">Subscribe to our newsletter for the latest updates and offers.</p>
                    <form class="flex">
                        <input type="email" placeholder="Your email"
                            class="px-4 py-2 rounded-l-lg focus:outline-none text-gray-900 w-full">
                        <button type="submit"
                            class="bg-indigo-600 px-4 py-2 rounded-r-lg hover:bg-indigo-700 transition-all">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; Copyright ©2023 PT HARMONIKA MULTIMEDIA SAWANGAN. All Rights Reserved</p>
            </div>
        </div>
    </footer>

    <script>
        // Scroll reveal animation
        function scrollReveal() {
            const elements = document.querySelectorAll('.reveal');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                    }
                });
            }, {
                threshold: 0.1
            });

            elements.forEach(element => {
                observer.observe(element);
            });
        }

        // Initialize scroll reveal when DOM loads
        document.addEventListener('DOMContentLoaded', scrollReveal);

        // Mobile menu toggle
        const hamburgerBtn = document.querySelector('.hamburger-btn');
        const mobileMenu = document.querySelector('.mobile-menu');
        const closeBtn = document.querySelector('.close-btn');
        const overlay = document.querySelector('.overlay');
        const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

        function toggleMobileMenu() {
            mobileMenu.classList.toggle('active');
            overlay.classList.toggle('active');
            document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
        }

        hamburgerBtn.addEventListener('click', toggleMobileMenu);
        closeBtn.addEventListener('click', toggleMobileMenu);
        overlay.addEventListener('click', toggleMobileMenu);

        mobileNavLinks.forEach(link => {
            link.addEventListener('click', () => {
                toggleMobileMenu();
                document.querySelector(link.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Smooth scrolling for anchor links (desktop)
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            if (!anchor.classList.contains('mobile-nav-link')) {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            }
        });

        // Form submission
        document.querySelector('form')?.addEventListener('submit', function (e) {
            e.preventDefault();
            alert('Thank you for your message! We will get back to you soon.');
            this.reset();
        });

        // WiFi slider
        const wifiImages = document.querySelectorAll('.wifi-slider img');
        let currentWifiImage = 0;

        function changeWifiImage() {
            wifiImages[currentWifiImage].classList.remove('active');
            currentWifiImage = (currentWifiImage + 1) % wifiImages.length;
            wifiImages[currentWifiImage].classList.add('active');
        }

        setInterval(changeWifiImage, 5000);
    </script>
</body>

</html>