<?php
// Simple login page for JH Salon & Spa (college-level example)
// Uses ONE fixed username and password: jh / 1234

$login_error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($username === '' || $password === '') {
        $login_error = 'Please enter username and password.';
    } elseif ($username === 'jh' && $password === '1234') {
        // Correct login -> go to home page
        header('Location: home.php');
        exit;
    } else {
        $login_error = 'Wrong username or password.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JH Salon &amp; Spa - Login</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>
<main class="section">
    <div class="container login-layout">
        <div class="login-image">
            <img src="https://images.pexels.com/photos/3738343/pexels-photo-3738343.jpeg" alt="Salon and spa" />
        </div>
        <div class="login-box">
            <h1>Staff Login</h1>
            <p class="login-subtitle">JH Salon &amp; Spa</p>

            <?php if ($login_error !== ''): ?>
                <div class="alert error"><?php echo htmlspecialchars($login_error, ENT_QUOTES, 'UTF-8'); ?></div>
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
                <button type="submit" class="btn-primary">Login</button>
            </form>
        </div>
    </div>
</main>
</body>
</html>
