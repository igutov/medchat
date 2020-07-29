<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-16 20:09:05
  from '/var/www/html/sitemed/view/templates/errors/errorAccess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec01021756186_68946742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acd9bb430180bebe0a6f70842de28d5a534f05cb' => 
    array (
      0 => '/var/www/html/sitemed/view/templates/errors/errorAccess.tpl',
      1 => 1589565918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec01021756186_68946742 (Smarty_Internal_Template $_smarty_tpl) {
?><main class="error">
    <section class="error_mess">
        <h3>Ошибка</h3>
        <p>
            Доступ к этому разделу сайта имеет только <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

        </p>
    </section>
</main>
<?php }
}
