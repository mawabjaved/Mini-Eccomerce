# Luxe Store - Mini E-commerce

A modern, premium, and fully functional mini e-commerce application built with PHP, MySQL, and a focus on high-end design aesthetics.

<img width="929" height="421" alt="luxe" src="https://github.com/user-attachments/assets/af5d24f9-ea03-4be4-8de4-b401218a5ced" />


## 🌟 Features

- **Premium Design System**: Custom-built UI using glassmorphism, smooth gradients, and the modern "Outfit" typography.
- **Dynamic Product Grid**: Fully responsive product listing with interactive hover effects and scaling.
- **Modern Cart Experience**: 
  - Split-layout shopping cart.
  - Real-time quantity updates and item removal.
  - Order summary with subtotal and free shipping estimates.
- **Sticky Glass Navbar**: Sleek navigation that stays with the user as they scroll.
- **Responsive Layout**: Optimized for all screen sizes, from mobile to ultra-wide monitors.
- **PHP/MySQL Backend**: Robust logic for session-based cart management and database interaction.

## 🛠️ Tech Stack

- **Backend**: PHP 8.x
- **Database**: MySQL
- **Frontend**: Custom CSS3, Bootstrap 5.3, HTML5
- **Typography**: Google Fonts (Outfit)
- **Icons**: SVG & Bootstrap Icons

## 🚀 Getting Started

To get a local copy up and running, follow these simple steps:

### Prerequisites
- [XAMPP](https://www.apachefriends.org/index.html) or any local PHP server (Apache/MySQL).

### Installation
1. **Clone the Repository**
   ```bash
   git clone https://github.com/your-username/mini-ecommerce.git
   ```
2. **Move to Web Directory**
   Move the project folder to `C:/xampp/htdocs/` (for Windows).

3. **Database Setup**
   - Open `phpMyAdmin` (`http://localhost/phpmyadmin`).
   - Create a new database named `mini_ecommerce`.
   - Import the `mini_ecommerce.sql` file provided in the root directory.

4. **Configuration**
   - Check `php/config.php` to ensure database credentials (host, user, password) match your local setup.

5. **Run the App**
   Open your browser and navigate to `http://localhost/mini-ecommerce/index.php`.

## 📁 Project Structure

```text
mini-ecommerce/
├── css/                # Custom and Bootstrap styles
├── js/                 # JavaScript dependencies
├── php/                # Database config and cart logic
├── products/           # Product images
├── index.php           # Home page
├── cart.php            # Shopping cart page
├── header.php          # Global header component
├── footer.php          # Global footer component
└── mini_ecommerce.sql  # Database schema
```

## 📜 License
Distributed under the MIT License. See `LICENSE` for more information.

---
*Created with ❤️ by [Ali Hamza]*
