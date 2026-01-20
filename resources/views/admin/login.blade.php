<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .admin-header {
            background: linear-gradient(135deg, #166534 0%, #14532d 100%);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        .admin-login-form {
            background: white;
            border-radius: 16px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .admin-input {
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            padding: 0.75rem;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }
        .admin-input:focus {
            border-color: #ea580c;
            box-shadow: 0 0 0 3px rgba(234, 88, 12, 0.1);
            outline: none;
        }
        .admin-btn-primary {
            background: linear-gradient(135deg, #166534 0%, #14532d 100%);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.2s ease;
            border: none;
        }
        .admin-btn-primary:hover {
            background: linear-gradient(135deg, #14532d 0%, #0f3d22 100%);
            transform: translateY(-1px);
            box-shadow: 0 4px 8px rgba(22, 101, 52, 0.3);
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <nav class="admin-header p-6 text-white flex justify-between items-center">
        <h1 class="text-2xl font-bold tracking-tight">PEAK ADVENTURE</h1>
        <div class="space-x-6">
            <a href="/" class="hover:text-orange-400 transition-colors">Home</a>
            <a href="/about" class="hover:text-orange-400 transition-colors">About</a>
            <a href="/contact" class="hover:text-orange-400 transition-colors">Contact</a>
            <span class="text-orange-400">Admin</span>
        </div>
    </nav>
    <div class="flex items-center justify-center min-h-screen">
    <div class="admin-login-form p-8 w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6 text-center text-green-900">Admin Login</h1>
        @if ($errors->any())
            <div class="mb-4 text-red-600 bg-red-50 p-3 rounded-lg">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
                <input type="password" name="password" id="password" class="admin-input w-full" required>
            </div>
            <button type="submit" class="admin-btn-primary w-full">Login</button>
        </form>
    </div>
</body>
</html>