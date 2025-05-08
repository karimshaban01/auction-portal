<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summit Auctions - Admin Panel</title>
    <style>
        :root {
            --primary-blue: #2a5d8a;
            --light-blue: #6a99c0;
            --sky-blue: #a3c5e7;
            --snow-white: #f5f7fa;
            --dark-green: #2a4220;
            --medium-green: #4c693b;
            --light-green: #8ba676;
            --sand: #d8c9a7;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: var(--snow-white);
            color: #333;
            line-height: 1.6;
            display: flex;
            min-height: 100vh;
        }
        
        .sidebar {
            width: 250px;
            background: linear-gradient(135deg, var(--primary-blue), var(--light-blue));
            color: white;
            padding: 20px 0;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            height: 100vh;
            overflow-y: auto;
        }
        
        .logo-container {
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 20px;
        }
        
        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }
        
        .admin-info {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            margin-bottom: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .admin-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--snow-white);
            margin-right: 10px;
        }
        
        .admin-name {
            font-weight: 500;
        }
        
        .admin-role {
            font-size: 0.8rem;
            opacity: 0.8;
        }
        
        .menu {
            list-style: none;
        }
        
        .menu-item {
            margin-bottom: 5px;
        }
        
        .menu-link {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            color: white;
            text-decoration: none;
            transition: all 0.3s;
            border-left: 4px solid transparent;
        }
        
        .menu-link:hover, .menu-link.active {
            background-color: rgba(255, 255, 255, 0.1);
            border-left-color: var(--sand);
        }
        
        .menu-icon {
            margin-right: 10px;
            font-size: 1.2rem;
        }
        
        .main-content {
            flex: 1;
            margin-left: 250px;
            padding: 20px;
        }
        
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        
        .page-title {
            font-size: 1.8rem;
            color: var(--primary-blue);
        }
        
        .header-actions {
            display: flex;
            align-items: center;
        }
        
        .search-box {
            position: relative;
            margin-right: 20px;
        }
        
        .search-input {
            padding: 8px 15px 8px 35px;
            border: 1px solid #ddd;
            border-radius: 20px;
            font-size: 0.9rem;
            width: 200px;
            transition: all 0.3s;
        }
        
        .search-input:focus {
            width: 300px;
            border-color: var(--light-blue);
            outline: none;
        }
        
        .search-icon {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #777;
        }
        
        .tabs {
            display: flex;
            border-bottom: 1px solid #ddd;
            margin-bottom: 20px;
        }
        
        .tab {
            padding: 10px 20px;
            cursor: pointer;
            font-weight: 500;
            color: #777;
            border-bottom: 3px solid transparent;
            transition: all 0.3s;
        }
        
        .tab.active {
            color: var(--primary-blue);
            border-bottom-color: var(--primary-blue);
        }
        
        .tab-content {
            display: none;
        }
        
        .tab-content.active {
            display: block;
            animation: fadeIn 0.5s;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            padding: 20px;
            margin-bottom: 20px;
        }
        
        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }
        
        .card-title {
            font-size: 1.2rem;
            color: var(--primary-blue);
            font-weight: 600;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .stat-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            padding: 20px;
            transition: all 0.3s;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .stat-value {
            font-size: 2rem;
            font-weight: bold;
            color: var(--primary-blue);
        }
        
        .stat-label {
            color: #777;
            font-size: 0.9rem;
        }
        
        .chart-container {
            height: 300px;
            position: relative;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }
        
        th {
            background-color: #f9f9f9;
            color: var(--primary-blue);
            font-weight: 600;
        }
        
        tr:hover {
            background-color: #f5f5f5;
        }
        
        .status {
            display: inline-block;
            padding: 3px 10px;
            border-radius: 12px;
            font-size: 0.8rem;
            font-weight: 500;
        }
        
        .status-active {
            background-color: rgba(76, 175, 80, 0.1);
            color: #43a047;
        }
        
        .status-pending {
            background-color: rgba(255, 152, 0, 0.1);
            color: #ff9800;
        }
        
        .status-inactive {
            background-color: rgba(244, 67, 54, 0.1);
            color: #f44336;
        }
        
        .btn {
            display: inline-block;
            background-color: var(--medium-green);
            color: white;
            padding: 8px 15px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            font-size: 0.9rem;
        }
        
        .btn:hover {
            background-color: var(--dark-green);
        }
        
        .btn-outline {
            background-color: transparent;
            border: 1px solid var(--medium-green);
            color: var(--medium-green);
        }
        
        .btn-outline:hover {
            background-color: var(--medium-green);
            color: white;
        }
        
        .action-btn {
            padding: 5px 10px;
            border-radius: 4px;
            background-color: transparent;
            border: none;
            cursor: pointer;
            transition: all 0.3s;
            font-size: 0.9rem;
        }
        
        .edit-btn {
            color: var(--primary-blue);
        }
        
        .edit-btn:hover {
            background-color: rgba(42, 93, 138, 0.1);
        }
        
        .delete-btn {
            color: #f44336;
        }
        
        .delete-btn:hover {
            background-color: rgba(244, 67, 54, 0.1);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 500;
        }
        
        .form-control {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            border-color: var(--light-blue);
            outline: none;
            box-shadow: 0 0 0 2px rgba(106, 153, 192, 0.2);
        }
        
        .form-select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23555' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: calc(100% - 12px) center;
            padding-right: 35px;
        }
        
        .filter-row {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 20px;
        }
        
        .filter-item {
            flex: 1;
            min-width: 200px;
        }
        
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        
        .page-link {
            display: inline-block;
            padding: 5px 10px;
            margin: 0 3px;
            border: 1px solid #ddd;
            border-radius: 4px;
            color: var(--primary-blue);
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .page-link:hover, .page-link.active {
            background-color: var(--primary-blue);
            color: white;
            border-color: var(--primary-blue);
        }
        
        .alert {
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 20px;
            border-left: 4px solid transparent;
        }
        
        .alert-success {
            background-color: rgba(76, 175, 80, 0.1);
            border-left-color: #43a047;
            color: #2e7d32;
        }
        
        .alert-warning {
            background-color: rgba(255, 152, 0, 0.1);
            border-left-color: #ff9800;
            color: #e65100;
        }
        
        .alert-danger {
            background-color: rgba(244, 67, 54, 0.1);
            border-left-color: #f44336;
            color: #c62828;
        }
        
        .progress {
            height: 8px;
            border-radius: 4px;
            background-color: #eee;
            margin-bottom: 10px;
            overflow: hidden;
        }
        
        .progress-bar {
            height: 100%;
            background-color: var(--primary-blue);
            border-radius: 4px;
        }
        
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 100;
            overflow: auto;
            animation: fadeIn 0.3s;
        }
        
        .modal-content {
            background-color: white;
            margin: 10% auto;
            padding: 20px;
            border-radius: 8px;
            width: 90%;
            max-width: 600px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            animation: slideDown 0.3s;
        }
        
        @keyframes slideDown {
            from { transform: translateY(-30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        
        .close-modal {
            float: right;
            font-size: 1.5rem;
            font-weight: bold;
            cursor: pointer;
            color: #777;
        }
        
        .close-modal:hover {
            color: #333;
        }
        
        .modal-header {
            padding-bottom: 15px;
            margin-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        
        .modal-title {
            font-size: 1.3rem;
            color: var(--primary-blue);
        }
        
        .modal-footer {
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px solid #eee;
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }
        
        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
                overflow: visible;
            }
            
            .logo-container, .admin-info, .menu-text {
                display: none;
            }
            
            .menu-link {
                justify-content: center;
                padding: 15px;
            }
            
            .menu-icon {
                margin-right: 0;
                font-size: 1.5rem;
            }
            
            .main-content {
                margin-left: 70px;
            }
            
            .search-input {
                width: 150px;
            }
            
            .search-input:focus {
                width: 200px;
            }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo-container">
            <a href="#" class="logo">Summit Admin</a>
        </div>
        
        <div class="admin-info">
            <div class="admin-avatar"></div>
            <div>
                <div class="admin-name">John Doe</div>
                <div class="admin-role">System Administrator</div>
            </div>
        </div>
        
        <ul class="menu">
            <li class="menu-item">
                <a href="#" class="menu-link active" data-tab="dashboard">
                    <span class="menu-icon">📊</span>
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link" data-tab="users">
                    <span class="menu-icon">👥</span>
                    <span class="menu-text">User Management</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link" data-tab="auctions">
                    <span class="menu-icon">🔍</span>
                    <span class="menu-text">Auction Moderation</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link" data-tab="reports">
                    <span class="menu-icon">📈</span>
                    <span class="menu-text">Reports & Analytics</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link">
                    <span class="menu-icon">⚙️</span>
                    <span class="menu-text">Settings</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link">
                    <span class="menu-icon">🔔</span>
                    <span class="menu-text">Notifications</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link">
                    <span class="menu-icon">🚪</span>
                    <span class="menu-text">Logout</span>
                </a>
            </li>
        </ul>
    </div>
    
    <div class="main-content">
        <div class="header">
            <h1 class="page-title">Admin Dashboard</h1>
            <div class="header-actions">
                <div class="search-box">
                    <span class="search-icon">🔍</span>
                    <input type="text" class="search-input" placeholder="Search...">
                </div>
                <button class="btn">+ New Action</button>
            </div>
        </div>
        
        <!-- Dashboard Tab -->
        <div class="tab-content active" id="dashboard">
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-value">4,521</div>
                    <div class="stat-label">Total Users</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value">867</div>
                    <div class="stat-label">Active Auctions</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value">$148,290</div>
                    <div class="stat-label">Monthly Revenue</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value">92%</div>
                    <div class="stat-label">Successful Transactions</div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">System Overview</h2>
                    <select class="form-control" style="width: auto;">
                        <option>Last 7 Days</option>
                        <option>Last 30 Days</option>
                        <option>Last 90 Days</option>
                        <option>This Year</option>
                    </select>
                </div>
                <div class="chart-container">
                    <!-- Placeholder for chart -->
                    <div style="width: 100%; height: 100%; background: linear-gradient(135deg, var(--snow-white), #e6eef5); display: flex; align-items: center; justify-content: center; border-radius: 8px;">
                        <div>Chart Visualization Placeholder</div>
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Recent Activity</h2>
                    <button class="btn btn-outline">View All</button>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Activity</th>
                            <th>User</th>
                            <th>Time</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>New Auction Created</td>
                            <td>Michael Brown</td>
                            <td>Today, 10:45 AM</td>
                            <td><span class="status status-active">Pending Review</span></td>
                        </tr>
                        <tr>
                            <td>User Registration</td>
                            <td>Sarah Williams</td>
                            <td>Today, 9:32 AM</td>
                            <td><span class="status status-active">Completed</span></td>
                        </tr>
                        <tr>
                            <td>Bid Placed</td>
                            <td>Robert Johnson</td>
                            <td>Yesterday, 4:15 PM</td>
                            <td><span class="status status-active">Successful</span></td>
                        </tr>
                        <tr>
                            <td>Payment Processed</td>
                            <td>Emily Davis</td>
                            <td>Yesterday, 2:20 PM</td>
                            <td><span class="status status-active">Completed</span></td>
                        </tr>
                        <tr>
                            <td>Auction Ended</td>
                            <td>System</td>
                            <td>Yesterday, 12:00 PM</td>
                            <td><span class="status status-active">Closed</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">System Alerts</h2>
                </div>
                <div class="alert alert-warning">
                    <strong>Scheduled Maintenance:</strong> System update planned for tonight at 2:00 AM. Expected downtime: 30 minutes.
                </div>
                <div class="alert alert-success">
                    <strong>Performance:</strong> All systems operating at optimal capacity. No issues detected.
                </div>
            </div>
        </div>
        
        <!-- User Management Tab -->
        <div class="tab-content" id="users">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">User Management</h2>
                    <button class="btn">Add New User</button>
                </div>
                
                <div class="filter-row">
                    <div class="filter-item">
                        <select class="form-control">
                            <option>All User Types</option>
                            <option>Administrators</option>
                            <option>Sellers</option>
                            <option>Buyers</option>
                        </select>
                    </div>
                    <div class="filter-item">
                        <select class="form-control">
                            <option>All Status</option>
                            <option>Active</option>
                            <option>Pending</option>
                            <option>Suspended</option>
                        </select>
                    </div>
                    <div class="filter-item">
                        <select class="form-control">
                            <option>All Registration Dates</option>
                            <option>Last 7 Days</option>
                            <option>Last 30 Days</option>
                            <option>Last 90 Days</option>
                        </select>
                    </div>
                </div>
                
                <table>
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>User Type</th>
                            <th>Status</th>
                            <th>Registered</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>U10045</td>
                            <td>John Smith</td>
                            <td>john.smith@example.com</td>
                            <td>Buyer/Seller</td>
                            <td><span class="status status-active">Active</span></td>
                            <td>Jan 15, 2025</td>
                            <td>
                                <button class="action-btn edit-btn">Edit</button>
                                <button class="action-btn delete-btn">Suspend</button>
                            </td>
                        </tr>
                        <tr>
                            <td>U10046</td>
                            <td>Emma Johnson</td>
                            <td>emma.j@example.com</td>
                            <td>Seller</td>
                            <td><span class="status status-active">Active</span></td>
                            <td>Feb 3, 2025</td>
                            <td>
                                <button class="action-btn edit-btn">Edit</button>
                                <button class="action-btn delete-btn">Suspend</button>
                            </td>
                        </tr>
                        <tr>
                            <td>U10047</td>
                            <td>Michael Brown</td>
                            <td>m.brown@example.com</td>
                            <td>Buyer</td>
                            <td><span class="status status-pending">Pending</span></td>
                            <td>Mar 21, 2025</td>
                            <td>
                                <button class="action-btn edit-btn">Edit</button>
                                <button class="action-btn delete-btn">Suspend</button>
                            </td>
                        </tr>
                        <tr>
                            <td>U10048</td>
                            <td>Jessica Lee</td>
                            <td>jessica@example.com</td>
                            <td>Buyer/Seller</td>
                            <td><span class="status status-active">Active</span></td>
                            <td>Apr 7, 2025</td>
                            <td>
                                <button class="action-btn edit-btn">Edit</button>
                                <button class="action-btn delete-btn">Suspend</button>
                            </td>
                        </tr>
                        <tr>
                            <td>U10049</td>
                            <td>David Wilson</td>
                            <td>david.w@example.com</td>
                            <td>Seller</td>
                            <td><span class="status status-inactive">Suspended</span></td>
                            <td>Apr 18, 2025</td>
                            <td>
                                <button class="action-btn edit-btn">Edit</button>
                                <button class="action-btn">Reactivate</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <div class="pagination">
                    <a href="#" class="page-link">&laquo;</a>
                    <a href="#" class="page-link active">1</a>
                    <a href="#" class="page-link">2</a>
                    <a href="#" class="page-link">3</a>
                    <a href="#" class="page-link">4</a>
                    <a href="#" class="page-link">5</a>
                    <a href="#" class="page-link">&raquo;</a>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">User Verification Queue</h2>
                </div>
                
                <table>
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Documents</th>
                            <th>Submitted</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>U10050</td>
                            <td>Laura Martinez</td>
                            <td>laura@example.com</td>
                            <td>ID, Address Proof</td>
                            <td>Today, 8:45 AM</td>
                            <td>
                                <button class="btn btn-outline">Review</button>
                            </td>
                        </tr>
                        <tr>
                            <td>U10051</td>
                            <td>Robert Clark</td>
                            <td>robert@example.com</td>
                            <td>ID, Address Proof</td>
                            <td>Yesterday, 3:20 PM</td>
                            <td>
                                <button class="btn btn-outline">Review</button>
                            </td>
                        </tr>
                        <tr>
                            <td>U10052</td>
                            <td>Sophia Kim</td>
                            <td>sophia@example.com</td>
                            <td>ID, Address Proof</td>
                            <td>Yesterday, 11:05 AM</td>