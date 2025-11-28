<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Your Cart</title>
</head>
<body>

<h2>Your Cart Items</h2>

<?php
if (empty($_SESSION['cart'])) {
    echo "<p>Your cart is empty.</p>";
} else {
    echo "<ul>";
    foreach ($_SESSION['cart'] as $item) {
        echo "<li>" . $item['book'] . " - ₹" . $item['price'] . "</li>";
    }
    echo "</ul>";
}
?>

</body>
</html>
