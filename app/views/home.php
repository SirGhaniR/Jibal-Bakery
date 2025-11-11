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
  </main>

  <!-- FOOTER -->
  <footer>
    <p>&copy; 2025 Jibal Bakery. All rights reserved.</p>
  </footer>
</body>

</html>