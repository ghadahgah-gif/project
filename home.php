<?php
// Simple home page: no contact or booking form
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JH Salon &amp; Spa - Home</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>
<header class="hero">
    <div class="overlay"></div>
    <div class="hero-content container">
        <div>
            <h1>JH Salon &amp; Spa</h1>
            <p>Modern hair, nail, and beauty services in a calm, relaxing atmosphere.</p>
            <a href="#services" class="btn-primary">View Services</a>
        </div>
    </div>
</header>

<main>
    <section id="about" class="section container">
        <h2>About JH Salon &amp; Spa</h2>
        <p>
            JH Salon &amp; Spa offers professional hair, nail, and beauty treatments in a bright, relaxing space.
            Our team focuses on personal care and detail, so every visit feels like a small escape from your day.
        </p>
    </section>

    <section id="services" class="section section-gray">
        <div class="container">
            <h2>Our Services</h2>
            <div class="services-grid">
                <div class="card">
                    <img class="service-image" src="images/hair.jpg" alt="Hair service" />
                    <h3>Hair</h3>
                    <p>Basic haircuts and simple styling.</p>
                    <p><strong>Product:</strong> Haircut &amp; Style &mdash; <strong>80</strong></p>
                </div>
                <div class="card">
                    <img class="service-image" src="images/nails.jpg" alt="Nails service" />
                    <h3>Nails</h3>
                    <p>Simple manicure and pedicure services.</p>
                    <p><strong>Product:</strong> Classic Manicure &mdash; <strong>50</strong></p>
                </div>
                <div class="card">
                    <img class="service-image" src="images/other.jpg" alt="Other services" />
                    <h3>Other Services</h3>
                    <p>Additional salon and spa services on request.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="footer">
    <div class="container" style="display:flex; justify-content:space-between; align-items:center; gap:12px; flex-wrap:wrap;">
        <p>&copy; <?php echo date('Y'); ?> JH Salon &amp; Spa. All rights reserved.</p>
        <a href="login.php" style="color:#f9a8d4; text-decoration:none; font-size:0.9rem;">Staff Login</a>
    </div>
</footer>
</body>
</html>
