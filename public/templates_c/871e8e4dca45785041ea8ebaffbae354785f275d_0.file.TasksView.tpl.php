<?php
/* Smarty version 3.1.34-dev-7, created on 2021-08-25 13:18:21
  from 'D:\XAMPP\htdocs\todo\app\views\TasksView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_612626fd41a939_50292257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '871e8e4dca45785041ea8ebaffbae354785f275d' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\todo\\app\\views\\TasksView.tpl',
      1 => 1629890300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612626fd41a939_50292257 (Smarty_Internal_Template $_smarty_tpl) {
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
			<h2>Tasks Page</h2>
			<p>Welcome, <?php echo $_SESSION['name'];?>
!</p>
                        


<div class="content read">
	<h2>TODO</h2>
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
create" class="create-contact">Add Task</a>
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
            <tr><td><?php echo $_smarty_tpl->tpl_vars['t']->value["id"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['t']->value["name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['t']->value["created"];?>
</td><td class="actions"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
update?id=<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
" class="edit"><i class="fas fa-pen fa-xs"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
delete?id=<?php echo $_smarty_tpl->tpl_vars['t']->value["id"];?>
" class="trash"><i class="fas fa-trash fa-xs"></i></a></td></tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>
                        
                </div>
        </body><!-- comment -->
</html><!-- comment -->








<?php }
}
