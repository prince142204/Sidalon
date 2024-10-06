<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Delicious Food - Manes Winchester Family Law Firm</title>
  <link rel="stylesheet" href="{{ asset('css/food.css') }}">
  <style>
    /* General Styling */
    body {
      font-family: 'Poppins', Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f8f8;
      line-height: 1.6;
    }

    a {
      text-decoration: none;
    }

    h1, h2, h4 {
      color: #333;
    }

    /* Navigation Bar */
    nav {
      background-color: #2c3e50;
      padding: 15px 20px;
    }

    nav ul {
      list-style: none;
      display: flex;
      justify-content: center;
    }

    nav ul li {
      margin: 0 20px;
    }

    nav ul li a {
      color: #fff;
      font-weight: bold;
      transition: color 0.3s;
    }

    nav ul li a:hover {
      color: #f39c12;
    }

    /* Hero Section */
    .hero {
      background-image: url('');
      background-size: cover;
      background-position: center;
      height: 450px;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: white;
      position: relative;
    }

    .hero::after {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.4);
      z-index: 1;
    }

    .hero h1 {
      font-size: 4rem;
      z-index: 2;
    }

    .hero p {
      font-size: 1.5rem;
      margin-top: 10px;
      z-index: 2;
    }

    /* Info and About Sections */
    .info-section, .about-section {
      padding: 40px 20px;
      background-color: #fff;
      text-align: center;
      border-bottom: 1px solid #ddd;
    }

    .info-section p, .about-section p {
      max-width: 700px;
      margin: 0 auto;
      color: #555;
      font-size: 1.1rem;
    }

    /* Featured Dishes */
    .featured-dishes {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
      padding: 40px 20px;
      background-color: #f0f0f0;
    }

    .dish-card {
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 10px;
      width: 280px;
      margin: 20px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .dish-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    .dish-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .dish-card h4 {
      padding: 15px;
      margin: 0;
      font-size: 1.3rem;
    }

    .dish-card p {
      padding: 0 15px 15px;
      font-size: 1rem;
      color: #777;
    }

    /* Customer Reviews */
    .customer-reviews {
      background-color: #fff;
      padding: 40px 20px;
      text-align: center;
    }

    .review-card {
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 20px;
      margin: 20px;
      width: 320px;
      display: inline-block;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .review-card p {
      color: #555;
    }

    .review-card strong {
      font-size: 1.2rem;
      display: block;
      margin-bottom: 10px;
    }

    /* Footer */
    footer {
      background-color: #2c3e50;
      color: white;
      text-align: center;
      padding: 30px;
      position: relative;
    }

    footer .footer-cols {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      padding: 0 20px;
    }

    footer .footer-col {
      width: 30%;
      margin-bottom: 20px;
    }

    footer .footer-col h5 {
      font-size: 1.2rem;
      margin-bottom: 10px;
    }

    footer .social-icons a {
      color: white;
      margin: 0 10px;
      font-size: 1.2rem;
      transition: color 0.3s;
    }

    footer .social-icons a:hover {
      color: #f39c12;
    }

    footer p {
      margin-top: 20px;
      font-size: 0.9rem;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .hero h1 {
        font-size: 2.5rem;
      }

      .hero p {
        font-size: 1.2rem;
      }

      .footer-col {
        width: 100%;
        text-align: center;
      }

      nav ul {
        flex-direction: column;
        align-items: center;
      }

      nav ul li {
        margin: 10px 0;
      }
    }
  </style>
</head>

<body>
  <!-- Navigation Bar -->
  <nav>
    <ul>
      <li><a href="{{url('/home')}}">Home</a></li>
      <li><a href="{{url('/drink')}}">Drink</a></li>
      <li><a href="{{url('/food')}}">Food</a></li>
      <li><a href="{{url('/contact')}}">Contact</a></li>
    </ul>
  </nav>

  <!-- Hero Section -->
  <div class="hero">
    <div>
      <h1>Delicious Food Awaits</h1>
      <p>Experience the Taste of Excellence</p>
    </div>
  </div>

  <!-- Info Section -->
  <div class="info-section">
    <h2>Welcome to Our Culinary World</h2>
    <p>
      At Manes Winchester Family Law Firm, we offer a delightful array of dishes that showcase the best of local ingredients and culinary craftsmanship. Join us for a meal that not only satisfies your hunger but also ignites your taste buds!
    </p>
  </div>

  <!-- About Us Section -->
  <div class="about-section">
    <h2>About Us</h2>
    <p>
      We are passionate about food and believe in creating memorable dining experiences. Our chefs are dedicated to bringing you the freshest ingredients, innovative recipes, and the warmth of genuine hospitality. Come dine with us and discover the joy of great food!
    </p>
  </div>

  <!-- Featured Dishes Section -->
  <div class="featured-dishes" id="card-section">
    <h2>Menu Highlights</h2>
  </div>

  <!-- Customer Reviews Section -->
  <div class="customer-reviews">
    <h2>What Our Customers Say</h2>
    <div id="reviews-section"></div>
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
    <p>&copy; 2024 Manes Winchester Family Law Firm. All rights reserved.</p>
  </footer>
</body>

</html>
 