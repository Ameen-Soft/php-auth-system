<?php
session_start();
require 'db.php';

if(isset($_POST['login'])){
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if(empty($email) || empty($password)){
        die("Both fields are required.");
    }

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if($user){
        if(password_verify($password, $user['password'])){
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_role'] = $user['role'];

            if($user['role'] === 'admin'){
                header("Location: ../dashboard.php");
            } else {
                header("Location: ../index.php");
            }
            exit();
        } else {
            die("Incorrect password. <a href='../login.php'>Go back</a>");
        }
    } else {
        die("Email not registered. <a href='../register.php'>Register here</a>");
    }
} else {
    header("Location: ../login.php");
    exit();
}
?>
