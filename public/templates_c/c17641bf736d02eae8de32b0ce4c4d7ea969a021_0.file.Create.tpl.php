<?php
/* Smarty version 3.1.34-dev-7, created on 2021-08-26 10:52:58
  from 'D:\XAMPP\htdocs\todo\app\views\Create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6127566a2c1539_16086664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c17641bf736d02eae8de32b0ce4c4d7ea969a021' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\todo\\app\\views\\Create.tpl',
      1 => 1629916564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6127566a2c1539_16086664 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
                
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1413067356127566a2b7dc4_87574185', 'create');
?>









<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'create'} */
class Block_1413067356127566a2b7dc4_87574185 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'create' => 
  array (
    0 => 'Block_1413067356127566a2b7dc4_87574185',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="content update">
    <h2>TODO - Dodaj zadanie</h2>
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
add" method="post">
        <input disabled type="hidden" type="text" name="id" placeholder="" value="auto" id="id">
        <label for="name" placeholder="wpisz tutaj...">Nazwa</label>
        
        <input type="text" name="name" placeholder="wpisz tutaj..." id="name">
        <label for="created">Data</label>
        
        <input type="datetime-local" name="created" value="<?php echo date('Y-m-d\TH:i:s');?>
" id="created">
        <input type="submit" value="Dodaj">
    </form>
    <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
    <p><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
    <?php }?>
</div>
<?php
}
}
/* {/block 'create'} */
}
