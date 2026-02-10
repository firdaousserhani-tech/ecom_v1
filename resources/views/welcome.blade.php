<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Bliss - Home</title>
    <style>
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            margin: 0;
            background: radial-gradient(circle at top left, #ffe4e6 0, #fdf2f8 30%, #f9fafb 70%);
            color: #1f2933;
        }

        /* Navigation */
        nav {
            background: linear-gradient(135deg, #ec4899, #f97316);
            color: white;
            padding: 18px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 10;
            box-shadow: 0 10px 25px rgba(236, 72, 153, 0.35);
        }

        nav h1 {
            letter-spacing: 0.15em;
            font-size: 1.1rem;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 24px;
            font-weight: 600;
            font-size: 0.95rem;
            position: relative;
        }

        nav a::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -4px;
            width: 0;
            height: 2px;
            background: rgba(255, 255, 255, 0.9);
            transition: width 0.2s ease;
        }

        nav a:hover::after {
            width: 100%;
        }

        /* Hero Section */
        header {
            position: relative;
            color: #111827;
            text-align: left;
            padding: 80px 20px 90px;
            overflow: hidden;
        }

        .hero-inner {
            max-width: 1150px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: minmax(0, 1.4fr) minmax(0, 1fr);
            gap: 40px;
            align-items: center;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            padding: 6px 14px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.8);
            color: #db2777;
            font-weight: 600;
            font-size: 0.8rem;
            margin-bottom: 16px;
            box-shadow: 0 10px 30px rgba(248, 113, 113, 0.15);
        }

        header h2 {
            font-size: clamp(2.5rem, 4vw, 3.2rem);
            margin-bottom: 12px;
            line-height: 1.1;
        }

        header p {
            font-size: 1.05rem;
            max-width: 480px;
            color: #4b5563;
        }

        .hero-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 26px;
            font-size: 0.85rem;
            color: #6b7280;
        }

        .hero-meta strong {
            color: #db2777;
        }

        .btn-group {
            margin-top: 32px;
            display: flex;
            gap: 16px;
            align-items: center;
            flex-wrap: wrap;
        }

        .btn-shop {
            background: linear-gradient(135deg, #ec4899, #f97316);
            color: white;
            padding: 14px 30px;
            text-decoration: none;
            border-radius: 999px;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 18px 45px rgba(236, 72, 153, 0.55);
            border: none;
            cursor: pointer;
            font-size: 0.95rem;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }

        .btn-shop:hover {
            transform: translateY(-1px);
            box-shadow: 0 22px 55px rgba(236, 72, 153, 0.65);
        }

        .btn-outline {
            padding: 12px 20px;
            border-radius: 999px;
            border: 1px solid rgba(148, 163, 184, 0.8);
            background: rgba(255, 255, 255, 0.9);
            color: #374151;
            font-weight: 500;
            font-size: 0.9rem;
            text-decoration: none;
        }

        .btn-outline:hover {
            border-color: #ec4899;
            color: #db2777;
        }

        .hero-image-wrapper {
            position: relative;
            min-height: 260px;
        }

        .hero-main-image {
            position: relative;
            border-radius: 28px;
            overflow: hidden;
            height: 100%;
            min-height: 260px;
            box-shadow: 0 25px 70px rgba(15, 23, 42, 0.6);
        }

        .hero-main-image::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.6), rgba(236, 72, 153, 0.35));
            z-index: 1;
        }

        .hero-main-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transform: scale(1.02);
        }

        .hero-caption {
            position: absolute;
            left: 20px;
            bottom: 20px;
            z-index: 2;
            color: white;
        }

        .hero-caption h3 {
            font-size: 1.05rem;
            margin: 0 0 4px;
        }

        .hero-caption p {
            margin: 0;
            font-size: 0.85rem;
            opacity: 0.9;
        }

        .hero-pill {
            position: absolute;
            top: 18px;
            right: 18px;
            z-index: 2;
            padding: 8px 14px;
            border-radius: 999px;
            background: rgba(15, 23, 42, 0.85);
            color: #fefce8;
            font-size: 0.8rem;
            font-weight: 500;
        }

        /* Product Grid */
        .container {
            max-width: 1150px;
            margin: 40px auto 60px;
            padding: 0 20px;
        }

        .section-heading {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 10px;
            color: #111827;
        }

        .section-subtitle {
            text-align: center;
            color: #6b7280;
            margin-bottom: 36px;
            font-size: 0.95rem;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 26px;
        }

        /* Product Card */
        .card {
            position: relative;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            overflow: hidden;
            text-align: left;
            transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
            border: 1px solid rgba(226, 232, 240, 0.9);
            box-shadow: 0 18px 40px rgba(15, 23, 42, 0.08);
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 26px 60px rgba(15, 23, 42, 0.16);
            border-color: rgba(244, 114, 182, 0.85);
        }

        .card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }

        .card-body {
            padding: 18px 18px 20px;
        }

        .card-body h4 {
            font-size: 1.05rem;
            margin: 0 0 6px;
            color: #111827;
        }

        .card-body p {
            margin: 0 0 12px;
            color: #6b7280;
            font-size: 0.9rem;
        }

        .card-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 8px;
        }

        .price {
            font-size: 1.25rem;
            color: #db2777;
            font-weight: 700;
        }

        .price span {
            font-size: 0.8rem;
            text-transform: uppercase;
            color: #9ca3af;
            margin-left: 3px;
        }

        .buy-btn {
            background: #111827;
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 999px;
            cursor: pointer;
            font-size: 0.85rem;
            font-weight: 600;
            text-decoration: none;
        }

        .buy-btn:hover {
            background: #020617;
        }

        .pill-tag {
            position: absolute;
            top: 14px;
            left: 14px;
            padding: 6px 11px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.9);
            font-size: 0.7rem;
            font-weight: 600;
            color: #db2777;
            text-transform: uppercase;
            letter-spacing: 0.08em;
        }

        .empty-state {
            text-align: center;
            padding: 40px 20px;
            border-radius: 16px;
            background: rgba(255, 255, 255, 0.9);
            border: 1px dashed rgba(209, 213, 219, 0.9);
            color: #6b7280;
        }

        /* Footer */
        footer {
            background: #020617;
            color: #9ca3af;
            text-align: center;
            padding: 30px 20px;
        }

        footer a {
            color: #e5e7eb;
            text-decoration: none;
        }

        footer a:hover {
            color: #f9a8d4;
        }

        /* Responsive */
        @media (max-width: 768px) {
            nav {
                padding-inline: 20px;
            }

            .hero-inner {
                grid-template-columns: minmax(0, 1fr);
            }

            .hero-main-image {
                margin-top: 16px;
            }

            .hero-meta {
                gap: 12px;
            }
        }
    </style>
