<?php
// Establish a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sign up";

$conn = mysqli_connect('locolhost', 'root', '', 'sign up');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the form data
$name = $_POST['name'];
$birthday = $_POST['birthday'];
$location = $_POST['location'];
$qualification = $_POST['qualification'];
$number = $_POST['number'];
$password = $_POST['password'];

// Sanitize and validate the data if necessary

// Insert the data into the database
$sql = "INSERT INTO users (name, birthday, location, qualification, number, password) VALUES ('$name', '$birthday', '$location', '$qualification', '$number', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "Data submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
