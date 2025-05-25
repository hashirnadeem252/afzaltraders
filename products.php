<?php include 'includes/header.php'; ?>

<!-- Product Hero Section -->
<section class="product-hero-section">
    <div class="product-hero-container">
        <h1 class="product-hero-title"><span>Our</span> <span>Products</span></h1>
        <p class="product-hero-description">Explore our premium range of lubricants and oils designed for superior
            performance.</p>
    </div>
</section>

<!-- Product Grid Section -->
<section id="product-grid">
    <div class="container">
        <!-- Filter Buttons -->
        <div class="filter-buttons">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="engine-oil">Engine Oil</button>
            <button class="filter-btn" data-filter="gear-oil">Gear Oil</button>
            <button class="filter-btn" data-filter="hydraulic-oil">Hydraulic Oil</button>
            <button class="filter-btn" data-filter="coolent">Coolent</button>
        </div>

        <!-- Product Cards -->
        <div class="products">
            <!-- Product Card 1 -->
            <div class="product-card" data-category="engine-oil">
                <div class="product-image">
                    <img src="images/gt1-detail.png" alt="Engine Oil">
                </div>
                <div class="product-details">
                    <h3>Engine Oil</h3>
                    <p>High-performance engine oil for all vehicle types.</p>
                    <a href="#" class="product-btn learn-more-btn">Learn More</a>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="product-card" data-category="gear-oil">
                <div class="product-image">
                    <img src="images/gt1-detail.png" alt="Gear Oil">
                </div>
                <div class="product-details">
                    <h3>Gear Oil</h3>
                    <p>Premium gear oil for smooth transmission.</p>
                    <a href="#" class="product-btn learn-more-btn">Learn More</a>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="product-card" data-category="gear-oil">
                <div class="product-image">
                    <img src="images/gt1-detail.png" alt="Gear Oil">
                </div>
                <div class="product-details">
                    <h3>Gear Oil</h3>
                    <p>Premium gear oil for smooth transmission.</p>
                    <a href="#" class="product-btn learn-more-btn">Learn More</a>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="product-card" data-category="gear-oil">
                <div class="product-image">
                    <img src="images/gt1-detail.png" alt="Gear Oil">
                </div>
                <div class="product-details">
                    <h3>Gear Oil</h3>
                    <p>Premium gear oil for smooth transmission.</p>
                    <a href="#" class="product-btn learn-more-btn">Learn More</a>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="product-card" data-category="gear-oil">
                <div class="product-image">
                    <img src="images/gt1-detail.png" alt="Gear Oil">
                </div>
                <div class="product-details">
                    <h3>Gear Oil</h3>
                    <p>Premium gear oil for smooth transmission.</p>
                    <a href="#" class="product-btn learn-more-btn">Learn More</a>
                </div>
            </div>

            <!-- Add more product cards here -->
        </div>
    </div>
</section>

<!-- Modal Popup -->
<div class="modal-overlay">
    <div class="modal">
        <span class="close-modal">&times;</span>
        <div class="modal-content">
            <div class="modal-image">
                <img src="images/gt1-detail.png" alt="Product Image">
            </div>
            <div class="modal-details">
                <h3 class="modal-title">Product Title</h3>
                <p class="modal-description">Product description goes here.</p>
                <div class="modal-specs">
                    <p><strong>Viscosity:</strong> SAE 5W-30</p>
                    <p><strong>Capacity:</strong> 1L, 4L, 20L</p>
                    <p><strong>Certifications:</strong> API SN, ACEA C3</p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'includes/footer.php'; ?>

