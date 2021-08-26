<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>TODO List - My Profile</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1><a href="{$conf->action_root}tasks">TODO List</a></h1>
                                <a href="{$conf->action_root}tasks"><i class="fas fa-address-book"></i>Tasks</a>
                                <a href="{$conf->action_root}profile"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="{$conf->action_root}logout"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Profile Page</h2>
			<div>
				<p>Your account details are below:</p>
				<table>
					<tr>
						<td>Username:</td>
						<td>{$smarty.session.name}</td>
					</tr>
					<tr>
						<td>Password:</td>
						<td>{$password}</td>
					</tr>
					<tr>
						<td>Email:</td>
						<td>{$email}</td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>