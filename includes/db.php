<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "php-auth-system";

$conn = new mysqli($localhost, $username, $password, $dbname);

try{
    $pdo = new PDO("mysql:host=$localhost;dbname=$dbname", $username, $password);
    echo "Connected to the $dbname database successfully!";
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}