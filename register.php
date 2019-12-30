<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Register</title>
		<link rel="stylesheet" href="register.css">
	</head>
	<body>
		<div class="register">
			<h1>Register</h1>
			<form action="register.php" method="post">
            <label for="firstname">
				</label>
				<input type="text" name="firstname" placeholder="First Name" id="firstname" required>
                <label for="username">
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<label for="confpassword">
				</label>
				<input type="text" name="passwordconf" placeholder="Confirm Password" id="password2" required>
				<input type="submit" value="Register">
			</form>
		</div>
	</body>
</html>