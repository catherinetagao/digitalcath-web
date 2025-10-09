<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DigitalCath | Printing & Digital Services in Ilagan</title>
    //logo
    <link rel="icon" href="images/DC.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
        body { font-family: 'Poppins', sans-serif; }
        html { scroll-behavior: smooth; }
    </style>
</head>
<body class="bg-white text-gray-900 scroll-smooth">
    <!-- Minimal Navbar -->
    <!-- Existing Desktop Navbar (Unmodified) -->
<nav class="fixed top-0 left-0 w-full bg-white border-b border-gray-200 z-50">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-4 py-3">
        <span class="font-bold text-xl text-blue-700">DigitalCath</span>
        <div class="space-x-6 text-sm font-medium hidden:sm md:flex">
            <a href="#home" class="hover:text-blue-600 transition">Home</a>
            <a href="#about" class="hover:text-blue-600 transition">About</a>
            <a href="#services" class="hover:text-blue-600 transition">Services</a>
            <a href="#contact" class="hover:text-blue-600 transition">Contact</a>
            <a href="#feedback" class="hover:text-blue-600 transition">Feedback</a>
        </div>
    </div>
</nav>

<!-- Mobile Menu (Visible only on small screens) -->
<nav x-data="{ open: false }" class="fixed top-0 left-0 w-full bg-white border-b border-gray-200 z-50 md:hidden">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-4 py-3">
        <span class="font-bold text-xl text-blue-700">DigitalCath</span>

        <!-- Hamburger Button -->
        <button @click="open = !open" class="text-gray-700 focus:outline-none">
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Dropdown Menu -->
    <div x-show="open" x-transition class="bg-white border-t border-gray-200">
        <div class="flex flex-col px-4 py-3 space-y-2 text-sm font-medium">
            <a href="#home" class="hover:text-blue-600 transition">Home</a>
            <a href="#about" class="hover:text-blue-600 transition">About</a>
            <a href="#services" class="hover:text-blue-600 transition">Services</a>
            <a href="#contact" class="hover:text-blue-600 transition">Contact</a>
            <a href="#feedback" class="hover:text-blue-600 transition">Feedback</a>
        </div>
    </div>
</nav>

