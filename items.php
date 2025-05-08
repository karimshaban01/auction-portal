<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summit Auctions - Premium Auction Platform</title>
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
            position: relative;
            overflow: hidden;
        }
        
        .hero {
            height: 300px;
            background-image: url('/api/placeholder/1200/300');
            background-size: cover;
            background-position: center;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            padding: 0 20px;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(42, 93, 138, 0.7), rgba(42, 66, 32, 0.7));
            z-index: 1;
        }
        
        .hero-content {
            z-index: 2;
            max-width: 800px;
        }
        
        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 5%;
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            z-index: 3;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }
        
        .nav-links {
            display: flex;
            list-style: none;
        }
        
        .nav-links li {
            margin-left: 30px;
        }
        
        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }
        
        .nav-links a:hover {
            color: var(--sand);
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
        
        .btn-outline {
            background-color: transparent;
            border: 2px solid white;
        }
        
        .btn-outline:hover {
            background-color: white;
            color: var(--primary-blue);
        }
        
        /* Tab System Styles */
        .tab-container {
            width: 90%;
            max-width: 1200px;
            margin: 40px auto;
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
            cursor: pointer;
            color: white;
            font-weight: 600;
            flex: 1;
            text-align: center;
            transition: all 0.3s;
            border-bottom: 3px solid transparent;
        }
        
        .tab:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
        
        .tab.active {
            background-color: rgba(255, 255, 255, 0.2);
            border-bottom: 3px solid var(--sand);
        }
        
        .tab-content {
            display: none;
            padding: 30px;
        }
        
        .tab-content.active {
            display: block;
        }
        
        /* Browse Auctions Tab */
        .filters {
            background-color: var(--snow-white);
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
        }
        
        .filter-row {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 15px;
        }
        
        .filter-group {
            flex: 1;
            min-width: 200px;
        }
        
        .filter-group label {
            display: block;
            margin-bottom: 8px;
            color: var(--primary-blue);
            font-weight: 600;
        }
        
        .filter-group select,
        .filter-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }
        
        .search-input {
            position: relative;
            flex: 2;
            min-width: 300px;
        }
        
        .search-input input {
            width: 100%;
            padding: 12px 20px;
            padding-right: 50px;
            border: 1px solid #ddd;
            border-radius: 30px;
            font-size: 1rem;
        }
        
        .search-input button {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--primary-blue);
            font-size: 1.2rem;
            cursor: pointer;
        }
        
        .filter-buttons {
            display: flex;
            justify-content: flex-end;
            gap: 15px;
        }
        
        .btn-sm {
            padding: 8px 20px;
            font-size: 0.9rem;
        }
        
        .btn-secondary {
            background-color: var(--light-blue);
        }
        
        .btn-secondary:hover {
            background-color: var(--primary-blue);
        }
        
        /* Auction Grid */
        .auction-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
        }
        
        .auction-card {
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s;
            border: 1px solid #eee;
        }
        
        .auction-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }
        
        .auction-img {
            height: 200px;
            background-size: cover;
            background-position: center;
        }
        
        .auction-content {
            padding: 20px;
        }
        
        .auction-content h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: var(--primary-blue);
        }
        
        .auction-meta {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            color: #666;
            font-size: 0.9rem;
        }
        
        .price {
            color: var(--medium-green);
            font-weight: bold;
            font-size: 1.4rem;
            margin-bottom: 15px;
        }
        
        .auction-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .time-left {
            background-color: var(--light-blue);
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.9rem;
        }
        
        /* Category Tab */
        .category-selector {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 30px;
        }
        
        .category-card {
            flex: 1;
            min-width: 150px;
            text-align: center;
            background-color: var(--snow-white);
            border-radius: 10px;
            padding: 15px;
            cursor: pointer;
            transition: all 0.3s;
            border: 2px solid transparent;
        }
        
        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .category-card.active {
            border-color: var(--medium-green);
            background-color: rgba(139, 166, 118, 0.1);
        }
        
        .category-icon {
            font-size: 2rem;
            margin-bottom: 10px;
            color: var(--primary-blue);
        }
        
        .category-title {
            font-weight: 600;
            color: var(--primary-blue);
        }
        
        /* Auction Detail Tab */
        .auction-detail {
            display: flex;
            gap: 30px;
        }
        
        .auction-images {
            flex: 1;
            min-width: 300px;
        }
        
        .main-image {
            height: 400px;
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            margin-bottom: 15px;
        }
        
        .image-thumbnails {
            display: flex;
            gap: 10px;
        }
        
        .thumbnail {
            width: 80px;
            height: 80px;
            background-size: cover;
            background-position: center;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s;
            border: 2px solid transparent;
        }
        
        .thumbnail:hover {
            border-color: var(--light-blue);
        }
        
        .thumbnail.active {
            border-color: var(--primary-blue);
        }
        
        .auction-info {
            flex: 1;
            min-width: 300px;
        }
        
        .auction-title {
            font-size: 2rem;
            color: var(--primary-blue);
            margin-bottom: 15px;
        }
        
        .auction-subtitle {
            color: #666;
            margin-bottom: 20px;
        }
        
        .info-row {
            display: flex;
            margin-bottom: 10px;
        }
        
        .info-label {
            width: 120px;
            font-weight: 600;
            color: var(--primary-blue);
        }
        
        .bid-section {
            background-color: var(--snow-white);
            padding: 20px;
            border-radius: 10px;
            margin: 30px 0;
        }
        
        .current-bid {
            font-size: 2rem;
            color: var(--medium-green);
            font-weight: bold;
            margin-bottom: 15px;
        }
        
        .bid-form {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
        }
        
        .bid-form input {
            flex: 1;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }
        
        .bid-info {
            display: flex;
            justify-content: space-between;
            color: #666;
            font-size: 0.9rem;
        }
        
        .auction-timer {
            background-color: var(--primary-blue);
            color: white;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 30px;
        }
        
        .timer-value {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .auction-description {
            margin-top: 30px;
        }
        
        .auction-description h3 {
            color: var(--primary-blue);
            margin-bottom: 15px;
        }
        
        .bid-history {
            margin-top: 40px;
        }
        
        .bid-history h3 {
            color: var(--primary-blue);
            margin-bottom: 15px;
        }
        
        .bid-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .bid-table th, .bid-table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        .bid-table th {
            background-color: var(--snow-white);
            color: var(--primary-blue);
            font-weight: 600;
        }
        
        .bid-table tr:hover {
            background-color: #f9f9f9;
        }
        
        /* Create Listing Tab */
        .form-section {
            margin-bottom: 30px;
        }
        
        .form-section h3 {
            color: var(--primary-blue);
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 600;
        }
        
        .form-group input, 
        .form-group select, 
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }
        
        .form-group textarea {
            min-height: 150px;
            resize: vertical;
        }
        
        .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }
        
        .form-col {
            flex: 1;
        }
        
        .upload-area {
            border: 2px dashed #ddd;
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            color: #888;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .upload-area:hover {
            border-color: var(--light-blue);
            background-color: #f9f9f9;
        }
        
        .upload-icon {
            font-size: 2rem;
            margin-bottom: 15px;
            color: var(--light-blue);
        }
        
        .checkbox-group {
            margin-top: 10px;
        }
        
        .checkbox-group label {
            display: flex;
            align-items: center;
            font-weight: normal;
            cursor: pointer;
        }
        
        .checkbox-group input {
            width: auto;
            margin-right: 10px;
        }
        
        footer {
            background-color: var(--primary-blue);
            color: white;
            padding: 60px 5% 30px;
            margin-top: 60px;
        }
        
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .footer-col h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-col h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: var(--light-green);
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #ccc;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .footer-links a:hover {
            color: white;
            padding-left: 5px;
        }
        
        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #aaa;
            font-size: 0.9rem;
        }
        
        /* Responsive styles */
        @media (max-width: 768px) {
            .tab {
                padding: 12px 15px;
                font-size: 0.9rem;
            }
            
            .auction-detail {
                flex-direction: column;
            }
            
            .bid-form {
                flex-direction: column;
            }
            
            .form-row {
                flex-direction: column;
                gap: 0;
            }
            
            nav {
                flex-direction: column;
            }
            
            .nav-links {
                margin-top: 20px;
                width: 100%;
                justify-content: space-around;
            }
            
            .nav-links li {
                margin-left: 0;
            }
            
            .filter-row {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="#" class="logo">Summit Auctions</a>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Auctions</a></li>
                <li><a href="#">How It Works</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#" class="btn btn-outline">Sign In</a></li>
            </ul>
        </nav>
        
        <div class="hero">
            <div class="hero-content">
                <h1>Discover Exclusive Auctions</h1>
                <p>Browse, bid, and list items on our premium auction platform.</p>
            </div>
        </div>
    </header>

    <div class="tab-container">
        <div class="tabs">
            <div class="tab active" data-tab="browse">Browse All Auctions</div>
            <div class="tab" data-tab="categories">Category Pages</div>
            <div class="tab" data-tab="detail">Auction Detail</div>
            <div class="tab" data-tab="create">Create Listing</div>
        </div>
        
        <!-- Browse All Auctions Tab -->
        <div class="tab-content active" id="browse">
            <div class="filters">
                <div class="filter-row">
                    <div class="search-input">
                        <input type="text" placeholder="Search auctions...">
                        <button>🔍</button>
                    </div>
                </div>
                
                <div class="filter-row">
                    <div class="filter-group">
                        <label>Category</label>
                        <select>
                            <option value="">All Categories</option>
                            <option value="art">Art & Collectibles</option>
                            <option value="electronics">Electronics</option>
                            <option value="jewelry">Jewelry & Watches</option>
                            <option value="home">Home & Garden</option>
                            <option value="vehicles">Vehicles</option>
                        </select>
                    </div>
                    
                    <div class="filter-group">
                        <label>Price Range</label>
                        <select>
                            <option value="">Any Price</option>
                            <option value="0-100">$0 - $100</option>
                            <option value="100-500">$100 - $500</option>
                            <option value="500-1000">$500 - $1,000</option>
                            <option value="1000-5000">$1,000 - $5,000</option>
                            <option value="5000+">$5,000+</option>
                        </select>
                    </div>
                    
                    <div class="filter-group">
                        <label>Time Left</label>
                        <select>
                            <option value="">Any Time</option>
                            <option value="ending-soon">Ending Soon (< 24h)</option>
                            <option value="1-day">1 Day</option>
                            <option value="3-days">3 Days</option>
                            <option value="1-week">1 Week</option>
                        </select>
                    </div>
                    
                    <div class="filter-group">
                        <label>Sort By</label>
                        <select>
                            <option value="ending-soon">Ending Soon</option>
                            <option value="newly-listed">Newly Listed</option>
                            <option value="price-low">Price: Low to High</option>
                            <option value="price-high">Price: High to Low</option>
                            <option value="bids">Most Bids</option>
                        </select>
                    </div>
                </div>
                
                <div class="filter-buttons">
                    <button class="btn btn-sm btn-secondary">Clear All</button>
                    <button class="btn btn-sm">Apply Filters</button>
                </div>
            </div>
            
            <div class="auction-grid">
                <div class="auction-card">
                    <div class="auction-img" style="background-image: url('/api/placeholder/300/200');"></div>
                    <div class="auction-content">
                        <h3>Vintage Camera Collection</h3>
                        <div class="auction-meta">
                            <span>Collectibles</span>
                            <span>24 bids</span>
                        </div>
                        <div class="price">$1,250</div>
                        <div class="auction-footer">
                            <a href="#" class="btn">Bid Now</a>
                            <span class="time-left">5h 30m left</span>
                        </div>
                    </div>
                </div>
                
                <div class="auction-card">
                    <div class="auction-img" style="background-image: url('/api/placeholder/300/200');"></div>
                    <div class="auction-content">
                        <h3>Designer Handbag</h3>
                        <div class="auction-meta">
                            <span>Fashion</span>
                            <span>18 bids</span>
                        </div>
                        <div class="price">$830</div>
                        <div class="auction-footer">
                            <a href="#" class="btn">Bid Now</a>
                            <span class="time-left">2d 4h left</span>
                        </div>
                    </div>
                </div>
                
                <div class="auction-card">
                    <div class="auction-img" style="background-image: url('/api/placeholder/300/200');"></div>
                    <div class="auction-content">
                        <h3>Modern Art Painting</h3>
                        <div class="auction-meta">
                            <span>Art</span>
                            <span>9 bids</span>
                        </div>
                        <div class="price">$3,200</div>
                        <div class="auction-footer">
                            <a href="#" class="btn">Bid Now</a>
                            <span class="time-left">1d 12h left</span>
                        </div>
                    </div>
                </div>
                
                <div class="auction-card">
                    <div class="auction-img" style="background-image: url('/api/placeholder/300/200');"></div>
                    <div class="auction-content">
                        <h3>Gaming Console Bundle</h3>
                        <div class="auction-meta">
                            <span>Electronics</span>
                            <span>32 bids</span>
                        </div>
                        <div class="price">$580</div>
                        <div class="auction-footer">
                            <a href="#" class="btn">Bid Now</a>
                            <span class="time-left">8h 15m left</span>
                        </div>
                    </div>
                </div>
                
                <div class="auction-card">
                    <div class="auction-img" style="background-image: url('/api/placeholder/300/200');"></div>
                    <div class="auction-content">
                        <h3>Antique Dining Set</h3>
                        <div class="auction-meta">
                            <span>Furniture</span>
                            <span>14 bids</span>
                        </div>
                        <div class="price">$1,875</div>
                        <div class="auction-footer">
                            <a href="#" class="btn">Bid Now</a>
                            <span class="time-left">3d 6h left</span>
                        </div>
                    </div>
                </div>
                
                <div class="auction-card">
                    <div class="auction-img" style="background-image: url('/api/placeholder/300/200');"></div>
                    <div class="auction-content">
                        <h3>Luxury Watch</h3>
                        <div class="auction-meta">
                            <span>Jewelry</span>
                            <span>21 bids</span>
                        </div>
                        <div class="price">$4,350</div>
                        <div class="auction-footer">
                            <a href="#" class="btn">Bid Now</a>
                            <span class="time-left">11h 45m left</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Category Pages Tab -->
        <div class="tab-content" id="categories">
            <div class="category-selector">
                <div class="category-card active">
                    <div class="category-icon">🎨</div>
                    <div class="category-title">Art & Collectibles</div>
                </div>
                
                <div class="category-card">
                    <div class="category-icon">💍</div>
                    <div class="category-title">Jewelry & Watches</div>
                </div>
                
                <div class="category-card">
                    <div class="category-icon">📱</div>
                    <div class="category-title">Electronics</div>
                </div>
                
                <div class="category-card">
                    <div class="category-icon">🏠</div>
                    <div class="category-title">Home & Garden</div>
                </div>
                
                <div class="category-card">
                    <div class="category-icon">🚗</div>
                    <div class="category-title">Vehicles</div>
                </div>
            </div>
            
            <div class="filters">
                <div class="filter-row">
                    <div class="search-input">
                        <input type="text" placeholder="Search in Art & Collectibles...">
                        <button>🔍</button>
                    </div>
                    
                    <div class="filter-group">
                        <label>Sort By</label>
                        <select>
                            <option value="ending-soon">Ending Soon</option>
                            <option value="newly-listed">Newly Listed</option>
                            <option value="price-low">Price: Low to High</option>
                            <option value="price-high">Price: High to Low</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="auction-grid">
                <div class="auction-card">
                    <div class="auction-img" style="background-image: url('/api/placeholder/300/200');"></div>
                    <div class="auction-content">
                        <h3>Abstract Oil Painting</h3>
                        <div class="auction-meta">
                            <span>Fine Art</span>
                            <span>15 bids