</main>
<!-- Footer -->
<footer class="oil-footer">
    <div class="oil-footer-container">
        <div class="oil-footer-content">
            <!-- About Section -->
            <div class="oil-footer-section oil-footer-about">
                <h3>Oil Traders</h3>
                <p>
                    Oil Traders specializes in the global trade of high-quality petroleum products. With decades of experience in the industry, we ensure reliable supply chains, competitive pricing, and exceptional customer service. Trust us to meet your energy needs with efficiency and professionalism.
                </p>
            </div>

            <!-- Support Section -->
            <div class="oil-footer-section oil-footer-support">
                <h3>Support</h3>
                <ul>
                    <li><a href="forum.php">Forum</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="faq.php">Frequently Asked Questions</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>

            <!-- Quick Links Section -->
            <div class="oil-footer-section oil-footer-quick-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Section -->
            <div class="oil-footer-section oil-footer-contact">
                <h3>Contact Us</h3>
                <ul class="oil-footer-contact-info">
                    <li><i class="fas fa-map-marker-alt"></i> Factory Area Road, Near Tablighi Markaz, Sargodha</li>
                    <li><i class="fas fa-phone"></i> +923016716020</li>
                    <li><i class="fas fa-envelope"></i> afzaltraders6007@gmail.com</li>
                </ul>
                <div class="oil-footer-socials">
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        
        <!-- Footer Bottom -->
<div class="oil-footer-bottom">
    <p>&copy; 2024 Oil Traders - Developed by 
        <a href="https://hashirnadeem252.github.io/portfolio/" 
           target="_blank" 
           rel="noopener noreferrer" 
           style="text-decoration: underline; color: #FFD700; cursor: pointer;">
           Hashir Nadeem
        </a> 
        & 
        <a href="https://mhamzaawan.github.io/My-Portfolio/" 
           target="_blank" 
           rel="noopener noreferrer" 
           style="text-decoration: underline; color: #FFD700; cursor: pointer;">
           Hamza Awan
        </a>
    </p>
    <div class="oil-footer-links">
        <a href="#">Privacy & Policy</a> | <a href="#">Site Map</a>
    </div>
</div>
</footer>

<style>
    /* Scoped Footer Styles */
    .oil-footer {
        background-color: #1E1E1E;
        color: #C0C0C0;
        padding: 40px 0;
        border-top: 2px solid #FFD700;
    }

    .oil-footer-container {
        display: flex;
        justify-content: space-between;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        flex-wrap: wrap;
    }

    .oil-footer-content {
        display: flex;
        justify-content: space-between;
        width: 100%;
        margin-bottom: 20px;
        flex-wrap: wrap;
    }

    .oil-footer-section {
        flex: 1;
        margin-right: 20px;
        min-width: 200px;
        margin-bottom: 20px;
    }

    .oil-footer-section h3 {
        color: #FFD700;
        margin-bottom: 20px;
        position: relative;
        font-size: 18px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .oil-footer-section h3::after {
        content: "";
        width: 50px;
        height: 3px;
        background-color: #FFD700;
        position: absolute;
        left: 0;
        bottom: -10px;
    }

    .oil-footer-section ul {
        list-style: none;
        padding: 0;
    }

    .oil-footer-section ul li {
        margin-bottom: 10px;
    }

    .oil-footer-section ul li a {
        color: #C0C0C0;
        text-decoration: none;
        transition: color 0.3s, transform 0.3s;
    }

    .oil-footer-section ul li a:hover {
        color: #FFD700;
        transform: translateX(5px);
    }

    .oil-footer-section p {
        font-size: 14px;
        line-height: 1.8;
        margin: 0;
    }

    .oil-footer-socials {
        margin-top: 10px;
    }

    .oil-footer-socials a {
        color: #C0C0C0;
        margin-right: 10px;
        font-size: 18px;
        transition: color 0.3s, transform 0.3s;
    }

    .oil-footer-socials a:hover {
        color: #FFD700;
        transform: translateY(-5px);
    }

    .oil-footer-bottom {
        border-top: 1px solid #444;
        padding-top: 20px;
        text-align: center;
        font-size: 14px;
        width: 100%;
        background-color: #0A0A0A;
    }

    .oil-footer-bottom p {
        margin-bottom: 10px;
        color: #C0C0C0;
    }

    .oil-footer-bottom p a {
        color: #FFD700;
        text-decoration: none;
    }

    .oil-footer-bottom p a:hover {
        color: #FFD700;
    }

    .oil-footer-bottom .oil-footer-links a {
        color: #C0C0C0;
        margin: 0 10px;
        text-decoration: none;
    }

    .oil-footer-bottom .oil-footer-links a:hover {
        color: #FFD700;
    }
    .oil-footer-contact-info li:hover{
        color: #FFD700;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .oil-footer-container {
            flex-direction: column;
            align-items: center;
        }

        .oil-footer-section {
            margin-right: 0;
            text-align: center;
        }

        .oil-footer-section h3::after {
            left: 50%;
            transform: translateX(-50%);
        }

        .oil-footer-section.oil-footer-about {
            order: 1;
        }

        .oil-footer-section.oil-footer-support {
            order: 2;
        }

        .oil-footer-section.oil-footer-quick-links {
            order: 3;
        }

        .oil-footer-section.oil-footer-contact {
            order: 4;
        }

        .oil-footer-section ul li a {
            display: block;
            margin-bottom: 10px;
        }

        .oil-footer-bottom p {
            font-size: 12px;
        }

        .oil-footer-bottom .oil-footer-links a {
            margin: 0 5px;
        }
    }

    @media (max-width: 480px) {
        .oil-footer-section {
            flex: 100%;
            margin-bottom: 20px;
        }

        .oil-footer-section ul li {
            font-size: 14px;
        }

        .oil-footer-socials a {
            font-size: 16px;
        }
    }
</style>