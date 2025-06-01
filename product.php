<?php
// Include admin config to access data
require_once 'admin/config.php';

// Get product from URL parameter
$product = isset($_GET['product']) ? $_GET['product'] : 'multi-track';

// Load products from admin data
$products = loadData(PRODUCTS_FILE);

// Get current product data
$current_product = $products[$product] ?? null;

// If product not found, redirect to all products
if (!$current_product) {
    header('Location: all-products.php');
    exit();
}

// Load settings for contact info
$settings = loadData(SETTINGS_FILE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($current_product['title']); ?> - Avtaar Mechanical Works</title>
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

        /* Product Hero Section */
        .product-hero {
            background: white;
            padding: 60px 0;
        }

        .product-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: start;
        }

        .product-image-section {
            position: sticky;
            top: 120px;
        }

        .main-image {
            width: 100%;
            height: 500px;
            background: #f5f5f5;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            color: #666;
            border: 2px solid #e0e0e0;
            margin-bottom: 1rem;
        }

        .thumbnail-images {
            display: flex;
            gap: 1rem;
            justify-content: center;
        }

        .thumbnail {
            width: 80px;
            height: 80px;
            background: #f5f5f5;
            border-radius: 8px;
            border: 2px solid #e0e0e0;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            color: #666;
            transition: border-color 0.3s;
        }

        .thumbnail:hover,
        .thumbnail.active {
            border-color: #ff6600;
        }

        .product-info {
            padding: 2rem 0;
        }

        .product-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 1rem;
        }

        .product-subtitle {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 2rem;
        }

        .price-section {
            background: #fff;
            border: 2px solid #ff6600;
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            text-align: center;
        }

        .starting-price {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 0.3rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .main-price {
            font-size: 2rem;
            font-weight: bold;
            color: #ff6600;
            margin-bottom: 0.3rem;
        }

        .price-note {
            font-size: 0.8rem;
            color: #888;
            margin-bottom: 0;
        }

        .action-buttons {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .btn-primary {
            background: #ff6600;
            color: white;
            padding: 15px 25px;
            border: none;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            flex: 1;
            justify-content: center;
        }

        .btn-primary:hover {
            background: #e55a00;
            transform: translateY(-2px);
        }

        .btn-secondary {
            background: transparent;
            color: #ff6600;
            padding: 15px 25px;
            border: 2px solid #ff6600;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            flex: 1;
            justify-content: center;
        }

        .btn-secondary:hover {
            background: #ff6600;
            color: white;
            transform: translateY(-2px);
        }

        /* Content Sections */
        .content-section {
            margin-top: 4rem;
        }

        .section-title {
            font-size: 2rem;
            color: #333;
            margin-bottom: 2rem;
            padding-bottom: 0.5rem;
            border-bottom: 3px solid #ff6600;
            display: inline-block;
        }

        /* Key Features */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .feature-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            border-left: 4px solid #ff6600;
            transition: transform 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: #ff6600;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .feature-title {
            font-size: 1.3rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: #333;
        }

        .feature-description {
            color: #666;
            line-height: 1.6;
        }

        /* Description */
        .description-content {
            background: #f8f9fa;
            padding: 3rem;
            border-radius: 15px;
            margin-bottom: 3rem;
        }

        .description-content p {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 1.5rem;
            color: #555;
        }

        /* Specifications */
        .spec-table {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            margin-bottom: 3rem;
        }

        .spec-table table {
            width: 100%;
            border-collapse: collapse;
        }

        .spec-table th {
            background: #ff6600;
            color: white;
            padding: 1.5rem;
            font-size: 1.1rem;
            font-weight: bold;
            text-align: left;
        }

        .spec-table td {
            padding: 1.5rem;
            border-bottom: 1px solid #e0e0e0;
            font-size: 1rem;
        }

        .spec-table tr:nth-child(even) {
            background: #f8f9fa;
        }

        .spec-table tr:hover {
            background: #fff3e0;
        }

        /* FAQ */
        .faq-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .faq-item {
            border-bottom: 1px solid #e0e0e0;
        }

        .faq-item:last-child {
            border-bottom: none;
        }

        .faq-question {
            background: #f8f9fa;
            padding: 2rem;
            cursor: pointer;
            font-size: 1.1rem;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background 0.3s;
        }

        .faq-question:hover {
            background: #fff3e0;
        }

        .faq-question.active {
            background: #ff6600;
            color: white;
        }

        .faq-arrow {
            font-size: 1.2rem;
            transition: transform 0.3s;
        }

        .faq-question.active .faq-arrow {
            transform: rotate(180deg);
        }

        .faq-answer {
            padding: 0 2rem;
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s ease;
            background: white;
        }

        .faq-answer.active {
            max-height: 300px;
            padding: 2rem;
        }

        .faq-answer p {
            color: #666;
            line-height: 1.6;
        }

        /* Related Products */
        .related-products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .related-product-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            border: 1px solid #e0e0e0;
        }

        .related-product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(255, 102, 0, 0.15);
            border-color: #ff6600;
        }

        .related-product-image {
            height: 200px;
            background: #f5f5f5;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
            color: #666;
            border-bottom: 1px solid #e0e0e0;
        }

        .related-product-info {
            padding: 1.5rem;
        }

        .related-product-info h3 {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: #333;
            line-height: 1.3;
        }

        .related-product-price {
            font-size: 1.1rem;
            font-weight: bold;
            color: #ff6600;
            margin-bottom: 0.5rem;
        }

        .related-product-desc {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 1.5rem;
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .related-product-buttons {
            display: flex;
            gap: 0.5rem;
        }

        .btn-view-details {
            background: #ff6600;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            flex: 1;
        }

        .btn-view-details:hover {
            background: #e55a00;
        }

        .btn-quick-quote {
            background: transparent;
            color: #ff6600;
            padding: 8px 16px;
            border: 2px solid #ff6600;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s;
            flex: 1;
        }

        .btn-quick-quote:hover {
            background: #ff6600;
            color: white;
        }

        .view-all-products {
            text-align: center;
            margin-top: 2rem;
        }

        .btn-view-all {
            background: linear-gradient(135deg, #ff6600, #e55a00);
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 25px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
            box-shadow: 0 5px 15px rgba(255, 102, 0, 0.3);
        }

        .btn-view-all:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(255, 102, 0, 0.4);
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

            .product-layout {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .product-image-section {
                position: static;
            }

            .action-buttons {
                flex-direction: column;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }

            .related-products-grid {
                grid-template-columns: 1fr;
            }

            .related-product-buttons {
                flex-direction: column;
            }

            .product-title {
                font-size: 2rem;
            }

            .main-price {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo-section">
                    <div class="logo-icon">A</div>
                    <div class="company-name"><?php echo htmlspecialchars($settings['company_name'] ?? 'Avtaar Mechanical Works'); ?></div>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php"><span class="nav-icon">🏠</span> Home</a></li>
                        <li><a href="index.php#about"><span class="nav-icon">ℹ️</span> About Us</a></li>
                        <li class="dropdown">
                            <a href="#products"><span class="nav-icon">⚙️</span> Products ▼</a>
                            <div class="dropdown-content">
                                <a href="all-products.php">All Products</a>
                                <?php foreach($products as $slug => $prod): ?>
                                    <?php if($prod['status'] === 'active'): ?>
                                        <a href="product.php?product=<?php echo $slug; ?>"><?php echo htmlspecialchars($prod['title']); ?></a>
                                    <?php endif; ?>
                                <?php endforeach; ?>
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
        <!-- Product Hero Section -->
        <section class="product-hero">
            <div class="container">
                <div class="product-layout">
                    <!-- Left Side - Image -->
                    <div class="product-image-section">
                        <div class="main-image">
                            <span><?php echo htmlspecialchars($current_product['image_alt']); ?></span>
                        </div>
                        <div class="thumbnail-images">
                            <div class="thumbnail active">
                                <span>View 1</span>
                            </div>
                            <div class="thumbnail">
                                <span>View 2</span>
                            </div>
                            <div class="thumbnail">
                                <span>View 3</span>
                            </div>
                            <div class="thumbnail">
                                <span>View 4</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Side - Product Info -->
                    <div class="product-info">
                        <h1 class="product-title"><?php echo htmlspecialchars($current_product['title']); ?></h1>
                        <p class="product-subtitle"><?php echo htmlspecialchars($current_product['subtitle']); ?></p>

                        <!-- Pricing Section -->
                        <div class="price-section">
                            <div class="starting-price">Starting Price</div>
                            <div class="main-price"><?php echo htmlspecialchars($current_product['price']); ?></div>
                            <div class="price-note">*Price in INR + GST</div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="action-buttons">
                            <button class="btn-primary" onclick="getTodayPrice()">
                                <span>💰</span> Get Today Best Price
                            </button>
                            <button class="btn-secondary" onclick="requestCallback()">
                                <span>📞</span> Ask For Call Back
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Key Features Section -->
        <section class="content-section">
            <div class="container">
                <h2 class="section-title">Key Features</h2>
                <div class="features-grid">
                    <?php 
                    $feature_icons = ['⚡', '🎯', '🔧', '📏', '🛡️', '💻'];
                    foreach($current_product['features'] as $index => $feature): 
                        $icon = $feature_icons[$index % count($feature_icons)];
                    ?>
                    <div class="feature-card">
                        <div class="feature-icon"><?php echo $icon; ?></div>
                        <h3 class="feature-title"><?php echo htmlspecialchars($feature); ?></h3>
                        <p class="feature-description">Advanced feature that enhances machine performance and reliability.</p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Description Section -->
        <section class="content-section">
            <div class="container">
                <h2 class="section-title">Product Description</h2>
                <div class="description-content">
                    <p><?php echo nl2br(htmlspecialchars($current_product['description'])); ?></p>
                </div>
            </div>
        </section>

        <!-- Specifications Section -->
        <?php if(!empty($current_product['specifications'])): ?>
        <section class="content-section">
            <div class="container">
                <h2 class="section-title">Technical Specifications</h2>
                <div class="spec-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Specification</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($current_product['specifications'] as $spec => $value): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($spec); ?></td>
                                <td><?php echo htmlspecialchars($value); ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <!-- FAQ Section -->
        <section class="content-section">
            <div class="container">
                <h2 class="section-title">Frequently Asked Questions</h2>
                <div class="faq-container">
                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleFAQ(this)">
                            What is the warranty period for this machine?
                            <span class="faq-arrow">▼</span>
                        </div>
                        <div class="faq-answer">
                            <p>We provide a comprehensive 2-year warranty on the machine including all electrical and mechanical components. Extended warranty options are also available.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleFAQ(this)">
                            What is the installation timeline?
                            <span class="faq-arrow">▼</span>
                        </div>
                        <div class="faq-answer">
                            <p>Installation typically takes 5-7 working days including setup, calibration, testing, and operator training. We ensure complete commissioning before handover.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleFAQ(this)">
                            Can this machine handle different product types?
                            <span class="faq-arrow">▼</span>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, the machine is designed to handle various liquid and semi-liquid products including sauces, ketchup, oil, water, juices, and dairy products with appropriate material compatibility.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleFAQ(this)">
                            Is operator training included?
                            <span class="faq-arrow">▼</span>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, comprehensive operator training is included covering machine operation, maintenance procedures, troubleshooting, and safety protocols. Training materials and operation manuals are provided.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Related Products Section -->
        <section class="content-section">
            <div class="container">
                <h2 class="section-title">Related Products</h2>
                <div class="related-products-grid">
                    <?php
                    // Get all active products except current one
                    $related_products = [];
                    foreach($products as $key => $prod) {
                        if($key != $product && $prod['status'] === 'active') {
                            $related_products[$key] = $prod;
                        }
                    }

                    // Display related products
                    foreach($related_products as $key => $prod):
                    ?>
                    <div class="related-product-card">
                        <div class="related-product-image">
                            <span><?php echo htmlspecialchars($prod['image_alt']); ?></span>
                        </div>
                        <div class="related-product-info">
                            <h3><?php echo htmlspecialchars($prod['title']); ?></h3>
                            <p class="related-product-price"><?php echo htmlspecialchars($prod['price']); ?></p>
                            <p class="related-product-desc"><?php echo htmlspecialchars($prod['subtitle']); ?></p>
                            <div class="related-product-buttons">
                                <a href="product.php?product=<?php echo $key; ?>" class="btn-view-details">View Details</a>
                                <button class="btn-quick-quote" onclick="getQuickQuote('<?php echo htmlspecialchars($prod['title']); ?>')">Quick Quote</button>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="view-all-products">
                    <a href="all-products.php" class="btn-view-all">
                        <span>🔍</span> View All Products
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- WhatsApp Float Button -->
    <div class="whatsapp-float" onclick="openWhatsApp()">
        <span>💬</span>
    </div>

    <script>
        // FAQ Toggle Function
        function toggleFAQ(element) {
            const answer = element.nextElementSibling;
            const arrow = element.querySelector('.faq-arrow');

            // Close all other FAQs
            document.querySelectorAll('.faq-question').forEach(item => {
                if (item !== element) {
                    item.classList.remove('active');
                    item.nextElementSibling.classList.remove('active');
                    item.querySelector('.faq-arrow').style.transform = 'rotate(0deg)';
                }
            });

            // Toggle current FAQ
            element.classList.toggle('active');
            answer.classList.toggle('active');
        }

        // Thumbnail Image Selection
        document.querySelectorAll('.thumbnail').forEach(thumb => {
            thumb.addEventListener('click', function() {
                document.querySelectorAll('.thumbnail').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Get Today Price Function
        function getTodayPrice() {
            const message = `Hi, I'm interested in <?php echo htmlspecialchars($current_product['title']); ?>. Please provide today's best price with detailed quotation.`;
            window.open(`https://wa.me/<?php echo $settings['whatsapp'] ?? '919876543210'; ?>?text=${encodeURIComponent(message)}`, '_blank');
        }

        // Request Callback Function
        function requestCallback() {
            const message = `Hi, I would like to request a callback for <?php echo htmlspecialchars($current_product['title']); ?>. Please call me to discuss requirements and pricing.`;
            window.open(`https://wa.me/<?php echo $settings['whatsapp'] ?? '919876543210'; ?>?text=${encodeURIComponent(message)}`, '_blank');
        }

        // WhatsApp Float Button
        function openWhatsApp() {
            const message = `Hi, I'm viewing the <?php echo htmlspecialchars($current_product['title']); ?> page. Please provide more information about this product.`;
            window.open(`https://wa.me/<?php echo $settings['whatsapp'] ?? '919876543210'; ?>?text=${encodeURIComponent(message)}`, '_blank');
        }

        // Download catalog function
        function downloadCatalog() {
            alert('Catalog download will be available soon. Please contact us for detailed product information.');
        }

        // Quick Quote Function