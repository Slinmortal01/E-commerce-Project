<?php
$host = 'localhost';
$dbname = 'amazing';
$username = 'root';
$password = '';

try {
    return new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
