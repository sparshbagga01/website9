
<?php
require_once 'auth.php';
require_once 'config.php';

checkAdminAuth();

$message = '';
$error = '';

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $products = loadData(PRODUCTS_FILE);
    
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'add':
                $slug = generateSlug($_POST['title']);
                $products[$slug] = [
                    'title' => $_POST['title'],
                    'subtitle' => $_POST['subtitle'],
                    'price' => $_POST['price'],
                    'image_alt' => $_POST['image_alt'],
                    'category' => $_POST['category'],
                    'capacity' => $_POST['capacity'],
                    'description' => $_POST['description'],
                    'features' => array_filter(explode("\n", $_POST['features'])),
                    'specifications' => json_decode($_POST['specifications'], true) ?? [],
                    'status' => $_POST['status']
                ];
                if (saveData(PRODUCTS_FILE, $products)) {
                    $message = 'Product added successfully!';
                } else {
                    $error = 'Failed to add product!';
                }
                break;
                
            case 'edit':
                $slug = $_POST['slug'];
                if (isset($products[$slug])) {
                    $products[$slug] = [
                        'title' => $_POST['title'],
                        'subtitle' => $_POST['subtitle'],
                        'price' => $_POST['price'],
                        'image_alt' => $_POST['image_alt'],
                        'category' => $_POST['category'],
                        'capacity' => $_POST['capacity'],
                        'description' => $_POST['description'],
                        'features' => array_filter(explode("\n", $_POST['features'])),
                        'specifications' => json_decode($_POST['specifications'], true) ?? [],
                        'status' => $_POST['status']
                    ];
                    if (saveData(PRODUCTS_FILE, $products)) {
                        $message = 'Product updated successfully!';
                    } else {
                        $error = 'Failed to update product!';
                    }
                }
                break;
                
            case 'delete':
                $slug = $_POST['slug'];
                if (isset($products[$slug])) {
                    unset($products[$slug]);
                    if (saveData(PRODUCTS_FILE, $products)) {
                        $message = 'Product deleted successfully!';
                    } else {
                        $error = 'Failed to delete product!';
                    }
                }
                break;
        }
    }
}

