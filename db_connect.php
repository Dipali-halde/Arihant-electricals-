




<?php
$host = "localhost";
$dbname = "product_catalog_db";
$username = "webuser";
$password = "hmt@2022";

// PDO connection
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully!";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>

