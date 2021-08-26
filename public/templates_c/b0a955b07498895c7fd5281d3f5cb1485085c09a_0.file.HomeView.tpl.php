<?php
/* Smarty version 3.1.34-dev-7, created on 2021-08-25 13:17:56
  from 'D:\XAMPP\htdocs\todo\app\views\HomeView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_612626e4afa2a6_65139494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0a955b07498895c7fd5281d3f5cb1485085c09a' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\todo\\app\\views\\HomeView.tpl',
      1 => 1629890274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612626e4afa2a6_65139494 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
			<h2>Home Page</h2>
			<p>Welcome to the home page <?php echo $_SESSION['name'];?>
!</p>
                </div>
        </body><!-- comment -->
</html><!-- comment -->



<?php }
}
