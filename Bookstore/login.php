<?php
session_start();
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $conn->real_escape_string($_POST['email']);
    $pass  = $_POST['password'];

    $sql = "SELECT id, name, email, password FROM users WHERE email='$email' LIMIT 1";
    $res = $conn->query($sql);

    if ($res && $res->num_rows == 1) {
        $row = $res->fetch_assoc();

        // Plain password check (your DB stores plain passwords!)
        if ($pass === $row['password']) {

            // success
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['name'];

            echo "Login Successful! Welcome " . htmlspecialchars($row['name']);

            // Redirect to catalogue or home
            header("Location: index.html");
            exit;

        } else {
            echo "Invalid credentials";
        }

    } else {
        echo "User not found";
    }
}
?>