</head>
<body>

    <nav>
        <h1>BEAUTY BLISS</h1>
        <div>
            <a href="/">Home</a>
            <a href="/buy">Shop</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
            <a href="/admin">Admin</a>
        </div>
    </nav>

    <header>
        <div class="hero-inner">
            <div>
                <div class="hero-badge">
                    ✨ New · Moroccan clean beauty ritual
                </div>
                <h2>Glow up your daily beauty ritual.</h2>
                <p>
                    Premium serums, oils and skincare made with argan, rose and fig extracts
                    for luminous, hydrated skin every single day.
                </p>
                <div class="hero-meta">
                    <span><strong>Free delivery</strong> from 400 DH</span>
                    <span><strong>Dermatologically tested</strong> &amp; vegan formulas</span>
                </div>
                <div class="btn-group">
                    <a href="#shop" class="btn-shop">Shop the collection</a>
                    <a href="/about" class="btn-outline">Discover our ingredients</a>
                </div>
            </div>

            <div class="hero-image-wrapper">
                <div class="hero-main-image">
                    <span class="hero-pill">Best‑seller · Argan Glow Set</span>
                    <img
                        src="{{ asset('images/hero_beauty_collection.jpg') }}"
                        alt="Beauty Bliss skincare collection"
                    >
                    <div class="hero-caption">
                        <h3>Glow Essentials Kit</h3>
                        <p>Serum, facial oil &amp; hydrating mist for 24h radiance.</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="container" id="shop">
        <h3 class="section-heading">Our Beauty Favorites</h3>
        <p class="section-subtitle">
            Curated products for glowing skin, soft lips and a relaxing self‑care routine.
        </p>
        
        <div class="grid">
            @forelse($products as $product)
                <div class="card">
                    <span class="pill-tag">New · Beauty</span>
                    <img
                        src="{{ asset('images/' . $product->image) }}"
                        alt="{{ $product->name }}"
                    >
                    <div class="card-body">
                        <h4>{{ $product->name }}</h4>
                        <p>{{ $product->description }}</p>
                        <div class="card-footer">
                            <div class="price">
                                {{ number_format($product->price, 2) }} DH
                                <span>incl. TVA</span>
                            </div>
                            <a href="/buy" class="buy-btn">Add to cart</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="empty-state">
                    No beauty products found in the database. Connect to the admin panel to add your first items.
                </div>
            @endforelse
        </div>
    </section>

    <footer>
        <p>&copy; 2026 Beauty Bliss Morocco. All rights reserved.</p>
    </footer>

</body>
</html>