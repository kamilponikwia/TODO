<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	<title>TODO List - Zaloguj się</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="login">
            <h1>TODO List</h1>
            <form action="{$conf->action_root}loginValidate" method="post">
                <label for="username"><i class="fas fa-user"></i></label>
                <input type="text" name="username" placeholder="Nazwa użytkownika" id="username" required>
                <label for="password"><i class="fas fa-lock"></i></label>
                <input type="password" name="password" placeholder="Hasło" id="password" required>
                <input type="submit" value="Zaloguj się">
            </form>
	</div>
	<nav class="navregister">
            <div>
                <a href="{$conf->action_root}register"><i class="fas fa-user-circle"></i>Nie masz konta? Zarejestruj się</a>
            </div>
	</nav>
    </body>
</html>