<!-- Alpine.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>


    <main class="max-w-4xl mx-auto px-4 pt-24 pb-10 space-y-20">

        <!-- Home Section -->
        <section id="home" class="flex flex-col items-center text-center min-h-[60vh] justify-center">
            <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=600&q=80" alt="Printing Shop" class="w-full max-w-md rounded-lg shadow mb-6 object-cover h-48 sm:h-64">
            <h1 class="text-3xl sm:text-4xl font-bold mb-3">Welcome to DigitalCath</h1>
            <p class="text-base sm:text-lg text-gray-600 mb-6">Your local printing and digital service partner in Ilagan.</p>
            <a href="#contact" class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition text-sm font-medium">Send Your Files</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam sunt dolorum doloremque aut labore commodi optio, similique possimus illum iure impedit vero quidem aspernatur doloribus ipsam pariatur nesciunt quod. Quas!</p>
        </section>

        <!-- About Section -->
        <section id="about" class="text-center">
            <div class="flex flex-col sm:flex-row items-center gap-6 mb-4">
                <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=400&q=80" alt="Team" class="w-full sm:w-48 rounded-lg shadow object-cover h-40 mx-auto sm:mx-0">
                <div class="flex-1">
                    <h2 class="text-2xl font-semibold mb-2">About Us</h2>
                    <p class="max-w-2xl mx-auto text-gray-600 text-base">
                        DigitalCath offers convenient and affordable printing and digital services for students, parents, and professionals. Upload your files online and pick them up hassle-free.
                    </p>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services">
            <h2 class="text-2xl font-semibold text-center mb-6">Our Services</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="p-4 bg-gray-50 border rounded-lg text-center flex flex-col items-center">
                    <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&w=200&q=80" alt="Printing" class="w-20 h-20 object-cover rounded mb-2">
                    <h3 class="font-semibold mb-1">Printing</h3>
                    <p class="text-gray-600 text-sm">₱3 – ₱10 per page (depends on color and paper type)</p>
                </div>
                <div class="p-4 bg-gray-50 border rounded-lg text-center flex flex-col items-center">
                    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=200&q=80" alt="Typing" class="w-20 h-20 object-cover rounded mb-2">
                    <h3 class="font-semibold mb-1">Typing</h3>
                    <p class="text-gray-600 text-sm">Accurate and fast typing for reports, forms, and assignments.</p>
                </div>
                <div class="p-4 bg-gray-50 border rounded-lg text-center flex flex-col items-center">
                    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=200&q=80" alt="Scanning" class="w-20 h-20 object-cover rounded mb-2">
                    <h3 class="font-semibold mb-1">Scanning</h3>
                    <p class="text-gray-600 text-sm">Quick and clear document scanning services.</p>
                </div>
                <div class="p-4 bg-gray-50 border rounded-lg text-center flex flex-col items-center">
                    <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=200&q=80" alt="Design" class="w-20 h-20 object-cover rounded mb-2">
                    <h3 class="font-semibold mb-1">Layout & Design</h3>
                    <p class="text-gray-600 text-sm">Posters, invitations, and marketing materials done right.</p>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="text-center">
            <img src="https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?auto=format&fit=crop&w=400&q=80" alt="Contact" class="w-32 h-32 object-cover rounded-full mx-auto mb-4 shadow">
            <h2 class="text-2xl font-semibold mb-2">Contact Us</h2>
            <p class="max-w-xl mx-auto text-gray-600 mb-4 text-base">
                Message us on Facebook or email your files to start your printing request today!
            </p>
            <a href="mailto:digitalcath@example.com" class="text-blue-600 hover:underline text-sm">digitalcath@example.com</a>
        </section>

        <!-- Feedback Section -->
        <section id="feedback" class="bg-gray-50 rounded-lg shadow-inner py-10 px-4">
            <h2 class="text-2xl font-semibold text-center mb-4">We’d Love Your Feedback 💬</h2>
            @if (session('success'))
                <div 
                    x-data="{ show: true }" 
                    x-show="show" 
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform -translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-2"
                    x-init="setTimeout(() => show = false, 4000)" 
                    class="max-w-md mx-auto mb-6 bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded-lg text-center shadow"
                >
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('feedback.store') }}" class="max-w-md mx-auto bg-white p-4 rounded-lg shadow space-y-4">
                @csrf
                <div>
                    <label for="name" class="block text-left text-sm font-medium text-gray-700 mb-1">Your Name</label>
                    <input type="text" name="name" id="name" required
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
                </div>
                <div>
                    <label for="message" class="block text-left text-sm font-medium text-gray-700 mb-1">Your Feedback</label>
                    <textarea name="message" id="message" rows="3" required
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm"></textarea>
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition text-sm font-medium">
                    Submit Feedback
                </button>
            </form>

            <div class="max-w-2xl mx-auto mt-8">
                <h3 class="text-lg font-semibold mb-2 text-center">Recent Feedback</h3>
                <div class="space-y-3">
                    @foreach($feedbacks as $feedback)
                        <div class="p-3 bg-white rounded-lg shadow text-left">
                            <p class="font-semibold text-gray-800 text-sm">{{ $feedback->name }}</p>
                            <p class="text-gray-600 text-sm mt-1">{{ $feedback->message }}</p>
                            <p class="text-xs text-gray-400 mt-1">{{ $feedback->created_at->diffForHumans() }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    </main>

    <footer class="text-center text-gray-400 text-xs py-6">
        &copy; {{ date('Y') }} DigitalCath. All Rights Reserved.
    </footer>
</body>
</html>