<?php
include 'include/header.php';
include 'include/title.php';
?>
    <style>
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
            color: #e6271c;
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

        
    </style>
   
    <!-- Main Content -->
    <main>
        <!-- Page Header -->
        <section class="page-header">
            <div class="container">
                <h1 class="page-title">Explore Our Products</h1>
                <p>Durga Packaging Machine offers a comprehensive range of advanced packaging solutions, combining precision engineering, energy-efficient technology, and reliable performance to meet the evolving demands of diverse industries with excellence and innovation.</p>
            </div>
        </section>
        <!-- Products Section -->
        <section class="content-section">
            <div class="container">
                <h2 class="section-title">All Products</h2>
                <div class="related-products-grid">
                                         <div class="related-product-card">
                        <div class="related-product-image" style="background: url('assets/img/durgaimg3.webp') no-repeat center center; background-size: cover; height: 269px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        </div>
                        <div class="related-product-info">
                            <h3>Pouch Packaging Machines <br><br></h3>
                            <p class="related-product-price">Rs 4,00,000/ Piece</p>
                            <p class="related-product-desc">A pouch packaging machine is a highly efficient automated system designed to form, fill, and seal pouches with various products. </p>
                            <div class="related-product-buttons">
                                <a href="<?php echo $baseurl ?>noida/pouch-packaging-machine" class="btn-view-details">View Details</a>
                                <button class="btn-quick-quote" onclick="openForm()">Quick Quote</button>
                            </div>
                        </div>
                    </div>
                                        <div class="related-product-card">
                         <div class="related-product-image" style="background: url('assets/img/durgaimg4.webp') no-repeat center center; background-size: cover; height: 269px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        </div>
                        <div class="related-product-info">
                            <h3>Multitrack Pouch Packaging Machines</h3>
                            <p class="related-product-price">Rs 4,00,000/ Piece</p>
                            <p class="related-product-desc">Imagine multiple packaging lines running at once—each one forming, filling, and sealing pouches in sync. </p>
                            <div class="related-product-buttons">
                                <a href="<?php echo $baseurl ?>noida/multitrack-pouch-packaging-machine.php" class="btn-view-details">View Details</a>
                                <button class="btn-quick-quote" onclick="openForm()">Quick Quote</button>
                            </div>
                        </div>
                    </div>
                                        <div class="related-product-card">
                        <div class="related-product-image" style="background: url('assets/img/durgaimg5.webp') no-repeat center center; background-size: cover; height: 269px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        </div>
                        <div class="related-product-info">
                            <h3>Tomato Ketchup Pouch Packaging Machine</h3>
                            <p class="related-product-price">Rs 1,30,000 / Piece</p>
                            <p class="related-product-desc">These machines automate the entire process, from filling the pouch with the exact amount of ketchup to sealing it tightly to prevent leaks and spoilage.</p>
                            <div class="related-product-buttons">
                                <a href="<?php echo $baseurl ?>noida/tomato-ketchup-pouch-packaging-machine" class="btn-view-details">View Details</a>
                                <button class="btn-quick-quote" onclick="openForm()">Quick Quote</button>
                            </div>
                        </div>
                    </div>
                                        <div class="related-product-card">
                         <div class="related-product-image" style="background: url('assets/img/durgaimg5.webp') no-repeat center center; background-size: cover; height: 269px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        </div>
                        <div class="related-product-info">
                            <h3>Ketchup Multitrack Pouch Packaging Machine</h3>
                            <p class="related-product-price">Rs 6,50,000 / Piece</p>
                            <p class="related-product-desc">A multitrack machine, however, can fill multiple pouches simultaneously, significantly increasing productivity. Perfect for high-volume production!</p>
                            <div class="related-product-buttons">
                                <a href="<?php echo $baseurl ?>noida/ketchup-multitrack-pouch-packaging-machine" class="btn-view-details">View Details</a>
                                <button class="btn-quick-quote" onclick="openForm()">Quick Quote</button>
                            </div>
                        </div>
                    </div>
                                        <div class="related-product-card">
                        <div class="related-product-image" style="background: url('assets/img/durgaimg5.webp') no-repeat center center; background-size: cover; height: 269px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        </div>
                        <div class="related-product-info">
                            <h3>Sauce Pouch Packaging Machine <br><br></h3>
                            <p class="related-product-price">Rs 8,50,000/ Piece</p>
                            <p class="related-product-desc">A Sauce Pouch Packaging Machine is an automated system that forms, fills, and seals pouches with liquid or semi-liquid sauces. </p>
                            <div class="related-product-buttons">
                                <a href="<?php echo $baseurl ?>noida/sauce-pouch-packaging-machine" class="btn-view-details">View Details</a>
                                <button class="btn-quick-quote" onclick="openForm()">Quick Quote</button>
                            </div>
                        </div>
                    </div>
                                        <div class="related-product-card">
                         <div class="related-product-image" style="background: url('assets/img/durgaimg5.webp') no-repeat center center; background-size: cover; height: 269px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        </div>
                        <div class="related-product-info">
                            <h3>Pickles Pouch Packaging Machine <br><br></h3>
                            <p class="related-product-price">Rs 4,00,000 / Piece</p>
                            <p class="related-product-desc">Durga Packaging Machine, a prominent manufacturer in India, offers the Pickles Pouch Packaging Machine, a fully automatic solution tailored for the pickle packaging industry.</p>
                            <div class="related-product-buttons">
                                <a href="<?php echo $baseurl ?>noida/pickles-pouch-packaging-machine" class="btn-view-details">View Details</a>
                                <button class="btn-quick-quote" onclick="openForm()">Quick Quote</button>
                            </div>
                        </div>
                    </div>
                     <div class="related-product-card">
                         <div class="related-product-image" style="background: url('assets/img/durgaimg5.webp') no-repeat center center; background-size: cover; height: 269px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        </div>
                        <div class="related-product-info">
                            <h3>Shampoo Multitrack Pouch Packaging Machine</h3>
                            <p class="related-product-price">Rs 1,35,000/ Piece</p>
                            <p class="related-product-desc">Shampoo Multitrack Pouch Packaging Machine is a fully automatic machine designed to fill and seal liquid products like shampoo into individual pouches.</p>
                            <div class="related-product-buttons">
                                <a href="<?php echo $baseurl ?>noida/shampoo-pouch-packing-machine" class="btn-view-details">View Details</a>
                                <button class="btn-quick-quote" onclick="openForm()">Quick Quote</button>
                            </div>
                        </div>
                    </div>
                     <div class="related-product-card">
                         <div class="related-product-image" style="background: url('assets/img/durgaimg5.webp') no-repeat center center; background-size: cover; height: 269px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        </div>
                        <div class="related-product-info">
                            <h3>Hair Oil Pouch Packaging Machine <br><br></h3>
                            <p class="related-product-price">Rs 3,50,000/ Piece</p>
                            <p class="related-product-desc">Hair Oil Pouch Packaging Machines that provide an organized approach to managing electrical and data cables. </p>
                            <div class="related-product-buttons">
                                <a href="<?php echo $baseurl ?>noida/hair-oil-pouch-packaging-machine" class="btn-view-details">View Details</a>
                                <button class="btn-quick-quote" onclick="openForm()">Quick Quote</button>
                            </div>
                        </div>
                    </div>
                     <div class="related-product-card">
                         <div class="related-product-image" style="background: url('assets/img/durgaimg5.webp') no-repeat center center; background-size: cover; height: 269px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        </div>
                        <div class="related-product-info">
                            <h3>Mayonnaise Pouch Packaging Machine</h3>
                            <p class="related-product-price">Rs 6,50,000/ Piece</p>
                            <p class="related-product-desc">A Mayonnaise Pouch Packaging Machine is a specialized form of packaging equipment designed to fill and seal mayonnaise into pouches</p>
                            <div class="related-product-buttons">
                                <a href="<?php echo $baseurl ?>noida/mayonnaise-pouch-packaging-machine" class="btn-view-details">View Details</a>
                                <button class="btn-quick-quote" onclick="openForm()">Quick Quote</button>
                            </div>
                        </div>
                    </div>
                     <div class="related-product-card">
                         <div class="related-product-image" style="background: url('assets/img/durgaimg5.webp') no-repeat center center; background-size: cover; height: 269px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        </div>
                        <div class="related-product-info">
                            <h3>Ginger/Garlic Paste Pouch Packaging Machine</h3>
                            <p class="related-product-price">Rs 1,00,000 / Piece</p>
                            <p class="related-product-desc">One of the essential tools used by Durga Packaging Machine is the Ginger Garlic Paste Pouch Packaging Machine.</p>
                            <div class="related-product-buttons">
                                <a href="<?php echo $baseurl ?>noida/ginger-garlic-paste-pouch-packaging-machine" class="btn-view-details">View Details</a>
                                <button class="btn-quick-quote" onclick="openForm()">Quick Quote</button>
                            </div>
                        </div>
                    </div>
                     <div class="related-product-card">
                         <div class="related-product-image" style="background: url('assets/img/durgaimg5.webp') no-repeat center center; background-size: cover; height: 269px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        </div>
                        <div class="related-product-info">
                            <h3>Tomato Paste Pouch Packaging Machine</h3>
                            <p class="related-product-price">Rs 1,30,000/Piece</p>
                            <p class="related-product-desc">These machines automate the entire process, from filling the pouch with the exact amount of tomato paste to sealing it tightly to prevent leaks and spoilage. </p>
                            <div class="related-product-buttons">
                                <a href="<?php echo $baseurl ?>noida/tomato-paste-pouch-packaging-machine" class="btn-view-details">View Details</a>
                                <button class="btn-quick-quote" onclick="openForm()">Quick Quote</button>
                            </div>
                        </div>
                    </div>
                     <div class="related-product-card">
                         <div class="related-product-image" style="background: url('assets/img/ghee-img.webp') no-repeat center center; background-size: cover; height: 269px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        </div>
                        <div class="related-product-info">
                            <h3>Ghee Pouch Packing Machine <br><br></h3>
                            <p class="related-product-price">Rs 5,50,000/ Piece</p>
                            <p class="related-product-desc">The Ghee Pouch Packing Machine is a fully automatic liquid filling and sealing system designed specifically for packing viscous dairy products like ghee into leak-proof, hygienic pouches. </p>
                            <div class="related-product-buttons">
                                <a href="<?php echo $baseurl ?>noida/ghee-pouch-packing-machine " class="btn-view-details">View Details</a>
                                <button class="btn-quick-quote" onclick="openForm()">Quick Quote</button>
                            </div>
                        </div>
                    </div>
                     <div class="related-product-card">
                         <div class="related-product-image" style="background: url('assets/img/durgaimg5.webp') no-repeat center center; background-size: cover; height: 269px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        </div>
                        <div class="related-product-info">
                            <h3>Liquor Pouch Packaging Machine <br><br></h3>
                            <p class="related-product-price">Rs 6,50,000/ Piece</p>
                            <p class="related-product-desc">A Liquor Pouch Packaging Machine is designed to fill and seal small pouches with measured quantities of liquid liquor, often for country liquor (desi daru), herbal tonics, or similar alcoholic and non-alcoholic beverages.</p>
                            <div class="related-product-buttons">
                                <a href="<?php echo $baseurl ?>noida/liquor-pouch-packaging-machine" class="btn-view-details">View Details</a>
                                <button class="btn-quick-quote" onclick="openForm()">Quick Quote</button>
                            </div>
                        </div>
                    </div>
                     <div class="related-product-card">
                         <div class="related-product-image" style="background: url('assets/img/durgaimg2.webp') no-repeat center center; background-size: cover; height: 269px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        </div>
                        <div class="related-product-info">
                            <h3>Powder Packaging Machine <br><br></h3>
                            <p class="related-product-price">Rs 85,000 / Piece</p>
                            <p class="related-product-desc">The Powder Packaging Machine is a versatile and automated solution designed to efficiently pack a wide range of powdery substances—such as spices, flour, milk powder, coffee, detergent, and pharmaceutical powders—into pouches or containers. </p>
                            <div class="related-product-buttons">
                                <a href="<?php echo $baseurl ?>noida/powder-packaging-machine" class="btn-view-details">View Details</a>
                                <button class="btn-quick-quote" onclick="openForm()">Quick Quote</button>
                            </div>
                        </div>
                    </div>
                    
                     <div class="related-product-card">
                         <div class="related-product-image" style="background: url('assets/img/garam-masalaimg.webp') no-repeat center center; background-size: cover; height: 269px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        </div>
                        <div class="related-product-info">
                            <h3>Garam Masala Pouch Packing Machine</h3>
                            <p class="related-product-price">Rs 4,00,000 / Piece</p>
                            <p class="related-product-desc">The Garam Masala Pouch Packing Machine is a specialized packaging solution designed for efficiently packing fine spice powders like garam masala into airtight, moisture-resistant pouches. </p>
                            <div class="related-product-buttons">
                                <a href="<?php echo $baseurl ?>noida/garam-masala-pouch-packing-machine" class="btn-view-details">View Details</a>
                                <button class="btn-quick-quote" onclick="openForm()">Quick Quote</button>
                            </div>
                        </div>
                    </div>
                    
                     <div class="related-product-card">
                         <div class="related-product-image" style="background: url('assets/img/durgaimg2.webp') no-repeat center center; background-size: cover; height: 269px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        </div>
                        <div class="related-product-info">
                            <h3>Granules Pouch Packaging Machine</h3>
                            <p class="related-product-price">Rs 3,50,000 / Piece</p>
                            <p class="related-product-desc">The Granules Pouch Packaging Machine is a specialized packing equipment designed to fill and seal pouches containing granulated products such as pulses, sugar, tea, coffee, spices, detergent powder, seeds, grains, dry fruits, namkeen, and more. </p>
                            <div class="related-product-buttons">
                                <a href="<?php echo $baseurl ?>noida/granules-pouch-packaging-machine" class="btn-view-details">View Details</a>
                                <button class="btn-quick-quote" onclick="openForm()">Quick Quote</button>
                            </div>
                        </div>
                    </div>
                    
                     <div class="related-product-card">
                         <div class="related-product-image" style="background: url('assets/img/gutkha-img.webp') no-repeat center center; background-size: cover; height: 269px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        </div>
                        <div class="related-product-info">
                            <h3>Gutkha Pouch Packaging Machine <br><br></h3>
                            <p class="related-product-price">Rs 4,00,000 / Piece</p>
                            <p class="related-product-desc">A Gutkha Pouch Packaging Machine is a specialized automated system used for packing gutkha, pan masala, supari (betel nut), and other similar products into small, heat-sealed pouches.  </p>
                            <div class="related-product-buttons">
                                <a href="<?php echo $baseurl ?>noida/gutkha-pouch-packaging-machine" class="btn-view-details">View Details</a>
                                <button class="btn-quick-quote" onclick="openForm()">Quick Quote</button>
                            </div>
                        </div>
                    </div>
                     <div class="related-product-card">
                         <div class="related-product-image" style="background: url('assets/img/durgaimg2.webp') no-repeat center center; background-size: cover; height: 269px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        </div>
                        <div class="related-product-info">
                            <h3>ORS Powder Multitrack Packing Machine</h3>
                            <p class="related-product-price">Rs 6,50,000 / Piece</p>
                            <p class="related-product-desc">ORS Powder Multitrack Packing Machines has Faster delivery and installation with Local support and quick availability of spare parts </p>
                            <div class="related-product-buttons">
                                <a href="<?php echo $baseurl ?>noida/ors-powder-pouch-packaging-machine" class="btn-view-details">View Details</a>
                                <button class="btn-quick-quote" onclick="openForm()">Quick Quote</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="related-product-card">
                         <div class="related-product-image" style="background: url('assets/img/durgaimg5.webp') no-repeat center center; background-size: cover; height: 269px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        </div>
                        <div class="related-product-info">
                            <h3>Pouch Packaging Machines <br><br></h3>
                            <p class="related-product-price">Rs 4,00,000 / Piece</p>
                            <p class="related-product-desc">A pouch packaging machine is an automated system that forms, fills, and seals pouches with various products. Think of it as a super-efficient robot designed to create perfect packages every single time. </p>
                            <div class="related-product-buttons">
                                <a href="<?php echo $baseurl ?>noida/pouch-packaging-machine" class="btn-view-details">View Details</a>
                                <button class="btn-quick-quote" onclick="openForm()">Quick Quote</button>
                            </div>
                        </div>
                    </div>
                    <div class="related-product-card">
                         <div class="related-product-image" style="background: url('assets/img/durgaimg2.webp') no-repeat center center; background-size: cover; height: 269px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        </div>
                        <div class="related-product-info">
                            <h3>Detergent Powder Pouch Packaging Machine</h3>
                            <p class="related-product-price">Rs 4,50,000 / Piece</p>
                            <p class="related-product-desc">The Detergent Powder Pouch Packaging Machine is a fully automatic packaging solution designed to pack free-flowing powders like detergent efficiently and accurately into sealed pouches.  </p>
                            <div class="related-product-buttons">
                                <a href="<?php echo $baseurl ?>noida/detergent-powder-pouch-packaging-machine" class="btn-view-details">View Details</a>
                                <button class="btn-quick-quote" onclick="openForm()">Quick Quote</button>
                            </div>
                        </div>
                    </div>
                    <div class="related-product-card">
                         <div class="related-product-image" style="background: url('assets/img/durgaimg2.webp') no-repeat center center; background-size: cover; height: 269px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        </div>
                        <div class="related-product-info">
                            <h3>Rasna Powder Pouch Packaging Machine</h3>
                            <p class="related-product-price">Rs 8,50,000 / Piece</p>
                            <p class="related-product-desc">The Rasna Powder Pouch Packaging Machine is a high-efficiency, precision packaging machine designed to pack flavored powdered beverages into small, moisture-proof pouches. </p>
                            <div class="related-product-buttons">
                                <a href="<?php echo $baseurl ?>noida/rasna-powder-pouch-packaging-machine" class="btn-view-details">View Details</a>
                                <button class="btn-quick-quote" onclick="openForm()">Quick Quote</button>
                            </div>
                        </div>
                    </div>
                    <div class="related-product-card">
                         <div class="related-product-image" style="background: url('assets/img/servo-auger-img.webp') no-repeat center center; background-size: cover; height: 269px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        </div>
                        <div class="related-product-info">
                            <h3>Servo Auger Powder Filling Machine</h3>
                            <p class="related-product-price">Rs 1,50,000 / Piece</p>
                            <p class="related-product-desc">A Servo Auger Powder Filling Machine is an advanced packaging system designed to fill free-flowing and non-free-flowing powders with high precision using a servo-driven auger screw. </p>
                            <div class="related-product-buttons">
                                <a href="<?php echo $baseurl ?>noida/servo-auger-powder-filling-machine" class="btn-view-details">View Details</a>
                                <button class="btn-quick-quote" onclick="openForm()">Quick Quote</button>
                            </div>
                        </div>
                    </div>
                    <div class="related-product-card">
                         <div class="related-product-image" style="background: url('assets/img/durgaimg2.webp') no-repeat center center; background-size: cover; height: 269px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        </div>
                        <div class="related-product-info">
                            <h3>Tea Pouch Packaging Machine <br><br></h3>
                            <p class="related-product-price">Rs 3,75,000 / Piece</p>
                            <p class="related-product-desc">A Tea Pouch Packaging Machine is an advanced automated system designed to pack loose or granulated tea into moisture-resistant pouches.</p>
                            <div class="related-product-buttons">
                                <a href="<?php echo $baseurl ?>noida/tea-pouch-packaging-machine" class="btn-view-details">View Details</a>
                                <button class="btn-quick-quote" onclick="openForm()">Quick Quote</button>
                            </div>
                        </div>
                    </div>
                    <div class="related-product-card">
                         <div class="related-product-image" style="background: url('assets/img/coffeeimg.webp') no-repeat center center; background-size: cover; height: 269px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        </div>
                        <div class="related-product-info">
                            <h3>Coffee Pouch Packing Machine <br><br></h3>
                            <p class="related-product-price">Rs 6,50,000 / Piece</p>
                            <p class="related-product-desc">The Coffee Pouch Packaging Machine is a high-performance, automated system designed for packaging ground coffee, coffee beans, or instant coffee powder into sealed pouches with precision and speed.  </p>
                            <div class="related-product-buttons">
                                <a href="<?php echo $baseurl ?>noida/coffee-pouch-packaging-machine" class="btn-view-details">View Details</a>
                                <button class="btn-quick-quote" onclick="openForm()">Quick Quote</button>
                            </div>
                        </div>
                    </div>
                                    </div>
                <!--<div class="view-all-products">-->
                <!--    <a href="all-products.php" class="btn-view-all">-->
                        <!--<span>🔍</span> View All Products-->
                <!--    </a>-->
                <!--</div>-->
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
<?php
include 'include/footer.php';
?>
