<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-02 15:37:51
  from '/var/www/html/sitemed/view/templates/user/doctor/formPost.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed63a0fc27f55_21855042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb584e076bc7f2b60a8a8729dcd4f1f873cc13a0' => 
    array (
      0 => '/var/www/html/sitemed/view/templates/user/doctor/formPost.tpl',
      1 => 1591095700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed63a0fc27f55_21855042 (Smarty_Internal_Template $_smarty_tpl) {
?><main class="container">
    
<form class="form-signin" method="post">
    <?php if (isset($_smarty_tpl->tpl_vars['message_post']->value)) {?>
    <h2 class="form-signin-heading"><?php echo $_smarty_tpl->tpl_vars['message_post']->value;?>
</h2>
    <?php }?>
        <select class="form-control" name="id_patient">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['patients']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['surname'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['patronymic'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <div class="form-row">
        <div class="col">
            <label for="series">Серия</label>
            <input class="form-control" type="text" name="series" value="">
        </div>
        <div class="col">
            <label for="number">Номер</label>
            <input class="form-control" type="text" name="number" value="">
        </div>
    </div>
    <div class="form-group">
        <div class="form-check">
            <label class="form-check-label" for="age">Тип рецепта</label>
            <input class="form-check-input" type="radio" name="age" value="2">Взрослый
            <input class="form-check-input" type="radio" name="age" value="1">Детский
        </div>
        <div class="form-check">

            <label class="form-check-label" for="time">Рецепт действителен в течение</label>
            <input type="radio" name="time" value="2">10 дней
            <input type="radio" name="time" value="1">1 месяца
        </div>
    </div>

    <label for="recommendation">Рекомендации</label>
    <textarea class="form-control" name="recommendation"></textarea>

    <label for="medicine">Препарат</label>
    <input class="form-control" type="text" name="medicine" value="">

    <button class="btn btn-lg btn-primary btn-block" type="submit" name="create_post">Опубликовать</button>
</form>
</main>
<?php }
}
