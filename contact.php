<?php include 'includes/header.php'; ?>

<!-- Contact Section -->
<section id="contact">
  <div class="container">
    <h2 class="section-title">Get in Touch</h2>
    <p class="section-subtitle">We’d love to hear from you. Reach out for inquiries, partnerships, or feedback.</p>

    <div class="contact-grid">
      <!-- Contact Form -->
      <div class="contact-form">
        <form>
          <div class="form-group">
            <input type="text" id="name" required>
            <label for="name">Your Name</label>
          </div>
          <div class="form-group">
            <input type="email" id="email" required>
            <label for="email">Your Email</label>
          </div>
          <div class="form-group">
            <textarea id="message" rows="5" required></textarea>
            <label for="message">Your Message</label>
          </div>
          <button type="submit" class="cta-button">Send Message</button>
        </form>
      </div>

      <!-- Contact Info & Map -->
      <div class="contact-details">
        <!-- Info Cards -->
        <div class="info-card">
          <i class="fas fa-location icon"></i>
          <h3>Visit Us</h3>
          <p>Factory Area Road <br>Near Tablighi Markaz Sargodha</p>
        </div>
        <div class="info-card">
          <i class="fas fa-phone icon"></i>
          <h3>Call Us</h3>
          <p>
          <p>
            <a href="tel:+923016716020" class="contact-link">+923016716020</a><br>Mon-Sun: 9 AM - 7 PM <br>(Friday
            Closed)
          </p>
        </div>
        <div class="info-card">
          <i class="fas fa-envelope icon"></i>
          <h3>Email Us</h3>
          <p><a href="mailto:afzaltraders6007@gmail.com" class="contact-link">
              afzaltraders6007@gmail.com
            </a></p>
        </div>

        <!-- Map -->
        <div class="map-container">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54090.205432773604!2d72.58565862167967!3d32.0790428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x392177acb579ce53%3A0x1b0d23330beda6ff!2sAfzal%20Traders6007!5e0!3m2!1sen!2s!4v1740687732606!5m2!1sen!2s"
            width="100%" height="210" style="border:0;" allowfullscreen="" loading="lazy" class="map-frame">
          </iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<style>
  /* Contact Section Styles */
  #contact {
    padding: 80px 0;
    background-color: #0A0A0A;
  }

  .section-title {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 48px;
    text-align: center;
    color: #FFD700;
    margin-bottom: 10px;
    opacity: 0;
    animation: fadeInDown 1s ease-out forwards;
  }

  .section-subtitle {
    font-family: 'Roboto', sans-serif;
    text-align: center;
    color: #C0C0C0;
    margin-bottom: 50px;
    opacity: 0;
    animation: fadeInUp 1s ease-out 0.3s forwards;
  }

  .contact-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    max-width: 1200px;
    margin: 0 auto;
  }

  /* Form Styles */
  .contact-form {
    background: #1E1E1E;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
  }

  .form-group {
    position: relative;
    margin-bottom: 30px;
  }

  .form-group input,
  .form-group textarea {
    width: 95%;
    padding: 15px;
    background: #0A0A0A;
    border: 2px solid #333;
    border-radius: 8px;
    color: #F5F5F5;
    font-family: 'Roboto', sans-serif;
    transition: border-color 0.3s, box-shadow 0.3s;
  }

  .form-group input:focus,
  .form-group textarea:focus {
    border-color: #FFD700;
    box-shadow: 0 0 15px rgba(255, 215, 0, 0.3);
    outline: none;
  }

  .form-group label {
    position: absolute;
    left: 15px;
    top: 15px;
    color: #C0C0C0;
    pointer-events: none;
    transition: 0.3s;
    font-family: 'Poppins', sans-serif;
    background: #1E1E1E;
    /* Add background to prevent overlap */
    padding: 0 5px;
    /* Add padding for better alignment */
  }

  .form-group input:focus~label,
  .form-group input:valid~label,
  .form-group textarea:focus~label,
  .form-group textarea:valid~label {
    top: -10px;
    left: 10px;
    font-size: 12px;
    color: #FFD700;
    background: #1E1E1E;
    /* Ensure background matches */
    padding: 0 5px;
    /* Add padding for better alignment */
  }

  /* Contact Details */
  .contact-details {
    display: flex;
    flex-direction: column;
    gap: 25px;
  }

  .info-card {
    background: #1E1E1E;
    padding: 25px;
    border-radius: 15px;
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .info-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
  }

  .info-icon {
    width: 40px;
    margin-bottom: 15px;
  }

  .info-card h3 {
    font-family: 'Poppins', sans-serif;
    color: #FFD700;
    margin-bottom: 10px;
  }

  .info-card p {
    font-family: 'Roboto', sans-serif;
    color: #C0C0C0;
    line-height: 1.6;
  }

  .map-container {
    border-radius: 15px;
    overflow: hidden;
    border: 2px solid #333;
  }

  .map-frame {
    filter: grayscale(30%)
      /* Dark theme map */
  }

  /* Animations */
  @keyframes fadeInDown {
    from {
      opacity: 0;
      transform: translateY(-20px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(20px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* Responsive Design */
  @media (max-width: 768px) {
    .contact-grid {
      grid-template-columns: 1fr;
      padding: 0 20px;
    }
  }
</style>
<script src="script.js"></script>