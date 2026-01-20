<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Products - Beauty Bliss</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">
    <nav class="p-6 bg-green-800 text-white flex justify-between items-center shadow-md">
        <h1 class="text-2xl font-bold tracking-tight">BEAUTY BLISS</h1>
        <div class="space-x-6">
            <a href="/" class="hover:text-orange-400 transition-colors">Home</a>
            <a href="/about" class="hover:text-orange-400 transition-colors">About</a>
            <a href="/contact" class="hover:text-orange-400 transition-colors">Contact</a>
            <a href="/buy" class="font-bold border-b-2 border-orange-400">Buy</a>
            <a href="/admin" class="hover:text-orange-400 transition-colors">Admin</a>
        </div>
    </nav>

    <div class="container mx-auto p-6">
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-green-900 mb-4">Purchase Your Beauty Products</h1>
            <p class="text-gray-600 text-lg">Select your favorite products and complete your order</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Product Selection -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-6 text-green-900">Select Products</h2>

                <div class="space-y-4">
                    <div class="flex items-center justify-between p-4 border rounded-lg">
                        <div class="flex items-center space-x-4">
                            <img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?w=60&h=60&fit=crop" alt="Facial Cleanser" class="rounded">
                            <div>
                                <h3 class="font-semibold">Facial Cleanser</h3>
                                <p class="text-sm text-gray-600">$24.99</p>
                            </div>
                        </div>
                        <input type="number" name="facial_cleanser" min="0" max="10" class="w-16 p-2 border rounded" placeholder="0">
                    </div>

                    <div class="flex items-center justify-between p-4 border rounded-lg">
                        <div class="flex items-center space-x-4">
                            <img src="https://images.unsplash.com/photo-1586495777744-4413f21062fa?w=60&h=60&fit=crop" alt="Luxury Lipstick" class="rounded">
                            <div>
                                <h3 class="font-semibold">Luxury Lipstick</h3>
                                <p class="text-sm text-gray-600">$19.99</p>
                            </div>
                        </div>
                        <input type="number" name="luxury_lipstick" min="0" max="10" class="w-16 p-2 border rounded" placeholder="0">
                    </div>

                    <div class="flex items-center justify-between p-4 border rounded-lg">
                        <div class="flex items-center space-x-4">
                            <img src="https://images.unsplash.com/photo-1556228720-195a672e8a03?w=60&h=60&fit=crop" alt="Hair Shampoo" class="rounded">
                            <div>
                                <h3 class="font-semibold">Hair Shampoo</h3>
                                <p class="text-sm text-gray-600">$16.99</p>
                            </div>
                        </div>
                        <input type="number" name="hair_shampoo" min="0" max="10" class="w-16 p-2 border rounded" placeholder="0">
                    </div>

                    <div class="flex items-center justify-between p-4 border rounded-lg">
                        <div class="flex items-center space-x-4">
                            <img src="https://images.unsplash.com/photo-1556228578-0d85b1a4d571?w=60&h=60&fit=crop" alt="Moisturizing Cream" class="rounded">
                            <div>
                                <h3 class="font-semibold">Moisturizing Cream</h3>
                                <p class="text-sm text-gray-600">$29.99</p>
                            </div>
                        </div>
                        <input type="number" name="moisturizing_cream" min="0" max="10" class="w-16 p-2 border rounded" placeholder="0">
                    </div>

                    <div class="flex items-center justify-between p-4 border rounded-lg">
                        <div class="flex items-center space-x-4">
                            <img src="https://images.unsplash.com/photo-1516975080664-ed2fc6a32937?w=60&h=60&fit=crop" alt="Eyeshadow Palette" class="rounded">
                            <div>
                                <h3 class="font-semibold">Eyeshadow Palette</h3>
                                <p class="text-sm text-gray-600">$34.99</p>
                            </div>
                        </div>
                        <input type="number" name="eyeshadow_palette" min="0" max="10" class="w-16 p-2 border rounded" placeholder="0">
                    </div>

                    <div class="flex items-center justify-between p-4 border rounded-lg">
                        <div class="flex items-center space-x-4">
                            <img src="https://images.unsplash.com/photo-1582095133179-bfd08e2fc6b3?w=60&h=60&fit=crop" alt="Hair Conditioner" class="rounded">
                            <div>
                                <h3 class="font-semibold">Hair Conditioner</h3>
                                <p class="text-sm text-gray-600">$18.99</p>
                            </div>
                        </div>
                        <input type="number" name="hair_conditioner" min="0" max="10" class="w-16 p-2 border rounded" placeholder="0">
                    </div>
                </div>
            </div>

            <!-- Order Form -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-6 text-green-900">Complete Your Order</h2>

                @if(session('success'))
                    <div class="mb-6 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('buy.process') }}" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                        <input type="text" name="name" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                        <input type="email" name="email" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                        <input type="tel" name="phone" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Shipping Address</label>
                        <textarea name="address" required rows="3" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent"></textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Special Instructions (Optional)</label>
                        <textarea name="instructions" rows="2" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent"></textarea>
                    </div>

                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold mb-2">Order Summary</h3>
                        <div id="order-summary" class="text-sm text-gray-600">
                            No items selected
                        </div>
                        <div class="mt-2 pt-2 border-t">
                            <strong>Total: $<span id="total-amount">0.00</span></strong>
                        </div>
                    </div>

                    <button type="submit" class="w-full bg-green-800 text-white font-bold py-4 rounded-lg hover:bg-green-900 transition-colors shadow-lg">
                        Place Order
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Simple order calculation (in a real app, this would be more sophisticated)
        function updateOrderSummary() {
            // This is a basic example - in production you'd calculate based on actual selections
            document.getElementById('order-summary').innerHTML = 'Order will be calculated on submission';
            document.getElementById('total-amount').innerHTML = 'TBD';
        }

        // Update summary when quantity changes
        document.querySelectorAll('input[type="number"]').forEach(input => {
            input.addEventListener('change', updateOrderSummary);
        });
    </script>
</body>
</html>