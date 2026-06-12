<?php
// $arrays = [1, 2, 3, 4, 5];
// echo "<pre>";
// print_r($arrays);

// $array = ['name' => 'Muhammad Bilal', 'City' => "Rahim Yar Khan"];
// echo "<pre>";
// print_r($array);

session_start();

// Add to Cart

if(isset($_GET['addcart'])){
    $pid = $_GET['pid'];
    
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = [];
    }

    if(isset($_SESSION['cart'][$pid])){
        $_SESSION['cart'][$pid]['qty'] += 1;
    } else {
        $_SESSION['cart'][$pid] = ["id" => $pid, "qty" => 1];
    }
    header("Location: ../index.php");
    exit();
}

// Remove from Cart
if(isset($_GET['remove'])){
    $pid = $_GET['pid'];
    
    if(isset($_SESSION['cart'][$pid])){
        unset($_SESSION['cart'][$pid]);
    }
    header("Location: ../cart.php");
    exit();
}

// Update Quantity
if(isset($_POST['update'])){
    $qty = (int)$_POST['quantity'];
    $id = $_POST['id'];

    if(isset($_SESSION['cart'][$id])){
        if($qty <= 0){
            unset($_SESSION['cart'][$id]);
        } else {
            $_SESSION['cart'][$id]['qty'] = $qty;
        }
    }
    header("Location: ../cart.php");
    exit();
}

?>