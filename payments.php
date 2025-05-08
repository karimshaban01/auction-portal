<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summit Auctions - Bidding & Transactions</title>
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
        
        .user-menu {
            display: flex;
            align-items: center;
        }
        
        .user-icon {
            width: 40px;
            height: 40px;
            background-color: var(--medium-green);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            color: white;
            font-weight: bold;
        }
        
        .user-name {
            margin-right: 15px;
        }
        
        .tabs-container {
            max-width: 1200px;
            margin: 30px auto;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }
        
        .tabs {
            display: flex;
            background-color: var(--primary-blue);
        }
        
        .tab {
            padding: 15px 25px;
            color: white;
            cursor: pointer;
            transition: all 0.3s;
            border-bottom: 3px solid transparent;
        }
        
        .tab.active {
            background-color: rgba(255, 255, 255, 0.1);
            border-bottom: 3px solid var(--medium-green);
        }
        
        .tab:hover {
            background-color: rgba(255, 255, 255, 0.05);
        }
        
        .tab-content {
            display: none;
            padding: 30px;
        }
        
        .tab-content.active {
            display: block;
        }
        
        .section-title {
            color: var(--primary-blue);
            font-size: 1.8rem;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--sky-blue);
        }
        
        .bid-form {
            background-color: var(--snow-white);
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 30px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--primary-blue);
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1rem;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--light-blue);
            box-shadow: 0 0 0 2px rgba(106, 153, 192, 0.2);
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
        }
        
        .btn:hover {
            background-color: var(--dark-green);
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        
        .btn-secondary {
            background-color: var(--light-blue);
        }
        
        .btn-secondary:hover {
            background-color: var(--primary-blue);
        }
        
        .form-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }
        
        .bid-summary {
            background-color: rgba(163, 197, 231, 0.2);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
        }
        
        .bid-summary h3 {
            color: var(--primary-blue);
            margin-bottom: 15px;
        }
        
        .bid-detail {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px dashed #ddd;
        }
        
        .bid-detail:last-child {
            border-bottom: none;
            font-weight: bold;
        }
        
        .payment-methods {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 30px;
        }
        
        .payment-method {
            flex: 1;
            min-width: 120px;
            padding: 15px;
            border: 2px solid #ddd;
            border-radius: 8px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .payment-method:hover {
            border-color: var(--light-blue);
        }
        
        .payment-method.selected {
            border-color: var(--medium-green);
            background-color: rgba(76, 105, 59, 0.1);
        }
        
        .payment-method-icon {
            font-size: 2rem;
            margin-bottom: 10px;
        }
        
        .history-item {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .history-item-details h4 {
            color: var(--primary-blue);
            margin-bottom: 5px;
        }
        
        .history-item-meta {
            color: #666;
            font-size: 0.9rem;
        }
        
        .history-item-price {
            font-weight: bold;
            font-size: 1.2rem;
            color: var(--medium-green);
        }
        
        .history-item-status {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        .status-won {
            background-color: rgba(76, 105, 59, 0.2);
            color: var(--dark-green);
        }
        
        .status-outbid {
            background-color: rgba(220, 53, 69, 0.2);
            color: #dc3545;
        }
        
        .status-pending {
            background-color: rgba(255, 193, 7, 0.2);
            color: #d39e00;
        }
        
        .watchlist-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }
        
        .watchlist-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
            transition: all 0.3s;
        }
        
        .watchlist-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }
        
        .watchlist-img {
            height: 180px;
            background-size: cover;
            background-position: center;
            position: relative;
        }
        
        .watchlist-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: var(--primary-blue);
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
        }
        
        .watchlist-content {
            padding: 20px;
        }
        
        .watchlist-content h3 {
            color: var(--primary-blue);
            margin-bottom: 10px;
            font-size: 1.2rem;
        }
        
        .watchlist-meta {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            color: #666;
            font-size: 0.9rem;
        }
        
        .watchlist-price {
            font-weight: bold;
            color: var(--medium-green);
            font-size: 1.3rem;
            margin-bottom: 15px;
        }
        
        .watchlist-actions {
            display: flex;
            justify-content: space-between;
        }
        
        .watchlist-actions .btn {
            padding: 8px 15px;
            font-size: 0.9rem;
        }
        
        .time-left {
            background-color: var(--light-blue);
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            display: inline-block;
        }
        
        .alert {
            padding: 15px 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            color: white;
        }
        
        .alert-success {
            background-color: var(--medium-green);
        }
        
        .alert-info {
            background-color: var(--light-blue);
        }
        
        .alert-warning {
            background-color: #ffc107;
        }
        
        @media (max-width: 768px) {
            .payment-methods {
                flex-direction: column;
            }
            
            .watchlist-grid {
                grid-template-columns: 1fr;
            }
            
            .form-footer {
                flex-direction: column;
                gap: 15px;
            }
            
            .form-footer .btn {
                width: 100%;
                text-align: center;
            }
            
            .history-item {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .history-item-price {
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>
    <header>
        <a href="#" class="logo">Summit Auctions</a>
        <div class="user-menu">
            <div class="user-icon">JD</div>
            <span class="user-name">John Doe</span>
            <a href="#" class="btn btn-secondary">Logout</a>
        </div>
    </header>

    <div class="tabs-container">
        <div class="tabs">
            <div class="tab active" data-tab="bid-confirmation">Bid Confirmation</div>
            <div class="tab" data-tab="payment-processing">Payment Processing</div>
            <div class="tab" data-tab="auction-history">Auction History</div>
            <div class="tab" data-tab="watchlist">Watchlist</div>
        </div>
        
        <!-- Bid Confirmation Tab -->
        <div class="tab-content active" id="bid-confirmation">
            <h2 class="section-title">Confirm Your Bid</h2>
            
            <div class="alert alert-info">
                You are about to place a bid on <strong>Vintage Rolex Submariner</strong>. Please review your bid details below.
            </div>
            
            <div class="bid-form">
                <div class="form-group">
                    <label for="bid-amount">Your Bid Amount ($)</label>
                    <input type="number" id="bid-amount" class="form-control" value="3750" min="3750" step="50">
                    <small>Minimum bid: $3,750</small>
                </div>
                
                <div class="form-group">
                    <label for="max-bid">Maximum Bid (Optional)</label>
                    <input type="number" id="max-bid" class="form-control" placeholder="Enter your maximum bid">
                    <small>We'll automatically bid up to this amount on your behalf</small>
                </div>
                
                <div class="bid-summary">
                    <h3>Bid Summary</h3>
                    <div class="bid-detail">
                        <span>Current Highest Bid:</span>
                        <span>$3,700</span>
                    </div>
                    <div class="bid-detail">
                        <span>Your Bid:</span>
                        <span>$3,750</span>
                    </div>
                    <div class="bid-detail">
                        <span>Bid Increment:</span>
                        <span>$50</span>
                    </div>
                    <div class="bid-detail">
                        <span>Time Remaining:</span>
                        <span>6h 23m</span>
                    </div>
                </div>
                
                <div class="form-footer">
                    <button type="button" class="btn btn-secondary">Cancel</button>
                    <button type="submit" class="btn">Confirm Bid</button>
                </div>
            </div>
        </div>
        
        <!-- Payment Processing Tab -->
        <div class="tab-content" id="payment-processing">
            <h2 class="section-title">Complete Your Payment</h2>
            
            <div class="alert alert-success">
                Congratulations! You've won the bid for <strong>Antique Oak Desk</strong>. Please complete your payment below.
            </div>
            
            <div class="bid-summary">
                <h3>Purchase Summary</h3>
                <div class="bid-detail">
                    <span>Item Name:</span>
                    <span>Antique Oak Desk</span>
                </div>
                <div class="bid-detail">
                    <span>Winning Bid:</span>
                    <span>$2,250</span>
                </div>
                <div class="bid-detail">
                    <span>Buyer's Premium (10%):</span>
                    <span>$225</span>
                </div>
                <div class="bid-detail">
                    <span>Shipping:</span>
                    <span>$120</span>
                </div>
                <div class="bid-detail">
                    <span>Total:</span>
                    <span>$2,595</span>
                </div>
            </div>
            
            <h3 style="margin-bottom: 15px; color: var(--primary-blue);">Select Payment Method</h3>
            
            <div class="payment-methods">
                <div class="payment-method selected">
                    <div class="payment-method-icon">💳</div>
                    <div>Credit Card</div>
                </div>
                <div class="payment-method">
                    <div class="payment-method-icon">🏦</div>
                    <div>Bank Transfer</div>
                </div>
                <div class="payment-method">
                    <div class="payment-method-icon">📱</div>
                    <div>Digital Wallet</div>
                </div>
                <div class="payment-method">
                    <div class="payment-method-icon">💼</div>
                    <div>Escrow</div>
                </div>
            </div>
            
            <div class="bid-form">
                <div class="form-group">
                    <label for="card-number">Card Number</label>
                    <input type="text" id="card-number" class="form-control" placeholder="1234 5678 9012 3456">
                </div>
                
                <div style="display: flex; gap: 20px;">
                    <div class="form-group" style="flex: 1;">
                        <label for="expiry-date">Expiry Date</label>
                        <input type="text" id="expiry-date" class="form-control" placeholder="MM/YY">
                    </div>
                    <div class="form-group" style="flex: 1;">
                        <label for="cvv">CVV</label>
                        <input type="text" id="cvv" class="form-control" placeholder="123">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="name-on-card">Name on Card</label>
                    <input type="text" id="name-on-card" class="form-control" placeholder="John Doe">
                </div>
                
                <div class="form-footer">
                    <button type="button" class="btn btn-secondary">Back</button>
                    <button type="submit" class="btn">Complete Payment</button>
                </div>
            </div>
        </div>
        
        <!-- Auction History Tab -->
        <div class="tab-content" id="auction-history">
            <h2 class="section-title">Your Auction History</h2>
            
            <div class="history-item">
                <div class="history-item-details">
                    <h4>Vintage Camera Collection</h4>
                    <div class="history-item-meta">Bid placed on: May 2, 2025</div>
                </div>
                <div class="history-item-price">$1,250</div>
                <div class="history-item-status status-won">Won</div>
            </div>
            
            <div class="history-item">
                <div class="history-item-details">
                    <h4>Mid-Century Modern Chair</h4>
                    <div class="history-item-meta">Bid placed on: April 28, 2025</div>
                </div>
                <div class="history-item-price">$650</div>
                <div class="history-item-status status-outbid">Outbid</div>
            </div>
            
            <div class="history-item">
                <div class="history-item-details">
                    <h4>Antique Gold Pocket Watch</h4>
                    <div class="history-item-meta">Bid placed on: April 25, 2025</div>
                </div>
                <div class="history-item-price">$2,100</div>
                <div class="history-item-status status-pending">In Progress</div>
            </div>
            
            <div class="history-item">
                <div class="history-item-details">
                    <h4>Vintage Vinyl Records Collection</h4>
                    <div class="history-item-meta">Bid placed on: April 20, 2025</div>
                </div>
                <div class="history-item-price">$350</div>
                <div class="history-item-status status-won">Won</div>
            </div>
            
            <div class="history-item">
                <div class="history-item-details">
                    <h4>Original Art Painting</h4>
                    <div class="history-item-meta">Bid placed on: April 15, 2025</div>
                </div>
                <div class="history-item-price">$1,800</div>
                <div class="history-item-status status-outbid">Outbid</div>
            </div>
        </div>
        
        <!-- Watchlist Tab -->
        <div class="tab-content" id="watchlist">
            <h2 class="section-title">Your Watchlist</h2>
            
            <div class="watchlist-grid">
                <div class="watchlist-card">
                    <div class="watchlist-img" style="background-image: url('/api/placeholder/300/200');">
                        <span class="watchlist-badge">Ending Soon</span>
                    </div>
                    <div class="watchlist-content">
                        <h3>Rare Coin Collection</h3>
                        <div class="watchlist-meta">
                            <span>Collectibles</span>
                            <span>15 bids</span>
                        </div>
                        <div class="watchlist-price">$1,850</div>
                        <div class="watchlist-actions">
                            <a href="#" class="btn">Place Bid</a>
                            <span class="time-left">2h 15m left</span>
                        </div>
                    </div>
                </div>
                
                <div class="watchlist-card">
                    <div class="watchlist-img" style="background-image: url('/api/placeholder/300/200');">
                        <span class="watchlist-badge">Hot Item</span>
                    </div>
                    <div class="watchlist-content">
                        <h3>Luxury Wristwatch</h3>
                        <div class="watchlist-meta">
                            <span>Luxury Items</span>
                            <span>23 bids</span>
                        </div>
                        <div class="watchlist-price">$3,200</div>
                        <div class="watchlist-actions">
                            <a href="#" class="btn">Place Bid</a>
                            <span class="time-left">1d 6h left</span>
                        </div>
                    </div>
                </div>
                
                <div class="watchlist-card">
                    <div class="watchlist-img" style="background-image: url('/api/placeholder/300/200');">
                    </div>
                    <div class="watchlist-content">
                        <h3>Antique Bookcase</h3>
                        <div class="watchlist-meta">
                            <span>Furniture</span>
                            <span>8 bids</span>
                        </div>
                        <div class="watchlist-price">$950</div>
                        <div class="watchlist-actions">
                            <a href="#" class="btn">Place Bid</a>
                            <span class="time-left">3d 12h left</span>
                        </div>
                    </div>
                </div>
                
                <div class="watchlist-card">
                    <div class="watchlist-img" style="background-image: url('/api/placeholder/300/200');">
                        <span class="watchlist-badge">New</span>
                    </div>
                    <div class="watchlist-content">
                        <h3>Vintage Camera</h3>
                        <div class="watchlist-meta">
                            <span>Photography</span>
                            <span>4 bids</span>
                        </div>
                        <div class="watchlist-price">$570</div>
                        <div class="watchlist-actions">
                            <a href="#" class="btn">Place Bid</a>
                            <span class="time-left">5d 8h left</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Tab switching functionality
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('.tab');
            const tabContents = document.querySelectorAll('.tab-content');
            
            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    // Remove active class from all tabs and contents
                    tabs.forEach(t => t.classList.remove('active'));
                    tabContents.forEach(c => c.classList.remove('active'));
                    
                    // Add active class to clicked tab
                    this.classList.add('active');
                    
                    // Show corresponding content
                    const tabContentId = this.getAttribute('data-tab');
                    document.getElementById(tabContentId).classList.add('active');
                });
            });
            
            // Payment method selection
            const paymentMethods = document.querySelectorAll('.payment-method');
            paymentMethods.forEach(method => {
                method.addEventListener('click', function() {
                    paymentMethods.forEach(m => m.classList.remove('selected'));
                    this.classList.add('selected');
                });
            });
        });
    </script>
</body>
</html>