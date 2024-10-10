


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  
  <!-- Corrected CSS link using asset() helper -->
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>



<body>
  <!-- Navigation Bar -->
  <div class="background-animation"></div>
    <nav class="navbar">
        <div class="navbar-brand">
            <h1>Beer & Wine Cafe</h1>
        </div>
        <div class="hamburger" id="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <div class="menu" id="menu">
            <div class="menu-item" data-section="home">
                <span>Home</span>
            </div>
            <div class="menu-item" data-section="menu">
                <span>Menu</span>
            </div>
            <div class="menu-item" data-section="about">
                <span>About Us</span>
            </div>
            <div class="menu-item" data-section="events">
                <span>Events</span>
            </div>
            <div class="menu-item" data-section="contact">
                <span>Contact</span>
            </div>
        </div>
    </nav>

  <!-- Hero Section -->
  <div class="hero">
    <div>
      <!-- If you want to use the image, update the path using asset() helper -->
      <!-- <img src="{{ asset('images/patrick-tomasso-GXXYkSwndP4-unsplash.jpg') }}" alt="create"> -->
      <h1>Manes Winchester Family Law Firm</h1>
      <p>
        This is just a placeholder. You can replace this with your own content.
      </p>
    </div>
  </div>
  <div class="coverd"></div>

  <!-- Info Section -->
  <div class="info-section">
    <div class="info-text">
      <h2>Crafted with Love: Unleash Your Inner Sommelier</h2>
      <p>
           where every sip tells a story! Our carefully curated selection of local craft beers and exquisite wines invites you to embark on a delightful tasting journey. Whether you’re a connoisseur or just beginning to explore the world of brews and vintages, we have something for everyone       </p>
    </div>
    <div class="testimonials">
      <h3>Brewed Bliss</h3>
      <p>
      Discover a world of flavor at [Your Shop Name]! From refreshing brews to exquisite wines, we have the perfect pour for every occasion.</p>
      <p>- John Doe and Jane Doe</p>
    </div>
  </div>

  <!-- Card Section -->
  <div id="card-section">
    <!-- Removed the empty card div -->
  </div>

  <!-- Footer -->
  <footer>
    <div class="footer-cols">
      <div class="footer-col">
        <h5>Our Address</h5>
        <p>1234 Law Firm Road, New York, NY</p>
      </div>
      <div class="footer-col">
        <h5>Contact Us</h5>
        <p>Email: info@lawfirm.com</p>
        <p>Phone: +1 123 456 7890</p>
      </div>
      <div class="footer-col">
        <h5>Follow Us</h5>
        <div class="social-icons">
          <a href="#">Facebook</a>
          <a href="#">LinkedIn</a>
          <a href="#">Twitter</a>
        </div>
      </div>
    </div>
    <p>&copy; 2024 Manes Winchester Family Law Firm. All Rights Reserved.</p>
    <p id="typ"></p>
    <div id="raju"></div>
  </footer>

  <!-- JavaScript to dynamically insert cards -->
  <script>
    
    const images = [{
        src: "{{ asset('images/hk.webp') }}",
        heading: "Vine & Dine Café",
        para: "This is just a placeholder, so you can see what the site would look like.",
      },
      {
        src: "{{ asset('images/IMGL3695.0.jpg') }}",
        heading: "The Grape Escape",
        para: "This is just a placeholder, so you can see what the site would look like.",
      },
      {
        src: "{{ asset('images/hk.webp') }}",
        heading: "Sip & Savor Café",
        para: "This is just a placeholder, so you can see what the site would look like.",
      },
      {
        src: "{{ asset('images/ye.jpg') }}",
        heading: "Wines & Whiskers",
        para: "This is just a placeholder, so you can see what the site would look like.",
      },
    ];
    let cards = document.getElementById("card-section");
    cards.innerHTML = images
      .map(
        (item) => `<div class="card">
              <img src="${item.src}" alt="Lawyers" class="img"/>
              <h4>${item.heading}</h4>
              <p>${item.para}</p>
             <button><a href="{{ url('resources/views/order.blade.php') }}">Visit</a></button>

            </div>`
      )
      .join("");


// JavaScript to handle menu toggle for mobile view
const menuItems = document.querySelectorAll('.menu-item');
const hamburger = document.getElementById('hamburger');
const menu = document.getElementById('menu');

// Add click event to each menu item
menuItems.forEach(item => {
    item.addEventListener('click', () => {
        const section = item.getAttribute('data-section');
        alert(`Navigating to ${section} section!`); // Replace with actual navigation logic
    });
});

// Toggle menu on hamburger click
hamburger.addEventListener('click', () => {
    menu.classList.toggle('active');
});

  </script>
  
</body>

</html>