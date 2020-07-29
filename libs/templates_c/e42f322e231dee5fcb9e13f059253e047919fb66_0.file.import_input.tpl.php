<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-20 14:19:23
  from '/var/www/html/project/view/templates/import_input.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eede2ab3d7758_11823958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e42f322e231dee5fcb9e13f059253e047919fb66' => 
    array (
      0 => '/var/www/html/project/view/templates/import_input.tpl',
      1 => 1592648357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eede2ab3d7758_11823958 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group" id="email_div">
    <label for="email" class="control-label"><?php echo $_smarty_tpl->tpl_vars['item']->value['key'];?>
</label>
    <input id="email" type="<?php echo $_smarty_tpl->tpl_vars['item']->value['key'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['key'];?>
" required="required" class="form-control" value="" placeholder="Email-адрес">
</div>
<?php }
}
