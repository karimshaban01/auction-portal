<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summit Auctions - User Account Portal</title>
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
        }
        
        header {
            background: linear-gradient(135deg, var(--primary-blue), var(--light-blue));
            color: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 20px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }
        
        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }
        
        .card {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }
        
        .tabs {
            display: flex;
            background-color: var(--primary-blue);
        }
        
        .tab-btn {
            background: none;
            border: none;
            padding: 15px 25px;
            color: rgba(255, 255, 255, 0.7);
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            flex: 1;
            text-align: center;
        }
        
        .tab-btn:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
        }
        
        .tab-btn.active {
            background-color: white;
            color: var(--primary-blue);
            font-weight: 600;
        }
        
        .tab-content {
            padding: 40px;
            display: none;
        }
        
        .tab-content.active {
            display: block;
        }
        
        h2 {
            color: var(--primary-blue);
            margin-bottom: 25px;
            font-size: 1.8rem;
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #555;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"],
        select,
        textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1rem;
            transition: all 0.3s;
        }
        
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus,
        input[type="tel"]:focus,
        select:focus,
        textarea:focus {
            border-color: var(--light-blue);
            box-shadow: 0 0 0 2px rgba(106, 153, 192, 0.2);
            outline: none;
        }
        
        .btn {
            display: inline-block;
            background-color: var(--medium-green);
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-size: 1rem;
        }
        
        .btn:hover {
            background-color: var(--dark-green);
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        
        .btn-outline {
            background-color: transparent;
            border: 2px solid var(--medium-green);
            color: var(--medium-green);
        }
        
        .btn-outline:hover {
            background-color: var(--medium-green);
            color: white;
        }
        
        .form-footer {
            margin-top: 30px;
            text-align: center;
        }
        
        .form-footer p {
            margin-bottom: 15px;
            color: #666;
        }
        
        .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
        }
        
        .form-col {
            flex: 1;
        }
        
        .checkbox-group {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        
        .checkbox-group input[type="checkbox"] {
            margin-right: 10px;
        }
        
        .help-text {
            color: #777;
            font-size: 0.9rem;
            margin-top: 5px;
        }
        
        .error-text {
            color: #e74c3c;
            font-size: 0.9rem;
            margin-top: 5px;
        }
        
        .success-text {
            color: var(--medium-green);
            font-size: 0.9rem;
            margin-top: 5px;
        }
        
        .verification-steps {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
            position: relative;
        }
        
        .verification-steps::before {
            content: '';
            position: absolute;
            top: 25px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #ddd;
            z-index: 1;
        }
        
        .step {
            text-align: center;
            position: relative;
            z-index: 2;
        }
        
        .step-number {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            background-color: #ddd;
            color: #888;
            border-radius: 50%;
            font-size: 1.2rem;
            font-weight: bold;
            margin: 0 auto 10px;
        }
        
        .step.active .step-number {
            background-color: var(--primary-blue);
            color: white;
        }
        
        .step.completed .step-number {
            background-color: var(--medium-green);
            color: white;
        }
        
        .dashboard-summary {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }
        
        .summary-card {
            background-color: var(--snow-white);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }
        
        .summary-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: var(--primary-blue);
            margin-bottom: 10px;
        }
        
        .summary-label {
            color: #666;
            font-size: 1rem;
        }
        
        .recent-activity {
            margin-top: 40px;
        }
        
        .activity-list {
            list-style: none;
        }
        
        .activity-item {
            padding: 15px 0;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: center;
        }
        
        .activity-icon {
            width: 40px;
            height: 40px;
            background-color: var(--light-blue);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-size: 1.2rem;
        }
        
        .activity-details {
            flex: 1;
        }
        
        .activity-title {
            font-weight: 500;
            margin-bottom: 3px;
        }
        
        .activity-time {
            font-size: 0.85rem;
            color: #888;
        }
        
        .activity-status {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }
        
        .status-success {
            background-color: rgba(76, 175, 80, 0.1);
            color: #4caf50;
        }
        
        .status-pending {
            background-color: rgba(255, 193, 7, 0.1);
            color: #ffc107;
        }
        
        .tab-section {
            margin-bottom: 40px;
        }
        
        .profile-header {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }
        
        .profile-avatar {
            width: 100px;
            height: 100px;
            background-color: var(--light-blue);
            border-radius: 50%;
            margin-right: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2.5rem;
            font-weight: bold;
        }
        
        .profile-info h3 {
            font-size: 1.5rem;
            margin-bottom: 5px;
            color: var(--primary-blue);
        }
        
        .profile-tabs {
            display: flex;
            border-bottom: 1px solid #ddd;
            margin-bottom: 30px;
        }
        
        .profile-tab {
            padding: 12px 20px;
            cursor: pointer;
            color: #666;
            font-weight: 500;
            border-bottom: 3px solid transparent;
            transition: all 0.3s;
        }
        
        .profile-tab:hover {
            color: var(--primary-blue);
        }
        
        .profile-tab.active {
            color: var(--primary-blue);
            border-bottom-color: var(--primary-blue);
        }
        
        .upload-area {
            border: 2px dashed #ddd;
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            margin-bottom: 20px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .upload-area:hover {
            border-color: var(--light-blue);
            background-color: rgba(163, 197, 231, 0.05);
        }
        
        .upload-icon {
            font-size: 2.5rem;
            color: var(--light-blue);
            margin-bottom: 15px;
        }
        
        .or-divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 20px 0;
            color: #888;
        }
        
        .or-divider::before,
        .or-divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #ddd;
        }
        
        .or-divider::before {
            margin-right: 10px;
        }
        
        .or-divider::after {
            margin-left: 10px;
        }
        
        .social-login {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 30px;
        }
        
        .social-btn {
            padding: 12px 20px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            cursor: pointer;
            transition: all 0.3s;
            font-weight: 500;
            width: 180px;
        }
        
        .social-btn.google {
            background-color: #fff;
            color: #444;
            border: 1px solid #ddd;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .social-btn.facebook {
            background-color: #3b5998;
            color: white;
            box-shadow: 0 2px 4px rgba(59, 89, 152, 0.3);
        }
        
        .social-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }
        
        @media (max-width: 768px) {
            .tabs {
                flex-direction: column;
            }
            
            .tab-btn {
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }
            
            .form-row {
                flex-direction: column;
                gap: 0;
            }
            
            .tab-content {
                padding: 20px;
            }
            
            .verification-steps {
                flex-direction: column;
                gap: 20px;
            }
            
            .verification-steps::before {
                display: none;
            }
            
            .profile-header {
                flex-direction: column;
                text-align: center;
            }
            
            .profile-avatar {
                margin-right: 0;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <header>
        <a href="#" class="logo">Summit Auctions</a>
        <nav>
            <a href="#" class="btn btn-outline">Back to Home</a>
        </nav>
    </header>

    <div class="container">
        <div class="card">
            <div class="tabs">
                <button class="tab-btn active" data-tab="register">Register</button>
                <button class="tab-btn" data-tab="login">Login</button>
                <button class="tab-btn" data-tab="dashboard">Dashboard</button>
                <button class="tab-btn" data-tab="profile">Profile</button>
            </div>
            
            <!-- Registration Tab -->
            <div class="tab-content active" id="register">
                <h2>Create Your Account</h2>
                
                <div class="verification-steps">
                    <div class="step active">
                        <div class="step-number">1</div>
                        <div class="step-label">Account Details</div>
                    </div>
                    <div class="step">
                        <div class="step-number">2</div>
                        <div class="step-label">Verification</div>
                    </div>
                    <div class="step">
                        <div class="step-number">3</div>
                        <div class="step-label">Preferences</div>
                    </div>
                    <div class="step">
                        <div class="step-number">4</div>
                        <div class="step-label">Confirmation</div>
                    </div>
                </div>
                
                <form>
                    <div class="form-row">
                        <div class="form-col">
                            <div class="form-group">
                                <label for="first-name">First Name *</label>
                                <input type="text" id="first-name" required>
                            </div>
                        </div>
                        <div class="form-col">
                            <div class="form-group">
                                <label for="last-name">Last Name *</label>
                                <input type="text" id="last-name" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" required>
                        <div class="help-text">We'll send a verification link to this email</div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-col">
                            <div class="form-group">
                                <label for="password">Password *</label>
                                <input type="password" id="password" required>
                            </div>
                        </div>
                        <div class="form-col">
                            <div class="form-group">
                                <label for="confirm-password">Confirm Password *</label>
                                <input type="password" id="confirm-password" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone">
                        <div class="help-text">For auction notifications and account recovery</div>
                    </div>
                    
                    <div class="form-group">
                        <div class="checkbox-group">
                            <input type="checkbox" id="terms" required>
                            <label for="terms">I agree to the Terms of Service and Privacy Policy</label>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="checkbox-group">
                            <input type="checkbox" id="newsletter">
                            <label for="newsletter">Subscribe to our newsletter for auction updates</label>
                        </div>
                    </div>
                    
                    <div class="form-footer">
                        <button type="submit" class="btn">Continue to Verification</button>
                        <p>Already have an account? <a href="#" class="tab-link" data-tab="login">Sign In</a></p>
                    </div>
                </form>
            </div>
            
            <!-- Login Tab -->
            <div class="tab-content" id="login">
                <h2>Sign In to Your Account</h2>
                
                <div class="social-login">
                    <div class="social-btn google">
                        <span>G</span>
                        <span>Sign in with Google</span>
                    </div>
                    <div class="social-btn facebook">
                        <span>f</span>
                        <span>Sign in with Facebook</span>
                    </div>
                </div>
                
                <div class="or-divider">OR</div>
                
                <form>
                    <div class="form-group">
                        <label for="login-email">Email Address</label>
                        <input type="email" id="login-email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="login-password">Password</label>
                        <input type="password" id="login-password" required>
                        <div class="help-text">
                            <a href="#">Forgot your password?</a>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="checkbox-group">
                            <input type="checkbox" id="remember-me">
                            <label for="remember-me">Remember me on this device</label>
                        </div>
                    </div>
                    
                    <div class="form-footer">
                        <button type="submit" class="btn">Sign In</button>
                        <p>Don't have an account? <a href="#" class="tab-link" data-tab="register">Register Now</a></p>
                    </div>
                </form>
            </div>
            
            <!-- Dashboard Tab -->
            <div class="tab-content" id="dashboard">
                <h2>Welcome back, Alex!</h2>
                
                <div class="dashboard-summary">
                    <div class="summary-card">
                        <div class="summary-number">12</div>
                        <div class="summary-label">Active Bids</div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-number">5</div>
                        <div class="summary-label">Won Auctions</div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-number">3</div>
                        <div class="summary-label">Watchlist Items</div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-number">$2,450</div>
                        <div class="summary-label">Total Spent</div>
                    </div>
                </div>
                
                <div class="tab-section">
                    <h3>Your Active Bids</h3>
                    <ul class="activity-list">
                        <li class="activity-item">
                            <div class="activity-icon">🔨</div>
                            <div class="activity-details">
                                <div class="activity-title">Vintage Watch Collection</div>
                                <div class="activity-time">Current bid: $2,450 - Ends in 3h 45m</div>
                            </div>
                            <div class="activity-status status-success">Leading</div>
                        </li>
                        <li class="activity-item">
                            <div class="activity-icon">🖼️</div>
                            <div class="activity-details">
                                <div class="activity-title">Modern Art Painting</div>
                                <div class="activity-time">Your bid: $4,850 - Ends in 1d 6h</div>
                            </div>
                            <div class="activity-status status-pending">Outbid</div>
                        </li>
                        <li class="activity-item">
                            <div class="activity-icon">🎮</div>
                            <div class="activity-details">
                                <div class="activity-title">Gaming Console Bundle</div>
                                <div class="activity-time">Current bid: $790 - Ends in 5h 20m</div>
                            </div>
                            <div class="activity-status status-success">Leading</div>
                        </li>
                    </ul>
                </div>
                
                <div class="recent-activity">
                    <h3>Recent Activity</h3>
                    <ul class="activity-list">
                        <li class="activity-item">
                            <div class="activity-icon">✅</div>
                            <div class="activity-details">
                                <div class="activity-title">Payment Successful</div>
                                <div class="activity-time">Yesterday at 3:45 PM</div>
                            </div>
                        </li>
                        <li class="activity-item">
                            <div class="activity-icon">🔔</div>
                            <div class="activity-details">
                                <div class="activity-title">You've been outbid on "Antique Desk Lamp"</div>
                                <div class="activity-time">Yesterday at 1:15 PM</div>
                            </div>
                        </li>
                        <li class="activity-item">
                            <div class="activity-icon">🎉</div>
                            <div class="activity-details">
                                <div class="activity-title">You won the auction "Collector's Vinyl Records"</div>
                                <div class="activity-time">May 3, 2025 at 9:20 AM</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Profile Tab -->
            <div class="tab-content" id="profile">
                <div class="profile-header">
                    <div class="profile-avatar">A</div>
                    <div class="profile-info">
                        <h3>Alex Johnson</h3>
                        <p>Member since January 2025</p>
                        <div style="margin-top: 10px;">
                            <button class="btn btn-outline">Change Profile Picture</button>
                        </div>
                    </div>
                </div>
                
                <div class="profile-tabs">
                    <div class="profile-tab active">Personal Info</div>
                    <div class="profile-tab">Verification</div>
                    <div class="profile-tab">Payment Methods</div>
                    <div class="profile-tab">Notification Settings</div>
                </div>
                
                <form>
                    <div class="form-row">
                        <div class="form-col">
                            <div class="form-group">
                                <label for="profile-first-name">First Name</label>
                                <input type="text" id="profile-first-name" value="Alex">
                            </div>
                        </div>
                        <div class="form-col">
                            <div class="form-group">
                                <label for="profile-last-name">Last Name</label>
                                <input type="text" id="profile-last-name" value="Johnson">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="profile-email">Email Address</label>
                        <input type="email" id="profile-email" value="alex.johnson@example.com">
                        <div class="success-text">Email verified</div>
                    </div>
                    
                    <div class="form-group">
                        <label for="profile-phone">Phone Number</label>
                        <input type="tel" id="profile-phone" value="(555) 123-4567">
                        <div class="error-text">Phone number not verified</div>
                    </div>
                    
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" id="address" placeholder="Street Address">
                    </div>
                    
                    <div class="form-row">
                        <div class="form-col">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" id="city">
                            </div>
                        </div>
                        <div class="form-col">
                            <div class="form-group">
                                <label for="state">State/Province</label>
                                <input type="text" id="state">
                            </div>
                        </div>
                        <div class="form-col">
                            <div class="form-group">
                                <label for="zip">ZIP/Postal Code</label>
                                <input type="text" id="zip">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="country">Country</label>
                        <select id="country">
                            <option value="us">United States</option>
                            <option value="ca">Canada</option>
                            <option value="uk">United Kingdom</option>
                            <option value="au">Australia</option>
                        </select>
                    </div>
                    
                    <div class="tab-section">
                        <h3>Identity Verification</h3>
                        <p>Please upload a government-issued ID to verify your identity.</p>
                        
                        <div class="upload-area">
                            <div class="upload-icon">📄</div>
                            <h4>Upload ID Document</h4>
                            <p>Drag & drop your file here, or click to browse</p>
                            <p class="help-text">Accepted formats: JPEG, PNG, PDF (Max 5MB)</p>
                        </div>
                    </div>
                    
                    <div class="form-footer">
                        <button type="submit" class="btn">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script>
        // Tab switching functionality
        document.addEventListener('DOMContentLoaded', function() {
            const tabButtons = document.querySelectorAll('.tab-btn');
            const tabContents = document.querySelectorAll('.tab-content');
            const tabLinks = document.querySelectorAll('.tab-link');
            
            function setActiveTab(tabId) {
                // Deactivate all tabs
                tabButtons.forEach(btn => btn.classList.remove('active'));
                tabContents.forEach(content => content.classList.remove('active'));
                
                // Activate the selected tab
                document.querySelector(`.tab-btn[data-tab="${tabId}"]`).classList.add('active');
                document.getElementById(tabId).classList.add('active');
            }
            
            // Tab button click handlers
            tabButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const tabId = button.getAttribute('data-tab');
                    setActiveTab(tabId);
                });
            });
            
            // Tab link click handlers
            tabLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    const tabId = link.getAttribute('data-tab');
                    setActiveTab(tabId);
                });
            });
        });
    </script>
</body>
</html>