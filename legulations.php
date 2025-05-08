<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summit Auctions - Legal & Policy Pages</title>
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
        
        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }
        
        .page-title {
            text-align: center;
            margin-bottom: 40px;
            color: var(--primary-blue);
            font-size: 2.5rem;
        }
        
        .tab-container {
            margin-bottom: 30px;
        }
        
        .tabs {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }
        
        .tab-btn {
            padding: 12px 25px;
            background-color: var(--light-blue);
            color: white;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s;
            font-size: 1rem;
        }
        
        .tab-btn:hover {
            background-color: var(--primary-blue);
            transform: translateY(-2px);
        }
        
        .tab-btn.active {
            background-color: var(--primary-blue);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        
        .tab-content {
            background-color: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            display: none;
        }
        
        .tab-content.active {
            display: block;
        }
        
        .tab-content h2 {
            color: var(--primary-blue);
            margin-bottom: 20px;
            font-size: 1.8rem;
        }
        
        .tab-content h3 {
            color: var(--medium-green);
            margin: 25px 0 15px;
            font-size: 1.4rem;
        }
        
        .tab-content p {
            margin-bottom: 15px;
        }
        
        .tab-content ul {
            margin-bottom: 20px;
            padding-left: 20px;
        }
        
        .tab-content li {
            margin-bottom: 10px;
        }
        
        .last-updated {
            text-align: right;
            font-style: italic;
            color: #777;
            margin-top: 30px;
        }
        
        footer {
            background-color: var(--primary-blue);
            color: white;
            padding: 30px 5%;
            text-align: center;
            margin-top: 60px;
        }
        
        .copyright {
            color: #aaa;
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            .tabs {
                flex-direction: column;
                align-items: center;
            }
            
            .tab-btn {
                width: 100%;
                max-width: 300px;
            }
            
            .tab-content {
                padding: 20px;
            }
            
            .container {
                margin: 20px auto;
            }
            
            header {
                flex-direction: column;
                text-align: center;
                padding: 15px 5%;
            }
            
            .nav-links {
                margin-top: 15px;
                justify-content: center;
            }
            
            .nav-links li {
                margin: 0 10px;
            }
        }
    </style>
</head>
<body>
    <header>
        <a href="#" class="logo">Summit Auctions</a>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Auctions</a></li>
            <li><a href="#">How It Works</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </header>

    <div class="container">
        <h1 class="page-title">Legal & Policy Documents</h1>
        
        <div class="tab-container">
            <div class="tabs">
                <button class="tab-btn active" data-tab="terms">Terms of Service</button>
                <button class="tab-btn" data-tab="privacy">Privacy Policy</button>
                <button class="tab-btn" data-tab="cookies">Cookie Policy</button>
                <button class="tab-btn" data-tab="agreement">User Agreement</button>
            </div>
            
            <div id="terms" class="tab-content active">
                <h2>Terms of Service</h2>
                <p>Welcome to Summit Auctions. Please read these Terms of Service ("Terms") carefully before using our website and services.</p>
                
                <h3>1. Acceptance of Terms</h3>
                <p>By accessing or using Summit Auctions, you agree to be bound by these Terms and our Privacy Policy. If you do not agree to these Terms, please do not use our platform.</p>
                
                <h3>2. Eligibility</h3>
                <p>You must be at least 18 years old and capable of forming a legally binding contract to use our services. By using Summit Auctions, you represent and warrant that you meet these requirements.</p>
                
                <h3>3. User Accounts</h3>
                <p>To participate in auctions, you must create an account. You are responsible for maintaining the confidentiality of your account information and for all activities associated with your account.</p>
                <p>You agree to provide accurate and complete information when creating your account and to update your information as necessary.</p>
                
                <h3>4. Bidding and Purchases</h3>
                <p>All bids placed are legally binding offers to purchase the item at the bid price. When you win an auction, you are obligated to complete the purchase of the item.</p>
                <p>Summit Auctions reserves the right to cancel bids or auctions at our discretion if we suspect fraudulent activity or violations of our policies.</p>
                
                <h3>5. Fees and Payments</h3>
                <p>Summit Auctions may charge fees for certain services. All fees are non-refundable unless otherwise specified.</p>
                <p>Payment methods accepted and payment processing procedures are outlined in our payment policies.</p>
                
                <h3>6. Seller Obligations</h3>
                <p>Sellers must provide accurate descriptions and images of items listed for auction.</p>
                <p>Sellers are responsible for shipping items to buyers in a timely manner and in the condition described.</p>
                
                <h3>7. Prohibited Activities</h3>
                <p>Users may not engage in any activity that:</p>
                <ul>
                    <li>Violates any applicable law or regulation</li>
                    <li>Infringes on intellectual property rights</li>
                    <li>Involves fraudulent or deceptive practices</li>
                    <li>Interferes with the operation of our platform</li>
                    <li>Attempts to manipulate auction prices or outcomes</li>
                </ul>
                
                <h3>8. Limitation of Liability</h3>
                <p>Summit Auctions is not responsible for the actions of users on our platform. We do not guarantee the quality, safety, or legality of items offered.</p>
                <p>To the maximum extent permitted by law, Summit Auctions shall not be liable for any indirect, incidental, special, consequential, or punitive damages.</p>
                
                <h3>9. Termination</h3>
                <p>We reserve the right to terminate or suspend your account and access to our services at our sole discretion, without notice, for conduct that we believe violates these Terms or is harmful to other users, us, or third parties.</p>
                
                <h3>10. Changes to Terms</h3>
                <p>We may modify these Terms at any time. Changes will be effective immediately upon posting on our website. Your continued use of Summit Auctions after changes indicates your acceptance of the updated Terms.</p>
                
                <p class="last-updated">Last Updated: April 15, 2025</p>
            </div>
            
            <div id="privacy" class="tab-content">
                <h2>Privacy Policy</h2>
                <p>At Summit Auctions, we take your privacy seriously. This Privacy Policy explains how we collect, use, disclose, and safeguard your information.</p>
                
                <h3>1. Information We Collect</h3>
                <p>We collect several types of information from and about users of our platform, including:</p>
                <ul>
                    <li>Personal information (name, email address, postal address, phone number)</li>
                    <li>Account information (username, password)</li>
                    <li>Transaction information (bidding history, purchase history)</li>
                    <li>Payment information (credit card details, billing address)</li>
                    <li>Device and usage information (IP address, browser type, operating system)</li>
                </ul>
                
                <h3>2. How We Collect Information</h3>
                <p>We collect information directly from you when you:</p>
                <ul>
                    <li>Register for an account</li>
                    <li>Place bids or make purchases</li>
                    <li>List items for auction</li>
                    <li>Contact our customer support</li>
                    <li>Complete surveys or provide feedback</li>
                </ul>
                <p>We also collect information automatically when you navigate through our platform using cookies and similar technologies.</p>
                
                <h3>3. How We Use Your Information</h3>
                <p>We use your information to:</p>
                <ul>
                    <li>Provide and improve our services</li>
                    <li>Process transactions and send related information</li>
                    <li>Maintain and secure your account</li>
                    <li>Communicate with you about our services</li>
                    <li>Respond to your inquiries and support requests</li>
                    <li>Monitor and analyze usage patterns and trends</li>
                    <li>Prevent fraudulent transactions and monitor unauthorized activity</li>
                    <li>Comply with legal obligations</li>
                </ul>
                
                <h3>4. Information Sharing and Disclosure</h3>
                <p>We may share your information with:</p>
                <ul>
                    <li>Other users as necessary to facilitate transactions</li>
                    <li>Service providers who perform services on our behalf</li>
                    <li>Law enforcement or other government agencies as required by law</li>
                    <li>Professional advisors such as lawyers, auditors, and insurers</li>
                </ul>
                <p>We do not sell your personal information to third parties.</p>
                
                <h3>5. Data Security</h3>
                <p>We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, disclosure, alteration, or destruction.</p>
                <p>However, no method of transmission over the Internet or electronic storage is 100% secure, and we cannot guarantee absolute security.</p>
                
                <h3>6. Your Privacy Rights</h3>
                <p>Depending on your location, you may have certain rights regarding your personal information, including:</p>
                <ul>
                    <li>Access to your personal information</li>
                    <li>Correction of inaccurate information</li>
                    <li>Deletion of your personal information</li>
                    <li>Restriction of processing of your personal information</li>
                    <li>Data portability</li>
                    <li>Objection to processing</li>
                </ul>
                <p>To exercise these rights, please contact us using the information provided at the end of this policy.</p>
                
                <h3>7. Changes to This Privacy Policy</h3>
                <p>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page and updating the "Last Updated" date.</p>
                
                <p class="last-updated">Last Updated: April 15, 2025</p>
            </div>
            
            <div id="cookies" class="tab-content">
                <h2>Cookie Policy</h2>
                <p>This Cookie Policy explains how Summit Auctions uses cookies and similar technologies to recognize you when you visit our website.</p>
                
                <h3>1. What Are Cookies</h3>
                <p>Cookies are small text files that are stored on your browser or device when you visit a website. Cookies allow websites to recognize your device and remember certain information about your visit.</p>
                
                <h3>2. Types of Cookies We Use</h3>
                <p>We use the following types of cookies:</p>
                <ul>
                    <li><strong>Essential Cookies:</strong> These cookies are necessary for the website to function properly and cannot be switched off in our systems.</li>
                    <li><strong>Performance Cookies:</strong> These cookies allow us to count visits and traffic sources so we can measure and improve the performance of our site.</li>
                    <li><strong>Functionality Cookies:</strong> These cookies enable the website to provide enhanced functionality and personalization.</li>
                    <li><strong>Targeting Cookies:</strong> These cookies may be set through our site by our advertising partners to build a profile of your interests.</li>
                </ul>
                
                <h3>3. How We Use Cookies</h3>
                <p>We use cookies for various purposes, including to:</p>
                <ul>
                    <li>Authenticate users and maintain your login session</li>
                    <li>Remember your preferences and settings</li>
                    <li>Understand how you use our website</li>
                    <li>Improve our website and services</li>
                    <li>Enable certain functions and tools on our website</li>
                    <li>Provide you with relevant advertising</li>
                </ul>
                
                <h3>4. Third-Party Cookies</h3>
                <p>We also allow certain third parties to place cookies on your device when you visit our website to:</p>
                <ul>
                    <li>Analyze how you use our website (analytics providers)</li>
                    <li>Provide social media features (social media platforms)</li>
                    <li>Display relevant advertising (advertising networks)</li>
                </ul>
                <p>These third parties may use cookies, web beacons, and similar technologies to collect information about your use of our website and other websites.</p>
                
                <h3>5. Your Cookie Choices</h3>
                <p>You can control and manage cookies in various ways. Most web browsers allow you to manage your cookie preferences. You can:</p>
                <ul>
                    <li>Delete cookies from your device</li>
                    <li>Block cookies by activating the setting on your browser that allows you to refuse the setting of all or some cookies</li>
                    <li>Set your browser to notify you when you receive a cookie</li>
                </ul>
                <p>Please note that if you choose to block or delete cookies, you may not be able to access certain areas or features of our website, and some services may not function properly.</p>
                
                <h3>6. Cookie Consent</h3>
                <p>When you first visit our website, you will be presented with a cookie consent banner that allows you to accept or decline non-essential cookies.</p>
                <p>You can change your cookie preferences at any time by clicking on the "Cookie Settings" link in the footer of our website.</p>
                
                <h3>7. Updates to This Cookie Policy</h3>
                <p>We may update this Cookie Policy from time to time. The updated version will be indicated by an updated "Last Updated" date.</p>
                
                <p class="last-updated">Last Updated: April 15, 2025</p>
            </div>
            
            <div id="agreement" class="tab-content">
                <h2>User Agreement</h2>
                <p>This User Agreement ("Agreement") governs your participation on the Summit Auctions platform.</p>
                
                <h3>1. Platform Rules</h3>
                <p>By using Summit Auctions, you agree to follow these platform rules:</p>
                <ul>
                    <li>Provide accurate and truthful information in your profile and listings</li>
                    <li>Respect the intellectual property rights of others</li>
                    <li>Communicate professionally and respectfully with other users</li>
                    <li>Honor your commitments as a buyer or seller</li>
                    <li>Follow through on winning bids with prompt payment</li>
                    <li>Ship items promptly and as described if you are a seller</li>
                </ul>
                
                <h3>2. Buyer Responsibilities</h3>
                <p>As a buyer on Summit Auctions, you agree to:</p>
                <ul>
                    <li>Review item descriptions thoroughly before bidding</li>
                    <li>Place bids with the intention of completing the purchase if you win</li>
                    <li>Pay for items you win within the specified timeframe</li>
                    <li>Provide accurate shipping information</li>
                    <li>Communicate promptly with sellers regarding any issues</li>
                </ul>
                
                <h3>3. Seller Responsibilities</h3>
                <p>As a seller on Summit Auctions, you agree to:</p>
                <ul>
                    <li>Provide accurate, complete, and truthful descriptions of items</li>
                    <li>Include clear photographs that accurately represent the item</li>
                    <li>Disclose any flaws, damages, or issues with the item</li>
                    <li>Set reasonable shipping terms and costs</li>
                    <li>Ship items promptly after receiving payment</li>
                    <li>Respond to buyer inquiries in a timely manner</li>
                </ul>
                
                <h3>4. Prohibited Items</h3>
                <p>The following items are prohibited from being listed or sold on Summit Auctions:</p>
                <ul>
                    <li>Illegal items or substances</li>
                    <li>Counterfeit or unauthorized replica items</li>
                    <li>Items that infringe on intellectual property rights</li>
                    <li>Weapons, firearms, and related items</li>
                    <li>Hazardous materials</li>
                    <li>Adult content or pornography</li>
                    <li>Personal information or data</li>
                    <li>Items recalled by manufacturers</li>
                </ul>
                
                <h3>5. Feedback and Ratings</h3>
                <p>Our platform includes a feedback and rating system to help users make informed decisions:</p>
                <ul>
                    <li>Users are encouraged to leave honest feedback about their transactions</li>
                    <li>Feedback should be factual and related to the specific transaction</li>
                    <li>Retaliatory feedback is prohibited</li>
                    <li>Summit Auctions reserves the right to remove feedback that violates our policies</li>
                </ul>
                
                <h3>6. Dispute Resolution</h3>
                <p>In the event of a dispute between users:</p>
                <ul>
                    <li>Users should first attempt to resolve the issue directly with each other</li>
                    <li>If the issue cannot be resolved, users may request mediation through our customer support</li>
                    <li>Summit Auctions will review the facts and make a determination based on our policies</li>
                    <li>Summit Auctions' decision in dispute resolutions is final</li>
                </ul>
                
                <h3>7. Account Suspension and Termination</h3>
                <p>Summit Auctions reserves the right to suspend or terminate user accounts for:</p>
                <ul>
                    <li>Repeated policy violations</li>
                    <li>Fraudulent activity</li>
                    <li>Non-payment or non-delivery</li>
                    <li>Harassment of other users</li>
                    <li>Any activity that harms the platform or its community</li>
                </ul>
                
                <h3>8. Changes to This Agreement</h3>
                <p>We may update this Agreement from time to time. Continued use of Summit Auctions after changes indicates your acceptance of the updated Agreement.</p>
                
                <p class="last-updated">Last Updated: April 15, 2025</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Summit Auctions. All rights reserved.</p>
        <p class="copyright">For any questions regarding our legal documents, please contact legal@summitauctions.com</p>
    </footer>

    <script>
        // Tab functionality
        document.addEventListener('DOMContentLoaded', function() {
            const tabBtns = document.querySelectorAll('.tab-btn');
            const tabContents = document.querySelectorAll('.tab-content');
            
            tabBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Remove active class from all buttons and contents
                    tabBtns.forEach(b => b.classList.remove('active'));
                    tabContents.forEach(content => content.classList.remove('active'));
                    
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    // Show corresponding content
                    const tabId = this.getAttribute('data-tab');
                    document.getElementById(tabId).classList.add('active');
                    
                    // Update URL hash for direct linking
                    window.location.hash = tabId;
                });
            });
            
            // Check for hash in URL and open corresponding tab
            const hash = window.location.hash.substring(1);
            if (hash && document.getElementById(hash)) {
                tabBtns.forEach(b => b.classList.remove('active'));
                tabContents.forEach(content => content.classList.remove('active'));
                
                document.querySelector(`[data-tab="${hash}"]`).classList.add('active');
                document.getElementById(hash).classList.add('active');
            }
        });
    </script>
</body>
</html>