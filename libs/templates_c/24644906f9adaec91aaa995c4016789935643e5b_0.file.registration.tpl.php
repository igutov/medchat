<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-29 18:51:33
  from '/var/www/html/sitemed/view/templates/user/admin/registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed1217540d176_69054031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24644906f9adaec91aaa995c4016789935643e5b' => 
    array (
      0 => '/var/www/html/sitemed/view/templates/user/admin/registration.tpl',
      1 => 1590763890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed1217540d176_69054031 (Smarty_Internal_Template $_smarty_tpl) {
?><main class="container">
    <div class="col-12 col-sm-6 col-md-5">
        <form class="form-signin" method="post">
            <h2 class="form-signin-heading">Регистрация</h2>
                        <?php if (isset($_smarty_tpl->tpl_vars['message_registration']->value)) {?>
            <?php echo $_smarty_tpl->tpl_vars['message_registration']->value;?>

            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['errors_list']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors_list']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <?php echo $_smarty_tpl->tpl_vars['item']->value;?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>

            <p><input type="radio" name="user_type" value="2">Администратор</p>
            <p><input type="radio" name="user_type" value="1">Врач</p>
            <p><input type="radio" name="user_type" value="0">Пациент</p>

            <label for="email">Логин</label>
            <input class="form-control" type="text" name="email" value="">

            <label for="name">Имя</label>
            <input class="form-control" type="text" name="name" value="">

            <label for="surname">Фамилия</label>
            <input class="form-control" type="text" name="surname" value="">

            <label for="patronymic">Отчество</label>
            <input class="form-control" type="text" name="patronymic" value="">

            <label for="date">Дата рождения</label>
            <input class="form-control" type="date" name="date">

            <label for="password">Пароль</label>
            <input class="form-control" type="password" name="password" value="">

            <label for="password_check">Пароль(подтверждение)</label>
            <input class="form-control" type="password" name="password_check" value="">

                        <button class="btn btn-lg btn-primary btn-block" type="submit" name="registration_user">Регистрация</button>
        </form>
    </div>
    <div class="col-12 col-sm-6 col-md-7">
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
    </div>
</main>
<?php }
}
