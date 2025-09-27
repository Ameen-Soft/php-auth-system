<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="welcome-box">
        <?php if(isset($_SESSION['user_name'])): ?>
            <h1>Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</h1>
            <p>Your role: <?php echo htmlspecialchars($_SESSION['user_role']); ?></p>
            <p><a href="logout.php">Logout</a></p>
        <?php else: ?>
            <h1>Welcome to our PHP Auth System!</h1>
            <p><a href="login.php">Login</a> or <a href="register.php">Register</a></p>
        <?php endif; ?>
    </div>
</body>
</html>