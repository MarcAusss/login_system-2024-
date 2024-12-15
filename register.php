<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <div class="register-main-container">
        <div class="register-container">
			<a href="index.php">
                <img src="img/freepik_br_6a051d98-03c4-4e2e-a4e3-722d1c73773b.png" alt="">
            </a>
            <h2>Register</h2>
            <form action="Functions/signup-check.php" method="post">
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>

                <label>Name</label>
                <?php if (isset($_GET['name'])) { ?>
                    <input type="text" name="name" placeholder="Name" value="<?php echo $_GET['name']; ?>"><br>
                <?php } else { ?>
                    <input type="text" name="name" placeholder="Name"><br>
                <?php } ?>

                <label>User Name</label>
                <?php if (isset($_GET['uname'])) { ?>
                    <input type="text" name="uname" placeholder="User Name" value="<?php echo $_GET['uname']; ?>"><br>
                <?php } else { ?>
                    <input type="text" name="uname" placeholder="User Name"><br>
                <?php } ?>


                <label>Password</label>
                <input type="password" name="password" placeholder="Password"><br>

                <label>Confirm Password</label>
                <input type="password" name="re_password" placeholder="Confirm Password"><br>

                <div class="buttons">
                    <button type="submit">Sign Up</button>
                    <a href="login.php" class="ca">Already have an account?</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>