<?php

$sql = file_get_contents(__DIR__ . '/db.sql');

$reCreateDatabase = readline('Do you want to re-create your database? [no] ');

$pdo = require_once __DIR__ . '/../config/connection.php';

if ($reCreateDatabase === 'yes') {
    $pdo->exec('DROP DATABASE amazing');
}

$pdo->exec($sql);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo "Connected successfully and tables created!";
