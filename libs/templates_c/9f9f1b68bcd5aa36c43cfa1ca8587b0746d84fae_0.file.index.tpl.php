<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-21 11:19:46
  from '/var/www/html/project/view/templates/user/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eef0a1251f4d3_72499820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f9f1b68bcd5aa36c43cfa1ca8587b0746d84fae' => 
    array (
      0 => '/var/www/html/project/view/templates/user/index.tpl',
      1 => 1592723979,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eef0a1251f4d3_72499820 (Smarty_Internal_Template $_smarty_tpl) {
?><main class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="navbar" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['li']->value, 'item', false, 'key', 'name', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</a>
                </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </ul>
</div>
</nav>
<?php if (isset($_smarty_tpl->tpl_vars['include']->value)) {
ob_start();
echo $_smarty_tpl->tpl_vars['include']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
</main>
<?php }
}
