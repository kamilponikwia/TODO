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
                        


<div class="content delete">
	<h2>Delete task #{$task['id']}</h2>
    {if $msg }
    <p>{$msg}</p>
    {else}
	<p>Are you sure you want to delete task #{$task['id']}?</p>
    <div class="yesno">
        <a href="{$conf->action_root}delete?id={$task['id']}&confirm=yes">Yes</a>
        <a href="{$conf->action_root}delete?id={$task['id']}&confirm=no">No</a>
    </div>
    {/if}
</div>

                        
                </div>
        </body><!-- comment -->
</html><!-- comment -->








