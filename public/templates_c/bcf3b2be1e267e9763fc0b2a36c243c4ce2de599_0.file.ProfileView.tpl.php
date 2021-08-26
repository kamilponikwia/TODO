<?php
/* Smarty version 3.1.34-dev-7, created on 2021-08-25 13:18:24
  from 'D:\XAMPP\htdocs\todo\app\views\ProfileView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61262700cc7074_01278635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcf3b2be1e267e9763fc0b2a36c243c4ce2de599' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\todo\\app\\views\\ProfileView.tpl',
      1 => 1629890289,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61262700cc7074_01278635 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
				<h1><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
tasks">TODO List</a></h1>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
tasks"><i class="fas fa-address-book"></i>Tasks</a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
profile"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Profile Page</h2>
			<div>
				<p>Your account details are below:</p>
				<table>
					<tr>
						<td>Username:</td>
						<td><?php echo $_SESSION['name'];?>
</td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><?php echo $_smarty_tpl->tpl_vars['password']->value;?>
</td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html><?php }
}
