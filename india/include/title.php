<style>
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
            font-size: 2.3rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 1rem;
            margin-top: -35px;
        }
        
        .bggg{
            color: #fff;
             background: #e6271c;
            border: 6px solid #e6271c;
             border-radius: 4px;
             margin-bottom: 35px;
             width: 90%;
        }

        .product-subtitle {
            font-size: 1rem;
            color: #666;
            margin-bottom: 2rem;
           margin-top: -12px;
        }

        .price-section {
            background: #fff;
            /*border: 2px solid #ff6600;*/
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            text-align: left;
        }
        
       .price-section {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    justify-content: flex-start; /* align to left */
    margin-top: -25px; /* adjust as needed */
}

.starting-price {
    font-size: 0.9rem;
    color: #666;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-left: -25px;
}

.main-price {
    font-size: 2rem;
    font-weight: bold;
    color: #e6271c;
    margin: 0;
    margin-top: -12px;
}

    .showw{
        margin-top: 15px;
        font-size: 1.3rem;
        font-weight: bold;
        color: #333;
    }
    

.product-image-section {
  max-width: 100%;
  width: auto;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 10px;
}

.main-image {
  display: flex;
  justify-content: center;
  align-items: center;
  width: auto;
  max-width: 100%;
  height: auto;
}

.main-image img {
  max-width: 100%;
  height: auto;
  display: block;
  object-fit: contain;
  border: 1px solid #ddd;
  border-radius: 8px;
}

/* Optional: Style thumbnails */
.thumbnail-images {
  display: flex;
  gap: 10px;
  margin-top: 0px;
  flex-wrap: wrap;
  justify-content: center;
}

.thumbnail {
  background-color: #f1f1f1;
  padding: 8px 12px;
  border-radius: 5px;
  cursor: pointer;
}

.thumbnail.active {
  background-color: #007bff;
  color: white;
}
@media (max-width: 576px) {
  .product-layout {
    flex-direction: column;
    align-items: center;
  }

  .product-image-section {
    padding-top: 15px;
    margin-top: 45px; /* ✅ Moves the image down */
    width: 100%;
    text-align: center;
  }

  .main-image {
    margin: 0 auto;
    width: 100%;
    max-width: 100%;
  }

  .main-image img {
    width: 100% !important;
    height: auto !important;
    object-fit: contain;
    border-radius: 8px;
    display: block;
  }
}


     .product-info-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 20px;
}

.toggle-button {
    background-color: #e6271c;
    color: #fff;
    border: none;
    padding: 5px 12px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 0.9rem;
    margin-right: 25px; /* ← Add this */
}


.product-details {
    margin-top: 15px;
    font-size: 1rem;
    color: #333;
}

.product-details {
    margin-top: 20px; /* adds spacing after the details section */
    font-size: 1rem;
    color: #333;
}

.action-buttons {
    margin-top: 25px; /* ensures good space before buttons */
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}
@media (max-width: 576px) {
    .action-buttons {
        flex-direction: column;
        gap: 12px;
    }
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
            background: #e6271c;
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
            color: #e6271c;
            padding: 15px 25px;
            border: 2px solid #e6271c;
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
            background: #e6271c;
            color: white;
            padding: 1.5rem;
            font-size: 1.1rem;
            font-weight: bold;
            text-align: left;
        }

        .spec-table td {
            padding: 1.5rem;
            border-bottom: 1px solid #e6271c;
            font-size: 1rem;
        }

        .spec-table tr:nth-child(even) {
            background: #f8f9fa;
        }

        .spec-table tr:hover {
            background: #fff3e0;
        }

        /* Benefits */
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .benefit-item {
            text-align: center;
            padding: 2rem;
            background: linear-gradient(135deg, #fff 0%, #f8f9fa 100%);
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            border: 1px solid #e0e0e0;
            transition: all 0.3s;
        }

        .benefit-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(255, 102, 0, 0.1);
            border-color: #ff6600;
        }

        .benefit-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #ff6600, #e55a00);
            border-radius: 50%;
            margin: 0 auto 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
            box-shadow: 0 5px 15px rgba(255, 102, 0, 0.3);
        }

        .benefit-title {
            font-size: 1.3rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: #333;
        }

        .benefit-description {
            color: #666;
            line-height: 1.6;
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
            background: #e6271c;
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
            border-color: #e6271c;
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
            color: #e6271c;
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
            background: #e6271c;
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
            color: #e6271c;
            padding: 8px 16px;
            border: 2px solid #e6271c;
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
            background: linear-gradient(135deg, #e6271c, #e6271c);
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

            .features-grid,
            .benefits-grid {
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
    
    
  <?php
// Get product from URL parameter
$product = isset($_GET['product']) ? $_GET['product'] : 'multi-track';

// Define product data
$products = [
    'multi-track' => [
        'title' => 'Multi Track Packing Machine',
        'subtitle' => 'High-Speed Automatic Packaging Solution for Multiple Product Lines',
        'price' => '₹2,00,000',
        'image_alt' => 'Multi Track Packing Machine - Main Image'
    ],
    'pouch-packing' => [
        'title' => 'Pouch Packing Machine',
        'subtitle' => 'Efficient Pouch Packaging Solution for Various Products',
        'price' => '₹1,950,000',
        'image_alt' => 'Pouch Packing Machine - Main Image'
    ],
    'multi-track-pouch' => [
        'title' => 'Multi Track Pouch Packing Machines',
        'subtitle' => 'Advanced Multi-Lane Pouch Packaging for High Volume Production',
        'price' => '₹2,20,000',
        'image_alt' => 'Multi Track Pouch Packing Machine - Main Image'
    ],
    'tomato-ketchup' => [
        'title' => 'Tomato Ketchup Pouch Packing Machine',
        'subtitle' => 'Specialized Packaging Solution for Tomato Ketchup and Sauces',
        'price' => '₹2,10,000',
        'image_alt' => 'Tomato Ketchup Pouch Packing Machine - Main Image'
    ],
    'sauce-pouch' => [
        'title' => 'Sauce Pouch Packaging Machine',
        'subtitle' => 'Professional Sauce Packaging with Precision and Hygiene',
        'price' => '₹1,95,000',
        'image_alt' => 'Sauce Pouch Packaging Machine - Main Image'
    ],
     'rotogravure-printing-machines' => [
        'title' => 'Rotogravure Printing Machines',
        'subtitle' => 'Professional Sauce Packaging with Precision and Hygiene',
        'price' => '₹9,5,000',
        'image_alt' => 'Sauce Pouch Packaging Machine - Main Image'
    ],
     'flexographic-printing-machines' => [
        'title' => 'Flexographic Printing Machines',
        'subtitle' => 'Professional Sauce Packaging with Precision and Hygiene',
        'price' => '₹9,0,000',
        'image_alt' => 'Sauce Pouch Packaging Machine - Main Image'
    ]
    
    
];

// Get current product data
$current_product = $products[$product] ?? $products['multi-track'];
?>