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
            height: 500px;
            background-image: url('/api/placeholder/1200/500');
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
            font-size: 3rem;
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
        
        .features {
            padding: 80px 5%;
            background-color: white;
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-header h2 {
            font-size: 2.5rem;
            color: var(--primary-blue);
            margin-bottom: 20px;
        }
        
        .section-header p {
            font-size: 1.2rem;
            color: #666;
            max-width: 700px;
            margin: 0 auto;
        }
        
        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }
        
        .feature-card {
            background-color: var(--snow-white);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
        }
        
        .feature-icon {
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--light-blue);
            color: white;
            font-size: 2rem;
        }
        
        .feature-content {
            padding: 25px;
        }
        
        .feature-content h3 {
            font-size: 1.5rem;
            color: var(--primary-blue);
            margin-bottom: 15px;
        }
        
        .auctions {
            background-color: var(--snow-white);
            padding: 80px 5%;
        }
        
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
        
        .how-it-works {
            padding: 80px 5%;
            background-color: white;
        }
        
        .steps {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-top: 40px;
        }
        
        .step {
            flex: 1;
            min-width: 250px;
            text-align: center;
            padding: 20px;
            position: relative;
        }
        
        .step:not(:last-child)::after {
            content: '';
            position: absolute;
            top: 40px;
            right: 0;
            width: 70%;
            height: 2px;
            background-color: var(--light-blue);
        }
        
        .step-number {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            background-color: var(--primary-blue);
            color: white;
            border-radius: 50%;
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0 auto 20px;
        }
        
        .step h3 {
            color: var(--primary-blue);
            margin-bottom: 15px;
        }
        
        .testimonials {
            padding: 80px 5%;
            background-color: var(--snow-white);
        }
        
        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .testimonial-card {
            background-color: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .testimonial-text {
            font-style: italic;
            color: #555;
            margin-bottom: 20px;
            position: relative;
        }
        
        .testimonial-text::before {
            content: '❝';
            font-size: 2rem;
            color: var(--light-blue);
            position: absolute;
            top: -20px;
            left: -10px;
            opacity: 0.3;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 15px;
            background-color: var(--light-blue);
        }
        
        .author-info h4 {
            color: var(--primary-blue);
            margin-bottom: 5px;
        }
        
        .author-info p {
            color: #777;
            font-size: 0.9rem;
        }
        
        .cta {
            padding: 100px 5%;
            background: linear-gradient(135deg, var(--medium-green), var(--dark-green));
            color: white;
            text-align: center;
        }
        
        .cta h2 {
            font-size: 2.5rem;
            margin-bottom: 30px;
        }
        
        .cta p {
            font-size: 1.2rem;
            margin-bottom: 40px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .cta .btn {
            background-color: white;
            color: var(--primary-blue);
            font-size: 1.1rem;
            padding: 15px 40px;
        }
        
        .cta .btn:hover {
            background-color: var(--snow-white);
        }
        
        footer {
            background-color: var(--primary-blue);
            color: white;
            padding: 60px 5% 30px;
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
        
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.2rem;
            }
            
            .step:not(:last-child)::after {
                display: none;
            }
            
            .steps {
                flex-direction: column;
            }
            
            .step {
                margin-bottom: 40px;
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
                <p>A premium platform for buyers and sellers to engage in secure, transparent, and exciting auctions.</p>
                <div>
                    <a href="#" class="btn">Browse Auctions</a>
                    <a href="#" class="btn btn-outline">Register</a>
                </div>
            </div>
        </div>
    </header>

    <section class="features">
        <div class="section-header">
            <h2>Why Choose Our Platform</h2>
            <p>Our auction system is designed to provide the best experience for both buyers and sellers.</p>
        </div>
        
        <div class="feature-grid">
            <div class="feature-card">
                <div class="feature-icon">🔒</div>
                <div class="feature-content">
                    <h3>Secure Transactions</h3>
                    <p>Our platform ensures all transactions are secure with advanced encryption and verification protocols.</p>
                </div>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">⚡</div>
                <div class="feature-content">
                    <h3>Real-time Bidding</h3>
                    <p>Experience the thrill of real-time bidding with instant updates and notifications.</p>
                </div>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">✅</div>
                <div class="feature-content">
                    <h3>Verified Users</h3>
                    <p>All users undergo a verification process to ensure a trustworthy auction community.</p>
                </div>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">📱</div>
                <div class="feature-content">
                    <h3>Mobile Friendly</h3>
                    <p>Bid from anywhere using our responsive mobile design and dedicated app.</p>
                </div>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🔍</div>
                <div class="feature-content">
                    <h3>Transparent Process</h3>
                    <p>View detailed item histories, seller ratings, and bidding trends for informed decisions.</p>
                </div>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🔔</div>
                <div class="feature-content">
                    <h3>Smart Notifications</h3>
                    <p>Stay updated with customizable alerts for your favorite auctions and bid status.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="auctions">
        <div class="section-header">
            <h2>Featured Auctions</h2>
            <p>Explore our most popular active auctions and place your bids today.</p>
        </div>
        
        <div class="auction-grid">
            <div class="auction-card">
                <div class="auction-img" style="background-image: url('/api/placeholder/300/200');"></div>
                <div class="auction-content">
                    <h3>Vintage Watch Collection</h3>
                    <div class="auction-meta">
                        <span>Luxury Items</span>
                        <span>34 bids</span>
                    </div>
                    <div class="price">$2,450</div>
                    <div class="auction-footer">
                        <a href="#" class="btn">Bid Now</a>
                        <span class="time-left">3h 45m left</span>
                    </div>
                </div>
            </div>
            
            <div class="auction-card">
                <div class="auction-img" style="background-image: url('/api/placeholder/300/200');"></div>
                <div class="auction-content">
                    <h3>Modern Art Painting</h3>
                    <div class="auction-meta">
                        <span>Art & Collectibles</span>
                        <span>12 bids</span>
                    </div>
                    <div class="price">$5,100</div>
                    <div class="auction-footer">
                        <a href="#" class="btn">Bid Now</a>
                        <span class="time-left">1d 6h left</span>
                    </div>
                </div>
            </div>
            
            <div class="auction-card">
                <div class="auction-img" style="background-image: url('/api/placeholder/300/200');"></div>
                <div class="auction-content">
                    <h3>Gaming Console Bundle</h3>
                    <div class="auction-meta">
                        <span>Electronics</span>
                        <span>28 bids</span>
                    </div>
                    <div class="price">$790</div>
                    <div class="auction-footer">
                        <a href="#" class="btn">Bid Now</a>
                        <span class="time-left">5h 20m left</span>
                    </div>
                </div>
            </div>
            
            <div class="auction-card">
                <div class="auction-img" style="background-image: url('/api/placeholder/300/200');"></div>
                <div class="auction-content">
                    <h3>Antique Furniture Set</h3>
                    <div class="auction-meta">
                        <span>Home & Garden</span>
                        <span>8 bids</span>
                    </div>
                    <div class="price">$1,875</div>
                    <div class="auction-footer">
                        <a href="#" class="btn">Bid Now</a>
                        <span class="time-left">2d 12h left</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="how-it-works">
        <div class="section-header">
            <h2>How It Works</h2>
            <p>Our auction platform is designed to be simple and intuitive. Here's how to get started:</p>
        </div>
        
        <div class="steps">
            <div class="step">
                <div class="step-number">1</div>
                <h3>Create an Account</h3>
                <p>Sign up and complete the verification process to join our auction community.</p>
            </div>
            
            <div class="step">
                <div class="step-number">2</div>
                <h3>Browse Auctions</h3>
                <p>Explore active auctions or use our search filters to find specific items.</p>
            </div>
            
            <div class="step">
                <div class="step-number">3</div>
                <h3>Place Your Bid</h3>
                <p>Enter your maximum bid and let our system automatically bid for you up to your limit.</p>
            </div>
            
            <div class="step">
                <div class="step-number">4</div>
                <h3>Win & Complete</h3>
                <p>If you win, receive notifications and follow the secure payment process.</p>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="section-header">
            <h2>What Our Users Say</h2>
            <p>Don't just take our word for it - hear from our satisfied community members.</p>
        </div>
        
        <div class="testimonial-grid">
            <div class="testimonial-card">
                <div class="testimonial-text">
                    The user verification process gave me confidence that I was dealing with legitimate buyers. Sold my vintage camera collection for more than I expected!
                </div>
                <div class="testimonial-author">
                    <div class="author-avatar"></div>
                    <div class="author-info">
                        <h4>Michael Roberts</h4>
                        <p>Seller | 34 Auctions</p>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card">
                <div class="testimonial-text">
                    As a collector, I appreciate the detailed item descriptions and high-quality images. The bidding system is transparent and exciting!
                </div>
                <div class="testimonial-author">
                    <div class="author-avatar"></div>
                    <div class="author-info">
                        <h4>Sarah Johnson</h4>
                        <p>Buyer | 56 Purchases</p>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card">
                <div class="testimonial-text">
                    The real-time notifications kept me informed throughout the auction process. I never missed a chance to counter-bid on items I wanted.
                </div>
                <div class="testimonial-author">
                    <div class="author-avatar"></div>
                    <div class="author-info">
                        <h4>David Chen</h4>
                        <p>Buyer & Seller | 23 Auctions</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <h2>Ready to Start Bidding?</h2>
        <p>Join thousands of users who are already enjoying our premium auction experience. Register today and discover unique items or sell your valuables to interested buyers.</p>
        <a href="#" class="btn">Create Your Account</a>
    </section>

    <footer>
        <div class="footer-grid">
            <div class="footer-col">
                <h3>Summit Auctions</h3>
                <p>A premium auction platform designed for security, transparency, and user satisfaction.</p>
            </div>
            
            <div class="footer-col">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="#">Browse Auctions</a></li>
                    <li><a href="#">Create Listing</a></li>
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">How It Works</a></li>
                </ul>
            </div>
            
            <div class="footer-col">
                <h3>Help & Support</h3>
                <ul class="footer-links">
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Bidding Guide</a></li>
                    <li><a href="#">Seller Instructions</a></li>
                </ul>
            </div>
            
            <div class="footer-col">
                <h3>Legal</h3>
                <ul class="footer-links">
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Cookie Policy</a></li>
                    <li><a href="#">User Agreement</a></li>
                </ul>
            </div>
        </div>
        
        <div class="copyright">
            &copy; 2025 Summit Auctions. All rights reserved.
        </div>
    </footer>
</body>
</html>