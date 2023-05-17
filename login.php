<?php

    $conn = mysqli_connect('localhost', 'root', '', 'just ask');

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "Login successful!";
        } else {
            echo "Invalid username or password!";
        }
    }

    mysqli_close($conn);
?>
