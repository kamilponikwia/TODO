<?php
/* Smarty version 3.1.34-dev-7, created on 2021-08-25 20:38:55
  from 'D:\XAMPP\htdocs\todo\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61268e3f3aeee0_21861994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a124883315b791a599a1430a268a73e6c9936d77' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\todo\\app\\views\\templates\\main.tpl',
      1 => 1629916535,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61268e3f3aeee0_21861994 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
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
		<h1><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
tasks">TODO List</a></h1>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
tasks"><i class="fas fa-address-book"></i>Zadania</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
profile"><i class="fas fa-user-circle"></i>Profil</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout"><i class="fas fa-sign-out-alt"></i>Wyloguj</a>
            </div>
	</nav>  
	<div class="content">
            <p>Witaj, <?php echo $_SESSION['name'];?>
!</p>
        </div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139143955761268e3f3a82e4_41744919', 'create');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72933854761268e3f3a9968_90042137', 'update');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84389025861268e3f3aaed3_97687473', 'delete');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183223252061268e3f3ac3c9_39174819', 'tasks');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146208412761268e3f3ad898_83456615', 'profile');
?>

    </body>
</html><?php }
/* {block 'create'} */
class Block_139143955761268e3f3a82e4_41744919 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'create' => 
  array (
    0 => 'Block_139143955761268e3f3a82e4_41744919',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'create'} */
/* {block 'update'} */
class Block_72933854761268e3f3a9968_90042137 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'update' => 
  array (
    0 => 'Block_72933854761268e3f3a9968_90042137',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'update'} */
/* {block 'delete'} */
class Block_84389025861268e3f3aaed3_97687473 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'delete' => 
  array (
    0 => 'Block_84389025861268e3f3aaed3_97687473',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'delete'} */
/* {block 'tasks'} */
class Block_183223252061268e3f3ac3c9_39174819 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tasks' => 
  array (
    0 => 'Block_183223252061268e3f3ac3c9_39174819',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'tasks'} */
/* {block 'profile'} */
class Block_146208412761268e3f3ad898_83456615 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'profile' => 
  array (
    0 => 'Block_146208412761268e3f3ad898_83456615',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'profile'} */
}
