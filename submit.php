<?php
// Establish a connection to the database
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the form data
$name = $_POST['name'];
$birthday = $_POST['birthday'];
$location = $_POST['location'];
$qualification = $_POST['qualification'];

// Sanitize and validate the data if necessary

// Insert the data into the database
$sql = "INSERT INTO users (name, birthday, location, qualification) VALUES ('$name', '$birthday', '$location', '$qualification')";

if (mysqli_query($conn, $sql)) {
    echo "Data submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
