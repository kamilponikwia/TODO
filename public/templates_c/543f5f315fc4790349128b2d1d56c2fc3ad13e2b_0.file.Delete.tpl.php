<?php
/* Smarty version 3.1.34-dev-7, created on 2021-08-26 10:41:42
  from 'D:\XAMPP\htdocs\todo\app\views\Delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_612753c684c901_81634879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '543f5f315fc4790349128b2d1d56c2fc3ad13e2b' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\todo\\app\\views\\Delete.tpl',
      1 => 1629911180,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612753c684c901_81634879 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
                
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1475835325612753c683e6a1_79157883', 'delete');
?>









<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'delete'} */
class Block_1475835325612753c683e6a1_79157883 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'delete' => 
  array (
    0 => 'Block_1475835325612753c683e6a1_79157883',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="content delete">
	<h2>Usuń zadanie #<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
</h2>
        <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
            <p><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
        <?php } else { ?>
            <p>Czy na pewno chcesz usunąć zadanie #<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
?</p>
            <div class="yesno">
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
remove?id=<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
&confirm=yes">Tak</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
remove?id=<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
&confirm=no">Nie</a>
            </div
        <?php }?>
</div>
<?php
}
}
/* {/block 'delete'} */
}
