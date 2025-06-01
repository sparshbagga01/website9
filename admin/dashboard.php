
<?php
require_once 'auth.php';
require_once 'config.php';

checkAdminAuth();

$products = loadData(PRODUCTS_FILE);
$content = loadData(CONTENT_FILE);
$settings = loadData(SETTINGS_FILE);

$total_products = count($products);
$active_products = count(array_filter($products, function($p) { return $p['status'] === 'active'; }));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Avtaar Mechanical Works</title>
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

        .admin-user {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .logout-btn {
            background: #ff6600;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .logout-btn:hover {
            background: #e55a00;
        }

        .admin-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2rem;
        }

        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .dashboard-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            text-align: center;
        }

        .card-icon {
            width: 60px;
            height: 60px;
            background: #ff6600;
            border-radius: 50%;
            margin: 0 auto 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
        }

        .card-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 0.5rem;
        }

        .card-title {
            font-size: 1.1rem;
            color: #666;
        }

        .quick-actions {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .section-title {
            font-size: 1.8rem;
            color: #333;
            margin-bottom: 2rem;
            font-weight: bold;
        }

        .actions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
        }

        .action-btn {
            background: linear-gradient(135deg, #ff6600, #e55a00);
            color: white;
            padding: 1.5rem;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            text-decoration: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
            font-size: 1rem;
            font-weight: bold;
            transition: transform 0.3s;
        }

        .action-btn:hover {
            transform: translateY(-5px);
        }

        .action-icon {
            font-size: 2rem;
        }

        .recent-activity {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            margin-top: 2rem;
        }

        .activity-item {
            padding: 1rem;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .activity-item:last-child {
            border-bottom: none;
        }

        .activity-text {
            color: #333;
        }

        .activity-time {
            color: #666;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .admin-nav {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }

            .admin-container {
                padding: 1rem;
            }

            .dashboard-grid {
                grid-template-columns: 1fr;
            }

            .actions-grid {
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
            <div class="admin-user">
                <span>Welcome, <?php echo htmlspecialchars($_SESSION['admin_username']); ?></span>
                <a href="?action=logout" class="logout-btn">Logout</a>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <div class="admin-container">
        <!-- Dashboard Stats -->
        <div class="dashboard-grid">
            <div class="dashboard-card">
                <div class="card-icon">📦</div>
                <div class="card-number"><?php echo $total_products; ?></div>
                <div class="card-title">Total Products</div>
            </div>
            <div class="dashboard-card">
                <div class="card-icon">✅</div>
                <div class="card-number"><?php echo $active_products; ?></div>
                <div class="card-title">Active Products</div>
            </div>
            <div class="dashboard-card">
                <div class="card-icon">📊</div>
                <div class="card-number"><?php echo $settings['experience'] ?? '25+'; ?></div>
                <div class="card-title">Years Experience</div>
            </div>
            <div class="dashboard-card">
                <div class="card-icon">🌐</div>
                <div class="card-number"><?php echo $settings['clients'] ?? '500+'; ?></div>
                <div class="card-title">Happy Clients</div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="quick-actions">
            <h2 class="section-title">Quick Actions</h2>
            <div class="actions-grid">
                <a href="products.php" class="action-btn">
                    <span class="action-icon">📦</span>
                    Manage Products
                </a>
                <a href="content.php" class="action-btn">
                    <span class="action-icon">📝</span>
                    Edit Content
                </a>
                <a href="settings.php" class="action-btn">
                    <span class="action-icon">⚙️</span>
                    Settings
                </a>
                <a href="../index.php" target="_blank" class="action-btn">
                    <span class="action-icon">🌐</span>
                    View Website
                </a>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="recent-activity">
            <h2 class="section-title">Recent Activity</h2>
            <div class="activity-item">
                <span class="activity-text">Admin panel accessed</span>
                <span class="activity-time">Just now</span>
            </div>
            <div class="activity-item">
                <span class="activity-text">Products data loaded</span>
                <span class="activity-time">Few seconds ago</span>
            </div>
            <div class="activity-item">
                <span class="activity-text">System initialized</span>
                <span class="activity-time">Today</span>
            </div>
        </div>
    </div>
</body>
</html>
