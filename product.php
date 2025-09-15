<?php
include 'include/header.php';
include 'include/title.php';
?>
    <!-- Main Content -->
    <main>
        <!-- Product Hero Section -->
        <section class="product-hero">
            <div class="container">
                <div class="product-layout">
                    <!-- Left Side - Image -->
                    <div class="product-image-section">
                        <div class="main-image">
                            <span><?php echo $current_product['image_alt']; ?></span>
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
                        <h1 class="product-title"><?php echo $current_product['title']; ?></h1>
                        <p class="product-subtitle"><?php echo $current_product['subtitle']; ?></p>

                        <!-- Pricing Section -->
                        <div class="price-section">
                            <div class="starting-price">Starting Price</div>
                            <div class="main-price"><?php echo $current_product['price']; ?></div>
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
                    <div class="feature-card">
                        <div class="feature-icon">⚡</div>
                        <h3 class="feature-title">High Speed Operation</h3>
                        <p class="feature-description">Capable of packing up to 120 pouches per minute with precision and consistent quality output.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🎯</div>
                        <h3 class="feature-title">Multi-Track Technology</h3>
                        <p class="feature-description">Simultaneous processing of multiple product lines for maximum efficiency and productivity.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🔧</div>
                        <h3 class="feature-title">Easy Maintenance</h3>
                        <p class="feature-description">User-friendly design with minimal maintenance requirements and easy access to all components.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">📏</div>
                        <h3 class="feature-title">Flexible Sizing</h3>
                        <p class="feature-description">Adjustable for various pouch sizes from 50ml to 1000ml with quick changeover capability.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🛡️</div>
                        <h3 class="feature-title">Safety Features</h3>
                        <p class="feature-description">Comprehensive safety systems including emergency stop, safety guards, and alarm systems.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">💻</div>
                        <h3 class="feature-title">PLC Control</h3>
                        <p class="feature-description">Advanced PLC-based control system with touch screen interface for precise operation control.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Description Section -->
        <section class="content-section">
            <div class="container">
                <h2 class="section-title">Product Description</h2>
                <div class="description-content">
                    <p>Our Multi Track Packing Machine represents the pinnacle of packaging technology, designed specifically for high-volume production environments. This advanced machine is engineered to handle multiple product lines simultaneously, dramatically increasing your packaging efficiency and reducing operational costs.</p>

                    <p>Built with premium-grade stainless steel construction, this machine ensures durability and compliance with food-grade standards. The innovative multi-track design allows for parallel processing of different products or multiple lanes of the same product, making it ideal for manufacturers dealing with diverse product portfolios.</p>

                    <p>The machine features state-of-the-art sealing technology that ensures airtight packaging, extending product shelf life and maintaining quality. With its modular design, the machine can be easily customized to meet specific production requirements and can be seamlessly integrated into existing production lines.</p>

                    <p>Backed by our 25+ years of manufacturing expertise and comprehensive after-sales support, this machine is designed to deliver consistent performance and maximum return on investment for your business.</p>
                </div>
            </div>
        </section>

        <!-- Specifications Section -->
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
                            <tr>
                                <td>Production Capacity</td>
                                <td>120 pouches per minute (per track)</td>
                            </tr>
                            <tr>
                                <td>Number of Tracks</td>
                                <td>4 tracks (expandable to 8 tracks)</td>
                            </tr>
                            <tr>
                                <td>Pouch Size Range</td>
                                <td>50ml to 1000ml</td>
                            </tr>
                            <tr>
                                <td>Sealing Type</td>
                                <td>Heat sealing with adjustable temperature</td>
                            </tr>
                            <tr>
                                <td>Power Consumption</td>
                                <td>15 KW (3 Phase)</td>
                            </tr>
                            <tr>
                                <td>Machine Dimensions</td>
                                <td>4000mm x 2000mm x 1800mm (L x W x H)</td>
                            </tr>
                            <tr>
                                <td>Material Construction</td>
                                <td>Stainless Steel SS-304</td>
                            </tr>
                            <tr>
                                <td>Control System</td>
                                <td>PLC with 10" Touch Screen HMI</td>
                            </tr>
                            <tr>
                                <td>Air Consumption</td>
                                <td>500 LPM at 6 Bar pressure</td>
                            </tr>
                            <tr>
                                <td>Accuracy</td>
                                <td>±1% (depending on product characteristics)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Benefits Section -->
        <section class="content-section">
            <div class="container">
                <h2 class="section-title">Benefits of Choosing Avtaar</h2>
                <div class="benefits-grid">
                    <div class="benefit-item">
                        <div class="benefit-icon">🏆</div>
                        <h3 class="benefit-title">25+ Years Experience</h3>
                        <p class="benefit-description">Quarter century of expertise in packaging machinery manufacturing and automation solutions.</p>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">🔧</div>
                        <h3 class="benefit-title">Custom Solutions</h3>
                        <p class="benefit-description">Tailored machines designed to meet your specific production requirements and industry standards.</p>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">🛠️</div>
                        <h3 class="benefit-title">24/7 Support</h3>
                        <p class="benefit-description">Comprehensive maintenance and technical support available nationwide for uninterrupted operations.</p>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">✅</div>
                        <h3 class="benefit-title">Quality Assurance</h3>
                        <p class="benefit-description">ISO certified manufacturing with rigorous quality control processes and extensive testing.</p>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">⚡</div>
                        <h3 class="benefit-title">Fast Installation</h3>
                        <p class="benefit-description">Quick installation with professional training and comprehensive documentation for immediate operation.</p>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">💰</div>
                        <h3 class="benefit-title">Best ROI</h3>
                        <p class="benefit-description">Competitive pricing with transparent costs and maximum return on investment through efficiency gains.</p>
                    </div>
                </div>
            </div>
        </section>

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
                            What are the power requirements?
                            <span class="faq-arrow">▼</span>
                        </div>
                        <div class="faq-answer">
                            <p>The machine requires 15 KW, 3-phase electrical supply (415V, 50Hz) and compressed air supply at 6 Bar pressure. Detailed power specifications are provided during installation planning.</p>
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
                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleFAQ(this)">
                            What maintenance is required?
                            <span class="faq-arrow">▼</span>
                        </div>
                        <div class="faq-answer">
                            <p>Regular maintenance includes daily cleaning, weekly lubrication, and monthly inspections. We provide a detailed maintenance schedule and offer annual maintenance contracts for optimal performance.</p>
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
                    // Get all products except current one
                    $related_products = [];
                    foreach($products as $key => $prod) {
                        if($key != $product) {
                            $related_products[$key] = $prod;
                        }
                    }
                    
                    // Display related products
                    foreach($related_products as $key => $prod):
                    ?>
                    <div class="related-product-card">
                        <div class="related-product-image">
                            <span><?php echo $prod['image_alt']; ?></span>
                        </div>
                        <div class="related-product-info">
                            <h3><?php echo $prod['title']; ?></h3>
                            <p class="related-product-price"><?php echo $prod['price']; ?></p>
                            <p class="related-product-desc"><?php echo $prod['subtitle']; ?></p>
                            <div class="related-product-buttons">
                                <a href="product.php?product=<?php echo $key; ?>" class="btn-view-details">View Details</a>
                                <button class="btn-quick-quote" onclick="getQuickQuote('<?php echo $prod['title']; ?>')">Quick Quote</button>
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
            const message = `Hi, I'm interested in <?php echo $current_product['title']; ?>. Please provide today's best price with detailed quotation.`;
            window.open(`https://wa.me/919876543210?text=${encodeURIComponent(message)}`, '_blank');
        }

        // Request Callback Function
        function requestCallback() {
            const message = `Hi, I would like to request a callback for <?php echo $current_product['title']; ?>. Please call me to discuss requirements and pricing.`;
            window.open(`https://wa.me/919876543210?text=${encodeURIComponent(message)}`, '_blank');
        }

        // WhatsApp Float Button
        function openWhatsApp() {
            const message = `Hi, I'm viewing the <?php echo $current_product['title']; ?> page. Please provide more information about this product.`;
            window.open(`https://wa.me/919876543210?text=${encodeURIComponent(message)}`, '_blank');
        }

        // Download catalog function
        function downloadCatalog() {
            alert('Catalog download will be available soon. Please contact us for detailed product information.');
        }

        // Quick Quote Function
        function getQuickQuote(productName) {
            const message = `Hi, I need a quick quote for ${productName}. Please provide pricing and availability details.`;
            window.open(`https://wa.me/919876543210?text=${encodeURIComponent(message)}`, '_blank');
        }

        // Smooth Scrolling for Anchor Links
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
<?php
include 'include/footer.php';
?>