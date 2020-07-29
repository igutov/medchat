<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-20 21:01:28
  from '/var/www/html/project/view/templates/post/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eee40e8aa4024_26317860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a0c33cf041c22dbf4adab950ac62dd01fe9d5a7' => 
    array (
      0 => '/var/www/html/project/view/templates/post/index.tpl',
      1 => 1592672486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eee40e8aa4024_26317860 (Smarty_Internal_Template $_smarty_tpl) {
?><main class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="navbar" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="?page=post&action=create">Создать запись</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="?page=post&action=read">Показать мои записи</a>
                </li>

                            </ul>
        </div>
    </nav>
    <?php if (isset($_smarty_tpl->tpl_vars['include']->value)) {?>
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['include']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php }?>
</main>
<?php }
}
