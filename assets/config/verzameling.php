<?php
$hostname = 'localhost';
$database = '089621_mihai';
$username = 'mihai';
$password = '4nu4JGkcPS4pui69';


try {
    $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}

try {
    $stmt = $conn->query("SELECT product_id, naam, beschrijving, image, jaar, artist FROM ver_album");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}



