<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Bliss - Home</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background-color: #f9f9f9; color: #333; }
        
        /* Navigation */
        nav { background: #1a4731; color: white; padding: 20px; display: flex; justify-content: space-between; align-items: center; }
        nav a { color: white; text-decoration: none; margin-left: 20px; font-weight: bold; }
        nav a:hover { color: #ff9f43; }

        /* Hero Section */
        header { background: #2d5a27; color: white; text-align: center; padding: 80px 20px; }
        header h2 { font-size: 3rem; margin-bottom: 10px; }
        .btn-shop { background: #ff9f43; color: white; padding: 15px 30px; text-decoration: none; border-radius: 5px; font-weight: bold; display: inline-block; margin-top: 20px; }

        /* Product Grid */
        .container { max-width: 1100px; margin: 50px auto; padding: 0 20px; }
        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; }
        
        /* Product Card */
        .card { background: white; border: 1px solid #ddd; border-radius: 8px; overflow: hidden; text-align: center; transition: 0.3s; }
        .card:hover { transform: translateY(-5px); box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
        .card img { width: 100%; height: 200px; object-cover: cover; }
        .card-body { padding: 20px; }
        .price { font-size: 1.5rem; color: #2d5a27; font-weight: bold; margin: 10px 0; }
        .buy-btn { background: #1a4731; color: white; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer; }

        footer { background: #222; color: #ccc; text-align: center; padding: 40px; margin-top: 50px; }
    </style>
</head>
<body>

    <nav>
        <h1>BEAUTY BLISS</h1>
        <div>
            <a href="/">Home</a>
            <a href="/buy">Buy</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
            <a href="/admin">Admin</a>
        </div>
    </nav>

    <header>
        <h2>Glow Up Your Beauty</h2>
        <p>Premium cosmetics for radiant skin and confident beauty.</p>
        <a href="#shop" class="btn-shop">Shop Now</a>
    </header>

    <section class="container" id="shop">
        <h3 style="text-align: center; font-size: 2rem; margin-bottom: 40px;">Our Products</h3>
        
        <div class="grid">
            @forelse($products as $product)
                <div class="card">
                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h4>{{ $product->name }}</h4>
                        <p>{{ $product->description }}</p>
                        <div class="price">{{ number_format($product->price, 2) }} DH</div>
                        <a href="/buy" class="buy-btn">Buy Now</a>
                    </div>
                </div>
            @empty
                <p style="text-align: center; grid-column: 1/-1;">No products found in the database.</p>
            @endforelse
        </div>
    </section>

    <footer>
        <p>&copy; 2026 Beauty Bliss Morocco. All rights reserved.</p>
    </footer>

</body>
</html>