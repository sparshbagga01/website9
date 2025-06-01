
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - Avtaar Mechanical Works</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background: #f8f9fa;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background: white;
            color: #333;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            border-bottom: 1px solid #e0e0e0;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-section {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .logo-icon {
            width: 50px;
            height: 50px;
            background: #ff6600;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .company-name {
            font-size: 1.8rem;
            font-weight: bold;
            color: #333;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 2rem;
            align-items: center;
        }

        nav a {
            color: #333;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 8px 12px;
            border-radius: 5px;
        }

        nav a:hover {
            color: #ff6600;
            background: #f8f9fa;
        }

        .nav-icon {
            font-size: 1.1rem;
        }

        .dropdown {
            position: relative;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background: white;
            min-width: 250px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            top: 100%;
            left: 0;
            z-index: 1001;
            border-radius: 5px;
            border: 1px solid #e0e0e0;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            display: block;
            padding: 12px 16px;
            border-bottom: 1px solid #f0f0f0;
            color: #333;
        }

        .dropdown-content a:hover {
            background: #f8f9fa;
            color: #ff6600;
        }

        .download-btn {
            background: #ff6600;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .download-btn:hover {
            background: #e55a00;
        }

        /* Main Content */
        main {
            margin-top: 100px;
            padding: 40px 0;
        }

        /* Page Header */
        .page-header {
            background: linear-gradient(135deg, #333 0%, #1a1a1a 100%);
            color: white;
            padding: 60px 0;
            text-align: center;
            margin-bottom: 60px;
        }

        .page-title {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: #ff6600;
        }

        .page-subtitle {
            font-size: 1.2rem;
            color: #ccc;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* Filters */
        .filters-section {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            margin-bottom: 3rem;
        }

        .filters-title {
            font-size: 1.3rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
            color: #333;
        }

        .filters-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            align-items: center;
        }

        .filter-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .filter-label {
            font-weight: bold;
            color: #555;
            font-size: 0.9rem;
        }

        .filter-select,
        .filter-input {
            padding: 10px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .filter-select:focus,
        .filter-input:focus {
            outline: none;
            border-color: #ff6600;
        }

        .filter-buttons {
            display: flex;
            gap: 1rem;
        }

        .btn-filter {
            background: #ff6600;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn-filter:hover {
            background: #e55a00;
        }

        .btn-clear {
            background: transparent;
            color: #ff6600;
            padding: 10px 20px;
            border: 2px solid #ff6600;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s;
        }

        .btn-clear:hover {
            background: #ff6600;
            color: white;
        }

        /* Products Grid */
        .products-section {
            margin-bottom: 3rem;
        }

        .products-count {
            margin-bottom: 2rem;
            color: #666;
            font-size: 1.1rem;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2.5rem;
        }

        .product-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border: 1px solid #e0e0e0;
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(255, 102, 0, 0.2);
            border-color: #ff6600;
        }

        .product-image {
            height: 250px;
            background: #f5f5f5;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            color: #666;
            border-bottom: 1px solid #e0e0e0;
            position: relative;
        }

        .product-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: #ff6600;
            color: white;
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: bold;
        }

        .product-info {
            padding: 2rem;
        }

        .product-title {
            font-size: 1.4rem;
            font-weight: bold;
            margin-bottom: 0.8rem;
            color: #333;
            line-height: 1.3;
        }

        .product-subtitle {
            font-size: 0.95rem;
            color: #666;
            margin-bottom: 1rem;
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .product-price {
            font-size: 1.3rem;
            font-weight: bold;
            color: #ff6600;
            margin-bottom: 1.5rem;
        }

        .product-features {
            margin-bottom: 1.5rem;
        }

        .feature-list {
            list-style: none;
            padding: 0;
        }

        .feature-list li {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 0.3rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .feature-list li::before {
            content: '✓';
            color: #ff6600;
            font-weight: bold;
        }

        .product-buttons {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .btn-view {
            background: #ff6600;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
            text-decoration: none;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .btn-view:hover {
            background: #e55a00;
        }

        .btn-quote {
            background: transparent;
            color: #ff6600;
            padding: 12px;
            border: 2px solid #ff6600;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .btn-quote:hover {
            background: #ff6600;
            color: white;
        }

        /* Call to Action */
        .cta-section {
            background: linear-gradient(135deg, #ff6600, #e55a00);
            color: white;
            padding: 60px 0;
            text-align: center;
            border-radius: 15px;
            margin-top: 4rem;
        }

        .cta-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .cta-subtitle {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-buttons {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cta-btn {
            background: white;
            color: #ff6600;
            padding: 15px 30px;
            border: none;
            border-radius: 25px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .cta-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }

        /* WhatsApp Float Button */
        .whatsapp-float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
            background: #25d366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            box-shadow: 0 4px 15px rgba(37, 211, 102, 0.4);
            cursor: pointer;
            transition: transform 0.3s;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
        }

        .whatsapp-float span {
            color: white;
            font-size: 1.5rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 1rem;
            }

            .logo-section {
                justify-content: center;
            }

            nav ul {
                flex-direction: column;
                gap: 1rem;
                width: 100%;
                text-align: center;
            }

            .dropdown-content {
                position: static;
                display: block;
                box-shadow: none;
                border: none;
                background: #f8f9fa;
                margin-top: 0.5rem;
            }

            .page-title {
                font-size: 2.5rem;
            }

            .products-grid {
                grid-template-columns: 1fr;
            }

            .filters-grid {
                grid-template-columns: 1fr;
            }

            .filter-buttons {
                flex-direction: column;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }

            .cta-btn {
                width: 100%;
                max-width: 300px;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <?php
    // Define all products data
    $all_products = [
        'multi-track' => [
            'title' => 'Multi Track Packing Machine',
            'subtitle' => 'High-Speed Automatic Packaging Solution for Multiple Product Lines',
            'price' => '₹2,50,000',
            'image_alt' => 'Multi Track Packing Machine',
            'category' => 'Automatic',
            'capacity' => '120 ppm',
            'features' => [
                '4-track parallel processing',
                'PLC touch screen control',
                'Adjustable pouch sizes',
                'High-speed operation'
            ]
        ],
        'pouch-packing' => [
            'title' => 'Pouch Packing Machine',
            'subtitle' => 'Efficient Pouch Packaging Solution for Various Products',
            'price' => '₹1,80,000',
            'image_alt' => 'Pouch Packing Machine',
            'category' => 'Semi-Automatic',
            'capacity' => '80 ppm',
            'features' => [
                'Flexible pouch sizes',
                'Easy operation',
                'Low maintenance',
                'Cost-effective solution'
            ]
        ],
        'multi-track-pouch' => [
            'title' => 'Multi Track Pouch Packing Machine',
            'subtitle' => 'Advanced Multi-Lane Pouch Packaging for High Volume Production',
            'price' => '₹3,20,000',
            'image_alt' => 'Multi Track Pouch Packing Machine',
            'category' => 'Automatic',
            'capacity' => '150 ppm',
            'features' => [
                '6-track processing',
                'Advanced automation',
                'High volume capacity',
                'Premium construction'
            ]
        ],
        'tomato-ketchup' => [
            'title' => 'Tomato Ketchup Pouch Packing Machine',
            'subtitle' => 'Specialized Packaging Solution for Tomato Ketchup and Sauces',
            'price' => '₹2,10,000',
            'image_alt' => 'Tomato Ketchup Pouch Packing Machine',
            'category' => 'Specialized',
            'capacity' => '100 ppm',
            'features' => [
                'Viscous liquid handling',
                'Hygienic design',
                'Precise filling',
                'Food-grade materials'
            ]
        ],
        'sauce-pouch' => [
            'title' => 'Sauce Pouch Packaging Machine',
            'subtitle' => 'Professional Sauce Packaging with Precision and Hygiene',
            'price' => '₹1,95,000',
            'image_alt' => 'Sauce Pouch Packaging Machine',
            'category' => 'Specialized',
            'capacity' => '90 ppm',
            'features' => [
                'Multi-sauce compatibility',
                'Temperature control',
                'Easy cleaning',
                'Consistent quality'
            ]
        ]
    ];
    ?>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo-section">
                    <div class="logo-icon">A</div>
                    <div class="company-name">Avtaar Mechanical Works</div>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php"><span class="nav-icon">🏠</span> Home</a></li>
                        <li><a href="index.php#about"><span class="nav-icon">ℹ️</span> About Us</a></li>
                        <li class="dropdown">
                            <a href="#products"><span class="nav-icon">⚙️</span> Products ▼</a>
                            <div class="dropdown-content">
                                <a href="all-products.php">All Products</a>
                                <a href="product.php?product=multi-track">Multi Track Packing Machine</a>
                                <a href="product.php?product=pouch-packing">Pouch Packing Machine</a>
                                <a href="product.php?product=multi-track-pouch">Multi Track Pouch Packing Machine</a>
                                <a href="product.php?product=tomato-ketchup">Tomato Ketchup Pouch Packing Machine</a>
                                <a href="product.php?product=sauce-pouch">Sauce Pouch Packaging Machine</a>
                            </div>
                        </li>
                        <li><a href="index.php#contact"><span class="nav-icon">📞</span> Contact</a></li>
                        <li><button class="download-btn" onclick="downloadCatalog()"><span class="nav-icon">📁</span> Catalog</button></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Page Header -->
        <section class="page-header">
            <div class="container">
                <h1 class="page-title">All Products</h1>
                <p class="page-subtitle">Comprehensive range of packaging machines designed to meet diverse industrial requirements. Quality, efficiency, and innovation in every machine.</p>
            </div>
        </section>

        <!-- Filters Section -->
        <section class="filters-section">
            <div class="container">
                <h3 class="filters-title">🔍 Filter Products</h3>
                <div class="filters-grid">
                    <div class="filter-group">
                        <label class="filter-label">Category</label>
                        <select class="filter-select" id="categoryFilter">
                            <option value="">All Categories</option>
                            <option value="Automatic">Automatic</option>
                            <option value="Semi-Automatic">Semi-Automatic</option>
                            <option value="Specialized">Specialized</option>
                        </select>
                    </div>
                    <div class="filter-group">
                        <label class="filter-label">Price Range</label>
                        <select class="filter-select" id="priceFilter">
                            <option value="">All Prices</option>
                            <option value="0-200000">Under ₹2,00,000</option>
                            <option value="200000-250000">₹2,00,000 - ₹2,50,000</option>
                            <option value="250000-999999">Above ₹2,50,000</option>
                        </select>
                    </div>
                    <div class="filter-group">
                        <label class="filter-label">Search Products</label>
                        <input type="text" class="filter-input" id="searchFilter" placeholder="Search by name or feature...">
                    </div>
                    <div class="filter-buttons">
                        <button class="btn-filter" onclick="applyFilters()">Apply Filters</button>
                        <button class="btn-clear" onclick="clearFilters()">Clear All</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Products Section -->
        <section class="products-section">
            <div class="container">
                <div class="products-count" id="productsCount">
                    Showing <?php echo count($all_products); ?> products
                </div>
                <div class="products-grid" id="productsGrid">
                    <?php foreach($all_products as $key => $product): ?>
                    <div class="product-card" data-category="<?php echo $product['category']; ?>" data-price="<?php echo (int)str_replace(['₹', ','], '', $product['price']); ?>" data-searchtext="<?php echo strtolower($product['title'] . ' ' . $product['subtitle'] . ' ' . implode(' ', $product['features'])); ?>">
                        <div class="product-image">
                            <div class="product-badge"><?php echo $product['category']; ?></div>
                            <span><?php echo $product['image_alt']; ?></span>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><?php echo $product['title']; ?></h3>
                            <p class="product-subtitle"><?php echo $product['subtitle']; ?></p>
                            <div class="product-price"><?php echo $product['price']; ?> <span style="font-size: 0.8rem; color: #666;">+ GST</span></div>
                            <div class="product-features">
                                <ul class="feature-list">
                                    <?php foreach($product['features'] as $feature): ?>
                                    <li><?php echo $feature; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="product-buttons">
                                <a href="product.php?product=<?php echo $key; ?>" class="btn-view">
                                    <span>👁️</span> View Details
                                </a>
                                <button class="btn-quote" onclick="getQuote('<?php echo $product['title']; ?>')">
                                    <span>💰</span> Get Quote
                                </button>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Call to Action Section -->
        <section class="cta-section">
            <div class="container">
                <h2 class="cta-title">Can't Find What You're Looking For?</h2>
                <p class="cta-subtitle">We offer custom packaging solutions tailored to your specific requirements.</p>
                <div class="cta-buttons">
                    <button class="cta-btn" onclick="requestCustom()">
                        <span>🛠️</span> Request Custom Solution
                    </button>
                    <button class="cta-btn" onclick="contactExpert()">
                        <span>👨‍💼</span> Talk to Expert
                    </button>
                    <button class="cta-btn" onclick="downloadFullCatalog()">
                        <span>📚</span> Download Full Catalog
                    </button>
                </div>
            </div>
        </section>
    </main>

    <!-- WhatsApp Float Button -->
    <div class="whatsapp-float" onclick="openWhatsApp()">
        <span>💬</span>
    </div>

    <script>
        // Filter Functions
        function applyFilters() {
            const categoryFilter = document.getElementById('categoryFilter').value;
            const priceFilter = document.getElementById('priceFilter').value;
            const searchFilter = document.getElementById('searchFilter').value.toLowerCase();
            
            const productCards = document.querySelectorAll('.product-card');
            let visibleCount = 0;
            
            productCards.forEach(card => {
                let show = true;
                
                // Category filter
                if (categoryFilter && card.dataset.category !== categoryFilter) {
                    show = false;
                }
                
                // Price filter
                if (priceFilter && show) {
                    const [min, max] = priceFilter.split('-').map(Number);
                    const price = parseInt(card.dataset.price);
                    if (price < min || (max && price > max)) {
                        show = false;
                    }
                }
                
                // Search filter
                if (searchFilter && show) {
                    if (!card.dataset.searchtext.includes(searchFilter)) {
                        show = false;
                    }
                }
                
                if (show) {
                    card.style.display = 'block';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });
            
            document.getElementById('productsCount').textContent = `Showing ${visibleCount} products`;
        }
        
        function clearFilters() {
            document.getElementById('categoryFilter').value = '';
            document.getElementById('priceFilter').value = '';
            document.getElementById('searchFilter').value = '';
            
            const productCards = document.querySelectorAll('.product-card');
            productCards.forEach(card => {
                card.style.display = 'block';
            });
            
            document.getElementById('productsCount').textContent = `Showing ${productCards.length} products`;
        }
        
        // Real-time search
        document.getElementById('searchFilter').addEventListener('input', applyFilters);
        
        // Product interaction functions
        function getQuote(productName) {
            const message = `Hi, I need a detailed quote for ${productName}. Please provide pricing, specifications, and delivery details.`;
            window.open(`https://wa.me/919876543210?text=${encodeURIComponent(message)}`, '_blank');
        }
        
        function requestCustom() {
            const message = `Hi, I need a custom packaging solution. Please connect me with your technical team to discuss my specific requirements.`;
            window.open(`https://wa.me/919876543210?text=${encodeURIComponent(message)}`, '_blank');
        }
        
        function contactExpert() {
            const message = `Hi, I would like to speak with a packaging expert to discuss the best machine for my requirements.`;
            window.open(`https://wa.me/919876543210?text=${encodeURIComponent(message)}`, '_blank');
        }
        
        function downloadFullCatalog() {
            alert('Full catalog download will be available soon. Please contact us for comprehensive product information.');
        }
        
        function downloadCatalog() {
            alert('Catalog download will be available soon. Please contact us for detailed product information.');
        }
        
        function openWhatsApp() {
            const message = `Hi, I'm browsing your products page. Please help me choose the right packaging machine for my requirements.`;
            window.open(`https://wa.me/919876543210?text=${encodeURIComponent(message)}`, '_blank');
        }
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>
