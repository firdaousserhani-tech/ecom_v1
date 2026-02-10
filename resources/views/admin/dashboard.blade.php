x<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Beauty Bliss</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .admin-header {
            background: linear-gradient(135deg, #ec4899 0%, #f97316 100%);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        .admin-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .admin-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .admin-btn-primary {
            background: linear-gradient(135deg, #ec4899 0%, #f97316 100%);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.2s ease;
            border: none;
        }
        .admin-btn-primary:hover {
            background: linear-gradient(135deg, #db2777 0%, #ea580c 100%);
            transform: translateY(-1px);
            box-shadow: 0 4px 8px rgba(236, 72, 153, 0.35);
        }
        .admin-stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            background: linear-gradient(135deg, #ec4899 0%, #f97316 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .admin-activity-list li {
            padding: 0.5rem 0;
            border-bottom: 1px solid #e5e7eb;
            transition: background-color 0.2s ease;
        }
        .admin-activity-list li:hover {
            background-color: #f9fafb;
        }
    </style>
</head>
<body class="bg-pink-50 text-gray-800">
    <nav class="admin-header p-6 text-white flex justify-between items-center">
        <h1 class="text-2xl font-bold tracking-tight">BEAUTY BLISS · ADMIN</h1>
        <div class="space-x-6">
            <a href="/" class="hover:text-yellow-100 transition-colors">Home</a>
            <a href="/about" class="hover:text-yellow-100 transition-colors">About</a>
            <a href="/contact" class="hover:text-yellow-100 transition-colors">Contact</a>
            <span class="text-yellow-100 font-semibold">Admin</span>
        </div>
    </nav>
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-rose-600">Admin Dashboard</h1>
            <form method="POST" action="{{ route('admin.logout') }}" class="inline">
                @csrf
                <button type="submit" class="admin-btn-primary">Logout</button>
            </form>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="admin-card p-6">
                <h2 class="text-xl font-semibold mb-4 text-green-900">Users</h2>
                <p class="text-gray-600">Manage user accounts</p>
                <p class="admin-stat-number">150</p>
            </div>
            <div class="admin-card p-6">
                <h2 class="text-xl font-semibold mb-4 text-green-900">Orders</h2>
                <p class="text-gray-600">View and manage orders</p>
                <p class="text-2xl font-bold text-green-600">45</p>
            </div>
            <div class="admin-card p-6">
                <h2 class="text-xl font-semibold mb-4 text-green-900">Products</h2>
                <p class="text-gray-600">Manage product inventory</p>
                <p class="text-2xl font-bold text-green-800">200</p>
            </div>
        </div>
        <div class="mt-8 admin-card p-6">
            <h2 class="text-xl font-semibold mb-4 text-green-900">Recent Activity</h2>
            <ul class="admin-activity-list space-y-2">
                <li class="text-gray-600">New user registered: John Doe</li>
                <li class="text-gray-600">Order #1234 placed</li>
                <li class="text-gray-600">Product "Hiking Backpack" updated</li>
            </ul>
        </div>
    </div>
</body>
</html>