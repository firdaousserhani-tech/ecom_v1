<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Beauty Bliss</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50">
    <nav class="p-6 bg-gradient-to-r from-pink-500 via-rose-500 to-orange-400 text-white flex justify-between items-center shadow-lg">
        <h1 class="text-2xl font-bold tracking-tight">BEAUTY BLISS</h1>
        <div class="space-x-6">
            <a href="/" class="hover:text-yellow-100">Home</a>
            <a href="/about" class="hover:text-yellow-100">About</a>
            <a href="/contact" class="font-bold border-b-2 border-white">Contact</a>
            <a href="/admin" class="hover:text-yellow-100">Admin</a>
        </div>
    </nav>

    <div class="max-w-2xl mx-auto py-16 px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-rose-600">Get in Touch</h2>
            <p class="mt-4 text-gray-600">Have questions about our beauty products? Need help with your order? We're here to help you glow!</p>
        </div>
        
        <div class="bg-white/90 backdrop-blur-sm p-8 shadow-xl rounded-2xl border-t-8 border-rose-400">
            @if(session('success'))
                <div class="mb-6 bg-emerald-50 border border-emerald-200 text-emerald-700 px-4 py-3 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif
            @if($errors->any())
                <div class="mb-6 bg-rose-50 border border-rose-200 text-rose-700 px-4 py-3 rounded-lg">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8 text-sm">
                <div>
                    <span class="block font-bold text-rose-500 uppercase tracking-wide">Email</span>
                    <span class="text-lg">hello@beautybliss.com</span>
                </div>
                <div>
                    <span class="block font-bold text-rose-500 uppercase tracking-wide">Phone</span>
                    <span class="text-lg">+1 (555) glow-up</span>
                </div>
            </div>
            
            <form method="POST" action="{{ route('contact.submit') }}" class="space-y-4">
                @csrf
                <input type="text" name="name" placeholder="Full Name" class="w-full p-3 bg-pink-50 border border-rose-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-rose-400" required>
                <input type="email" name="email" placeholder="Email Address" class="w-full p-3 bg-pink-50 border border-rose-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-rose-400" required>
                <textarea name="message" placeholder="How can we help you?" class="w-full p-3 bg-pink-50 border border-rose-200 rounded-lg h-32 focus:outline-none focus:ring-2 focus:ring-rose-400" required></textarea>
                <button type="submit" class="w-full bg-gradient-to-r from-pink-500 via-rose-500 to-orange-400 text-white font-bold py-4 rounded-lg hover:brightness-110 transition-colors shadow-lg">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</body>
</html>