<?php
// search.php

header('Content-Type: application/json');

// Replace with your DB credentials
$host = 'localhost';
$db   = 'ecommerce_data';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Database connection failed']);
    exit;
}

$searchTerm = $_GET['q'] ?? '';

if (!$searchTerm) {
    echo json_encode([]);
    exit;
}

$stmt = $pdo->prepare("SELECT name FROM product_detail WHERE name LIKE :search LIMIT 5");
$stmt->execute(['search' => "%$searchTerm%"]);

$results = $stmt->fetchAll();

echo json_encode($results);
