<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Manes Winchester Family Law Firm</title>
  <link rel="stylesheet" href="/css/drink.css">
</head>

<style>
  .faq {
    padding: 2rem;
    background-color: #f9f9f9;
  }

  .faq-item video {
    width: 100%;
    /* Make video responsive */
    height: auto;
    /* Maintain aspect ratio */
    border-radius: 8px;
    /* Optional: rounded corners */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    /* Optional: shadow for a nice effect */
  }
</style>

<body>

  <!-- Navigation Bar -->
  <!-- Hero Section -->
  <header>
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
        <!-- If you want to use the image, update the path using asset() helper -->
        <!-- <img src="{{ asset('images/patrick-tomasso-GXXYkSwndP4-unsplash.jpg') }}" alt="create"> -->
        <h1>Manes Winchester Family Law Firm</h1>
        <p>
          This is just a placeholder. You can replace this with your own content.
        </p>
      </div>
    </div>


    <!-- Mission Section -->
    <!-- Our Mission Section -->
    <section class="our-mission">
  <div class="mission-container">
    <div class="mission-text">
      <h2>Our Mission</h2>
      <p>
        At <strong>[Your Cafe/Shop Name]</strong>, our mission is to create an unforgettable experience for our customers by offering exceptional beverages, hand-crafted with love and dedication.
      </p>
      <p>
        We focus on delivering locally brewed craft beers, fine wines, and custom cocktails that bring people together. Sustainability and community-driven values are at the heart of what we do.
      </p>
    </div>
    <div class="mission-image">
      <img src="/images/chaud-cafe-wine-bar.jpg" alt="Our Mission Image">
    </div>
  </div>
</section>


    <!-- Services Section -->
    <!-- Services Section -->
    <!-- Order Section -->
    <section class="services">
      <h2>Place Your Order</h2>
      <div id="orderItem" class="service-list">
        <div class="order-item">
          <img class="order-images" src="images/drink/wallpaper2you_124604_20180601002542.jpg" alt="Craft Beers">
          <h3>Craft Beers</h3>
          <p>Enjoy a wide variety of locally brewed craft beers.</p>
          <p class="order-price">$12.99</p>
          <button class="order-btn">Order Now</button>
        </div>
        <div class="order-item">
          <img class="order-images" src="images/drink/edit_lifestyle_group-landscape-wine-1.webp" alt="Fine Wines">
          <h3>Fine Wines</h3>
          <p>Discover exquisite wines from around the world.</p>
          <p class="order-price">$24.99</p>
          <button class="order-btn">Order Now</button>
        </div>
        <div class="order-item">
          <img class="order-images" src="images/drink/glass-drink-with-lemon-orange-slices-it_1308172-328683.jpg" alt="Custom Cocktails">
          <h3>Custom Cocktails</h3>
          <p>Try our unique, handcrafted cocktails tailored to your taste.</p>
          <p class="order-price">$18.99</p>
          <button class="order-btn">Order Now</button>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <!-- Testimonials Section -->
    <section class="testimonials">
      <h2>What Our Clients Say</h2>
      <div class="testimonial-list">
        <div class="testimonial-item">
          <p>"The craft beers here are absolutely amazing! I love the variety and quality. The ambiance is great too!"</p>
          <div class="testimonial-author">
            John Doe
            <span class="testimonial-author-role">, Craft Beer Enthusiast</span>
          </div>
        </div>
        <div class="testimonial-item">
          <p>"Fine Wines has been my go-to spot for wine selections. Their staff is knowledgeable and always provides excellent recommendations."</p>
          <div class="testimonial-author">
            Jane Smith
            <span class="testimonial-author-role">, Wine Lover</span>
          </div>
        </div>
        <div class="testimonial-item">
          <p>"Custom Cocktails are simply the best! I appreciate how they craft each cocktail with care and attention to detail."</p>
          <div class="testimonial-author">
            Emily Johnson
            <span class="testimonial-author-role">, Cocktail Connoisseur</span>
          </div>
        </div>
      </div>
    </section>




    <!-- FAQ Section -->
    <!-- FAQ Section with Video -->
    <section class="faq">
      <div class="faq-item">
        <video controls autoplay loop muted>
          <source src="images/drink/9640964-hd_1920_1080_25fps.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>
    </section>




    <!-- Card Section -->
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
    </footer>



    <!-- JavaScript to dynamically insert cards -->
    <script>
      const images = [{
          src: "{{ asset('images/drink/refreshing-iced-tea-with-lemon-mint_931778-11720.jpg') }}",
          heading: "Vine & Dine Café",
          para: "This is just a placeholder, so you can see what the site would look like.",
        },
        {
          src: "{{ asset('images/drink/glass-strawberry-cocktail-with-strawberries-lime-slices_140725-4875.jpg') }}",
          heading: "The Grape Escape",
          para: "This is just a placeholder, so you can see what the site would look like.",
        },
        {
          src: "{{ asset('images/drink/glass-drink-with-lemon-orange-slices-it_1308172-328683.jpg') }}",
          heading: "Sip & Savor Café",
          para: "This is just a placeholder, so you can see what the site would look like.",
        },
        {
          src: "{{ asset('images/drink/wooden-board-with-different-colored-drinks-straw-middle_1023064-52086.jpg') }}",
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
    </script>


    <!-- Add the necessary Owl Carousel CSS and JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
      $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        items: 1,
        autoplay: true,
      });
    </script>

    <!-- FAQ  -->
    <script>
      document.querySelectorAll('.faq-item h3').forEach(item => {
        item.addEventListener('click', () => {
          item.nextElementSibling.classList.toggle('show');
        });
      });
    </script>
    <script>
      const orderItem = [{
          src: "images/drink/wallpaper2you_124604_20180601002542.jpg",
          heading: "Craft Beers",
          para: "Discover exquisite wines from around the world.",
          price: "$12.99"
        },
        {
          src: "images/drink/edit_lifestyle_group-landscape-wine-1.webp",
          heading: "Fine Wine",
          para: "Try our unique, handcrafted cocktails tailored to your taste.",
          price: "$24.99"
        },
        {
          src: "images/drink/glass-drink-with-lemon-orange-slices-it_1308172-328683.jpg",
          heading: "Custom Cocktails",
          para: "Try our unique, handcrafted cocktails tailored to your taste.",
          price: "$18.99"
        },

      ];

      let cards = document.getElementById("orderItem");
      cards.innerHTML = images
        .map(
          (item) => `<div class="order-item">
          <img class="order-images" src=${item.src} alt="Craft Beers">
          <h3>${item.heading}</h3>
          <p>${item.para}</p>
          <p class="order-price">${item.price}</p>
          <button class="order-btn">Order Now</button>
        </div>`
        )
        .join("");
    </script>


</body>

</html>