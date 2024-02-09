<?php
$host = 'localhost';
$dbname = 'myfirstdatabase'; // Replace 'your_database_name' with the name of your newly created database
$dbusername = 'root';
$dbpassword = '';

try {   
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; // or any other success message
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}
?>
