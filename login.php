<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>php auth system</title>
</head>
<body>
    <div class="container">
        <div class="form-box" id="login-form">
            <form action="includes/process_login.php" method="POST">
                <h2>Login</h2>
                <input type="email" name="email" id="" placeholder="Email" required>
                <input type="password" name="password" id="" placeholder="Password" required>
                <button type="submit" name="login">Login</button>
                <p>Not registered? <a href="register.php">Create an account</a></p>
            </form>
        </div>
    </div>
</body>
</html>