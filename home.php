<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>John Patrick's Website</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <!-- Navbar -->
    <nav>
        <div class="logo-container">
            <a href="index.php" class="">
                <img class="logo" src="img/freepik_br_dfb5fbb4-63f0-4b84-a323-6e106d57651f.png" alt="">
            </a>
        </div>
        <div class="menu">
            <a href="home.php" class="active">Home</a>
            <a href="about.php">About</a>
            <a href="service.php">Services</a>
            <a href="contact.php">Contact</a>
        </div>
        <div class="right_nav">
            <h1><?php echo $_SESSION['name']; ?></h1>
            <a href="logout.php">Logout</a>
        </div>
    </nav>

    <!----------------- Landing Content ----------------->

    <div class="landing">
        <div class="container">
            <h1>Welcome</h1>
            <h2>To My Website</h2>
        </div>
        
        <div class="title">
            <p>Landing Page</p>
        </div>
    </div>

</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>