<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DigitalCath</title>
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>

</head>
<body class="bg-gray-50 text-gray-900 scroll-smooth">

    <!-- Navbar Component -->
    <x-navbar />

    <main class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        
        <!-- Page Header -->
        <header>
            <div class="px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">
                    {{ $heading }}
                </h1>
            </div>
        </header>

        <!-- Page Content -->
        <section class="px-4 py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </section>

    </main>

     <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 text-center py-6">
        <p>&copy; {{ date('Y') }} DigitalCath. All Rights Reserved.</p>
    </footer>
</body>
</html>
