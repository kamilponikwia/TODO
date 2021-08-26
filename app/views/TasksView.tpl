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
				<h1><a href="{$conf->action_root}tasks">TODO List</a></h1>
                                <a href="{$conf->action_root}tasks"><i class="fas fa-address-book"></i>Tasks</a>
				<a href="{$conf->action_root}profile"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="{$conf->action_root}logout"><i class="fas fa-sign-out-alt"></i>Logout</a>
                                
                                
			</div>
		</nav>
		<div class="content">
			<h2>Tasks Page</h2>
			<p>Welcome, {$smarty.session.name}!</p>
                        


<div class="content read">
	<h2>TODO</h2>
	<a href="{$conf->action_root}create" class="create-contact">Add Task</a>
	<table>
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Created</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            {foreach $tasks as $t}
            {strip}
            <tr>
                <td>{$t["id"]}</td>
                <td>{$t["name"]}</td>
                <td>{$t["created"]}</td>
                <td class="actions">
                    <a href="{$conf->action_root}update?id={$t['id']}" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                    <a href="{$conf->action_root}delete?id={$t["id"]}" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                </td>
            </tr>
            {/strip}
            {/foreach}
        </tbody>
    </table>
</div>
                        
                </div>
        </body><!-- comment -->
</html><!-- comment -->








