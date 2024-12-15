<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>John Patrick's Website</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<style>
    body {
    background: url('img/aboutbg.png') no-repeat center center/cover;
    height: 100vh;
    color: #fff;
}
</style>
<body>
    <!-- Navbar -->
    <nav>
        <div class="logo-container">
            <a href="index.php" class="">
                <img class="logo" src="img/freepik_br_dfb5fbb4-63f0-4b84-a323-6e106d57651f.png" alt="">
            </a>
        </div>
        <div class="menu">
            <a href="index.php">Home</a>
            <a href="about.php" class="active">About</a>
            <a href="service.php">Services</a>
            <a href="contact.php">Contact</a>
        </div>
        <div class="right_nav">
            <?php if (isset($_SESSION['name'])): ?>
                <h1><?php echo htmlspecialchars($_SESSION['name']); ?></h1>
                <a href="Functions/logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php" class="login">Login</a>
                <a href="register.php">Register</a>
            <?php endif; ?>
        </div>
    </nav>

    <!----------------- About Content ----------------->
    <div class="about">
        <div class="intro">
            <h1>ABOUT US</h1>
            <p>
                Welcome to my Website! We started out journey in 2024 with a simple mission to deliver exceptional
                services that meet your needs and exceed your expectations. Our commitment is quality, innovation, and
                customer satisfaction drives everything we do.
            </p>
        </div>

        <div class="about-container">
            <div class="box mission">
                <img src="img/image 10.png" alt="" class="">
                <div class="content">
                    <h1>Our Mission</h1>
                    <p>
                        To provide reliable and customer-focused services that makes a positive impact on the lives of
                        those
                        we serve.
                    </p>
                </div>
            </div>
            <div class="box vision">
                <img src="img/image 11.png" alt="" class="">
                <div class="content">
                    <h1>Our Vision</h1>
                    <p>
                        To become a trusted leader in out field by consistently delivering innovative and high-quality
                        solution.
                    </p>
                </div>
            </div>
            <div class="box value">
                <img src="img/freepik_br_aa708a05-9d14-42af-bf66-11570ba56705 1.png" alt="" class="">
                <div class="content">
                    <h1>Our Value</h1>
                    <ul>
                        <li>Integrity: We believe in being honest and transparent in every interaction.</li>
                        <li>Customer Satisfaction: Your happiness is out top priority. </li>
                        <li>Innovation: We aim to bring fresh ideas and creative solutions to the table.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</body>

</html>