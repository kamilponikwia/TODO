<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>TODO List - Home</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1><a href="{$conf->action_root}home">TODO List</a></h1>
                                <a href="{$conf->action_root}tasks"><i class="fas fa-address-book"></i>Tasks</a>
				<a href="{$conf->action_root}profile"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="{$conf->action_root}logout"><i class="fas fa-sign-out-alt"></i>Logout</a>
                                
                                
			</div>
		</nav>
		<div class="content">
			<h2>Tasks Page</h2>
			<p>Welcome, {$smarty.session.name}!</p>
                        


<div class="content update">
	<h2>Create Contact</h2>
    <form action="{$conf->action_root}create" method="post">
        <label for="id">ID</label>
        <label for="name">Name</label>
        <input type="text" name="id" placeholder="26" value="auto" id="id">
        <input type="text" name="name" placeholder="type here..." id="name">
        <label for="created">Created</label>
        <input type="datetime-local" name="created" value="{date('Y-m-d\TH:i')}" id="created">
        <input type="submit" value="Create">
    </form>
    {if $msg}
    <p>{$msg}</p>
    {/if}
</div>

                        
                </div>
        </body><!-- comment -->
</html><!-- comment -->








