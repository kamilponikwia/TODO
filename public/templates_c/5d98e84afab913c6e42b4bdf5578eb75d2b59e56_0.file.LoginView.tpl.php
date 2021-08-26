<?php
/* Smarty version 3.1.34-dev-7, created on 2021-08-25 11:41:15
  from 'D:\XAMPP\htdocs\todo\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6126103b97b1d0_90350911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d98e84afab913c6e42b4bdf5578eb75d2b59e56' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\todo\\app\\views\\LoginView.tpl',
      1 => 1629816272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6126103b97b1d0_90350911 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>TODO List - Log in or Sign up</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
                <link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="login">
			<h1>TODO List</h1>
			<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginValidate" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" value="Log In">
			</form>
		</div>
		<nav class="navregister">
			<div>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register"><i class="fas fa-user-circle"></i>Don't have an account? Sign Up</a>
			</div>
		</nav>
	</body>
</html><?php }
}
