<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">a
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
    </style>
</head>

<body class="font-sans bg-gray-50">
    <!-- Header/Navigation -->
    <header class="gradient-bg text-white sticky top-0 z-50 shadow-lg">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-2">
                    <div class="rounded-full p-2 text-indigo-600">
                        <<img src="{{ asset('image/das.png') }}" alt="pict-slide-3" width="120px">
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


    <!-- Testimonials Section -->
    <section class="py-16 bg-white reveal">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">What Our Customers Say</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Don't just take our word for it - hear from our
                    satisfied customers.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="bg-gray-50 p-8 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-12 h-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 font-bold mr-4">
                            AS
                        </div>
                        <div>
                            <h4 class="font-bold">Andi Susanto</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"Switching to Harmonika.id was the best decision for my home office. The
                        speed is incredible and I've had zero downtime in 6 months!"</p>
                </div>

                <div class="bg-gray-50 p-8 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-12 h-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 font-bold mr-4">
                            BD
                        </div>
                        <div>
                            <h4 class="font-bold">Budi Darmawan</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"My whole family can stream movies and play games simultaneously without
                        any lag. The customer service is also very responsive."</p>
                </div>

                <div class="bg-gray-50 p-8 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-12 h-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 font-bold mr-4">
                            CS
                        </div>
                        <div>
                            <h4 class="font-bold">Citra Sari</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"As a digital content creator, I need reliable high-speed internet.
                        Harmonika.id has exceeded my expectations in every way."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 gradient-bg text-white reveal">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Experience Blazing Fast Internet?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto text-blue-100">Join thousands of satisfied customers enjoying
                seamless connectivity today.</p>
            <button
                class="px-8 py-3 bg-yellow-400 text-indigo-900 font-bold rounded-full hover:bg-yellow-300 transition-all shadow-lg animate-pulse">
                Sign Up Now
            </button>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-white reveal">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 max-w-6xl mx-auto">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Contact Us</h2>
                    <p class="text-gray-600 mb-8">Have questions or need assistance? Our team is here to help you 24/7.
                    </p>

                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-indigo-100 p-3 rounded-full mr-4 text-indigo-600">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Our Office</h4>
                                <p class="text-gray-600">Kp. Bombay RT02/05 No.02, Kota Depok, Jawa Barat 16519</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-indigo-100 p-3 rounded-full mr-4 text-indigo-600">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Call Us</h4>
                                <p class="text-gray-600">+62 21 7797 6444 (Tim Support)</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-indigo-100 p-3 rounded-full mr-4 text-indigo-600">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Email Us</h4>
                                <p class="text-gray-600">cs@harmonika.id</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 p-8 rounded-xl shadow-sm">
                    <h3 class="text-xl font-bold text-gray-800 mb-6">Send Us a Message</h3>
                    <form>
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 mb-2">Your Name</label>
                            <input type="text" id="name"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 mb-2">Email Address</label>
                            <input type="email" id="email"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        </div>
                        <div class="mb-4">
                            <label for="subject" class="block text-gray-700 mb-2">Subject</label>
                            <input type="text" id="subject"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-gray-700 mb-2">Message</label>
                            <textarea id="message" rows="4"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full py-3 bg-indigo-600 text-white rounded-lg font-medium hover:bg-indigo-700 transition-all">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
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
                        <h3 class="text-xl font-bold">Harmonika <span class="text-blue-300">ID</span></h3> -->
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
                        <li><a href="{{ url('/') }}" class="text-gray-400 hover:text-white transition-all">Home</a></li>
                        <li><a href="{{ url('/plans') }}" class="text-gray-400 hover:text-white transition-all">Plans</a></li>
                        <li><a href="{{ url('/features') }}" class="text-gray-400 hover:text-white transition-all">Features</a></li>
                        <li><a href="{{ url('/coverage') }}" class="text-gray-400 hover:text-white transition-all">Coverage</a></li>
                        <li><a href="{{ url('/contact') }}" class="text-gray-400 hover:text-white transition-all">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-4">Support</h4>
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