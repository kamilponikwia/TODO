<?php
/* Smarty version 3.1.34-dev-7, created on 2021-08-25 13:03:16
  from 'D:\XAMPP\htdocs\todo\app\views\UpdateView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6126237454c2b7_78691970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3f4bb92ab61a9467343a8c0244a4a1a8c557a2c' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\todo\\app\\views\\UpdateView.tpl',
      1 => 1629882751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6126237454c2b7_78691970 (Smarty_Internal_Template $_smarty_tpl) {
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
home">TODO List</a></h1>
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
                        


<div class="content update">
	<h2>Update Contact #<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
</h2>
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
update?id=<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
" method="post">
        <label for="id">ID</label>
        <label for="name">Name</label>
        <input type="text" name="id" placeholder="1" value="<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
" id="id">
        <input type="text" name="name" placeholder="John Doe" value="<?php echo $_smarty_tpl->tpl_vars['task']->value['name'];?>
" id="name">
        <label for="created">Created</label>
        <input type="datetime-local" name="created" value="<?php echo date('Y-m-d\TH:i',strtotime($_smarty_tpl->tpl_vars['task']->value['created']));?>
" id="created">
        <input type="submit" value="Update">
    </form>
    <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
    <p><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
    <?php }?>
</div>

                        
                </div>
        </body><!-- comment -->
</html><!-- comment -->








<?php }
}
