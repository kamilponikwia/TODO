<?php
/* Smarty version 3.1.34-dev-7, created on 2021-08-25 20:38:58
  from 'D:\XAMPP\htdocs\todo\app\views\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61268e4230e381_89375115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c63e072502fd32258d532cb12d31a964e734ae0b' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\todo\\app\\views\\Login.tpl',
      1 => 1629914140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61268e4230e381_89375115 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginValidate" method="post">
                <label for="username"><i class="fas fa-user"></i></label>
                <input type="text" name="username" placeholder="Nazwa użytkownika" id="username" required>
                <label for="password"><i class="fas fa-lock"></i></label>
                <input type="password" name="password" placeholder="Hasło" id="password" required>
                <input type="submit" value="Zaloguj się">
            </form>
	</div>
	<nav class="navregister">
            <div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register"><i class="fas fa-user-circle"></i>Nie masz konta? Zarejestruj się</a>
            </div>
	</nav>
    </body>
</html><?php }
}
