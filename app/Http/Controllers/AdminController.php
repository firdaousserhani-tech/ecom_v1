<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $loggedIn = $request->cookie('admin_logged_in') === 'true';
        $products = $loggedIn ? Product::orderBy('created_at', 'desc')->get() : collect();

        return view('admin.index', [
            'logged_in' => $loggedIn,
            'products' => $products,
        ]);
    }

    public function login(Request $request)
    { // <--- تم التصحيح: قوس واحد فقط هنا
        $password = $request->input('password');
        
        if ($password === 'admin') { // يفضل تغيير كلمة المرور لاحقاً لأمان أكثر
            // تسجيل الدخول في السجلات
            \Log::info('Admin logged in', [
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'time' => now()
            ]);
            
            return redirect('/admin')->cookie('admin_logged_in', 'true', 60*24*30); // Cookie for 30 days
        } else {
            // تسجيل محاولة فاشلة
            \Log::warning('Failed admin login attempt', [
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'time' => now()
            ]);
            
            return back()->withErrors(['password' => 'Invalid password']);
        }
    }

    public function logout(Request $request)
    {
        // تسجيل الخروج
        \Log::info('Admin logged out', [
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'time' => now()
        ]);
        
        return redirect('/admin')->cookie('admin_logged_in', null, -1); // Remove cookie
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // تسجيل إرسال النموذج
        \Log::info('Contact form submitted', [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
            'ip' => $request->ip(),
            'time' => now()
        ]);

        return back()->with('success', 'Thank you for your message! We\'ll get back to you soon.');
    }

    public function processOrder(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:500',
            'instructions' => 'nullable|string|max:500',
        ]);

        // Collect order items (simplified - in real app you'd calculate properly)
        $orderItems = [];
        $quantities = $request->only([
            'facial_cleanser', 'luxury_lipstick', 'hair_shampoo',
            'moisturizing_cream', 'eyeshadow_palette', 'hair_conditioner'
        ]);

        foreach ($quantities as $product => $quantity) {
            if ($quantity && $quantity > 0) {
                $orderItems[$product] = $quantity;
            }
        }

        // Log the order
        \Log::info('New order placed', [
            'customer' => $validated,
            'items' => $orderItems,
            'instructions' => $validated['instructions'] ?? null,
            'ip' => $request->ip(),
            'time' => now()
        ]);

        return back()->with('success', 'Thank you for your order! We\'ll process it and contact you soon with shipping details.');
    }

    public function storeProduct(Request $request)
    {
        if ($request->cookie('admin_logged_in') !== 'true') {
            return redirect()->route('admin');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|string|max:255',
        ]);

        Product::create($validated);

        return back()->with('success_product', 'Produit ajouté avec succès.');
    }

    public function deleteProduct(Request $request)
    {
        if ($request->cookie('admin_logged_in') !== 'true') {
            return redirect()->route('admin');
        }

        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        Product::where('id', $validated['product_id'])->delete();

        return back()->with('success_product', 'Produit supprimé avec succès.');
    }
}