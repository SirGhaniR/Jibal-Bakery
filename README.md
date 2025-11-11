# Jibal Bakery

A beautiful, responsive website for Jibal Bakery, showcasing our handcrafted artisan breads, pastries, cookies, and cakes made with natural fermentation and the finest ingredients.

## About Jibal Bakery

We are a passionate team of three founders dedicated to creating delicious, healthy baked goods. From humble beginnings as a hobby, we've grown into a bakery that specializes in:

- **Handcrafted Sourdough**: Naturally fermented artisan breads baked fresh daily
- **Premium Pastries**: Croissants, Danish pastries, and more
- **Gourmet Cookies**: Double chocolate chip and other varieties
- **Artisan Cakes**: Rich chocolate fudge cakes and custom creations

Our commitment is to provide warm, soft, and addictive treats that enhance every sweet moment in your life.

## Features

- **Home Page**: Hero section with bakery introduction and product preview
- **Product Catalog**: Complete listing of all bakery items with filtering and pagination
- **About Us**: Our story and passion for baking
- **Contact Information**: How to reach us for orders and inquiries
- **Responsive Design**: Optimized for all devices and screen sizes
- **Modern UI**: Clean, elegant design with smooth animations

## Technology Stack

- **Backend**: PHP with MVC architecture
- **Frontend**: HTML5, CSS3, JavaScript
- **Styling**: Custom CSS with Google Fonts (Poppins, Playfair Display)
- **Architecture**: Model-View-Controller pattern for maintainable code

## Project Structure

```
jibal-bakery/
├── app/
│   ├── controllers/     # PHP controllers for each page
│   ├── models/         # Data models (ready for database integration)
│   └── views/          # PHP view templates
├── public/
│   ├── css/            # Stylesheets
│   └── img/            # Images and assets
├── index.php           # Front controller
└── README.md
```

## Getting Started

1. **Prerequisites**: PHP 7.4+ with a web server (Apache/Nginx) or use PHP's built-in server

2. **Installation**:

   ```bash
   git clone https://github.com/SirGhaniR/Jibal-Bakery.git
   cd Jibal-Bakery
   ```

3. **Running the Application**:

   ```bash
   php -S localhost:8000
   ```

4. **Access**: Open `http://localhost:8000` in your browser

## Navigation

- **Home** (`/`): Welcome page with hero section and product gallery
- **Products** (`/?page=product`): Full product catalog with filtering
- **About Us** (`/?page=about`): Our bakery story
- **Contact** (`/?page=contact`): Contact information

## Future Enhancements

- Database integration for dynamic product management
- Shopping cart functionality
- User authentication and order system
- Admin panel for content management
- Payment gateway integration

## Contributing

This project was created by our team of three passionate bakers turned developers. We welcome contributions and feedback!

## License

© 2025 Jibal Bakery. All rights reserved.
