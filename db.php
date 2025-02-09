<?php
$host = "localhost";  // Database host
$db = "bookstore";    // Database name
$user = "root";       // Your MySQL username (usually 'root' by default)
$pass = "";           // Your MySQL password (empty by default)

try {
    // Create PDO connection
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