<style>
    /* Product Hero Section */
    .product-hero-section {
        /* background-image: url('images/hero-bg.png'); */
        /* Add your background image */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        /* Parallax effect */
        height: 60vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: #F5F5F5;
        position: relative;
        overflow: hidden;
    }

    .product-hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        /* Dark overlay */
        z-index: 1;
    }

    .product-hero-container {
        position: relative;
        z-index: 2;
    }

    .product-hero-title {
        font-family: 'Bebas Neue', sans-serif;
        font-size: 72px;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 20px;
        display: inline-block;
        opacity: 0;
        transform: translateX(-100%);
        animation: slideIn 1.5s ease-out forwards;
    }

    .product-hero-title span:first-child {
        color: #ffffffb3;
        /* White color */
    }

    .product-hero-title span:last-child {
        color: #ffd9009d;
        /* Gold color */
    }

    .product-hero-description {
        font-family: 'Roboto', sans-serif;
        font-size: 24px;
        font-weight: 400;
        margin-bottom: 40px;
        opacity: 0;
        transform: scale(0.9);
        animation: fadeInScale 2s ease-in-out 1s forwards;
    }

    /* Keyframes for Slide-In Effect */
    @keyframes slideIn {
        0% {
            opacity: 0;
            transform: translateX(-100%);
        }

        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    /* Keyframes for Fade-In and Scale-Up Effect */
    @keyframes fadeInScale {
        0% {
            opacity: 0;
            transform: scale(0.9);
        }

        100% {
            opacity: 1;
            transform: scale(1);
        }
    }

    /* Product Grid Section */
    #product-grid {
        padding: 80px 0;
        background-color: #1E1E1E;
    }

    .filter-buttons {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-bottom: 40px;
    }

    .filter-buttons .filter-btn {
        padding: 10px 20px;
        font-size: 16px;
        background-color: #0A0A0A;
        color: #C0C0C0;
        border: 1px solid #FFD700;
        border-radius: 4px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .filter-buttons .filter-btn.active,
    .filter-buttons .filter-btn:hover {
        background-color: #FFD700;
        color: #1E1E1E;
    }



    /* Product Card Styles */
    /* Product Card Styles */
    .product-card {
        background-color: #0A0A0A;
        border: 1px solid #333;
        border-radius: 15px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        width: 300px;
        /* Fixed width for consistency */
        margin: 20px auto;
        /* Center the card horizontally */
        padding: 20px;
        /* Increased padding for better spacing */
        display: flex;
        flex-direction: column;
        align-items: center;
        /* Center content horizontally */
        min-height: 500px;
        /* Increased card height */
    }

    .product-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 20px rgba(255, 215, 0, 0.3);
    }

    /* Product Image */
    .product-image {
        position: relative;
        width: 40%;
        /* Image width is 40% of the card */
        height: 213px;
        /* Fixed height for the image */
        overflow: hidden;
        border-radius: 10px;
        /* Slightly rounded corners */
        display: flex;
        justify-content: center;
        /* Center the image horizontally */
        align-items: center;
        /* Center the image vertically */
        margin-bottom: 20px;
        /* Added space below the image */
    }

    .product-image img {
        width: 100%;
        /* Image takes full width of its container */
        height: 100%;
        /* Image takes full height of its container */
        object-fit: cover;
        /* Ensures the image covers the area without distortion */
        transition: transform 0.3s ease;
        border-radius: 10px;
        /* Match the container's border radius */
    }

    .product-card:hover .product-image img {
        transform: scale(1.1);
        /* Zoom effect on hover */
    }

    /* Product Details */
    .product-details {
        padding: 37px;
        text-align: center;
        background-color: #0A0A0A;
        border-radius: 0 0 15px 15px;
        /* Rounded corners at the bottom */
        width: 100%;
        /* Ensure details take full width of the card */
        flex-grow: 1;
        /* Allow details to take remaining space */
    }

    .product-details h3 {
        font-size: 24px;
        color: #FFD700;
        margin-bottom: 15px;
        /* Increased margin for better spacing */
    }

    .product-details p {
        font-size: 16px;
        color: #C0C0C0;
        margin-bottom: 20px;
        /* Increased margin for better spacing */
    }

    /* Product Button */
    .product-btn {
        display: inline-block;
        padding: 10px 20px;
        font-size: 14px;
        color: #1E1E1E;
        background-color: #FFD700;
        border-radius: 4px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .product-btn:hover {
        background-color: #e5b800;
    }

    /* Product Grid Container */
    .products {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        /* Center cards horizontally */
        gap: 20px;
        /* Consistent spacing between cards */
        padding: 20px;
    }
    /* Add these new styles for modal */
    .modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        z-index: 999;
    }

    .modal-overlay.active {
        opacity: 1;
        visibility: visible;
    }

    .modal {
        background: #0A0A0A;
        border-radius: 15px;
        padding: 30px;
        width: 80%;
        max-width: 800px;
        position: relative;
        transform: scale(0.8);
        transition: transform 0.3s ease;
        border: 1px solid #FFD700;
    }

    .modal-overlay.active .modal {
        transform: scale(1);
    }

    .close-modal {
        position: absolute;
        top: 15px;
        right: 15px;
        font-size: 28px;
        color: #FFD700;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .close-modal:hover {
        color: #ffffff;
    }

    .modal-content {
        display: flex;
        gap: 30px;
        align-items: center;
    }

    .modal-image {
        flex: 1;
        max-width: 300px;
    }

    .modal-image img {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }

    .modal-details {
        flex: 2;
        color: #fff;
    }

    .modal-title {
        font-size: 32px;
        color: #FFD700;
        margin-bottom: 15px;
        font-family: 'Bebas Neue', sans-serif;
    }

    .modal-description {
        font-size: 18px;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .modal-specs p {
        font-size: 16px;
        margin-bottom: 10px;
        padding: 8px 0;
        border-bottom: 1px solid #333;
    }
    @media (max-width: 610px){
        .filter-buttons{
            flex-direction: column;
        }
    }
</style>

<script>
   document.addEventListener('DOMContentLoaded', () => {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const productCards = document.querySelectorAll('.product-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to the clicked button
            button.classList.add('active');

            const filter = button.getAttribute('data-filter');

            // Filter products
            productCards.forEach(card => {
                const category = card.getAttribute('data-category');
                if (filter === 'all' || category === filter) {
                    card.style.display = 'flex'; // Use flex to maintain layout
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
    // Modal functionality
    const learnMoreBtns = document.querySelectorAll('.learn-more-btn');
        const modalOverlay = document.querySelector('.modal-overlay');
        const closeModal = document.querySelector('.close-modal');

        learnMoreBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                const card = btn.closest('.product-card');
                const title = card.querySelector('h3').textContent;
                const description = card.querySelector('p').textContent;
                const imgSrc = card.querySelector('img').src;

                // Update modal content
                modalOverlay.querySelector('.modal-title').textContent = title;
                modalOverlay.querySelector('.modal-description').textContent = description;
                modalOverlay.querySelector('.modal-image img').src = imgSrc;

                // Show modal
                modalOverlay.classList.add('active');
            });
        });

        // Close modal
        closeModal.addEventListener('click', () => {
            modalOverlay.classList.remove('active');
        });

        // Close when clicking outside
        window.addEventListener('click', (e) => {
            if(e.target === modalOverlay) {
                modalOverlay.classList.remove('active');
            }
        });
    
});
</script>