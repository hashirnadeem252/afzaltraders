<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Oil Traders Shop</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@400;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<style>
  /* Import Google Fonts */
  @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@700&family=Roboto:wght@400;700&display=swap');

  /* General Styles */
  body {
    font-family: 'Poppins', sans-serif;
    background-color: #0A0A0A;
    color: #F5F5F5;
    margin: 0;
    padding: 0;
  }

  .container {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
  }

  a {
    text-decoration: none;
    color: inherit;
  }

  /* CTA Button Styles */
  .cta-button {
    background-color: #FFD700;
    color: #0A0A0A;
    padding: 10px 20px;
    border-radius: 5px;
    font-weight: 600;
    transition: background-color 0.3s;
  }

  .cta-button:hover {
    background-color: #C0C0C0;
  }

  /* CTA Buttons */
  .cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
  }

  .cta-button {
    background-color: #FFD700;
    color: #0A0A0A;
    padding: 10px 20px;
    border-radius: 5px;
    font-weight: 600;
    transition: background-color 0.3s, transform 0.3s;
  }

  .cta-button:hover {
    background-color: #C0C0C0;
    transform: translateY(-5px);
    /* Button hover effect */
  }

  .cta-button-outline {
    border: 2px solid #FFD700;
    color: #FFD700;
    padding: 10px 20px;
    border-radius: 5px;
    font-weight: 600;
    transition: background-color 0.3s, transform 0.3s;
  }

  .cta-button-outline:hover {
    background-color: #FFD700;
    color: #0A0A0A;
    transform: translateY(-5px);
    /* Button hover effect */
  }

  /* Keyframes for Text Animations */
  @keyframes fadeInDown {
    0% {
      opacity: 0;
      transform: translateY(-50px);
    }

    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes fadeInUp {
    0% {
      opacity: 0;
      transform: translateY(50px);
    }

    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* General hover effect for all icons */
  .icon {
    color: #F5F5F5;
    /* Initial color */
    transition: color 0.3s ease, transform 0.3s ease;
    /* Smooth transition */
  }

  /* Hover state for icons */
  .icon:hover {
    color: #FFD700;
    /* Change color on hover */
    transform: scale(1.2);
    /* Slightly enlarge the icon on hover */
  }

    /* Header Styles */
    header {
        background-image: url('images/hero-bg.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 10px 0;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        height: 70px;
        display: flex;
        align-items: center;
    }

    /* Dark overlay for the header */
    header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        z-index: -1;
    }

    header .container {
        position: relative;
        z-index: 2;
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Logo Styles */
    header .logo img {
        height: 90px;
        width: auto;
        transition: transform 0.3s ease;
    }

    header .logo img:hover {
        transform: scale(1.1);
    }

    /* Navigation Styles */
    header nav ul {
        list-style: none;
        display: flex;
        gap: 20px;
        margin: 0;
        padding: 0;
    }

    header nav ul li a {
        color: #F5F5F5;
        font-weight: 600;
        transition: color 0.3s;
    }

    header nav ul li a:hover {
        color: #FFD700;
    }

    /* Hamburger Menu */
    .hamburger {
        display: none;
        cursor: pointer;
        font-size: 28px;
        color: #F5F5F5;
    }

    /* Mobile Menu Styles */
    @media (max-width: 768px) {
        header nav ul {
            display: none;
            flex-direction: column;
            position: absolute;
            top: 70px;
            left: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            padding: 20px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }

        header nav ul.active {
            display: flex;
        }

        header nav ul li {
            text-align: center;
            margin: 10px 0;
        }

        .hamburger {
            display: block;
        }
    }
</style>

<body>
  <!-- Header Section -->
  <header>
        <div class="container">
            <div class="logo"><img src="images/logo.png" alt="Oil Traders Logo"></div>
            <nav>
                <div class="hamburger" id="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
                <ul id="nav-menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <script>
        // Toggle Mobile Menu
        const hamburger = document.getElementById('hamburger');
        const navMenu = document.getElementById('nav-menu');

        hamburger.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });

        // Close Menu When Clicking Outside
        document.addEventListener('click', (e) => {
            if (!hamburger.contains(e.target)) {
                navMenu.classList.remove('active');
            }
        });
</script>
</body>
