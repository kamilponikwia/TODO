<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>TODO List - Sign Up</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
                <link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="register">
			<h1>TODO List</h1>
			<form action="{$conf->action_root}registerValidate" method="post" autocomplete="off">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<label for="email">
					<i class="fas fa-envelope"></i>
				</label>
				<input type="email" name="email" placeholder="Email" id="email" required>
				<input type="submit" value="Sign Up">
			</form>
		</div>
            	<nav class="navlogin">
		<div>
                    <a href="{$conf->action_root}login"><i class="fas fa-user-circle"></i>Have An Account Already? Sign In</a>
		</div>
		</nav>
	</body>
</html>