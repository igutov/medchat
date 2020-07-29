<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-26 18:40:39
  from '/var/www/html/sitemed/view/templates/user/userInfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ecd2a674de482_75354604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '737ab9da36a8e55f25f85a812d91be61638f46d3' => 
    array (
      0 => '/var/www/html/sitemed/view/templates/user/userInfo.tpl',
      1 => 1590504036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ecd2a674de482_75354604 (Smarty_Internal_Template $_smarty_tpl) {
?><main class="container">
    <form class="form-signin" method="post">
        <h2 class="form-signin-heading">Пользовательские данные</h2>

        <label for="password">Старый пароль</label>
        <input class="form-control" type="password" name="password" value="">

        <label for="password_new">Новый пароль</label>
        <input class="form-control" type="password" name="password_new" value="">

        <label for="password_new_check">Повторите новый пароль</label>
        <input class="form-control" type="password" name="password_new_check" value="">

        <label for="name">Имя</label>
        <input class="form-control" type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">

        <label ="surname">Фамилия</label>
        <input class="form-control" type="text" name="surname" value="<?php echo $_smarty_tpl->tpl_vars['surname']->value;?>
">

        <label for="patronymic">Отчество</label>
        <input class="form-control" type="text" name="patronymic" value="<?php echo $_smarty_tpl->tpl_vars['patronymic']->value;?>
">

        <label for="date">Дата рождения</label>
        <input class="form-control" type="date" name="date" value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
">
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="changes">Изменить данные</button>
    </form>
</main>
<?php }
}
