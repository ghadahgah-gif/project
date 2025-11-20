<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'salon_spa';

// First connect to MySQL server (without selecting a database)
$serverConn = new mysqli($host, $user, $password);

if ($serverConn->connect_error) {
    die('Database connection failed: ' . $serverConn->connect_error);
}

// Create database if it does not exist
$serverConn->query("CREATE DATABASE IF NOT EXISTS `$database`");

// Now connect to the specific database
$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die('Database connection failed: ' . $conn->connect_error);
}

// Create inquiries table if it does not exist
$createTableSql = "CREATE TABLE IF NOT EXISTS inquiries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    phone VARCHAR(50) NOT NULL,
    service VARCHAR(100) NOT NULL,
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

$conn->query($createTableSql);

// Create users table for login/register if it does not exist
$createUsersSql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

$conn->query($createUsersSql);
?>
