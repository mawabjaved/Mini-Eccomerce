<?php include('header.php'); ?>
<!-- Hero Section -->
<section class="hero-section animate-up">
    <h1 class="hero-title">Elevate Your Lifestyle</h1>
    <p class="hero-subtitle">Discover our curated collection of premium products designed for the modern individual.</p>
    <a href="#products" class="btn btn-primary px-5 py-3">Shop Collection</a>
</section>

<div id="products" class="product-grid mt-5">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h2 class="fw-bold">Trending Products</h2>
        <div class="filters">
            <span class="text-muted">Sort by: </span>
            <select class="bg-transparent text-white border-0 outline-none">
                <option>Newest</option>
                <option>Price: Low to High</option>
                <option>Price: High to Low</option>
            </select>
        </div>
    </div>
    
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <?php 
        $sql = $conn->query("SELECT * FROM product");

        while($row = $sql->fetch_assoc()) {
            echo '<div class="col">
                <div class="card">
                    <img src="products/'.$row['image'].'" class="card-img-top" alt="'.$row['name'].'">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">'.$row['name'].'</h5>
                        <p class="text-muted small mb-3">Premium quality guaranteed.</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <span class="product-price">$'.$row['price'].'</span>
                            <a href="php/cart.php?pid='.$row['id'] . '&&addcart" class="btn btn-primary btn-sm rounded-pill px-3">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>';
        }
        ?>
    </div>
</div>

<?php include('footer.php'); ?>