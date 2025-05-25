// Add any interactive functionality here
// Example: Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
      });
    });
  });

//nav bar scroll styling
window.addEventListener('scroll', () => {
    const header = document.querySelector('header');
    if (window.scrollY > 50) {
      header.style.backgroundColor = 'rgba(30, 30, 30, 0.9)'; // Change background color on scroll
    } else {
      header.style.backgroundColor = 'transparent'; // Reset to transparent
    }
  });





