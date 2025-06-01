
<?php
// Database configuration (using JSON files for simplicity)
define('DATA_DIR', __DIR__ . '/data/');
define('PRODUCTS_FILE', DATA_DIR . 'products.json');
define('CONTENT_FILE', DATA_DIR . 'content.json');
define('SETTINGS_FILE', DATA_DIR . 'settings.json');

// Create data directory if it doesn't exist
if (!file_exists(DATA_DIR)) {
    mkdir(DATA_DIR, 0755, true);
}

// Initialize files if they don't exist
if (!file_exists(PRODUCTS_FILE)) {
    $default_products = [
        'multi-track' => [
            'title' => 'Multi Track Packing Machine',
            'subtitle' => 'High-Speed Automatic Packaging Solution for Multiple Product Lines',
            'price' => '₹2,50,000',
            'image_alt' => 'Multi Track Packing Machine - Main Image',
            'category' => 'Automatic',
            'capacity' => '120 ppm',
            'description' => 'Our Multi Track Packing Machine represents the pinnacle of packaging technology...',
            'features' => [
                '4-track parallel processing',
                'PLC touch screen control',
                'Adjustable pouch sizes',
                'High-speed operation'
            ],
            'specifications' => [
                'Production Capacity' => '120 pouches per minute (per track)',
                'Number of Tracks' => '4 tracks (expandable to 8 tracks)',
                'Pouch Size Range' => '50ml to 1000ml',
                'Power Consumption' => '15 KW (3 Phase)'
            ],
            'status' => 'active'
        ],
        'pouch-packing' => [
            'title' => 'Pouch Packing Machine',
            'subtitle' => 'Efficient Pouch Packaging Solution for Various Products',
            'price' => '₹1,80,000',
            'image_alt' => 'Pouch Packing Machine - Main Image',
            'category' => 'Semi-Automatic',
            'capacity' => '80 ppm',
            'description' => 'Efficient and reliable pouch packaging machine designed for various products...',
            'features' => [
                'Flexible pouch sizes',
                'Easy operation',
                'Low maintenance',
                'Cost-effective solution'
            ],
            'specifications' => [
                'Production Capacity' => '80 pouches per minute',
                'Pouch Size Range' => '50ml to 500ml',
                'Power Consumption' => '10 KW (3 Phase)'
            ],
            'status' => 'active'
        ]
    ];
    file_put_contents(PRODUCTS_FILE, json_encode($default_products, JSON_PRETTY_PRINT));
}

if (!file_exists(CONTENT_FILE)) {
    $default_content = [
        'hero' => [
            'title' => 'Professional Packaging Solutions',
            'subtitle' => 'Excellence in manufacturing packaging machines and industrial automation solutions since 1995',
            'button1_text' => 'VIEW PRODUCTS',
            'button2_text' => 'GET QUOTE'
        ],
        'about' => [
            'title' => 'About Us',
            'content' => 'Avtaar Mechanical Works is a leading manufacturer of high-quality packaging machines...'
        ],
        'stats' => [
            'experience' => '25+',
            'clients' => '500+',
            'reach' => 'Global'
        ]
    ];
    file_put_contents(CONTENT_FILE, json_encode($default_content, JSON_PRETTY_PRINT));
}

if (!file_exists(SETTINGS_FILE)) {
    $default_settings = [
        'company_name' => 'Avtaar Mechanical Works',
        'phone' => '+91 98765 43210',
        'email' => 'info@avtaarmechanical.com',
        'address' => 'Industrial Area, Sector 12, New Delhi, India - 110025',
        'whatsapp' => '919876543210'
    ];
    file_put_contents(SETTINGS_FILE, json_encode($default_settings, JSON_PRETTY_PRINT));
}

// Helper functions
function loadData($file) {
    if (file_exists($file)) {
        return json_decode(file_get_contents($file), true);
    }
    return [];
}

function saveData($file, $data) {
    return file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
}

function generateSlug($title) {
    return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title), '-'));
}
?>
