<?php include 'includes/header.php'; ?>

<!-- FAQ Hero Section -->
<section class="faq-hero">
    <div class="container">
        <h1>Frequently Asked Questions</h1>
        <p>Find answers to common questions about our products and services.</p>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="faq-item">
            <div class="faq-question">
                <h3>What types of lubricants do you offer?</h3>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                <p>We offer a wide range of lubricants, including engine oil, gear oil, hydraulic oil, and grease. Our products are designed for various industries and applications.</p>
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <h3>How can I place an order?</h3>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                <p>You can place an order by contacting us directly via phone or email. Alternatively, you can visit our office to discuss your requirements in person.</p>
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <h3>Do you offer international shipping?</h3>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                <p>Yes, we offer international shipping to over 50 countries. Please contact us for more details about shipping rates and delivery times.</p>
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <h3>What payment methods do you accept?</h3>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                <p>We accept payments via bank transfer, credit/debit cards, and cash on delivery (COD) for local orders.</p>
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <h3>Can I get a custom product formulation?</h3>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                <p>Yes, we provide custom formulations based on your specific requirements. Contact our technical team for more information.</p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<style>
    /* FAQ Hero Section */
    .faq-hero {
        background-image: url('images/faq-bg.jpg'); /* Add your background image */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: #F5F5F5;
        position: relative;
    }

    .faq-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* Dark overlay */
        z-index: 1;
    }

    .faq-hero .container {
        position: relative;
        z-index: 2;
    }

    .faq-hero h1 {
        font-family: 'Bebas Neue', sans-serif;
        font-size: 48px;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .faq-hero p {
        font-size: 18px;
        color: #C0C0C0;
    }

    /* FAQ Section */
    .faq-section {
        padding: 60px 0;
        background-color: #1E1E1E;
    }

    .faq-item {
        background-color: #0A0A0A;
        border: 1px solid #333;
        border-radius: 10px;
        margin-bottom: 20px;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .faq-item.active {
        border-color: #FFD700;
    }

    .faq-question {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        cursor: pointer;
    }

    .faq-question h3 {
        font-size: 20px;
        color: #F5F5F5;
        margin: 0;
    }

    .faq-question i {
        font-size: 18px;
        color: #FFD700;
        transition: transform 0.3s ease;
    }

    .faq-item.active .faq-question i {
        transform: rotate(180deg);
    }

    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease, padding 0.3s ease;
    }

    .faq-item.active .faq-answer {
        max-height: 200px; /* Adjust based on content */
        padding: 0 20px 20px 20px;
    }

    .faq-answer p {
        font-size: 16px;
        color: #C0C0C0;
        margin: 0;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .faq-hero h1 {
            font-size: 36px;
        }

        .faq-hero p {
            font-size: 16px;
        }

        .faq-question h3 {
            font-size: 18px;
        }

        .faq-answer p {
            font-size: 14px;
        }
    }
</style>

<script>
    // FAQ Toggle Functionality
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        question.addEventListener('click', () => {
            item.classList.toggle('active');
        });
    });
</script>