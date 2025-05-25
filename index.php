<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section id="hero">
  <div class="container">
    <h1><span>Afzal</span> <span>Traders</span></h1>
    <p>Afzal Traders is a Lubricant distributor of Hagan (Momin Oil Company) in Sargodha division.</p>
    <div class="cta-buttons">
      <a href="products.php" class="cta-button">Explore Products</a>
      <a href="about.php" class="cta-button-outline">Learn More</a>
    </div>
  </div>
</section>

<!-- Features Section -->
<section id="features">
  <div class="container">
    <h2>Why Choose Us?</h2>
    <div class="feature-cards">
      <div class="card">
        <i class="fas fa-globe icon"></i>
        <h3>Global Reach</h3>
        <p>We operate in over 50 countries, ensuring seamless delivery worldwide.</p>
      </div>
      <div class="card">
        <i class="fas fa-check-circle icon"></i>
        <h3>Premium Quality</h3>
        <p>Our products meet the highest industry standards for quality and safety.</p>
      </div>
      <div class="card">
        <i class="fas fa-leaf icon"></i>
        <h3>Sustainable Practices</h3>
        <p>Committed to eco-friendly and sustainable oil trading solutions.</p>
      </div>
    </div>
  </div>
</section>

<!-- Stats Section -->
<section id="stats">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-item">
        <div class="stat-icon">
          <i class="fas fa-users"></i>
          <span id="clients" class="stat-number">0</span>
        </div>
        <p>Satisfied Clients</p>
      </div>
      <div class="stat-item">
        <div class="stat-icon">
          <i class="fas fa-check-double"></i>
          <span id="projects" class="stat-number">0</span>
        </div>
        <p>Projects Completed</p>
      </div>
      <div class="stat-item">
        <div class="stat-icon">
          <i class="fas fa-thumbs-up"></i>
          <span id="feedback" class="stat-number">0</span>
        </div>
        <p>Positive Feedback</p>
      </div>
    </div>
  </div>
</section>


<?php include 'includes/footer.php'; ?>

<style>
  /* Hero Section Styles */
  #hero {
    background-image: url('images/hero-bg.png');
    /* Add your background image */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    /* Parallax effect */
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: #F5F5F5;
    position: relative;
    overflow: hidden;
  }

  #hero::before {
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

  #hero .container {
    position: relative;
    z-index: 2;
  }

  #hero h1 {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 96px;
    font-weight: 700;
    text-transform: uppercase;
    margin-bottom: 20px;
    display: inline-block;
    opacity: 0;
    transform: translateX(-100%);
    animation: slideIn 1.5s ease-out forwards;
  }

  #hero h1 span:first-child {
    color: #ffffffb3;
    /* White color */
  }

  #hero h1 span:last-child {
    color: #ffd9009d;
    /* Gold color */
  }

  #hero p {
    font-family: 'Roboto', sans-serif;
    font-size: 24px;
    font-weight: 400;
    margin-bottom: 40px;
    opacity: 0;
    transform: scale(0.9);
    animation: fadeInScale 2s ease-in-out 1s forwards;
  }

  .cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
  }

  .cta-button,
  .cta-button-outline {
    padding: 15px 30px;
    font-size: 18px;
    border-radius: 5px;
    text-decoration: none;
    transition: all 0.3s ease;
  }

  .cta-button {
    background-color: #FFD700;
    color: #1E1E1E;
  }

  .cta-button-outline {
    border: 2px solid #FFD700;
    color: #FFD700;
  }

  .cta-button:hover {
    background-color: #e5b800;
  }

  .cta-button-outline:hover {
    background-color: #FFD700;
    color: #1E1E1E;
  }

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

  /* Features Section Styles */
  #features {
    padding: 80px 0;
    background-color: #1E1E1E;
  }

  #features h2 {
    text-align: center;
    font-size: 36px;
    margin-bottom: 40px;
    position: relative;
  }

  #features h2::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 50px;
    height: 2px;
    background-color: #FFD700;
  }

  .feature-cards {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
  }

  .card {
    background-color: #0A0A0A;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    width: 300px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(255, 215, 0, 0.2);
  }

  .card .icon {
    font-size: 50px;
    color: #FFD700;
    margin-bottom: 20px;
  }

  .card h3 {
    font-size: 24px;
    margin-bottom: 10px;
  }

  .card p {
    font-size: 16px;
    color: #C0C0C0;
  }

  /* Stats Section Styles */
  #stats {
    background-color: #1E1E1E;
    padding: 80px 0;
  }

  .stats-grid {
    display: flex;
    justify-content: center;
    gap: 50px;
    flex-wrap: wrap;
  }

  .stat-item {
    text-align: center;
    width: 250px;
  }

  .stat-icon {
    position: relative;
    margin-bottom: 20px;
  }

  .stat-icon i {
    font-size: 60px;
    color: #FFD700;
    margin-bottom: 15px;
    transition: transform 0.3s ease;
  }

  .stat-icon:hover i {
    transform: scale(1.1);
  }

  .stat-number {
    position: absolute;
    top: 123%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 32px;
    font-weight: bold;
    color: #FFFFFF;
    font-family: 'Bebas Neue', sans-serif;
  }

  .stat-item p {
    font-size: 20px;
    color: #C0C0C0;
    margin-top: 48px;
  }

  @media (max-width: 768px) {
    .stats-grid {
      gap: 30px;
    }

    .stat-item {
      width: 150px;
    }

    .stat-icon i {
      font-size: 50px;
    }

    .stat-number {
      font-size: 24px;
    }
  }
  @media (max-width: 458px){
    .cta-button, .cta-button-outline{
      padding: 0px 30px;
    }
  }
</style>

<script>
  // Updated Stats Animation
  function animateValue(id, start, end, duration) {
        let obj = document.getElementById(id);
        let range = end - start;
        let current = start;
        let increment = end > start ? 1 : -1;
        let stepTime = Math.abs(Math.floor(duration / range));
        let timer = setInterval(function () {
            current += increment;
            obj.textContent = current;
            if (current == end) {
                clearInterval(timer);
            }
        }, stepTime);
    }

    document.addEventListener("DOMContentLoaded", function () {
        const statsSection = document.querySelector('#stats');
        let hasAnimated = false;

        const observer = new IntersectionObserver(function (entries) {
            if (entries[0].isIntersecting && !hasAnimated) {
                hasAnimated = true;
                animateValue("clients", 0, 900, 2000);
                animateValue("projects", 0, 800, 2000);
                animateValue("feedback", 0, 650, 2000);
            }
        }, { threshold: 0.5 });

        observer.observe(statsSection);
    });
</script>