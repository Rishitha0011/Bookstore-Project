<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $book = $_POST['book'];
    $price = $_POST['price'];

    // Add book to cart
    $_SESSION['cart'][] = array(
        "book" => $book,
        "price" => $price
    );

    // Redirect to cart
    header("Location: cart.php");
    exit();
}
?>
