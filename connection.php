<?php
$user    = 'root';
$pass    = '';
$host    = 'localhost';
$db      = 'diary';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db;", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>