<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Peak Adventure</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <nav class="p-6 bg-green-800 text-white flex justify-between items-center shadow-lg">
        <h1 class="text-2xl font-bold tracking-tight">BEAUTY BLISS</h1>
        <div class="space-x-6">
            <a href="/" class="hover:text-orange-400">Home</a>
            <a href="/about" class="hover:text-orange-400">About</a>
            <a href="/contact" class="font-bold border-b-2 border-orange-400">Contact</a>
            <a href="/admin" class="hover:text-orange-400">Admin</a>
        </div>
    </nav>

    <div class="max-w-2xl mx-auto py-16 px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900">Get in Touch</h2>
            <p class="mt-4 text-gray-600">Have questions about our beauty products? Need help with your order? We're here to help you glow!</p>
        </div>
        
        <div class="bg-white p-8 shadow-xl rounded-2xl border-t-8 border-orange-500">
            @if(session('success'))
                <div class="mb-6 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif
            @if($errors->any())
                <div class="mb-6 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8 text-sm">
                <div>
                    <span class="block font-bold text-gray-500 uppercase">Email</span>
                    <span class="text-lg">hello@beautybliss.com</span>
                </div>
                <div>
                    <span class="block font-bold text-gray-500 uppercase">Phone</span>
                    <span class="text-lg">+1 (555) glow-up</span>
                </div>
            </div>
            
            <form method="POST" action="{{ route('contact.submit') }}" class="space-y-4">
                @csrf
                <input type="text" name="name" placeholder="Full Name" class="w-full p-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" required>
                <input type="email" name="email" placeholder="Email Address" class="w-full p-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" required>
                <textarea name="message" placeholder="How can we help you?" class="w-full p-3 bg-gray-50 border border-gray-200 rounded-lg h-32 focus:outline-none focus:ring-2 focus:ring-green-500" required></textarea>
                <button type="submit" class="w-full bg-green-800 text-white font-bold py-4 rounded-lg hover:bg-green-900 transition-colors shadow-lg">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</body>
</html>