<?php
session_start();
require 'db.php';

if(isset($_POST['register'])){
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $role = $_POST['role'];

    if(empty($name) || empty($email) || empty($password) || empty($role)){
        die("All fields are required");
    }

    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);
    if($stmt->rowCount() > 0){
        die("Email already registered. <a href='../register.php'>Go back</a>");
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");
    $result = $stmt->execute([$name, $email, $hashedPassword, $role]);

    if($result){
        $_SESSION['user_id'] = $pdo->lastInsertId();
        $_SESSION['user_name'] = $name;
        $_SESSION['user_role'] = $role;

        header("Location: ../login.php");
        exit();
    } else {
        die("Registration failed. Please try again.");
    }
} else {
    header("Location: ../register.php");
    exit();
}
?>
