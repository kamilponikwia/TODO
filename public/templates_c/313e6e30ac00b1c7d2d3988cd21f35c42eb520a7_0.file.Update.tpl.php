<?php
/* Smarty version 3.1.34-dev-7, created on 2021-08-26 10:50:33
  from 'D:\XAMPP\htdocs\todo\app\views\Update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_612755d9cb9f14_84061901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '313e6e30ac00b1c7d2d3988cd21f35c42eb520a7' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\todo\\app\\views\\Update.tpl',
      1 => 1629915226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612755d9cb9f14_84061901 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
    

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_329726439612755d9ca2578_45926584', 'update');
?>









<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'update'} */
class Block_329726439612755d9ca2578_45926584 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'update' => 
  array (
    0 => 'Block_329726439612755d9ca2578_45926584',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="content update">
        <h2>Edytuj zadanie #<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
</h2>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
edit?id=<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
" method="post">
            <label for="name">Nazwa</label>
            <input type="hidden" type="text" name="id" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
" id="id">
            <input type="text" name="name" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['task']->value['name'];?>
" id="name">
            <label for="created">Data</label>
            <input type="datetime-local" name="created" value="<?php echo date('Y-m-d\TH:i:s',strtotime($_smarty_tpl->tpl_vars['task']->value['created']));?>
" id="created">
            <input type="submit" value="Zaktualizuj">
        </form>
        <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
        <p><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
        <?php }?>
    </div>
<?php
}
}
/* {/block 'update'} */
}
