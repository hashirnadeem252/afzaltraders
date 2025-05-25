<?php include 'includes/header.php'; ?>

<!-- About Section -->
<section id="about">
  <div class="container">
    <h2>About Us</h2>
    <p class="subtitle">Your Trusted Partner in Oil Distribution</p>
    <div class="about-content">
      <p>
        Afzal Traders is the authorized distributor of HAGAN (Momin Oil Company) in Sargodha Division,
        bringing premium quality lubricants and engine oils to the region. With our strong partnership
        with industry leaders, we ensure reliable supply chain solutions while maintaining the highest
        standards of product quality and customer service.
      </p>

      <!-- Partner Logos Section -->
      <div class="partners-grid">
        <a href="https://haganlubricants.com/" target="_blank" rel="noopener noreferrer" class="partner-card">
          <img src="images/hagan-logo.png" alt="HAGAN Logo" class="partner-logo">
          <h3>Official Distributor of</h3>
          <p>HAGAN Engine Oils</p>
          <div class="visit-website">Visit Website <i class="fas fa-external-link-alt"></i></div>
        </a>

        <a href="https://www.momingroup.com/" target="_blank" rel="noopener noreferrer" class="partner-card">
          <img src="images/momin-oils-logo.png" alt="Momin Oils Logo" class="partner-logo">
          <h3>A Division of</h3>
          <p>Momin Oil Company</p>
          <div class="visit-website">Visit Website <i class="fas fa-external-link-alt"></i></div>
        </a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>


<style>
  /* About Section Styles */
  #about {
    padding: 80px 0;
    background-color: #1E1E1E;
    color: #F5F5F5;
  }

  #about h2 {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 48px;
    text-align: center;
    margin-bottom: 20px;
    position: relative;
  }

  #about h2::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 50px;
    height: 2px;
    background-color: #FFD700;
  }

  #about .subtitle {
    font-family: 'Roboto', sans-serif;
    font-size: 24px;
    text-align: center;
    margin-bottom: 40px;
    color: #C0C0C0;
  }

  #about .about-content {
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
  }

  #about .about-content p {
    font-family: 'Roboto', sans-serif;
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 40px;
  }

  #about .values-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    margin-bottom: 40px;
  }

  /* Update existing value cards to match */
  .value-card {
    background-color: #0A0A0A;
    padding: 30px;
    border-radius: 15px;
    text-align: center;
    transition: transform 0.3s, box-shadow 0.3s;
    border: 1px solid #FFD70033;
  }

  .value-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 30px rgba(255, 215, 0, 0.1);
  }

  #about .value-card img {
    width: 50px;
    margin-bottom: 20px;
  }

  #about .value-card h3 {
    font-family: 'Poppins', sans-serif;
    font-size: 24px;
    margin-bottom: 10px;
  }

  #about .value-card p {
    font-family: 'Roboto', sans-serif;
    font-size: 16px;
    color: #C0C0C0;
  }

  #about .cta-button {
    display: block;
    margin: 0 auto;
    text-align: center;
    width: fit-content;
  }

  /* Partners Section Styles */
  .partners-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 40px;
    margin: 50px 0;
  }

  .partner-card {
    background: #0A0A0A;
    padding: 30px;
    border-radius: 15px;
    text-align: center;
    transition: transform 0.3s, box-shadow 0.3s;
    border: 1px solid #FFD70033;
  }

  .partner-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 30px rgba(255, 215, 0, 0.1);
  }

  .partner-logo {
    width: 200px;
    height: auto;
    margin: 0 auto 20px;
  }

  .partner-card h3 {
    color: #FFD700;
    font-family: 'Bebas Neue', sans-serif;
    font-size: 24px;
    margin: 10px 0;
  }

  .partner-card p {
    color: #C0C0C0;
    font-size: 18px;
    margin: 0;
  }


  /* Partner Card Link Styles */
  .partner-card {
    display: block;
    text-decoration: none;
    color: inherit;
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
  }

  .partner-card::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 3px;
    background: #FFD700;
    transform: scaleX(0);
    transition: transform 0.3s ease;
  }

  .partner-card:hover::after {
    transform: scaleX(1);
  }

  .visit-website {
    color: #FFD700;
    font-size: 14px;
    margin-top: 15px;
    opacity: 0;
    transform: translateY(10px);
    transition: all 0.3s ease;
  }

  .partner-card:hover .visit-website {
    opacity: 1;
    transform: translateY(0);
  }

  .fa-external-link-alt {
    margin-left: 8px;
    font-size: 12px;
  }
</style>
<script src="scripts.js"></script>