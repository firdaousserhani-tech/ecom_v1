<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peak Adventure - Premium Outdoor Gear</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function viewProduct(name, description) {
            alert('Product: ' + name + '\n\nDescription: ' + description + '\n\nPrice: Contact us for pricing\n\nThis feature will be fully implemented soon!');
        }
    </script>
</head>
<body class="bg-gray-50 text-gray-800">

    <nav class="p-6 bg-green-800 text-white flex justify-between items-center shadow-md">
        <h1 class="text-2xl font-bold tracking-tight">BEAUTY BLISS</h1>
        <div class="space-x-6">
            <a href="/" class="font-bold border-b-2 border-orange-400">Home</a>
            <a href="/buy" class="hover:text-orange-400">Buy</a>
            <a href="/about" class="hover:text-orange-400">About</a>
            <a href="/contact" class="hover:text-orange-400">Contact</a>
            <a href="/admin" class="hover:text-orange-400">Admin</a>
        </div>
    </nav>

    <header class="relative bg-green-900 text-white py-32 px-6 text-center">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-5xl font-extrabold mb-4">Glow Up Your Beauty</h2>
            <p class="text-xl mb-8 text-green-100">Premium cosmetics for radiant skin and confident beauty. Quality products for every look.</p>
            <div class="space-x-4">
                <a href="/buy" class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-3 rounded-full font-bold transition">Shop Beauty</a>
                <a href="/about" class="border border-white hover:bg-white hover:text-green-900 px-8 py-3 rounded-full font-bold transition">Our Story</a>
            </div>
        </div>
    </header>

    <section id="shop" class="max-w-6xl mx-auto py-20 px-6">
        <h3 class="text-3xl font-bold text-center mb-12 text-green-900">Explore Our Beauty Products</h3>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition">
                <a href="/contact" class="block">
                    <img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?w=400&h=300&fit=crop" alt="Facial Cleanser" class="w-full h-48 object-cover hover:opacity-90 transition-opacity">
                </a>
                <div class="p-6 text-center">
                    <h4 class="text-xl font-bold mb-2">Facial Cleanser</h4>
                    <p class="text-gray-600 mb-4">Gentle cleansing for all skin types.</p>
                    <button onclick="viewProduct('Facial Cleanser', 'Gentle cleansing for all skin types. Perfect for daily use to remove impurities and prepare skin for moisturizing.')" class="text-orange-500 font-bold hover:underline">View Product →</button>
                </div>
            </div>
            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition">
                <a href="/contact" class="block">
                    <img src="https://images.unsplash.com/photo-1586495777744-4413f21062fa?w=400&h=300&fit=crop" alt="Luxury Lipstick" class="w-full h-48 object-cover hover:opacity-90 transition-opacity">
                </a>
                <div class="p-6 text-center">
                    <h4 class="text-xl font-bold mb-2">Luxury Lipstick</h4>
                    <p class="text-gray-600 mb-4">Long-lasting, vibrant colors.</p>
                    <button onclick="viewProduct('Luxury Lipstick', 'Premium long-lasting lipstick with vibrant colors. Creamy formula that glides on smoothly and stays put all day.')" class="text-orange-500 font-bold hover:underline">View Product →</button>
                </div>
            </div>
            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition">
                <a href="/contact" class="block">
                    <img src="https://images.unsplash.com/photo-1556228720-195a672e8a03?w=400&h=300&fit=crop" alt="Hair Shampoo" class="w-full h-48 object-cover hover:opacity-90 transition-opacity">
                </a>
                <div class="p-6 text-center">
                    <h4 class="text-xl font-bold mb-2">Hair Shampoo</h4>
                    <p class="text-gray-600 mb-4">Nourishing formula for healthy hair.</p>
                    <button onclick="viewProduct('Hair Shampoo', 'Rich, nourishing shampoo that cleanses while strengthening hair follicles. Perfect for all hair types.')" class="text-orange-500 font-bold hover:underline">View Product →</button>
                </div>
            </div>
            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition">
                <a href="/contact" class="block">
                    <img src="https://images.unsplash.com/photo-1556228578-0d85b1a4d571?w=400&h=300&fit=crop" alt="Moisturizing Cream" class="w-full h-48 object-cover hover:opacity-90 transition-opacity">
                </a>
                <div class="p-6 text-center">
                    <h4 class="text-xl font-bold mb-2">Moisturizing Cream</h4>
                    <p class="text-gray-600 mb-4">Hydrate and protect your skin.</p>
                    <button onclick="viewProduct('Moisturizing Cream', 'Deeply hydrating cream that nourishes and protects skin. Non-greasy formula perfect for daily use.')" class="text-orange-500 font-bold hover:underline">View Product →</button>
                </div>
            </div>
            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition">
                <a href="/contact" class="block">
                    <img src="https://images.unsplash.com/photo-1516975080664-ed2fc6a32937?w=400&h=300&fit=crop" alt="Eyeshadow Palette" class="w-full h-48 object-cover hover:opacity-90 transition-opacity">
                </a>
                <div class="p-6 text-center">
                    <h4 class="text-xl font-bold mb-2">Eyeshadow Palette</h4>
                    <p class="text-gray-600 mb-4">Professional quality pigments.</p>
                    <button onclick="viewProduct('Eyeshadow Palette', 'Professional eyeshadow palette with highly pigmented colors. Blendable formula for stunning eye looks.')" class="text-orange-500 font-bold hover:underline">View Product →</button>
                </div>
            </div>
            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition">
                <a href="/contact" class="block">
                    <img src="https://images.unsplash.com/photo-1582095133179-bfd08e2fc6b3?w=400&h=300&fit=crop" alt="Hair Conditioner" class="w-full h-48 object-cover hover:opacity-90 transition-opacity">
                </a>
                <div class="p-6 text-center">
                    <h4 class="text-xl font-bold mb-2">Hair Conditioner</h4>
                    <p class="text-gray-600 mb-4">Smooth and detangle your hair.</p>
                    <button onclick="viewProduct('Hair Conditioner', 'Silky smooth conditioner that detangles and nourishes hair. Leaves hair soft, shiny, and manageable.')" class="text-orange-500 font-bold hover:underline">View Product →</button>
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