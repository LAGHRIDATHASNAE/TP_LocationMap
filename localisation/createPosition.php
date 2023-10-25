<?php
// Database configuration
$hostname = "localhost";
$username = "root";
$password = "";
$database = "geolocalisation";

// Create a database connection
$connection = new mysqli($hostname, $username, $password, $database);

// Check for a successful connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
if($_SERVER["REQUEST_METHOD"] == "POST"){

extract($_POST);
// Insert data into the database
$query = "INSERT INTO position (latitude, longitude, date, imei) VALUES ('$latitude', '$longitude', '$date', '$imei')";

if ($connection->query($query) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $query . "<br>" . $connection->error;
}

// Close the database connection
$connection->close();
}
?>
