<?php
/* Smarty version 3.1.34-dev-7, created on 2021-08-25 20:38:57
  from 'D:\XAMPP\htdocs\todo\app\views\Profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61268e416ec214_32647137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b6c1e78f998d594cc61e13d909cd883b45af027' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\todo\\app\\views\\Profile.tpl',
      1 => 1629915460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61268e416ec214_32647137 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
   

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117785022961268e416db881_24372863', 'profile');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'profile'} */
class Block_117785022961268e416db881_24372863 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'profile' => 
  array (
    0 => 'Block_117785022961268e416db881_24372863',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="content">
        <h2>TODO - Twój profil</h2>
        <div>
            <p>Dane Twojego konta znajdują się poniżej:</p>
            <table>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                    <tr><td>Nazwa użytkownika:</td><td><?php echo $_SESSION['name'];?>
</td></tr><tr><td>Hasło:</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['password'];?>
</td></tr><tr><td>Adres e-mail:</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td></tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
	</div>
    </div>
<?php
}
}
/* {/block 'profile'} */
}
