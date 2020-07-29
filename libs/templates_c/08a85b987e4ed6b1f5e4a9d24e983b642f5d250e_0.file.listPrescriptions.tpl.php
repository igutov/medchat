<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-26 16:49:54
  from '/var/www/html/sitemed/view/templates/user/patient/readPost.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ecd1072e382e8_55128171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08a85b987e4ed6b1f5e4a9d24e983b642f5d250e' => 
    array (
      0 => '/var/www/html/sitemed/view/templates/user/patient/readPost.tpl',
      1 => 1590497392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ecd1072e382e8_55128171 (Smarty_Internal_Template $_smarty_tpl) {
?><main class="post_patient">
    <section class="col-12 col-sm-6 col-md-4">
    <ol>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <li class="">
            <div class="">
                <div class="">
                    Дата выписки рецепта: <?php echo $_smarty_tpl->tpl_vars['item']->value['data_post'];?>

                </div>
                <div class="">
                    Серия: <?php echo $_smarty_tpl->tpl_vars['item']->value['series'];?>

                    Номер: <?php echo $_smarty_tpl->tpl_vars['item']->value['number'];?>

                </div>
                <div class="">
                    Тип рецепта: <?php echo $_smarty_tpl->tpl_vars['item']->value['age'];?>

                    Рецепт действителен: <?php echo $_smarty_tpl->tpl_vars['item']->value['time'];?>

                </div>
            </div>
            <div class="">
                Рекомендация: <?php echo $_smarty_tpl->tpl_vars['item']->value['recommendation'];?>

                Препарат: <?php echo $_smarty_tpl->tpl_vars['item']->value['medicine'];?>

            </div>
        </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ol>
</section>
</main>
<?php }
}
