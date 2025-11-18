<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Jibal Bakery</title>
  <link rel="stylesheet" href="public/css/globals.css" />
  <link rel="stylesheet" href="public/css/style.css" />
</head>

<body>
  <!-- HEADER -->
  <header class="navbar">
    <div class="logo">
      <a href="/" aria-label="Jibal Bakery Home">
        <h1>JIBAL BAKERY</h1>
      </a>
    </div>
    <nav class="main-nav" aria-label="Main Navigation">
      <ul>
        <li><a href="?page=home" class="active">Home</a></li>
        <li><a href="?page=product">Product</a></li>
        <li><a href="?page=about">About Us</a></li>
        <li><a href="?page=contact">Contact Us</a></li>
      </ul>
    </nav>
  </header>

  <!-- MAIN -->
  <main>
    <!-- HERO SECTION -->
    <section class="hero-section" aria-labelledby="hero-title">
      <div class="hero-content">
        <h2 id="hero-title">Handcrafted Sourdough, Baked Fresh Daily</h2>
        <p>Natural fermentation, healthy & delicious artisan bread.</p>
        <a href="?page=product" class="cta-button">Order Now</a>
      </div>
    </section>

    <!-- PRODUCT PREVIEW -->
    <section
      class="product-preview"
      aria-labelledby="product-preview-heading">
      <h2 id="product-preview-heading">Select to explore & order!</h2>
      <div class="product-gallery">
        <figure>
          <img src="public/img/bread.jpg" alt="Crusty artisan bread loaf" />
          <figcaption>Bread</figcaption>
        </figure>
        <figure>
          <img src="public/img/cookies.jpg" alt="Chocolate chip cookies" />
          <figcaption>Cookies</figcaption>
        </figure>
        <figure>
          <img src="public/img/cakes.jpg" alt="Chocolate cake" />
          <figcaption>Cakes</figcaption>
        </figure>
        <figure>
          <img src="public/img/pastry.jpg" alt="Lots of pastries" />
          <figcaption>Pastry</figcaption>
        </figure>
      </div>
    </section>

    <!-- FEATURES SECTION -->
    <section class="features-section" aria-labelledby="features-heading">
      <h2 id="features-heading">Why Choose Jibal Bakery?</h2>
      <div class="features-grid">
        <div class="feature-card">
          <div class="feature-icon">🍞</div>
          <h3>Fresh Daily</h3>
          <p>Baked fresh every morning using traditional methods and the finest ingredients.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon">🌾</div>
          <h3>Natural Ingredients</h3>
          <p>We use only natural, high-quality ingredients with no artificial additives.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon">👨‍🍳</div>
          <h3>Artisan Crafted</h3>
          <p>Each item is handcrafted by our experienced bakers with passion and care.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon">🚚</div>
          <h3>Fast Delivery</h3>
          <p>Quick and reliable delivery service to bring our treats right to your door.</p>
        </div>
      </div>
    </section>

    <!-- TESTIMONIALS SECTION -->
    <section class="testimonials-section" aria-labelledby="testimonials-heading">
      <h2 id="testimonials-heading">What Our Customers Say</h2>
      <div class="testimonials-grid">
        <div class="testimonial-card">
          <div class="testimonial-content">
            <p>"The best sourdough bread I've ever tasted! The crust is perfectly crispy and the inside is so soft and flavorful."</p>
          </div>
          <div class="testimonial-author">
            <img src="public/img/customer.jpeg" alt="Customer Avatar" class="testimonial-avatar">
            <div class="testimonial-info">
              <h4>Reyhan Ajah</h4>
              <span>Regular Customer</span>
            </div>
          </div>
        </div>
        <div class="testimonial-card">
          <div class="testimonial-content">
            <p>"Their croissants are absolutely divine. Buttery, flaky, and melt in your mouth. I order every weekend!"</p>
          </div>
          <div class="testimonial-author">
            <img src="public/img/customer.jpeg" alt="Customer Avatar" class="testimonial-avatar">
            <div class="testimonial-info">
              <h4>Riansa Agus R.</h4>
              <span>Coffee Shop Owner</span>
            </div>
          </div>
        </div>
        <div class="testimonial-card">
          <div class="testimonial-content">
            <p>"The chocolate fudge cake is heavenly! Perfect for celebrations. The presentation is beautiful too."</p>
          </div>
          <div class="testimonial-author">
            <img src="public/img/customer.jpeg" alt="Customer Avatar" class="testimonial-avatar">
            <div class="testimonial-info">
              <h4>Andri Wijaya P.</h4>
              <span>Event Planner</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CALL TO ACTION SECTION -->
    <section class="cta-section">
      <div class="cta-content">
        <h2>Ready to Experience the Best?</h2>
        <p>Order now and taste the difference that quality ingredients and traditional baking make.</p>
        <a href="?page=product" class="cta-button">Browse Our Products</a>
      </div>
    </section>
  </main>

  <!-- FOOTER -->
  <footer>
    <p>&copy; 2025 Jibal Bakery. All rights reserved.</p>
  </footer>
</body>

</html>