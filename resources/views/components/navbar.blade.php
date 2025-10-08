<nav x-data="{ open: false }" class="bg-white shadow-md fixed w-full top-0 left-0 z-50">
    <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
        <a href="#home" class="text-xl font-bold text-blue-600">DigitalCath</a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex space-x-6 items-center">
            <x-nav-link href="#home" type="a">Home</x-nav-link>
            <x-nav-link href="#about" type="a">About</x-nav-link>
            <x-nav-link href="#services" type="a">Services</x-nav-link>
            <x-nav-link href="#contact" type="a">Contact</x-nav-link>
        </div>

        <!-- Mobile Button -->
        <button @click="open = !open" class="md:hidden text-gray-700 focus:outline-none">
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" x-transition class="md:hidden bg-white border-t">
        <div class="flex flex-col space-y-2 p-4">
            <x-nav-link href="#home" type="a">Home</x-nav-link>
            <x-nav-link href="#about" type="a">About</x-nav-link>
            <x-nav-link href="#services" type="a">Services</x-nav-link>
            <x-nav-link href="#contact" type="a">Contact</x-nav-link>
        </div>
    </div>
</nav>
