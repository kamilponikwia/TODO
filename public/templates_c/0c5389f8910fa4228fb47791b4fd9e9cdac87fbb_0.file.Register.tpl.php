<?php
/* Smarty version 3.1.34-dev-7, created on 2021-08-26 10:50:27
  from 'D:\XAMPP\htdocs\todo\app\views\Register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_612755d3c72b83_21556101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c5389f8910fa4228fb47791b4fd9e9cdac87fbb' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\todo\\app\\views\\Register.tpl',
      1 => 1629914883,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612755d3c72b83_21556101 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	<title>TODO List - Zarejestruj się</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="register">
            <h1>TODO List</h1>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registerValidate" method="post" autocomplete="off">
                <label for="username"><i class="fas fa-user"></i></label>
		<input type="text" name="username" placeholder="Nazwa użytkownika" id="username" required>
                
		<label for="password"><i class="fas fa-lock"></i></label>
		<input type="password" name="password" placeholder="Hasło" id="password" required>
                
		<label for="email"><i class="fas fa-envelope"></i></label>
		<input type="email" name="email" placeholder="Adres e-mail" id="email" required>
                
		<input type="submit" value="Zarejestruj się">
            </form>
	</div>
        <nav class="navlogin">
            <div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login"><i class="fas fa-user-circle"></i>Masz już konto? Zaloguj się</a>
            </div>
	</nav>
    </body>
</html><?php }
}
