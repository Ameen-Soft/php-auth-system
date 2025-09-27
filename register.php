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
        <div class="form-box" id="register-form">
            <form action="">
                <h2>Register</h2>
                <input type="text" name="name" id="" placeholder="Full Name" required>
                <input type="email" name="email" id="" placeholder="Email" required>
                <input type="password" name="password" id="" placeholder="Password" required>
                <Select name="role" required>
                    <option value="" disabled selected>-- Select role --</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </Select>
                <button type="submit" name="login">Register</button>
                <p>Already have an account? <a href="login.php">Login</a></p>
            </form>
        </div>
    </div>
</body>
</html>