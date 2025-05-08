<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summit Auctions - Trust & Support</title>
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
        
        .page-header {
            height: 200px;
            background: linear-gradient(135deg, var(--primary-blue), var(--light-blue));
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            padding: 0 20px;
        }
        
        .page-header h1 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        .page-header p {
            font-size: 1.1rem;
            max-width: 700px;
        }
        
        .tabs-container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }
        
        .tabs {
            display: flex;
            flex-wrap: wrap;
            border-bottom: 2px solid var(--light-blue);
            margin-bottom: 30px;
        }
        
        .tab-btn {
            padding: 15px 25px;
            background-color: white;
            border: none;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            color: #555;
            transition: all 0.3s;
            margin-right: 5px;
            margin-bottom: -2px;
        }
        
        .tab-btn:hover {
            background-color: var(--snow-white);
            color: var(--primary-blue);
        }
        
        .tab-btn.active {
            background-color: var(--light-blue);
            color: white;
            border-bottom: 2px solid var(--primary-blue);
        }
        
        .tab-content {
            display: none;
            animation: fadeIn 0.5s;
        }
        
        .tab-content.active {
            display: block;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        /* Help Center Styles */
        .faq-container {
            max-width: 900px;
            margin: 0 auto;
        }
        
        .faq-category {
            margin-bottom: 40px;
        }
        
        .faq-category h3 {
            color: var(--primary-blue);
            font-size: 1.5rem;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }
        
        .faq-item {
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }
        
        .faq-question {
            background-color: white;
            padding: 15px 20px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .faq-question:hover {
            background-color: var(--snow-white);
        }
        
        .faq-question span {
            transition: all 0.3s;
        }
        
        .faq-question.active span {
            transform: rotate(180deg);
        }
        
        .faq-answer {
            padding: 0;
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s ease;
            background-color: white;
        }
        
        .faq-answer.active {
            padding: 20px;
            max-height: 500px;
            border-top: 1px solid #eee;
        }
        
        /* Contact Support Styles */
        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }
        
        .contact-info {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .contact-info h3 {
            color: var(--primary-blue);
            margin-bottom: 20px;
        }
        
        .contact-method {
            margin-bottom: 20px;
            display: flex;
            align-items: flex-start;
        }
        
        .contact-icon {
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
        
        .contact-details h4 {
            margin-bottom: 5px;
        }
        
        .contact-form {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            border-color: var(--light-blue);
            outline: none;
            box-shadow: 0 0 0 3px rgba(106, 153, 192, 0.2);
        }
        
        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }
        
        /* Dispute Resolution Styles */
        .dispute-process {
            max-width: 900px;
            margin: 0 auto;
        }
        
        .dispute-step {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            position: relative;
            padding-left: 70px;
        }
        
        .step-number {
            position: absolute;
            left: 20px;
            top: 25px;
            width: 40px;
            height: 40px;
            background-color: var(--light-blue);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.2rem;
        }
        
        .dispute-step h3 {
            color: var(--primary-blue);
            margin-bottom: 15px;
        }
        
        .timeframe {
            display: inline-block;
            background-color: var(--light-green);
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.9rem;
            margin-top: 15px;
        }
        
        /* User Reviews Styles */
        .review-filters {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }
        
        .filter-group {
            display: flex;
            align-items: center;
        }
        
        .filter-label {
            margin-right: 10px;
            font-weight: 500;
        }
        
        .filter-select {
            padding: 8px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: white;
            cursor: pointer;
        }
        
        .rating-filter {
            display: flex;
            align-items: center;
        }
        
        .stars {
            display: flex;
            margin: 0 10px;
        }
        
        .star {
            color: #ddd;
            font-size: 1.5rem;
            cursor: pointer;
            transition: all 0.2s;
        }
        
        .star.active {
            color: #FFD700;
        }
        
        .review-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .review-card {
            background-color: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .review-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 15px;
        }
        
        .reviewer-info {
            display: flex;
            align-items: center;
        }
        
        .reviewer-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--light-blue);
            margin-right: 15px;
        }
        
        .reviewer-name {
            font-weight: 600;
        }
        
        .reviewer-meta {
            color: #777;
            font-size: 0.9rem;
        }
        
        .review-rating {
            color: #FFD700;
            font-size: 1.2rem;
        }
        
        .review-content {
            margin-bottom: 15px;
            color: #555;
        }
        
        .review-date {
            color: #999;
            font-size: 0.9rem;
            text-align: right;
        }
        
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }
        
        .page-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin: 0 5px;
            background-color: white;
            color: #555;
            text-decoration: none;
            transition: all 0.3s;
            font-weight: 500;
            border: 1px solid #ddd;
        }
        
        .page-link:hover {
            background-color: var(--snow-white);
            color: var(--primary-blue);
            border-color: var(--light-blue);
        }
        
        .page-link.active {
            background-color: var(--light-blue);
            color: white;
            border-color: var(--light-blue);
        }
        
        footer {
            background-color: var(--primary-blue);
            color: white;
            padding: 60px 5% 30px;
            margin-top: 80px;
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
            
            .tabs {
                overflow-x: auto;
                white-space: nowrap;
                flex-wrap: nowrap;
                -webkit-overflow-scrolling: touch;
                padding-bottom: 5px;
            }
            
            .tab-btn {
                flex: 0 0 auto;
            }
            
            .contact-container {
                grid-template-columns: 1fr;
            }
            
            .review-filters {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .filter-group {
                margin-bottom: 15px;
                width: 100%;
            }
            
            .filter-select {
                width: 100%;
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
                <li><a href="#" class="active">Trust & Support</a></li>
                <li><a href="#" class="btn btn-outline">Sign In</a></li>
            </ul>
        </nav>
    </header>

    <div class="page-header">
        <h1>Trust & Support Center</h1>
        <p>We're committed to providing a safe, transparent, and enjoyable auction experience for all users.</p>
    </div>

    <div class="tabs-container">
        <div class="tabs">
            <button class="tab-btn active" data-tab="help-center">Help Center/FAQ</button>
            <button class="tab-btn" data-tab="contact-support">Contact Support</button>
            <button class="tab-btn" data-tab="dispute-resolution">Dispute Resolution</button>
            <button class="tab-btn" data-tab="user-reviews">User Reviews</button>
        </div>

        <!-- Help Center/FAQ Tab -->
        <div class="tab-content active" id="help-center">
            <div class="faq-container">
                <div class="faq-category">
                    <h3>Account Management</h3>
                    <div class="faq-item">
                        <div class="faq-question">
                            How do I create an account? <span>▼</span>
                        </div>
                        <div class="faq-answer">
                            <p>Creating an account on Summit Auctions is simple:</p>
                            <ol>
                                <li>Click the "Register" button in the top navigation</li>
                                <li>Fill out the registration form with your information</li>
                                <li>Verify your email address via the confirmation email</li>
                                <li>Complete your profile and verification steps</li>
                            </ol>
                            <p>Once verified, you'll have full access to bid on items and create listings.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            What is the verification process? <span>▼</span>
                        </div>
                        <div class="faq-answer">
                            <p>Our verification process helps ensure a safe marketplace:</p>
                            <ul>
                                <li>Email verification through a confirmation link</li>
                                <li>Phone number verification via SMS code</li>
                                <li>ID verification for higher-value transactions (optional but recommended)</li>
                                <li>Payment method verification</li>
                            </ul>
                            <p>The verification level required depends on the auction value and your activity on the platform.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            How do I reset my password? <span>▼</span>
                        </div>
                        <div class="faq-answer">
                            <p>To reset your password:</p>
                            <ol>
                                <li>Click "Sign In" in the top navigation</li>
                                <li>Select "Forgot Password" below the login form</li>
                                <li>Enter the email address associated with your account</li>
                                <li>Check your email for a password reset link</li>
                                <li>Create a new password following our security guidelines</li>
                            </ol>
                            <p>For security reasons, password reset links expire after 24 hours.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-category">
                    <h3>Bidding & Buying</h3>
                    <div class="faq-item">
                        <div class="faq-question">
                            How does the bidding system work? <span>▼</span>
                        </div>
                        <div class="faq-answer">
                            <p>Our bidding system works as follows:</p>
                            <ul>
                                <li>Browse active auctions and select an item you're interested in</li>
                                <li>You can place either a single bid or a maximum bid</li>
                                <li>With maximum bidding, our system will automatically place incremental bids on your behalf up to your maximum amount</li>
                                <li>You'll receive notifications when you're outbid or when you're the highest bidder</li>
                                <li>When the auction ends, the highest bidder wins the item</li>
                            </ul>
                            <p>All bids are binding offers to purchase the item at the bid price.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            What happens after I win an auction? <span>▼</span>
                        </div>
                        <div class="faq-answer">
                            <p>After winning an auction:</p>
                            <ol>
                                <li>You'll receive a confirmation email with details about your purchase</li>
                                <li>You'll need to complete payment within 48 hours</li>
                                <li>Once payment is confirmed, the seller will be notified to ship the item</li>
                                <li>You'll receive tracking information when the item ships</li>
                                <li>Once you receive the item, you should confirm receipt in your account dashboard</li>
                                <li>Leave feedback for the seller about your experience</li>
                            </ol>
                            <p>If you have any issues with your purchase, our dispute resolution process is available to help.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            What payment methods are accepted? <span>▼</span>
                        </div>
                        <div class="faq-answer">
                            <p>Summit Auctions accepts the following payment methods:</p>
                            <ul>
                                <li>Credit/Debit Cards (Visa, Mastercard, American Express, Discover)</li>
                                <li>PayPal</li>
                                <li>Bank Transfer/ACH</li>
                                <li>Summit Auctions Wallet</li>
                            </ul>
                            <p>For high-value items (over $10,000), wire transfers may be required. All payments are processed securely through our encrypted payment system.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-category">
                    <h3>Selling</h3>
                    <div class="faq-item">
                        <div class="faq-question">
                            How do I create a listing? <span>▼</span>
                        </div>
                        <div class="faq-answer">
                            <p>To create a listing:</p>
                            <ol>
                                <li>Log in to your account and navigate to "My Account" → "Create Listing"</li>
                                <li>Select the appropriate category for your item</li>
                                <li>Upload high-quality photos (at least 3 recommended)</li>
                                <li>Write a detailed description, including condition and any defects</li>
                                <li>Set your starting price, reserve price (optional), and auction duration</li>
                                <li>Submit for review - most listings are approved within 24 hours</li>
                            </ol>
                            <p>For valuable or unique items, our expert evaluation service is available for an additional fee.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            What are the seller fees? <span>▼</span>
                        </div>
                        <div class="faq-answer">
                            <p>Our seller fee structure is transparent:</p>
                            <ul>
                                <li>Standard listing fee: $2.99 per item</li>
                                <li>Final value fee: 10% of the final selling price (capped at $250)</li>
                                <li>Featured listing upgrade: $5.99 (optional)</li>
                                <li>Expert verification service: $19.99 (optional)</li>
                            </ul>
                            <p>Volume sellers and business accounts may qualify for reduced fees. Contact our sales team for more information.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            When and how do I get paid? <span>▼</span>
                        </div>
                        <div class="faq-answer">
                            <p>Payment processing works as follows:</p>
                            <ol>
                                <li>When a buyer wins your item, they have 48 hours to submit payment</li>
                                <li>Once payment is confirmed, you'll be notified to ship the item</li>
                                <li>After shipping, enter tracking information in your seller dashboard</li>
                                <li>Funds are held in escrow until the buyer confirms receipt or 7 days after delivery confirmation</li>
                                <li>Payment is then released to your connected payout method (bank account, PayPal, or platform credit)</li>
                            </ol>
                            <p>Standard processing time is 2-3 business days after funds are released from escrow.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Support Tab -->
        <div class="tab-content" id="contact-support">
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Ways to Reach Us</h3>
                    <div class="contact-method">
                        <div class="contact-icon">📧</div>
                        <div class="contact-details">
                            <h4>Email Support</h4>
                            <p>support@summitauctions.com</p>
                            <p>Response time: 24-48 hours</p>
                        </div>
                    </div>
                    <div class="contact-method">
                        <div class="contact-icon">💬</div>
                        <div class="contact-details">
                            <h4>Live Chat</h4>
                            <p>Available Monday-Friday</p>
                            <p>9:00 AM - 5:00 PM EST</p>
                        </div>
                    </div>
                    <div class="contact-method">
                        <div class="contact-icon">📞</div>
                        <div class="contact-details">
                            <h4>Phone Support</h4>
                            <p>1-800-SUMMIT-A (1-800-786-6482)</p>
                            <p>Available Monday-Friday, 9:00 AM - 5:00 PM EST</p>
                        </div>
                    </div>
                    <div class="contact-method">
                        <div class="contact-icon">🔄</div>
                        <div class="contact-details">
                            <h4>Support Hours</h4>
                            <p>Monday-Friday: 9:00 AM - 8:00 PM EST</p>
                            <p>Saturday: 10:00 AM - 4:00 PM EST</p>
                            <p>Sunday: Closed (Email support only)</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <h3>Send us a Message</h3>
                    <form>
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <select id="subject" class="form-control">
                                <option value="">Select a subject</option>
                                <option value="account">Account Issues</option>
                                <option value="payment">Payment Problems</option>
                                <option value="shipping">Shipping Questions</option>
                                <option value="dispute">Dispute Resolution</option>
                                <option value="feedback">Platform Feedback</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea id="message" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="order">Order ID (if applicable)</label>
                            <input type="text" id="order" class="form-control">
                        </div>
                        <button type="submit" class="btn">Submit Ticket</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Dispute Resolution Tab -->
        <div class="tab-content" id="dispute-resolution">
            <div class="dispute-process">
                <h3 style="margin-bottom: 30px; text-align: center