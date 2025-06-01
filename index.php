
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avtaar Mechanical Works - Machine Manufacturer</title>
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
            margin-top: 80px;
        }

        /* Hero Section */
        .hero {
            background: #333;
            color: white;
            padding: 60px 0;
            min-height: 500px;
            display: flex;
            align-items: center;
        }

        .hero-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .hero-text {
            padding-right: 2rem;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            color: white;
            font-weight: bold;
            line-height: 1.2;
        }

        .hero h1 .highlight {
            color: #ff6600;
        }

        .hero p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            color: #ccc;
            line-height: 1.6;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
        }

        .btn-orange {
            background: #ff6600;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: bold;
        }

        .btn-orange:hover {
            background: #e55a00;
        }

        .btn-outline {
            background: transparent;
            color: #ff6600;
            padding: 15px 30px;
            border: 2px solid #ff6600;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: bold;
        }

        .btn-outline:hover {
            background: #ff6600;
            color: white;
        }

        .hero-images {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr 1fr;
            gap: 1rem;
            height: 400px;
        }

        .hero-image {
            background: #555;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #999;
            font-size: 0.9rem;
            position: relative;
        }

        .hero-image.large {
            grid-row: span 2;
        }

        .hero-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
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

        /* Statistics Section */
        .stats-section {
            background: white;
            padding: 80px 0;
        }

        .stats-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .stats-header h2 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 1rem;
            font-weight: bold;
        }

        .stats-header p {
            font-size: 1.1rem;
            color: #666;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            margin-top: 3rem;
        }

        .stat-item {
            text-align: center;
            padding: 2rem;
        }

        .stat-icon {
            width: 80px;
            height: 80px;
            background: #ff6600;
            border-radius: 50%;
            margin: 0 auto 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 0.5rem;
        }

        .stat-title {
            font-size: 1.3rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 1rem;
        }

        .stat-description {
            color: #666;
            line-height: 1.6;
        }

        /* Hot Products */
        .products {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .products h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #333;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .product-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s;
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-image {
            height: 250px;
            background: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
            color: #666;
            position: relative;
        }

        .product-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: #ff6600;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
        }

        .product-badge.hot {
            background: #ff6600;
        }

        .product-badge.bestseller {
            background: #ff6600;
        }

        .product-badge.featured {
            background: #ff6600;
        }

        .product-info {
            padding: 2rem;
        }

        .product-info h3 {
            font-size: 1.4rem;
            margin-bottom: 1rem;
            color: #333;
            font-weight: bold;
        }

        .product-description {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.5;
            margin-bottom: 1.5rem;
        }

        .product-buttons {
            display: flex;
            gap: 1rem;
        }

        .whatsapp-btn {
            background: #25d366;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            flex: 1;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            transition: background 0.3s;
        }

        .whatsapp-btn:hover {
            background: #1ea952;
        }

        .quote-btn {
            background: #ff6600;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            transition: background 0.3s;
        }

        .quote-btn:hover {
            background: #e55a00;
        }

        /* About Section */
        .about {
            padding: 80px 0;
            background: white;
        }

        .about h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #333;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text {
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .about-image {
            text-align: center;
        }

        .about-image img {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        /* Industry Section */
        .industry {
            padding: 80px 0;
            background: white;
        }

        .industry h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #333;
        }

        .industry-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            text-align: center;
        }

        .industry-item {
            padding: 2rem;
            background: #f8f9fa;
            border-radius: 10px;
            border-left: 4px solid #ff6600;
        }

        .industry-item h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #333;
        }

        /* Why Choose Us */
        .why-choose {
            padding: 80px 0;
            background: #333;
            color: white;
        }

        .why-choose h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #ff6600;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .feature {
            text-align: center;
            padding: 2rem;
        }

        .feature h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #ff6600;
        }

        /* Footer */
        footer {
            background: #000;
            color: white;
            padding: 3rem 0 1rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: #ff6600;
        }

        .footer-section a {
            color: #ccc;
            text-decoration: none;
            display: block;
            margin-bottom: 0.5rem;
        }

        .footer-section a:hover {
            color: #ff6600;
        }

        .footer-bottom {
            border-top: 1px solid #333;
            padding-top: 1rem;
            text-align: center;
            color: #999;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-links a {
            background: #ff6600;
            color: white;
            padding: 10px;
            border-radius: 50%;
            text-decoration: none;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
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

            .hero-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero-buttons {
                justify-content: center;
                flex-wrap: wrap;
            }

            .hero-images {
                grid-template-columns: 1fr;
                height: auto;
            }

            .hero-image.large {
                grid-row: span 1;
            }

            .about-content {
                grid-template-columns: 1fr;
            }

            .products-grid {
                grid-template-columns: 1fr;
            }

            .stats-grid {
                grid-template-columns: 1fr;
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
                    <div class="company-name">Avtaar Mechanical Works</div>
                </div>
                <nav>
                    <ul>
                        <li><a href="#home"><span class="nav-icon">🏠</span> Home</a></li>
                        <li><a href="#about"><span class="nav-icon">ℹ️</span> About Us</a></li>
                        <li class="dropdown">
                            <a href="#products"><span class="nav-icon">⚙️</span> Products ▼</a>
                            <div class="dropdown-content">
                                <a href="#products">Multi Track Packing Machine</a>
                                <a href="#products">Pouch Packing Machine</a>
                                <a href="#products">Multi Track Pouch Packing Machine</a>
                                <a href="#products">Tomato Ketchup Pouch Packing Machine</a>
                                <a href="#products">Sauce Pouch Packaging Machine</a>
                            </div>
                        </li>
                        <li><a href="#contact"><span class="nav-icon">📞</span> Contact</a></li>
                        <li><button class="download-btn"><span class="nav-icon">📁</span> Catalog</button></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section id="home" class="hero">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-text">
                        <h1>Professional <span class="highlight">Packaging Solutions</span></h1>
                        <p>Excellence in manufacturing packaging machines and industrial automation solutions since 1995</p>
                        <div class="hero-buttons">
                            <button class="btn-orange">
                                <span>⚙️</span> VIEW PRODUCTS
                            </button>
                            <button class="btn-outline">
                                <span>📞</span> GET QUOTE
                            </button>
                        </div>
                    </div>
                    <div class="hero-images">
                        <div class="hero-image large">
                            <span>Packaging Machine Image 1</span>
                        </div>
                        <div class="hero-image">
                            <span>Machine Image 2</span>
                        </div>
                        <div class="hero-image">
                            <span>Machine Image 3</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- WhatsApp Float Button -->
        <div class="whatsapp-float">
            <span>💬</span>
        </div>

        <!-- Statistics Section -->
        <section class="stats-section">
            <div class="container">
                <div class="stats-header">
                    <h2>Leading Manufacturer of Packaging Solutions</h2>
                    <p>Avtaar Mechanical Works has been at the forefront of packaging machinery innovation for over 25 years. We specialize in designing, manufacturing, and delivering high-quality packaging machines that meet the diverse needs of industries worldwide.</p>
                </div>
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-icon">🏆</div>
                        <div class="stat-number">25+</div>
                        <div class="stat-title">Years Experience</div>
                        <div class="stat-description">Quarter century of excellence in packaging machinery manufacturing and industrial automation solutions.</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-icon">👥</div>
                        <div class="stat-number">500+</div>
                        <div class="stat-title">Happy Clients</div>
                        <div class="stat-description">Trusted by leading companies across food processing, pharmaceuticals, and manufacturing industries.</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-icon">🌍</div>
                        <div class="stat-number">Global</div>
                        <div class="stat-title">Reach</div>
                        <div class="stat-description">Serving clients worldwide with innovative packaging solutions and comprehensive after-sales support.</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Hot Products -->
        <section id="products" class="products">
            <div class="container">
                <h2>Hot Products</h2>
                <div class="products-grid">
                    <div class="product-card">
                        <div class="product-image">
                            <div class="product-badge hot">Hot Product</div>
                            <span>Automatic Packaging Machine</span>
                        </div>
                        <div class="product-info">
                            <h3>Automatic Packaging Machine</h3>
                            <div class="product-description">High-speed automatic packaging solution for various product types with advanced control systems.</div>
                            <div class="product-buttons">
                                <button class="whatsapp-btn">
                                    <span>💬</span> WHATSAPP
                                </button>
                                <button class="quote-btn">
                                    GET QUOTE
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image">
                            <div class="product-badge bestseller">Best Seller</div>
                            <span>Food Processing Line</span>
                        </div>
                        <div class="product-info">
                            <h3>Food Processing Line</h3>
                            <div class="product-description">Complete food processing and packaging line with hygiene standards and quality control systems.</div>
                            <div class="product-buttons">
                                <button class="whatsapp-btn">
                                    <span>💬</span> WHATSAPP
                                </button>
                                <button class="quote-btn">
                                    GET QUOTE
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image">
                            <div class="product-badge featured">Featured</div>
                            <span>Industrial Sealing Machine</span>
                        </div>
                        <div class="product-info">
                            <h3>Industrial Sealing Machine</h3>
                            <div class="product-description">Heavy-duty sealing machines for industrial packaging with precise temperature control.</div>
                            <div class="product-buttons">
                                <button class="whatsapp-btn">
                                    <span>💬</span> WHATSAPP
                                </button>
                                <button class="quote-btn">
                                    GET QUOTE
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="about">
            <div class="container">
                <h2>About Us</h2>
                <div class="about-content">
                    <div class="about-text">
                        <p>Avtaar Mechanical Works is a leading manufacturer of high-quality packaging machines. With years of experience in the industry, we specialize in designing and manufacturing innovative packaging solutions that meet the diverse needs of our clients.</p>
                        <p>Our commitment to excellence, cutting-edge technology, and customer satisfaction has made us a trusted name in the packaging machinery industry. We pride ourselves on delivering reliable, efficient, and cost-effective solutions.</p>
                        <p>From multi-track packing machines to specialized sauce packaging equipment, we offer a comprehensive range of products designed to enhance your production efficiency and product quality.</p>
                    </div>
                    <div class="about-image">
                        <div style="background: #ddd; height: 300px; display: flex; align-items: center; justify-content: center; border-radius: 10px;">
                            <span style="color: #666;">Factory Image</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Industry We Serve -->
        <section id="industry" class="industry">
            <div class="container">
                <h2>Industry We Serve</h2>
                <div class="industry-grid">
                    <div class="industry-item">
                        <h3>Food & Beverage</h3>
                        <p>Comprehensive packaging solutions for food products, sauces, ketchup, and beverages.</p>
                    </div>
                    <div class="industry-item">
                        <h3>Pharmaceutical</h3>
                        <p>Precise and hygienic packaging machines for pharmaceutical products and medicines.</p>
                    </div>
                    <div class="industry-item">
                        <h3>Chemical Industry</h3>
                        <p>Robust packaging solutions for chemical powders, granules, and liquid products.</p>
                    </div>
                    <div class="industry-item">
                        <h3>Agriculture</h3>
                        <p>Specialized packaging machines for agricultural products, fertilizers, and seeds.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us -->
        <section class="why-choose">
            <div class="container">
                <h2>Why Choose Avtaar Mechanical Works?</h2>
                <div class="features-grid">
                    <div class="feature">
                        <h3>Quality Assurance</h3>
                        <p>ISO certified manufacturing with rigorous quality control processes.</p>
                    </div>
                    <div class="feature">
                        <h3>Innovative Technology</h3>
                        <p>Latest technology integration for enhanced efficiency and productivity.</p>
                    </div>
                    <div class="feature">
                        <h3>Custom Solutions</h3>
                        <p>Tailored packaging solutions to meet specific industry requirements.</p>
                    </div>
                    <div class="feature">
                        <h3>After-Sales Support</h3>
                        <p>Comprehensive maintenance and support services nationwide.</p>
                    </div>
                    <div class="feature">
                        <h3>Competitive Pricing</h3>
                        <p>Best value for money with transparent pricing and no hidden costs.</p>
                    </div>
                    <div class="feature">
                        <h3>Timely Delivery</h3>
                        <p>On-time delivery with proper installation and training services.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Contact Information</h3>
                    <p>📍 Industrial Area, Sector 12</p>
                    <p>📍 New Delhi, India - 110025</p>
                    <p>📞 +91 98765 43210</p>
                    <p>📧 info@avtaarmechanical.com</p>
                    <div class="social-links">
                        <a href="#">FB</a>
                        <a href="#">IN</a>
                        <a href="#">TW</a>
                        <a href="#">YT</a>
                    </div>
                </div>
                <div class="footer-section">
                    <h3>Hot Products</h3>
                    <a href="#products">Multi Track Packing Machine</a>
                    <a href="#products">Pouch Packing Machine</a>
                    <a href="#products">Tomato Ketchup Machine</a>
                    <a href="#products">Sauce Packaging Machine</a>
                    <a href="#products">Automatic Packing Machine</a>
                </div>
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <a href="#home">Home</a>
                    <a href="#about">About Us</a>
                    <a href="#products">Products</a>
                    <a href="#industry">Industries</a>
                    <a href="#contact">Contact Us</a>
                </div>
                <div class="footer-section">
                    <h3>Services</h3>
                    <a href="#">Installation Services</a>
                    <a href="#">Maintenance Support</a>
                    <a href="#">Training Programs</a>
                    <a href="#">Spare Parts</a>
                    <a href="#">Technical Support</a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Avtaar Mechanical Works. All rights reserved. | Designed for excellence in packaging solutions.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
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

        // WhatsApp and Quote button functionality
        document.querySelectorAll('.whatsapp-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const productName = this.closest('.product-card').querySelector('h3').textContent;
                const message = `Hi, I'm interested in ${productName}. Please provide more details.`;
                window.open(`https://wa.me/919876543210?text=${encodeURIComponent(message)}`, '_blank');
            });
        });

        document.querySelectorAll('.quote-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const productName = this.closest('.product-card').querySelector('h3').textContent;
                alert(`For current pricing of ${productName}, please contact us at +91 98765 43210 or send us a WhatsApp message.`);
            });
        });

        // WhatsApp Float Button
        document.querySelector('.whatsapp-float').addEventListener('click', function() {
            const message = `Hi, I'm interested in your packaging machines. Please provide more information.`;
            window.open(`https://wa.me/919876543210?text=${encodeURIComponent(message)}`, '_blank');
        });

        // Download catalog button
        document.querySelector('.download-btn').addEventListener('click', function() {
            alert('Catalog download will be available soon. Please contact us for detailed product information.');
        });

        // Hero buttons
        document.querySelector('.btn-orange').addEventListener('click', function() {
            document.querySelector('#products').scrollIntoView({
                behavior: 'smooth'
            });
        });

        document.querySelector('.btn-outline').addEventListener('click', function() {
            document.querySelector('#contact').scrollIntoView({
                behavior: 'smooth'
            });
        });
    </script>
</body>
</html>
