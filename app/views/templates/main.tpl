<!DOCTYPE html>
<html>
    <head>
	<meta charset="utf-8">
            <title>TODO List - Strona główna</title>
            <link href="style.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    </head>
    <body class="loggedin">
	<nav class="navtop">
            <div>
		<h1><a href="{$conf->action_root}tasks">TODO List</a></h1>
                <a href="{$conf->action_root}tasks"><i class="fas fa-address-book"></i>Zadania</a>
		<a href="{$conf->action_root}profile"><i class="fas fa-user-circle"></i>Profil</a>
		<a href="{$conf->action_root}logout"><i class="fas fa-sign-out-alt"></i>Wyloguj</a>
            </div>
	</nav>  
	<div class="content">
            <p>Witaj, {$smarty.session.name}!</p>
        </div>
        {block name=create}
        {/block}
        {block name=update}
        {/block}
        {block name=delete}
        {/block}
        {block name=tasks}
        {/block}
        {block name=profile}
        {/block}
    </body>
</html>