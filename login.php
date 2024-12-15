<!DOCTYPE html>
<html>

<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>

<body>
	<div class="register-main-container">
		<div class="register-container">
			<a href="index.php">
                <img src="img/freepik_br_6a051d98-03c4-4e2e-a4e3-722d1c73773b.png" alt="">
            </a>
			<h2>LOGIN</h2>
			<form action="Functions/login_function.php" method="post">
				<?php if (isset($_GET['error'])) { ?>
					<p class="error"><?php echo $_GET['error']; ?></p>
				<?php } ?>
				<label>User Name</label>
				<input type="text" name="uname" placeholder="User Name"><br>

				<label>Password</label>
				<input type="password" name="password" placeholder="Password"><br>

				<div class="buttons">
					<button type="submit">Login</button>
					<a href="register.php">Create an account</a>
				</div>
			</form>
		</div>
	</div>
</body>

</html>