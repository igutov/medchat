<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-23 17:36:06
  from '/var/www/html/sitemed/view/templates/user/admin/userList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec926c6d764a6_46878768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '104e57dcdc8bdd06e47dcdbb5271061ac3b55031' => 
    array (
      0 => '/var/www/html/sitemed/view/templates/user/admin/userList.tpl',
      1 => 1590240938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec926c6d764a6_46878768 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="col-12 col-sm-6 col-md-8">
    <ol>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_user_info']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <li><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['surname'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['patronymic'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ol>
</section>
<?php }
}
