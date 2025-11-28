<?php
include 'connect.php';

$name   = $_POST['name'];
$email  = $_POST['email'];
$phone  = $_POST['phone'];
$branch = $_POST['branch'];
$pass   = $_POST['password'];

$sql = "INSERT INTO users (name, email, phone, branch, password)
        VALUES ('$name', '$email', '$phone', '$branch', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "Registration Successful!!<br>";
    echo "<a href='login.html'>Click here to Login</a>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
