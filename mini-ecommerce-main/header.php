<?php
include("php/config.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini E-commerce | Premium Store</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg sticky-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">LUXE STORE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Collections</a></li>
            <li class="nav-item"><a class="nav-link" href="#">About</a></li>
        </ul>
        <div class="d-flex align-items-center">
          <a href="cart.php" class="btn btn-primary d-flex align-items-center">
            My Cart 
            <span class="badge-cart"><?php echo (isset($_SESSION['cart'])) ? count($_SESSION['cart']) : '0';?></span>
          </a>
        </div>
    </div>
  </div>
</nav>
<div class="container main-content">

   
