
<?php
require_once 'auth.php';
require_once 'config.php';

checkAdminAuth();

$message = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $settings = [
        'company_name' => $_POST['company_name'],
        'phone' => $_POST['phone'],
        'email' => $_POST['email'],
        'address' => $_POST['address'],
        'whatsapp' => $_POST['whatsapp'],
        'experience' => $_POST['experience'],
        'clients' => $_POST['clients'],
        'reach' => $_POST['reach']
    ];
    
    if (saveData(SETTINGS_FILE, $settings)) {
        $message = 'Settings updated successfully!';
    } else {
        $error = 'Failed to update settings!';
    }
}

$settings = loadData(SETTINGS_FILE);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - Admin Panel</title>
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

        .page-title {
            font-size: 2rem;
            color: #333;
            font-weight: bold;
            margin-bottom: 2rem;
        }

        .message {
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 2rem;
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

        .settings-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
        }

        .settings-section {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .section-title {
            font-size: 1.3rem;
            color: #333;
            margin-bottom: 1.5rem;
            font-weight: bold;
            border-bottom: 2px solid #ff6600;
            padding-bottom: 0.5rem;
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
            padding: 12px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .form-input:focus {
            outline: none;
            border-color: #ff6600;
        }

        .form-textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1rem;
            min-height: 100px;
            resize: vertical;
        }

        .save-btn {
            background: #ff6600;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            font-size: 1rem;
            transition: background 0.3s;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .save-btn:hover {
            background: #e55a00;
        }

        .form-actions {
            grid-column: 1 / -1;
            text-align: center;
            margin-top: 2rem;
        }

        @media (max-width: 768px) {
            .admin-nav {
                flex-direction: column;
                gap: 1rem;
            }

            .settings-grid {
                grid-template-columns: 1fr;
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
                <a href="products.php" class="nav-link">Products</a>
                <a href="content.php" class="nav-link">Content</a>
                <a href="settings.php" class="nav-link active">Settings</a>
                <a href="?action=logout" class="nav-link">Logout</a>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <div class="admin-container">
        <h1 class="page-title">Website Settings</h1>

        <?php if ($message): ?>
            <div class="message success"><?php echo htmlspecialchars($message); ?></div>
        <?php endif; ?>

        <?php if ($error): ?>
            <div class="message error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>

        <form method="POST">
            <div class="settings-grid">
                <!-- Company Information -->
                <div class="settings-section">
                    <h2 class="section-title">Company Information</h2>
                    
                    <div class="form-group">
                        <label class="form-label" for="company_name">Company Name</label>
                        <input type="text" id="company_name" name="company_name" class="form-input" 
                               value="<?php echo htmlspecialchars($settings['company_name'] ?? ''); ?>" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="phone">Phone Number</label>
                        <input type="text" id="phone" name="phone" class="form-input" 
                               value="<?php echo htmlspecialchars($settings['phone'] ?? ''); ?>" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="email">Email Address</label>
                        <input type="email" id="email" name="email" class="form-input" 
                               value="<?php echo htmlspecialchars($settings['email'] ?? ''); ?>" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="address">Address</label>
                        <textarea id="address" name="address" class="form-textarea" required><?php echo htmlspecialchars($settings['address'] ?? ''); ?></textarea>
                    </div>
                </div>

                <!-- Digital Presence -->
                <div class="settings-section">
                    <h2 class="section-title">Digital Presence</h2>
                    
                    <div class="form-group">
                        <label class="form-label" for="whatsapp">WhatsApp Number (with country code)</label>
                        <input type="text" id="whatsapp" name="whatsapp" class="form-input" 
                               placeholder="919876543210"
                               value="<?php echo htmlspecialchars($settings['whatsapp'] ?? ''); ?>" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="experience">Years of Experience</label>
                        <input type="text" id="experience" name="experience" class="form-input" 
                               placeholder="25+"
                               value="<?php echo htmlspecialchars($settings['experience'] ?? ''); ?>" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="clients">Number of Clients</label>
                        <input type="text" id="clients" name="clients" class="form-input" 
                               placeholder="500+"
                               value="<?php echo htmlspecialchars($settings['clients'] ?? ''); ?>" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="reach">Business Reach</label>
                        <input type="text" id="reach" name="reach" class="form-input" 
                               placeholder="Global"
                               value="<?php echo htmlspecialchars($settings['reach'] ?? ''); ?>" required>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="save-btn">
                        <span>💾</span> Save Settings
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
