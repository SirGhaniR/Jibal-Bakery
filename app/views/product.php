<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Products - Jibal Bakery</title>
  <link rel="stylesheet" href="public/css/globals.css" />
  <link rel="stylesheet" href="public/css/style.css" />
  <link rel="stylesheet" href="public/css/product-nav.css" />
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
        <li><a href="?page=home">Home</a></li>
        <li><a href="?page=product" class="active">Product</a></li>
        <li><a href="?page=about">About Us</a></li>
        <li><a href="?page=contact">Contact Us</a></li>
      </ul>
    </nav>
  </header>

  <!-- MAIN -->
  <main>
    <!-- PRODUCT SECTION -->
    <section class="product-page" aria-labelledby="product-page-heading">
      <div class="product-page-header">
        <h2 id="product-page-heading">Our Products</h2>
        <nav
          class="product-filter-nav"
          aria-label="Product Filter Navigation">
          <div class="filter-controls">
            <a href="?page=product&filter=all&sort=<?php echo $sort; ?>" class="filter-btn <?php echo $filter === 'all' ? 'active' : ''; ?>">
              All Products
            </a>
            <a href="?page=product&filter=bread&sort=<?php echo $sort; ?>" class="filter-btn <?php echo $filter === 'bread' ? 'active' : ''; ?>">Bread</a>
            <a href="?page=product&filter=cookies&sort=<?php echo $sort; ?>" class="filter-btn <?php echo $filter === 'cookies' ? 'active' : ''; ?>">Cookies</a>
            <a href="?page=product&filter=cakes&sort=<?php echo $sort; ?>" class="filter-btn <?php echo $filter === 'cakes' ? 'active' : ''; ?>">Cakes</a>
            <a href="?page=product&filter=pastry&sort=<?php echo $sort; ?>" class="filter-btn <?php echo $filter === 'pastry' ? 'active' : ''; ?>">Pastry</a>
          </div>
          <div class="sort-controls">
            <form method="get" action="?page=product">
              <input type="hidden" name="page" value="product">
              <input type="hidden" name="filter" value="<?php echo $filter; ?>">
              <label for="sort-select">Sort by:</label>
              <select id="sort-select" name="sort" class="sort-select" onchange="this.form.submit()">
                <option value="name" <?php echo $sort === 'name' ? 'selected' : ''; ?>>Name</option>
                <option value="price-low" <?php echo $sort === 'price-low' ? 'selected' : ''; ?>>Price: Low to High</option>
                <option value="price-high" <?php echo $sort === 'price-high' ? 'selected' : ''; ?>>Price: High to Low</option>
                <option value="popular" <?php echo $sort === 'popular' ? 'selected' : ''; ?>>Most Popular</option>
              </select>
            </form>
          </div>
        </nav>
      </div>

      <div class="product-grid">
        <?php foreach ($products as $product): ?>
          <div class="product-card">
            <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['description']); ?>" />
            <div class="product-info">
              <h3><?php echo htmlspecialchars($product['name']); ?></h3>
              <p class="price">Rp<?php echo number_format($product['price'], 0, ',', '.'); ?>K</p>
              <form method="post" action="?page=product&action=addToCart">
                <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                <input type="hidden" name="quantity" value="1">
                <button type="submit" class="add-btn" aria-label="Add <?php echo htmlspecialchars($product['name']); ?> to cart">
                  Add
                </button>
              </form>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- PAGINATION -->
      <nav class="pagination-nav" aria-label="Product Pagination">
        <div class="pagination-info">
          Showing <span class="current-page"><?php echo ($currentPage - 1) * 6 + 1; ?></span> to
          <span class="items-per-page"><?php echo min($currentPage * 6, $totalItems); ?></span> of
          <span class="total-items"><?php echo $totalItems; ?></span> products
        </div>
        <div class="pagination-controls">
          <?php if ($currentPage > 1): ?>
            <a href="?page=product&filter=<?php echo $filter; ?>&sort=<?php echo $sort; ?>&page=<?php echo $currentPage - 1; ?>" class="pagination-btn pagination-prev" aria-label="Previous page">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M15 18l-6-6 6-6" />
              </svg>
              Previous
            </a>
          <?php else: ?>
            <span class="pagination-btn pagination-prev" disabled aria-label="Previous page">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M15 18l-6-6 6-6" />
              </svg>
              Previous
            </span>
          <?php endif; ?>

          <div class="pagination-numbers">
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
              <a href="?page=product&filter=<?php echo $filter; ?>&sort=<?php echo $sort; ?>&page=<?php echo $i; ?>" class="pagination-btn pagination-number <?php echo $i === $currentPage ? 'active' : ''; ?>" data-page="<?php echo $i; ?>">
                <?php echo $i; ?>
              </a>
            <?php endfor; ?>
          </div>

          <?php if ($currentPage < $totalPages): ?>
            <a href="?page=product&filter=<?php echo $filter; ?>&sort=<?php echo $sort; ?>&page=<?php echo $currentPage + 1; ?>" class="pagination-btn pagination-next" aria-label="Next page">
              Next
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M9 18l6-6-6-6" />
              </svg>
            </a>
          <?php else: ?>
            <span class="pagination-btn pagination-next" disabled aria-label="Next page">
              Next
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M9 18l6-6-6-6" />
              </svg>
            </span>
          <?php endif; ?>
        </div>
      </nav>
    </section>
  </main>

  <!-- FOOTER -->
  <footer>
    <p>&copy; 2025 Jibal Bakery. All rights reserved.</p>
  </footer>
</body>

</html>