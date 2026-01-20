<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peak Adventure - Premium Outdoor Gear</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    <nav class="p-6 bg-green-800 text-white flex justify-between items-center shadow-md">
        <h1 class="text-2xl font-bold tracking-tight">PEAK ADVENTURE</h1>
        <div class="space-x-6">
            <a href="/" class="font-bold border-b-2 border-orange-400">Home</a>
            <a href="/about" class="hover:text-orange-400">About</a>
            <a href="/contact" class="hover:text-orange-400">Contact</a>
            <a href="/admin" class="hover:text-orange-400">Admin</a>
        </div>
    </nav>

    <header class="relative bg-green-900 text-white py-32 px-6 text-center">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-5xl font-extrabold mb-4">Gear Up for the Wild</h2>
            <p class="text-xl mb-8 text-green-100">High-quality equipment for hikers, campers, and explorers. Built to last, designed for adventure.</p>
            <div class="space-x-4">
                <a href="#shop" class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-3 rounded-full font-bold transition">Shop Gear</a>
                <a href="/about" class="border border-white hover:bg-white hover:text-green-900 px-8 py-3 rounded-full font-bold transition">Our Story</a>
            </div>
        </div>
    </header>

    <section id="shop" class="max-w-6xl mx-auto py-20 px-6">
        <h3 class="text-3xl font-bold text-center mb-12 text-green-900">Explore Our Categories</h3>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition">
                <img src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=400&h=300&fit=crop" alt="Hiking Backpacks" class="w-full h-48 object-cover">
                <div class="p-6 text-center">
                    <h4 class="text-xl font-bold mb-2">Hiking Backpacks</h4>
                    <p class="text-gray-600 mb-4">Technical packs for all-day comfort.</p>
                    <button class="text-orange-500 font-bold hover:underline">View Collection →</button>
                </div>
            </div>
            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition">
                <img src="https://images.unsplash.com/photo-1504851149312-7a075b496cc7?w=400&h=300&fit=crop" alt="Camping Tents" class="w-full h-48 object-cover">
                <div class="p-6 text-center">
                    <h4 class="text-xl font-bold mb-2">Camping Tents</h4>
                    <p class="text-gray-600 mb-4">Your home away from home.</p>
                    <button class="text-orange-500 font-bold hover:underline">View Collection →</button>
                </div>
            </div>
            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition">
                <img src="https://images.unsplash.com/photo-1544966503-7cc5ac882d5e?w=400&h=300&fit=crop" alt="Mountain Boots" class="w-full h-48 object-cover">
                <div class="p-6 text-center">
                    <h4 class="text-xl font-bold mb-2">Mountain Boots</h4>
                    <p class="text-gray-600 mb-4">Durable grip for every trail.</p>
                    <button class="text-orange-500 font-bold hover:underline">View Collection →</button>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-gray-900 text-gray-400 py-12 text-center">
        <p class="mb-4">&copy; 2024 Peak Adventure Gear. All rights reserved.</p>
        <div class="space-x-4">
            <a href="/about" class="hover:text-white">About</a>
            <a href="/contact" class="hover:text-white">Contact</a>
        </div>
    </footer>

</body>
</html>