<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Delicious Food - Manes Winchester Family Law Firm</title>
  <link rel="stylesheet" href="{{ asset('css/food.css') }}">
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

  <!-- Hero Section Start -->
  <div class="hero">
    <div class="hero-content">
      <h1>Delicious Food Awaits</h1>
      <p>Experience the Taste of Excellence</p>
      <a href="#menu" class="btn">Explore Menu</a>
    </div>
  </div>
  <!-- Hero Section End -->

  <div class="food-section">
    <div class="section-header">
      <h1 class="section-title">Explore Our Futuristic Menu</h1>
      <div class="currency-selector">
        <label for="currency">Currency:</label>
        <select id="currency" onchange="convertCurrency()">
          <option value="USD">USD</option>
          <option value="INR">INR</option>
          <option value="EUR">EUR</option>
        </select>
      </div>
    </div>

    <div class="food-grid" id="getDishes">
      <!-- Food cards will be dynamically inserted here -->
    </div>
  </div>
  <div class="booking-section">
    <h1 class="booking-title">Reserve Your Table</h1>
    <p class="booking-subtitle">Experience a dining journey like no other!</p>
    
    <form id="booking-form" class="booking-form">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" required>
        </div>
        
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" id="date" required>
        </div>

        <div class="form-group">
            <label for="time">Time:</label>
            <input type="time" id="time" required>
        </div>

        <div class="form-group">
            <label for="guests">Number of Guests:</label>
            <select id="guests" required>
                <option value="">Select...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
        </div>

        <button type="submit" class="book-btn">Book Now</button>
    </form>

    <div class="confirmation-message" id="confirmation-message">
        <h2>Your table is reserved!</h2>
        <p>Thank you for your booking. We look forward to serving you!</p>
    </div>
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

  <script>
    document.getElementById('booking-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Show confirmation message
    document.getElementById('confirmation-message').style.display = 'block';

    // Hide the booking form
    this.style.display = 'none';

    // Optionally reset the form after submission
    this.reset();
});

    function convertCurrency() {
      const currency = document.getElementById("currency").value;
      const foodCards = document.querySelectorAll('.food-card');

      foodCards.forEach(card => {
        const usdPrice = card.getAttribute('data-usd');
        const inrPrice = card.getAttribute('data-inr');
        const eurPrice = card.getAttribute('data-eur');
        let priceElement = card.querySelector('.price');

        switch (currency) {
          case 'USD':
            priceElement.textContent = `Price: $${usdPrice}`;
            break;
          case 'INR':
            priceElement.textContent = `Price: ₹${inrPrice}`;
            break;
          case 'EUR':
            priceElement.textContent = `Price: €${eurPrice}`;
            break;
        }
      });
    }

    const orderItem = [
      {
        src: "images/drink/wallpaper2you_124604_20180601002542.jpg",
        heading: "Delicious Pasta",
        para: "Italian delicacy with rich flavors and perfect textures.",
        price: "$12",
        usd: 12,
        inr: 990,
        eur: 11
      },
      {
        src: "images/drink/edit_lifestyle_group-landscape-wine-1.webp",
        heading: "Spicy Pizza",
        para: "A zesty pizza with the perfect combination of heat and flavor.",
        price: "$10",
        usd: 10,
        inr: 825,
        eur: 9
      },
      {
        src: "images/drink/glass-drink-with-lemon-orange-slices-it_1308172-328683.jpg",
        heading: "Naruto's Ramen",
        para: "Enjoy the taste of the Hidden in the leaf village.",
        price: "$15.99",
        usd: 15.99,
        inr: 1325,
        eur: 14.5
      },
    ];

    document.addEventListener("DOMContentLoaded", () => {
      const cardsContainer = document.getElementById("getDishes");
      cardsContainer.innerHTML = orderItem
        .map(
          (item) => `
            <div class="food-card" data-usd="${item.usd}" data-inr="${item.inr}" data-eur="${item.eur}">
              <div class="food-img-container">
                  <img src="${item.src}" alt="${item.heading}">
              </div>
              <div class="card-content">
                  <h3>${item.heading}</h3>
                  <p>${item.para}</p>
                  <span class="price">${item.price}</span>
                  <button class="order-btn">Order Now</button>
              </div>
            </div>`
        )
        .join("");
    });
  </script>
</body>

</html>
