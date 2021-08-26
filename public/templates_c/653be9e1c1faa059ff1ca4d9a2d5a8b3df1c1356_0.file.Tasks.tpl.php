<?php
/* Smarty version 3.1.34-dev-7, created on 2021-08-25 20:38:55
  from 'D:\XAMPP\htdocs\todo\app\views\Tasks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61268e3f2f36c1_39665496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '653be9e1c1faa059ff1ca4d9a2d5a8b3df1c1356' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\todo\\app\\views\\Tasks.tpl',
      1 => 1629915185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61268e3f2f36c1_39665496 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
    

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50765493061268e3f2ddc66_50775588', 'tasks');
?>









<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'tasks'} */
class Block_50765493061268e3f2ddc66_50775588 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tasks' => 
  array (
    0 => 'Block_50765493061268e3f2ddc66_50775588',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="content read">
        <h2>TODO - Lista zadań</h2>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
add" class="create-contact">Dodaj zadanie</a>
        <table>
            <thead>
                <tr>
                    <td>#</td>
                    <td>Nazwa</td>
                    <td>Dodane</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'task');
$_smarty_tpl->tpl_vars['task']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
$_smarty_tpl->tpl_vars['task']->do_else = false;
?>
                    <tr><td><?php echo $_smarty_tpl->tpl_vars['task']->value["id"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['task']->value["name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['task']->value["created"];?>
</td><td class="actions"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
edit?id=<?php echo $_smarty_tpl->tpl_vars['task']->value["id"];?>
" class="edit"><i class="fas fa-pen fa-xs"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
remove?id=<?php echo $_smarty_tpl->tpl_vars['task']->value["id"];?>
" class="trash"><i class="fas fa-trash fa-xs"></i></a></td></tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
<?php
}
}
/* {/block 'tasks'} */
}
