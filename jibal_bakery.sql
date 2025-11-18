-- Jibal Bakery Database Schema
-- MariaDB/MySQL

CREATE DATABASE IF NOT EXISTS jibal_bakery;
USE jibal_bakery;

-- Products table
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    category VARCHAR(100) NOT NULL,
    price INT NOT NULL,
    image VARCHAR(255) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Contact messages table
CREATE TABLE IF NOT EXISTS contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample products
INSERT INTO products (name, category, price, image, description) VALUES
('Croissant', 'pastry', 45000, 'public/img/croissant.jpg', 'Buttery French croissants'),
('Sourdough Boule', 'bread', 65000, 'public/img/sourdough_boule.jpg', 'Artisan sourdough boule'),
('Double Chocolate Cookies', 'cookies', 85000, 'public/img/cookies.jpg', 'Double chocolate chip cookies'),
('Chocolate Fudge Cake', 'cakes', 150000, 'public/img/cakes.jpg', 'Rich chocolate fudge cake'),
('Raspberry Danish', 'pastry', 55000, 'public/img/raspberry_danish.jpg', 'Raspberry Danish pastry'),
('French Baguette', 'bread', 40000, 'public/img/french_baguette.jpg', 'Classic French baguette'),
('Baguette', 'bread', 35000, 'public/img/french_baguette.jpg', 'Classic baguette'),
('Chocolate Chip Cookies', 'cookies', 75000, 'public/img/cookies.jpg', 'Chocolate chip cookies'),
('Vanilla Cake', 'cakes', 140000, 'public/img/cakes.jpg', 'Delicious vanilla cake'),
('Apple Danish', 'pastry', 50000, 'public/img/raspberry_danish.jpg', 'Apple Danish pastry'),
('Whole Wheat Bread', 'bread', 60000, 'public/img/bread.jpg', 'Healthy whole wheat bread'),
('Oatmeal Cookies', 'cookies', 80000, 'public/img/cookies.jpg', 'Chewy oatmeal cookies');
