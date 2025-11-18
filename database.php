<?php
class Database
{
  private static $instance = null;
  private $pdo;

  private function __construct()
  {
    $this->pdo = new PDO('sqlite:jibal_bakery.db');
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $this->createTables();
  }

  public static function getInstance()
  {
    if (self::$instance == null) {
      self::$instance = new Database();
    }
    return self::$instance;
  }

  public function getConnection()
  {
    return $this->pdo;
  }

  private function createTables()
  {
    // Products table
    $this->pdo->exec("CREATE TABLE IF NOT EXISTS products (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            name TEXT NOT NULL,
            category TEXT NOT NULL,
            price INTEGER NOT NULL,
            image TEXT NOT NULL,
            description TEXT,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP
        )");

    // Contact messages table
    $this->pdo->exec("CREATE TABLE IF NOT EXISTS contact_messages (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            name TEXT NOT NULL,
            email TEXT NOT NULL,
            message TEXT NOT NULL,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP
        )");

    // Insert sample products if not exists
    $stmt = $this->pdo->prepare("SELECT COUNT(*) FROM products");
    $stmt->execute();
    if ($stmt->fetchColumn() == 0) {
      $products = [
        ['Croissant', 'pastry', 45000, 'public/img/croissant.jpg', 'Buttery French croissants'],
        ['Sourdough Boule', 'bread', 65000, 'public/img/sourdough_boule.jpg', 'Artisan sourdough boule'],
        ['Double Chocolate Cookies', 'cookies', 85000, 'public/img/cookies.jpg', 'Double chocolate chip cookies'],
        ['Chocolate Fudge Cake', 'cakes', 150000, 'public/img/cakes.jpg', 'Rich chocolate fudge cake'],
        ['Raspberry Danish', 'pastry', 55000, 'public/img/raspberry_danish.jpg', 'Raspberry Danish pastry'],
        ['French Baguette', 'bread', 40000, 'public/img/french_baguette.jpg', 'Classic French baguette'],
        // Add more to have 12 for pagination
        ['Baguette', 'bread', 35000, 'public/img/french_baguette.jpg', 'Classic baguette'],
        ['Chocolate Chip Cookies', 'cookies', 75000, 'public/img/cookies.jpg', 'Chocolate chip cookies'],
        ['Vanilla Cake', 'cakes', 140000, 'public/img/cakes.jpg', 'Delicious vanilla cake'],
        ['Apple Danish', 'pastry', 50000, 'public/img/raspberry_danish.jpg', 'Apple Danish pastry'],
        ['Whole Wheat Bread', 'bread', 60000, 'public/img/bread.jpg', 'Healthy whole wheat bread'],
        ['Oatmeal Cookies', 'cookies', 80000, 'public/img/cookies.jpg', 'Chewy oatmeal cookies']
      ];
      $stmt = $this->pdo->prepare("INSERT INTO products (name, category, price, image, description) VALUES (?, ?, ?, ?, ?)");
      foreach ($products as $product) {
        $stmt->execute($product);
      }
    }
  }
}