$products = loadData(PRODUCTS_FILE);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products - Admin Panel</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: #f5f5f5;
            line-height: 1.6;
        }

        .admin-header {
            background: #333;
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .admin-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .admin-logo {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: #ff6600;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }

        .admin-title {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .nav-links {
            display: flex;
            gap: 1rem;
        }

        .nav-link {
            color: white;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .nav-link:hover,
        .nav-link.active {
            background: #ff6600;
        }

        .admin-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2rem;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .page-title {
            font-size: 2rem;
            color: #333;
            font-weight: bold;
        }

        .add-btn {
            background: #ff6600;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .add-btn:hover {
            background: #e55a00;
        }

        .message {
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
        }

        .message.success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .message.error {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2rem;
        }

        .product-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-header {
            padding: 1.5rem;
            border-bottom: 1px solid #eee;
        }

        .product-title {
            font-size: 1.3rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 0.5rem;
        }

        .product-subtitle {
            color: #666;
            font-size: 0.9rem;
        }

        .product-info {
            padding: 1.5rem;
        }

        .product-price {
            font-size: 1.2rem;
            font-weight: bold;
            color: #ff6600;
            margin-bottom: 1rem;
        }

        .product-meta {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .meta-item {
            font-size: 0.9rem;
        }

        .meta-label {
            font-weight: bold;
            color: #333;
        }

        .meta-value {
            color: #666;
        }

        .status-badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
        }

        .status-active {
            background: #d4edda;
            color: #155724;
        }

        .status-inactive {
            background: #f8d7da;
            color: #721c24;
        }

        .product-actions {
            display: flex;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .btn {
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9rem;
            font-weight: bold;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.3rem;
            transition: background 0.3s;
        }

        .btn-edit {
            background: #007bff;
            color: white;
        }

        .btn-edit:hover {
            background: #0056b3;
        }

        .btn-delete {
            background: #dc3545;
            color: white;
        }

        .btn-delete:hover {
            background: #c82333;
        }

        .btn-view {
            background: #28a745;
            color: white;
        }

        .btn-view:hover {
            background: #1e7e34;
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 1000;
        }

        .modal-content {
            background: white;
            margin: 2% auto;
            padding: 2rem;
            border-radius: 15px;
            width: 90%;
            max-width: 800px;
            max-height: 90vh;
            overflow-y: auto;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .modal-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
        }

        .close-btn {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: #666;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
            color: #333;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1rem;
        }

        .form-input:focus {
            outline: none;
            border-color: #ff6600;
        }

        .form-textarea {
            width: 100%;
            padding: 10px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1rem;
            min-height: 100px;
            resize: vertical;
        }

        .form-select {
            width: 100%;
            padding: 10px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1rem;
        }

        .form-actions {
            display: flex;
            gap: 1rem;
            justify-content: flex-end;
        }

        .btn-primary {
            background: #ff6600;
            color: white;
        }

        .btn-primary:hover {
            background: #e55a00;
        }

        .btn-secondary {
            background: #6c757d;
            color: white;
        }

        .btn-secondary:hover {
            background: #545b62;
        }

        @media (max-width: 768px) {
            .admin-nav {
                flex-direction: column;
                gap: 1rem;
            }

            .page-header {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }

            .products-grid {
                grid-template-columns: 1fr;
            }

            .modal-content {
                margin: 5% auto;
                width: 95%;
            }
        }
    </style>
</head>
<body>
    <!-- Admin Header -->
    <header class="admin-header">
        <nav class="admin-nav">
            <div class="admin-logo">
                <div class="logo-icon">A</div>
                <div class="admin-title">Admin Panel</div>
            </div>
            <div class="nav-links">
                <a href="dashboard.php" class="nav-link">Dashboard</a>
                <a href="products.php" class="nav-link active">Products</a>
                <a href="content.php" class="nav-link">Content</a>
                <a href="settings.php" class="nav-link">Settings</a>
                <a href="?action=logout" class="nav-link">Logout</a>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <div class="admin-container">
        <div class="page-header">
            <h1 class="page-title">Manage Products</h1>
            <button class="add-btn" onclick="openAddModal()">
                <span>➕</span> Add New Product
            </button>
        </div>

        <?php if ($message): ?>
            <div class="message success"><?php echo htmlspecialchars($message); ?></div>
        <?php endif; ?>

        <?php if ($error): ?>
            <div class="message error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>

        <div class="products-grid">
            <?php foreach ($products as $slug => $product): ?>
            <div class="product-card">
                <div class="product-header">
                    <h3 class="product-title"><?php echo htmlspecialchars($product['title']); ?></h3>
                    <p class="product-subtitle"><?php echo htmlspecialchars($product['subtitle']); ?></p>
                </div>
                <div class="product-info">
                    <div class="product-price"><?php echo htmlspecialchars($product['price']); ?></div>
                    <div class="product-meta">
                        <div class="meta-item">
                            <div class="meta-label">Category:</div>
                            <div class="meta-value"><?php echo htmlspecialchars($product['category']); ?></div>
                        </div>
                        <div class="meta-item">
                            <div class="meta-label">Capacity:</div>
                            <div class="meta-value"><?php echo htmlspecialchars($product['capacity']); ?></div>
                        </div>
                        <div class="meta-item">
                            <div class="meta-label">Status:</div>
                            <div class="meta-value">
                                <span class="status-badge <?php echo $product['status'] === 'active' ? 'status-active' : 'status-inactive'; ?>">
                                    <?php echo ucfirst($product['status']); ?>
                                </span>
                            </div>
                        </div>
                        <div class="meta-item">
                            <div class="meta-label">Features:</div>
                            <div class="meta-value"><?php echo count($product['features']); ?> items</div>
                        </div>
                    </div>
                    <div class="product-actions">
                        <button class="btn btn-edit" onclick="openEditModal('<?php echo $slug; ?>')">
                            <span>✏️</span> Edit
                        </button>
                        <a href="../product.php?product=<?php echo $slug; ?>" target="_blank" class="btn btn-view">
                            <span>👁️</span> View
                        </a>
                        <button class="btn btn-delete" onclick="deleteProduct('<?php echo $slug; ?>')">
                            <span>🗑️</span> Delete
                        </button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Add/Edit Product Modal -->
    <div id="productModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="modalTitle">Add New Product</h2>
                <button class="close-btn" onclick="closeModal()">&times;</button>
            </div>
            <form id="productForm" method="POST">
                <input type="hidden" name="action" id="formAction" value="add">
                <input type="hidden" name="slug" id="productSlug" value="">
                
                <div class="form-group">
                    <label class="form-label" for="title">Product Title*</label>
                    <input type="text" id="title" name="title" class="form-input" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="subtitle">Subtitle*</label>
                    <input type="text" id="subtitle" name="subtitle" class="form-input" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="price">Price*</label>
                    <input type="text" id="price" name="price" class="form-input" placeholder="₹2,50,000" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="image_alt">Image Alt Text*</label>
                    <input type="text" id="image_alt" name="image_alt" class="form-input" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="category">Category*</label>
                    <select id="category" name="category" class="form-select" required>
                        <option value="">Select Category</option>
                        <option value="Automatic">Automatic</option>
                        <option value="Semi-Automatic">Semi-Automatic</option>
                        <option value="Specialized">Specialized</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label" for="capacity">Capacity*</label>
                    <input type="text" id="capacity" name="capacity" class="form-input" placeholder="120 ppm" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="description">Description*</label>
                    <textarea id="description" name="description" class="form-textarea" required></textarea>
                </div>

                <div class="form-group">
                    <label class="form-label" for="features">Features (one per line)*</label>
                    <textarea id="features" name="features" class="form-textarea" placeholder="High-speed operation&#10;PLC control&#10;Easy maintenance" required></textarea>
                </div>

                <div class="form-group">
                    <label class="form-label" for="specifications">Specifications (JSON format)*</label>
                    <textarea id="specifications" name="specifications" class="form-textarea" placeholder='{"Production Capacity": "120 ppm", "Power": "15 KW"}' required></textarea>
                </div>

                <div class="form-group">
                    <label class="form-label" for="status">Status*</label>
                    <select id="status" name="status" class="form-select" required>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>

                <div class="form-actions">
                    <button type="button" class="btn btn-secondary" onclick="closeModal()">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save Product</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const products = <?php echo json_encode($products); ?>;

        function openAddModal() {
            document.getElementById('modalTitle').textContent = 'Add New Product';
            document.getElementById('formAction').value = 'add';
            document.getElementById('productForm').reset();
            document.getElementById('productModal').style.display = 'block';
        }

        function openEditModal(slug) {
            const product = products[slug];
            if (!product) return;

            document.getElementById('modalTitle').textContent = 'Edit Product';
            document.getElementById('formAction').value = 'edit';
            document.getElementById('productSlug').value = slug;
            
            document.getElementById('title').value = product.title;
            document.getElementById('subtitle').value = product.subtitle;
            document.getElementById('price').value = product.price;
            document.getElementById('image_alt').value = product.image_alt;
            document.getElementById('category').value = product.category;
            document.getElementById('capacity').value = product.capacity;
            document.getElementById('description').value = product.description;
            document.getElementById('features').value = product.features.join('\n');
            document.getElementById('specifications').value = JSON.stringify(product.specifications, null, 2);
            document.getElementById('status').value = product.status;
            
            document.getElementById('productModal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('productModal').style.display = 'none';
        }

        function deleteProduct(slug) {
            if (confirm('Are you sure you want to delete this product? This action cannot be undone.')) {
                const form = document.createElement('form');
                form.method = 'POST';
                form.innerHTML = `
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="slug" value="${slug}">
                `;
                document.body.appendChild(form);
                form.submit();
            }
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('productModal');
            if (event.target === modal) {
                closeModal();
            }
        }
    </script>
</body>
</html>
