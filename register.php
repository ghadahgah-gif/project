<?php
require_once __DIR__ . '/config.php';

$register_error = '';
$register_success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($username === '' || $password === '') {
        $register_error = 'Please enter username and password.';
    } else {
        // Very simple password handling (plain text) for college project
        $stmt = $conn->prepare('INSERT INTO users (username, password) VALUES (?, ?)');
        if ($stmt) {
            $stmt->bind_param('ss', $username, $password);
            if ($stmt->execute()) {
                $register_success = 'Registration successful. You can now login.';
            } else {
                if ($conn->errno === 1062) {
                    $register_error = 'This username is already taken.';
                } else {
                    $register_error = 'Could not save user. Please try again.';
                }
            }
            $stmt->close();
        } else {
            $register_error = 'Could not prepare the registration. Please try again.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - JH Salon &amp; Spa</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>
<main class="section">
    <div class="container login-layout">
        <div class="login-image">
            <img src="https://images.pexels.com/photos/3738347/pexels-photo-3738347.jpeg" alt="Salon registration" />
        </div>
        <div class="login-box">
            <h1>Create Account</h1>
            <p class="login-subtitle">Register for JH Salon &amp; Spa login</p>

            <?php if ($register_success !== ''): ?>
                <div class="alert success"><?php echo htmlspecialchars($register_success, ENT_QUOTES, 'UTF-8'); ?></div>
            <?php endif; ?>
            <?php if ($register_error !== ''): ?>
                <div class="alert error"><?php echo htmlspecialchars($register_error, ENT_QUOTES, 'UTF-8'); ?></div>
            <?php endif; ?>

            <form method="post" class="contact-form">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="btn-primary">Register</button>
            </form>

            <p style="margin-top:12px; font-size:0.85rem; color:#6b7280;">Already have an account? <a href="login.php" style="color:#ec4899; text-decoration:none;">Login here</a>.</p>
        </div>
    </div>
</main>
</body>
</html>
